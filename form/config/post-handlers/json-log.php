<?php

use Tanuki\PostHandler\JsonLogHandler;

return [
  "handler" => JsonLogHandler::class,
  "config" => [
    "directory" => __DIR__ . "/../../logs",
    "ignoreFields" => ["recaptcha-token", "cf-turnstile-response", "agreement"]
  ]
];
