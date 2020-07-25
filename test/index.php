<?php

require __DIR__ .'/../lib_ext/autoload.php';


use Notification\Email;


//$novoEmail = new Email(smtpDebug:2, host:"mail.teste@teste", user:"sender@gustavoweb.me", pass:"teste123", smtpSecure:"tls", port:'587', setFromEmail:"teste@teste",setFromName:"Equipe"); 
$novoEmail = new Email(2, "mail.teste@teste", "sender@gustavoweb.me", "teste123", "tls", '587', "teste@teste","Equipe");
$novoEmail->sendMail();  

