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
$form = $tanuki->createForm(getConfig("options"));
$form->bind($_POST ?? []);

switch($_SERVER["REQUEST_METHOD"]){
  case "GET":
    switch($_GET["get"] ?? null){
      case "recaptcha":
        $option = getConfig("pre-handlers/recaptcha");
        response([
          "siteKey" => $option["config"]["siteKey"]
        ]);
        break;

      case "turnstile":
        $option = getConfig("pre-handlers/turnstile");
        response([
          "siteKey" => $option["config"]["siteKey"]
        ]);
        break;
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
