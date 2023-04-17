<?php
	if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$msg=$_POST['msg'];

	$to='manoirmahamasina@yahoo.com';
	$subject='Message de:';
	$message="Name: ".$name."\n"."Phone: ".$phone."\n". "passe le message suivant: "."\n\n".$msg;
	$headers="Form: ".$email;

	if(mail($to, $subject, $message, $headers)){
		echo"<h1> Merci "."".$name.", message envoyé. </h1>";
	}
	else {
		echo"Erreur message!";
		}
	}
?>