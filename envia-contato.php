<?php
//https://myaccount.google.com/lesssecureapps?rfn=27&rfnc=1&eid=3556742820561245353&et=0&asae=2&pli=1
session_start();
$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$msg = $_POST["msg"];

include("PHPMailerAutoload.php");

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "testefsss2019@gmail.com";
$mail->Password = "fsss2019";

$mail->setFrom("testefsss2019@gmail.com", "FSSS");
$mail->addAddress("joanmelo89@gmail.com");
$mail->Subject = "E-mail de contato da FSSS";
$mail->msgHTML("<html>de: <p style='color:#F00;'>{$nome}</p><br>Telefone: {$telefone}<br>mensagem: {$msg}</html>");
$mail->AltBody = "de: {$nome}\nemail: {$telefone}\nmensagem: {$msg}";

if($mail->send()){
	$_SESSION["success"] = "Mensagem enviada com sucesso!";
	header("Location: contato.php?envio=true");
}else{
	$_SESSION["danger"] = "Erro ao enviar mensagem ".$mail->ErrorInfo;
	header("Location: contato.php?msg=1");
}
die();

?>