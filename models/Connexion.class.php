<?php
	
	class Connexion {

		// Vérification de la connexion à la base de données
		function verificationConnexionBase(){
			if(!mysql_connect()){
				echo 'Connexion à la base de données impossible.';
				return 0;
			} else {
				echo 'Connexion à la base de données réussie.';
				return 1;
			}
		}

		// Vérification des identifiants
		function verificationIdentifiants($login, $mdp){
			$requete = "SELECT * FROM utilisateurs WHERE login = a AND password = b"
			if(verificationConnexionBase()){
				return 1;
			} else {
				return 0;
			}
		}

	}

?>