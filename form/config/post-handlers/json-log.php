<?php

use Tanuki\PostHandler\JsonLogHandler;

return [
  "handler" => JsonLogHandler::class,
  "config" => [
    "directory" => __DIR__ . "/../../logs",
    "ignoreFields" => ["recaptchaToken", "cf-turnstile-response", "agreement"]
  ]
];
