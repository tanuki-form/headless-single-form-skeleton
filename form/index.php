<?php

use Tanuki\Tanuki;

require_once __DIR__ . "/../vendor/autoload.php";
require_once __DIR__ . "/functions.php";

function response($data){
  header("Content-Type: application/json");
  echo json_encode($data);
  exit;
}

$tanuki = new Tanuki();
$form = $tanuki->createForm(getConfig("config"));
$form->bind($_POST ?? []);

switch($_SERVER["REQUEST_METHOD"]){
  case "GET":
    switch($_GET["get"] ?? null){
      case "csrf-token":
        response([
          "token" => $form->helper->getCsrfToken()
        ]);

      case "recaptcha":
        response([
          "siteKey" => $form->helper->getRecaptchaSiteKey()
        ]);

      case "turnstile":
        response([
          "siteKey" => $form->helper->getTurnstileSiteKey()
        ]);
    }
    break;

  case "POST":
    switch($_POST["action"] ?? null){
      case "validate":
        if($form->validate()){
          response(["success" => true]);
        }else{
          response([
            "success" => false,
            "validationErrors" => $form->getValidationErrors()
          ]);
        }

      case "send":
        $result = $form->send();

        if($result->isSuccessful()){
          response(["success" => true]);
        }else{
          response([
            "success" => false,
            "validationErrors" => $result->getValidationErrors(),
            "preHandlerResults" => $result->getPreHandlerResults(),
            "postHandlerResults" => $result->getPostHandlerResults()
          ]);
        }
    }
    break;
}
