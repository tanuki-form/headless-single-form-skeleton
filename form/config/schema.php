<?php

return [
  ["name" => "csrf-token"],
  ["name" => "recaptcha-token"],
  ["name" => "cf-turnstile-response"],
  [
    "name" => "name",
    "validation" => [
      "required" => true,
      "minLength" => 2
    ]
  ], [
    "name" => "email",
    "validation" => [
      "required" => true,
      "email" => true
    ]
  ], [
    "name" => "email2",
    "validation" => [
      "required" => true,
      "email" => true,
      "matchField" => "email"
    ]
  ], [
    "type" => "array",
    "name" => "enquete",
    "validation" => [
      "required" => true
    ]
  ], [
    "name" => "message",
    "validation" => [
      "required" => true
    ]
  ], [
    "name" => "agreement",
    "validation" => [
      "required" => true
    ]
  ]
];
