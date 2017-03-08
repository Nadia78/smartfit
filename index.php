<?php
include 'header.php';

if(isset($_POST['submit'])){

	// Déclaration des variables 

	$gender=trim(htmlentities(isset($_POST['genre'])));
	$liste1=trim(htmlentities(isset($_POST['liste1'])));
	$liste2=trim(htmlentities(isset($_POST['liste2'])));
	$liste3=trim(htmlentities(isset($_POST['liste3'])));
	$liste4=trim(htmlentities(isset($_POST['liste4'])));

	$ageRange=trim(htmlentities(isset($_POST['ageRange'])));
	$kg=trim(htmlentities(isset($_POST['numKg'])));
	$meters=trim(htmlentities(isset($_POST['meters'])));

	$sport=trim(htmlentities(isset($_POST['sport'])));
	$nameSport=trim(htmlentities(isset($_POST['nameSport'])));
	$answerWalk=trim(htmlentities(isset($_POST['answerWalk'])));
	$timeWalk=trim(htmlentities(isset($_POST['timeWalk'])));
	$targets=trim(htmlentities(isset($_POST['targets'])));
	
}


?>
 <div class="main-container">
    <div class="main wrapper clearfix">
		<article>
			<form>
				<div class="radio">
					<label class="radio-inline" >
						<input type="radio" name="genre"  id="radWomen" value="Madame" placeholder=""> Femme
					</label>
					<label class="radio-inline">
						<input type="radio" name="genre" id="radMen" value="Monsieur" placeholder=""> Homme
					</label>
				</div>
				
				<div class="form-group">
					<label for="">Repartition alimentation en %</label>
					<div class="row">
						<div class="col-sm-4">
							<label></label>
							<input id="liste1" type="text" class="form-control" aria-describedby="inputSuccess3Status" placeholder="">
							<br>
							<input id="liste2" type="text" class="form-control" placeholder="">
							<br>
							<input id="liste3" type="text" class="form-control" placeholder="">
							<br>
							<input id="liste4" type="text" class="form-control" placeholder="">
							<div>= 100%</div>
						</div>
					</div>
				</div>
				 <div class="form-group">
					<label for="ageRange">Tranche d'age</label>
					<select class="form-control" id="ageRange">
						<option value="1">Entre 18 et 24 ans</option>
						<option value="2">Entre 25 et 39 ans</option>
						<option value="3">Entre 40 et 55 ans</option>
						<option value="4">Entre 55 et 69 ans</option>
						<option value="5">Entre 69 et plus</option>
					</select>
				</div>
				<div class="form-group">
					<label for="numKg">Poids en kg</label>
					<input type="number" class="form-control" id="numKg" placeholder="65">
				</div>
				<div class="form-group">
					<label for="meters">Taille</label>
					<input type="text" class="form-control" id="meters" placeholder="1.68 m">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Pratiquez-vous une activite sportive ?</label>
	
				<div class="radio">
					<label class="radio-inline" >
						<input type="radio" name="genre"  id="sport" value="Madame" placeholder=""> oui
					</label>
					<label class="radio-inline">
						<input type="radio" name="genre" id="sport" value="Monsieur" placeholder=""> non
					</label>
				</div>
				</div>
				<div class="form-group">
					<label for="nameSport">Nature du sport pratique par semaine</label>
					<select class="form-control" id="nameSport">
						<option value="viande">
						<option>Cardio : course a pied, vélo,piscine</option>
						<option>squash</option>
						<option>tennis</option>
						<option>sport de combat</option>
						<option>gymnastique</option>
						<option>musculation</option>
					</select>
				</div>
				<div class="form-group">
					<label for="timeSport">Temps consacre au sport en minutes</label>
					<input type="text" class="form-control" id="timeSport" placeholder="60">
				</div>

				<div class="form-group">
					<label for="answerWalk">Est-ce que vous marchez ou courrez durant vos occupations quotidiennes ?</label>
					<div class="radio">
						<label class="radio-inline" >
							<input type="radio" name="answerWalk"  id="sport" value="Madame" placeholder=""> oui
						</label>
						<label class="radio-inline">
							<input type="radio" name="answerWalk" id="sport" value="Monsieur" placeholder=""> non
						</label>
					</div>
				</div>
				<div class="form-group">
					<label for="timeWalk">Si oui combien de temps en minutes ?</label>
					<input type="text" class="form-control" id="timeWalk" placeholder="20">
				</div>
				<div class="form-group">
					<label for="targets">Votre objectif prioritaire</label>
					<select class="form-control" id="targets">
						<option value="1">Mincir</option>
						<option value="1">Grossir</option>
						<option value="2">Muscler</option>
						<option value="3">Etre en forme</option>
						<option value="4">Ameliorer ma sante(digestion, douleurs musculaires, nevralgies...)</option>
					</select>
				</div>
				<div class="checkbox">
					<label>
					  <input type="checkbox">souscription newsletter
					</label>
				</div>
			  <button type="submit" class="btn btn-success">Envoyer</button>
			</form>         
        </article>
        <aside>
            <h3>Le saviez-vous ?</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices.</p>
        </aside>
    </div> <!-- #main -->
  </div> <!-- #main-container -->
  <script src="js/main.js"></script>
<?php
include'footer.php';
?>