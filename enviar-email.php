<?php

require __DIR__ .'/vendor/autoload.php';

use \App\Communication\Email;

$adresses = 'email_para_quem_quero_enviar';
$subject = 'Ola mundo :)';
$body = '<b>Ola mundo 2<b>';

$obEmail = new Email;
$sucesso = $obEmail->sendEmail($adresses,$subject,$body);


echo $sucesso ? 'Mensagem enviada com sucesso' :$obEmail->getError();
