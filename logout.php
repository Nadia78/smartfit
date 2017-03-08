<?php
	
	//Même pour effacer une variable en session, on doit utiliser session_start()
	session_start();

	// Supprime la variable gamers dans la session
	unset($_SESSION['users']);

	// Création d'un message de deconnexion en session
	$_SESSION['message'] = "Vous avez été déconnecté du service.";

	// Redirection vers index.php
	header('Location: index.php');
	die();
?>