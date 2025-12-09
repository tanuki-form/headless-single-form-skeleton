<?php

use Tanuki\PostHandler\JsonLogHandler;

return [
  "handler" => JsonLogHandler::class,
  "config" => [
    "directory" => __DIR__ . "/../../logs",
    "ignoreFields" => ["csrf-token", "recaptcha-token", "cf-turnstile-response", "agreement"]
  ]
];
