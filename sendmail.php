<?php
   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\Exception;

   require 'phpmailer/src/Exception.php';
   require 'phpmailer/src/PHPMailer.php';

   $mail = new PHPMailer(true);
   $mail->CharSet = 'UTF-8';
   $mail->setLanguage('ru', 'phpmailer/language/');
   $mail->IsHTML(true);

   $mail->setFrom('info_outsourcing@yandex.ru','Outsourcing developers');
   $mail->addAddress('maximtroshkin12@yandex.ru');
   $mail->Subject = 'Обращение пользователя';

   $body = '<h1>Письмо от пользователя</h1';

   if(trim(!empty($_POST['First name']))){
      $body.='<p><strong>Имя:</strong> '.$_POST['First name].'</p>;
   if(trim(!empty($_POST['Last name']))){
      $body.='<p><strong>Фамилия:</strong> '.$_POST['Last name].'</p>;
   if(trim(!empty($_POST['Email address']))){
      $body.='<p><strong>Email:</strong> '.$_POST['Email address].'</p>;
   if(trim(!empty($_POST['Message']))){
      $body.='<p><strong>Сообщение:</strong> '.$_POST['Message].'</p>;


   if(!$mail->send()){
      $message = 'Ошибка';
   }else {
      $message = 'Ваше Сообщение отправлено!';

   $response = ['message' =>$message];

   header('Content-type: application/json');
   echo json_encode($response);
?>
