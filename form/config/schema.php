<?php

return [
  "csrf-token" => [],
  "recaptcha-token" => [],
  "cf-turnstile-response" => [],
  "name" => [
    "validation" => [
      "required" => true,
      "minLength" => 2
    ]
  ],
  "email" => [
    "validation" => [
      "required" => true,
      "email" => true
    ]
  ],
  "email2" => [
    "validation" => [
      "required" => true,
      "email" => true,
      "matchField" => "email"
    ]
  ],
  "enquete" => [
    "type" => "array",
    "validation" => [
      "required" => true
    ]
  ],
  "message" => [
    "validation" => [
      "required" => true
    ]
  ],
  "agreement" => [
    "validation" => [
      "required" => true
    ]
  ]
];
