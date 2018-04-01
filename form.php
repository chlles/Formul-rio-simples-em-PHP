<?php

if (isset($_POST['submit'])) {
	$nome = $_POST['nome'];	
	$email = $_POST['email'];
	$mensagem = $_POST['mensagem'];


$email = "chllesfernandes@gmail.com";
$headers = "From: ".$email;
$txt = "Você recebeu um e-mail de: ".$nome.".\n\n".$mensagem;


mail($email, $txt, $headers);

header("Location: index.php?enviado");

}