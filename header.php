<!Doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<html class="no-js" lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<!--<META HTTP-EQUIV="refresh" CONTENT="30">-->
        <title><?php 
		$url=$_SERVER['PHP_SELF'];
		$url2=ucwords(ereg_replace("/smartfit/"," ",$url));
		$url3=ereg_replace(".php"," ","$url2");
		$url4=trim($url3);
		if($url=="/smartfit/index.php"){
			echo "Presentation";
		}else{
			echo $url3;
		}
		//$pattern='#^(.+[\\\/])*([^\\\/]+)$#';
		//$r='$2';
		//echo pereg_replace(".php",$r,"$url");
		?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">
        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!--<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>-->
    </head>
    <body>
        <div class="header-container">
            <header class="wrapper clearfix">
                <h1 class="title">Smartfit : le programme de fitness intelligent</h1>
                <nav>
                    <ul>
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="inscription.php">Inscription</a></li>
						<?php if($url=="/smartfit/catalogue.php"){
							echo '<li><a href="logout.php">Déconnexion</a></li>';
						}else{
							echo '<li><a href="connexion.php">Connexion</a></li>';
						}?>		
                    </ul>
                </nav>
            </header>
        </div>
			<br>
			<div id="definition">
			<center>Smartfit est une application intelligente vous donnant des recommandations personnalisees en terme de nutrition et d'activite</center>
			</div>
			<div id="dateHeure">
			<script langage="Javascript">
				var date = new Date();
	
				var jour=date.getDate();
				var mois=date.getMonth()+1;
				var heure=date.getHours();
				var minutes=date.getMinutes();
				var annee = date.getFullYear();
				document.write("Nous sommes le "+jour+"/"+mois+"/"+annee+", il est "+heure+"h"+minutes+".");
			</script>
			</div>
