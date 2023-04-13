<?php
require_once 'vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.mail.ru', 465, 'ssl'))
    ->setUsername('testswiftmailer@mail.ru')
    ->setPassword('Nu1LE03513PJxAxj5RfF')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Wonderful Subject'))
    ->setFrom(['testswiftmailer@mail.ru' => 'Sergei Shooter'])
    ->setTo(['servantstrelok@mail.ru'])
    ->setBody('Hello');

// Send the message
$result = $mailer->send($message);
var_dump($result, 'Сообщение отправлено');