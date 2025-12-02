<?php

return [
  [
    "name" => "recaptchaToken",
  ], [
    "name" => "name",
    "label" => "Name",
    "validation" => [
      "required" => true,
      "minLength" => 2
    ]
  ], [
    "name" => "email",
    "label" => "Email Address",
    "validation" => [
      "required" => true,
      "email" => true
    ]
  ], [
    "name" => "email2",
    "label" => "Email Address (confirmation)",
    "validation" => [
      "required" => true,
      "email" => true,
      "matchField" => "email"
    ]
  ], [
    "type" => "array",
    "name" => "enquete",
    "label" => "Enquete",
    "validation" => [
      "required" => true
    ]
  ], [
    "name" => "message",
    "label" => "Message",
    "validation" => [
      "required" => true
    ]
  ], [
    "name" => "agreement",
    "label" => "Agreement",
    "validation" => [
      "required" => true
    ]
  ]
];
