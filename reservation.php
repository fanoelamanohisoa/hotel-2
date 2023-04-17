<?php
	if(isset($_POST['submit'])){
	$chambreid=$_POST['chambreid'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$dateentrer=$_POST['dateentrer'];
	$datesortie=$_POST['datesortie'];

	$to='manoirmahamasina@yahoo.com';
	$subject='Reservation de:';
	$message="Name: ".$name."\n"."Phone: ".$phone."\n". "veut reserver le(s) chambre(s) suivant: "."\n\n".$chambreid."\n". "De:"."Date d'entrée: ".$dateentrer." à "."Date de sortie: ".$dateentrer.;
	$headers="De: ".$email;

	if(mail($to, $subject, $message, $headers)){
		echo"<h1> Merci "."".$name.", message envoyé. </h1>";
	}
	else {
		echo"Erreur message!";
		}
	}
?>