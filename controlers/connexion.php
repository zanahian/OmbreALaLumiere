<?php 

	// Inclusion des pages
	include_once('Connexion.class.php');

	// Vérification des paramètres envoyés par le formulaire

	// Demande d'authentification à la BD
	$connexion = new Connexion();

	if($connexion->verificationIdentifiants(login,mdp)) {
		echo 'Identifiants OK';
	} else {
		echo 'Identifiants KO';
	}

?>