<?php


require_once('PHPMailer-master/PHPMailerAutoload.php');


$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
$mail->isHTML();
$mail->Username = 'pradeepyyadav23096@gmail.com';
$mail->Password = 'pradeep096y';
$mail->SetFrom('no-reply@howcode.org');
$email = $_POST['email'];
$name = $_POST['name'];
$password = $_POST['password'];
$mail->Subject = 'Hello world';
$mail->Body = "Name : ".$name."<br>Password : ".$password."<br>Email : ".$email;
$mail->AddAddress($email);

$mail-> send();


?>