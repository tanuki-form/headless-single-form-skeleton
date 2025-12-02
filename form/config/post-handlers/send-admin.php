<?php

use Tanuki\PostHandler\MailSenderHandler;

return [
  "handler" => MailSenderHandler::class,
  "config" => [
    "smtp" => getOptions("smtp"),
    "from" => "",
    "fromName" => "",
    "to" => "",
    "toName" => "",
    "subject" => "お問い合わせを受け付けました",
    "bodyTemplate" => file_get_contents(__DIR__ . "/../email-templates/admin.txt"),
  ]
];
