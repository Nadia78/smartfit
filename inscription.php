<?php 
if(isset($_POST['action'])){
	
	var_dump($_POST);

//1)=============Déclaration des variables=======================

//$genre=trim(htmlentities($_POST['']);
$firstname=trim(htmlentities($_POST['firstname']));
$lastname=trim(htmlentities($_POST['lastname']));
$email=trim(htmlentities($_POST['email']));
$password=trim(htmlentities($_POST['password']));
$address=trim(htmlentities($_POST['address']));
$cp=trim(htmlentities($_POST['cp']));
$town=trim(htmlentities($_POST['town']));;
$tel=trim(htmlentities($_POST['tel']));

echo $firstname;
//2)============= Initialisation d'un tableau d'erreurs============
$errors=[];

//3)============= Traitement des erreurs===========================
	//a) Champ civilité
	//b) Champ prenom et nom : filter var et strlen/ preg match 
	$toto="loulou";
	var_dump(is_string($toto));
	echo "lili";
	//if(!(is_string($firstname) || !){
		
	//}else{
		
	//}
	//c) Champ email : filter var email 
	//d) Champ password regex ou preg match
	//e) Champ password==confirmPassword
	//f) Champ address strlen
	//g) Champ	cp ctype digit
	//h) Champ pregmatch number ou type number 

//4)Si pas d'erreurs, insertion dans la bdd

	if(empty($errors)){
		
	}


	
}
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Inscription Smartfit</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--<link rel="stylesheet" href="css/bootstrap.min.css">-->
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
		<body>
			
				<div class="row">
					<div class="col-md-4"></div>
						<div class="col-md-4">
							<h1>Inscription</h1>
							<form method="POST" action="">
							  <div class="radio">
								<label class="radio-inline" >
								<input type="radio" name="inlineRadioOptions"  id="exampleInputCheckbox" placeholder=""> Madame
								</label>
								<label class="radio-inline">
								<input type="radio" name="inlineRadioOptions"  id="exampleInputCheckbox2" placeholder=""> Monsieur
								</label>
							  <br/>
							  <div class="form-group" >
								<label for="Inputfirstname">PrÃ©nom</label>
								<input type="text" class="form-control" id="Inputfirstname" name="firstname" placeholder="">
							  </div>
							  <div class="form-group">
								<label for="InputLastname">Nom</label>
								<input type="text" class="form-control" id="InputLastname" name="lastname" placeholder="">
							  </div>
							  <div class="form-group">
								<label for="InputEmail">Email address</label>
								<input type="email" class="form-control" id="InputEmail" name="email" placeholder="">
							  </div>
							  <div class="form-group">
								<label for="InputPassword">Password</label>
								<input type="password" class="form-control" id="InputPassword" name="password" placeholder="">
							  </div>
							  <div class="form-group">
								<label for="InputConfirmPassword1">ConfirmPassword</label>
								<input type="password" class="form-control" id="InputConfirmPassword" name="confirmPassword" placeholder="">
							  </div>
							  <div class="form-group">
								<label for="InputAddress">Adresse</label>
								<input type="text" class="form-control" id="InputAddress" name="address" placeholder="">
							  </div>
							  <div class="form-group">
								<label for="InputZipcode">Code Postal</label>
								<input type="text" class="form-control" id="InputZipcode" name="cp" placeholder="">
							  </div>
							  <div class="form-group">
							  <label for="InputTown">Ville</label>
								<input type="text" class="form-control" id="InputTown" name="town" placeholder="">
							  </div>
							  <div class="form-group">
								<label for="InputTel">Téléphone</label>
								<input type="tel" class="form-control" id="InputTel" name="tel" placeholder="">
							  </div>
							  <button type="submit" class="btn btn-success" name="action">Valider</button>
							</form>
							</div>
						</div>
					<div class="col-md-4"></div>
				</div>
		</body>
	</html>