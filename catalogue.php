<?php
session_start(); 
require(__DIR__.'/config/db.php'); 
include 'header.php';

//print_r $_SESSION['users'];
?>
<div>
<p>Hello <?php $_SESSION['users']['firstname']; ?></p>
	<h1>Mes informations</h1>
	<h2>Resultat du programme</h2>
	<h3>Calendrier</h3>
</div>
<?php
include 'footer.php';
?>