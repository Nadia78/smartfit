<?php 

include 'header.php';
require(__DIR__.'/config/db.php');

if(isset($_POST['action'])){
	
//var_dump($_POST);

//1)=============Déclaration des variables=======================

$genre=trim(htmlentities(isset($_POST['genre'])));
$firstname=trim(htmlentities($_POST['firstname']));
$lastname=trim(htmlentities($_POST['lastname']));
$email=trim(htmlentities($_POST['email']));
$password=trim(htmlentities($_POST['password']));
$confirmPassword=trim(htmlentities($_POST['confirmPassword']));
$address=trim(htmlentities($_POST['address']));
$cp=trim(htmlentities($_POST['cp']));
$town=trim(htmlentities($_POST['town']));;
$tel=trim(htmlentities($_POST['tel']));

//2)============= Initialisation d'un tableau d'erreurs=============
$errors=[];

/* if(isset($_POST['genre'])){
	echo $genre;
}else{
	echo "genre n'est pas defini";
} */

//3)============= Traitement des erreurs============================
	//a) Champ civilité
	if(empty($_POST['genre'])){
		
		$errors['genre']="la civilité n'est pas renseignée";
		echo $errors['genre']."<br>";
	}
	//b) Champ prenom et nom : filter var et strlen/ preg match 
	if(empty($lastname||$firstname)){
		$errors['identity']="Le nom ou le prénom n'ont pas été renseigné";
		echo $errors['identity']."<br>";
	}elseif(ctype_alpha($lastname)===false||ctype_alpha($firstname)===false){
		$errors['string_name']="le format du nom ou prenom n'est pas conforme";
		echo $errors['string_name']."<br>";
	}elseif(strlen($firstname)<4 || strlen($lastname)<4 ||strlen($firstname)>20 ||strlen($lastname)>20){
		$errors['strenth']="la taille du nom ou du prénom n'est pas conforme";
		echo $errors['strenth']."<br>";
	}
	//c) Champ email : filter var email 
	if(isset($email)&&(filter_var($email,FILTER_VALIDATE_EMAIL)===false)){
		$errors['email']="le format de l'email n'est pas valide";
		echo $errors['email']."<br>";
	}elseif(empty($email)){
		$errors['emptyEmail']="Merci de communiquer votre adresse email";
	}else{
		// Je vérifie si l'email n'existe pas déjà dans la bdd
		$query=$pdo->prepare('SELECT email FROM users WHERE email = :email');
		$query->bindValue(':email',$email,PDO::PARAM_STR);
		$query->execute();
		// Je récupère le résultat de la bdd Sql
		$resultEmail=$query->fetch();
		
	if($resultEmail['email']){
		$errors['email']="L \'email existe déjà";
		echo $errors['email'];
	}
		
	}
	//d) Champ password regex ou preg match
	if(!
	preg_match('/[a-zA-Z0-9]{8}/',$password)){
		$errors['password']="Le mot de passe doit contenir 8 caractères alphanumériques ";
		echo $errors['password']."<br>";
	}
	//e) Champ password==confirmPassword
	if($password!=$confirmPassword){
		$errors['confirmPassword']="Les mots de passe ne sont pas identiques";
		echo $errors['confirmPassword']."<br>";
	}
	//f) Champ address strlen
	if(strlen($address)>60){
		$errors['address']="L'adresse indiquée est trop longue";
		echo $errors['address']."<br>";
	}
	//g) Champ	cp ctype digit
	if(!ctype_digit($cp)){
		$errors['cp']="Le code postal doit contenir des chiffres";
		echo $errors['cp']."<br>";
	}
	//h) Champ ville
	if(ctype_alpha($town)===false){
		$errors['town']="La ville doit contenir uniquement des lettres";
		echo $errors['town']."<br>";
	}elseif(strlen($town)>20){
		$errors['town']="Le nom de la ville est limité à 20 lettres";
		echo $errors['town']."<br>";
	}
	//i) Validation du numéro de téléphone
	
	if(!preg_match('/^0[0-9]{9}/',$tel)){
		$errors['tel']="Le numéro du téléphone doit commencer par 0, 00 ou + et doit contenir des chiffres";
		echo $errors['tel'];
	}
//4)Si pas d'erreurs, insertion dans la bdd
	if(empty($errors)){
		
	}
if(empty($errors))	{
	// hasher le password
	$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
	// Le tableau d'erreurs est vide, insérer les informations de l'utilisateur dans la bdd
	//users(nom_colonnes) values($)
	$query=$pdo->prepare('INSERT INTO users(gender,firstname,lastname,email,password,address,cp,town,tel) VALUES(:gender,:firstname,:lastname,:email,
	:password,
	:address,
	:cp,
	:town,
	:tel)');
	
	$query->bindValue(':gender',$genre,PDO::PARAM_STR);
	$query->bindValue(':firstname',$firstname,PDO::PARAM_STR);
	$query->bindValue(':lastname',$lastname,PDO::PARAM_STR);
	$query->bindValue(':email',$email,PDO::PARAM_STR);
	$query->bindValue(':password',$hashedPassword,PDO::PARAM_STR);
	$query->bindValue(':address',$address,PDO::PARAM_STR);
	$query->bindValue(':cp',$cp,PDO::PARAM_INT);
	$query->bindValue(':town',$town,PDO::PARAM_STR);
	$query->bindValue(':tel',$tel,PDO::PARAM_INT);
	
	//var_dump($genre,$firstname,$lastname,$hashedPassword,$email,$address,$cp,$town,$tel);
	
	$query->execute();
	
	if($query){
		echo '<div class="alert alert-success" role="alert">Bravo ! Vous avez bien été enregistré !</div>';
	}
	if($query->rowCount>0){
		// Récupérer l'utilisateur dans la bdd pou l'affecter à une valeur de session
		$query=$pdo->prepare('SELECT * FROM users WHERE id=:id');
		$query=bindValue(':id',$pdo->lastInsertId(),PDO::PARAM_INT);
		$query->execute();
		$resultUser=$query->fetch();
		
		// Stocker le user mais retirer le mot de passe avant
		unset($resultUser['password']);
		$_SESSION['users']=$resultUser;
		
		//on redirige l'internaute vers la page protégée catalogue.php
		header("Location: catalogue.php");
		die();	
	}
}
}
?>
<div class="row">
	<div class="col-md-4"></div>
		<div class="col-md-4">
			<h1>Inscription</h1>
			<form method="POST" action="">
			  <div class="radio">
				<label class="radio-inline" >
					<input type="radio" name="genre"  id="exampleInputCheckbox" value="Madame" placeholder=""> Madame
				</label>
				<label class="radio-inline">
				<input type="radio" name="genre" id="exampleInputCheckbox2" value="Monsieur" placeholder=""> Monsieur
				</label>
			  </div>
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
				<label for="InputTel">TÃ©lÃ©phone</label>
				<input type="tel" class="form-control" id="InputTel" name="tel" placeholder="">
			  </div>
			  <button type="submit" class="btn btn-success" name="action">Valider</button>
			</form>
		</div>
</div>
	<div class="col-md-4"></div>
<?php include'footer.php';
?>