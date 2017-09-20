<?php
$name = $_POST['name'];
$name = $_POST['phone'];

require_once "lib/class.phpmailer.php";

$mail = new PHPMailer;

            $mail->setFrom('coolalexnov@gmail.com', 'От кого');
            $mail->addAddress('alex_webl@rambler.ru','Кому');

            $mail->isHTML(true);                                  // Set email format to HTML

            $mail->Subject = 'Тема';
            $mail->Body = "У ВАС с сайт заказали звонок: $name, и он просит ВАС перезвонить по номеру $phone.";


            if($mail->send()) {
              echo "Отправлено успешно";
            } else {
              $error[] = $mail->ErrorInfo;
            }


?>