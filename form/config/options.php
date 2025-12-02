<?php

return [
  "schema" => getOptions("schema"),
  "preHandlers" => [
    //getOptions("pre-handlers/recaptcha"),
    //getOptions("pre-handlers/turnstile")
  ],
  "postHandlers" => [
    getOptions("post-handlers/json-log"),
    //getOptions("post-handlers/send-admin"),
    //getOptions("post-handlers/reply")
  ]
];
