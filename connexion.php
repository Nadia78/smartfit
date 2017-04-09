 <?php include 'header.php';
 
session_start(); 
require(__DIR__.'/config/db.php'); 

if(isset($_SESSION['users'])){
	header('Location: catalogue.php');
	die();
}

// Vérifier que le button submit a été cliqué

if (isset($_POST['action'])) {
	$email = trim(htmlentities($_POST['email']));
	$password = trim(htmlentities($_POST['password']));

	// Initialisation d'un tableau d'erreurs
	$errors = array();

	// 1. récupération de l'utilisateur dans la bdd grâce à son email

	$query = $pdo -> prepare('SELECT * FROM users WHERE email = :email');
	$query -> bindValue(':email',$email,PDO::PARAM_STR);
	$query -> execute();
	$userInfos = $query -> fetch();

	if ($userInfos){
		
		//password_verify est compatible >= PHP 5.5
		if (password_verify($password,$userInfos['password'])) {
			
			//On stocke le user en session mais on retire le password avant
			unset($userInfos['password']);
			$_SESSION['users']=$userInfos;
			header('Location: catalogue.php');
			die();
		}
		else{
			$errors['password']="Mot de passe invalide";
			
		}
	} else {
		$errors['email']="Aucun utilisateur avec cet adresse mail";
	}
}
?> 

   <div class="formConnexion col-md-4 col-md-offset-4">
    		
	    	<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
			
			  <div class="form-group">
			    <label for="email">Email</label>
			    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
			  </div>

			 	<?php if(isset($errors['email'])): ?>
	    			<span id="helpBlock2" class="help-block"> 
	    				<?php echo $errors['email'] ;?> 
	    			</span>
		    	<?php endif;?>

			  <div class="form-group">
			    <label for="password">Mot de passe</label>
			    <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe">
			  </div>

    		<?php if(isset($errors['password'])) : ?> 
    			<span id="helpBlock2" class="help-block">
    				<?php echo ($errors['password']);?> 
    			</span>
    		<?php endif;?>
  	
			  <button type="submit" name="action" class="btn btn-primary">Valider</button>
               <div class="form-group">
                    <p class="help-block"><a href="forgot_password.php">Mot de passe oublié?</a></p>
                </div>
			
			</form>
    </div>
	<div id="bloc1">
	<aside><img src="img/pommeEquerre.jpg"></aside>
	</div>
<?php include 'footer.php';
?>