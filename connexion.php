 <?php include 'header.php';
 
 //define('pagencours', $_SERVER['PHP_SELF'], true);
 //echo $_SERVER['SERVER_SELF'];
 //echo basename(__FILE__);
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
	<aside>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices.</aside>
	<aside>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices.</aside>
	</div>
<?php include 'footer.php';
?>