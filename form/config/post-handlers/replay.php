<?php

use Tanuki\PostHandler\MailSenderHandler;

return [
  "handler" => MailSenderHandler::class,
  "config" => [
    "smtp" => getOptions("smtp"),
    "from" => "",
    "fromName" => "",
    "toField" => "email",
    "toName" => "",
    "subject" => "お問い合わせいただきありがとうございます",
    "bodyTemplate" => file_get_contents(__DIR__ . "/../email-templates/reply.txt"),
  ]
];
