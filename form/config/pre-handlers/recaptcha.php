<?php

use Tanuki\PreHandler\RecaptchaHandler;

return [
  "handler" => RecaptchaHandler::class,
  "config" => [
    "projectId" => "",
    "apiKey" => "",
    "siteKey" => "",
    "action" => "contact_form"
  ]
];
