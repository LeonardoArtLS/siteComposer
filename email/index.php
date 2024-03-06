<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require_once "../vendor/autoload.php";

$m = new PHPMailer();
$m->SMTPDebug = SMTP::DEBUG_SERVER;
$m->isSMTP();
$m->Host = "sandbox.smtp.mailtrap.io";
$m->SMTPAuth = true;
$m->Username = "89fb4fed4e5c68";
$m->Password = "6e9ebb6e95047e";
$m->Port = 2525;

//configuração da mensagem
$m->CharSet = PHPMailer::CHARSET_UTF8;
$m->setFrom("leonardoarthu627@gmail.com", "Leonardo");
$m->addAddress("leonardoarth627@gmail.com");
$m->isHTML(true);
$m->Subject = "Boa noite, mensagem de teste.";
$m->Body = <<<HTML
            
                <h1>Corpo da mensagem teste.</h1>
                <p>FacilitaAí</p>
                <a href="https://youtube.com/">Clique Aqui!</a>

            HTML;

if($m->send()){
    echo "Mensagem foi Enviada";
}else{
    echo $m->ErrorInfo;
};