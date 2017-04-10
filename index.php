<?php
include 'header.php';
require_once(__DIR__.'/functions/functions.php');
require(__DIR__.'/fpdf/fpdf.php');

class AlphaPDF extends FPDF{
	
}

if(isset($_POST['action'])){

	// Déclaration des variables 

	$gender=trim(htmlentities(isset($_POST['genre'])));
	$liste1=trim(htmlentities(isset($_POST['liste1'])));
	$liste2=trim(htmlentities(isset($_POST['liste2'])));
	$liste3=trim(htmlentities(isset($_POST['liste3'])));
	$liste4=trim(htmlentities(isset($_POST['liste4'])));

	$ageRange=trim(htmlentities(isset($_POST['ageRange'])));
	$kg=trim(htmlentities(isset($_POST['numKg'])));
	$meters=trim(htmlentities(isset($_POST['meters'])));
	$taille=$meters*2;

	$sport=trim(htmlentities(isset($_POST['sport'])));
	$nameSport=trim(htmlentities(isset($_POST['nameSport'])));
	$answerWalk=trim(htmlentities(isset($_POST['answerWalk'])));
	$timeWalk=trim(htmlentities(isset($_POST['timeWalk'])));
	$targets=trim(htmlentities(isset($_POST['targets'])));
	
	$tab=array($gender,$ageRange,$meters);
	
	//Contrôle des données:initialisation d'un tableau d'erreurs
	
	$errors=[];
	
	if(empty($gender)){
		$errors["gender"]="Merci de renseigner votre civilité";
		echo $errors["gender"]."<br>";
	}
	
	if(empty($ageRange)){
		$errors['ageRange']="Merci de renseigner votre tranche d'âge";
		echo $errors['ageRange']."<br>";
		
	}
	
	function controlErrors($variable){
		if(empty($variable)){
			$errors['.$variable.']="Merci de renseigner le/es/a".$variable;
			echo $errors['.$variable.'];
		}
	}
	foreach($tab as $value){
		echo $value;
	}
// Programme du diagnostic fitness
	echo "*".$meters."<br>";
	echo "..".$timeWalk."<br>";
	echo "...".$kg."<br>";
	echo "...".$gender."<br>";
	function imc($kg,$taille){
		try{
			$imc=$kg/$taille;
			return $imc;
		}catch(Exception $exception){
			echo $exception->getMessage();
		}
		
	}
	
	echo "********************************".imc($kg,$taille);
	if(isset($imc)){
		echo "votre imc est de".$imc;
	}
	
// Si le tableau d'erreurs est vide 

	if(empty($errors)){
		
	}
	//pre($tab);
}
/* echo <pre>;
print_r($tab);
echo <pre>; */
/* TODO List : 
- utf 8
- display result 
- display errors message on the right area
- start to create dynamic variables for pdf  generator

 */
?>
 <div class="main-container">
    <div class="main wrapper clearfix">
		<article>
			<form id="myForm" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
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
						<div class="col-xs-2">
							<input id="liste1" type="text" class="form-control" aria-describedby="inputSuccess3Status" placeholder=""  onchange="" ng-model="nb1" value="0">
							<br>
							<input id="liste2" type="text" class="form-control" placeholder="proteines (viande, oeufs, poissons...)" value="" onchange="" ng-model="nb2">
							<br>
							<input id="liste3" type="text" class="form-control" placeholder="legumes et fruits"  value="0"onchange="" ng-model="nb3">
							<br>
							<input id="liste4" type="text" class="form-control" placeholder="feculents"  value="0"onchange="" ng-model="nb4">
							<br>
							<input id="total" type="text" class="form-control" placeholder="sucre"  value="0"onchange="">
							<div class="">
							<!--{{+(nb1-0)+(nb2-0)+(nb3-0)+(nb4-0)}}-->
							<p>Le Total doit faire 100%</p>
							</div>
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
					<input type="number" class="form-control" id="numKg" name="numkg" placeholder="65">
				</div>
				<div class="form-group">
					<label for="meters">Taille</label>
					<input type="text" class="form-control" id="meters" name="meters" placeholder="168 si 1.68 m">
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
					<input type="text" class="form-control" id="timeWalk" name="timeWalk"placeholder="20">
				</div>
				<div class="form-group">
					<label for="targets">Votre objectif prioritaire</label>
					<select class="form-control" id="targets">
						<option value="1">Mincir</option>
						<option value="1">Grossir</option>
						<option value="2">Muscler/Tonifier/Raffermir</option>
						<option value="3">Etre en forme</option>
						<option value="4">Ameliorer ma sante(digestion, douleurs musculaires, nevralgies...)</option>
					</select>
				</div>
				<div class="checkbox">
					<label>
					  <input type="checkbox">souscription newsletter
					</label>
				</div>
			  <button type="submit" class="btn btn-success" name="action" onclick="recupAllValues();calculateProg();">Envoyer</button>
			  <button type="submit" class="btn btn-success" name="generate" >Generer Pdf</button>
			  <input type="reset" class="" value="Reset">
			</form>         
        </article>
		<aside>
		<div row="col-md-5">
		<img id="aside" src="img/legumes.jpg">
		</div>
		</aside>
        <aside>
            <h3>Le saviez-vous ?</h3>
            <p>Les graisses stimulent la muqueuse gastrique qui sécrète une hormone qui stimule la production et la sécrétion d'enzymes digestives et, signale au cerveau que nous avons mangé suffisamment. Les produits laitiers à 0% de matières grasses et autres produits à 0% inhibent ce signal et peuvent vous inciter à trop manger.</p>
			
        </aside>
		
		<div id="result"></div>
    </div> <!-- #main -->
  </div> <!-- #main-container -->
  <script src="js/main.js"></script>
<?php
include'footer.php';
?>