<?php

return [
  "schema" => getConfig("schema"),
  "preHandlers" => [
    getConfig("pre-handlers/csrf-guard"),
    //getConfig("pre-handlers/recaptcha"),
    //getConfig("pre-handlers/turnstile")
  ],
  "postHandlers" => [
    getConfig("post-handlers/json-log"),
    //getConfig("post-handlers/send-admin"),
    //getConfig("post-handlers/reply")
  ]
];
