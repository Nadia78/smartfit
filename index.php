<?php
include 'header.php';
require_once(__DIR__.'/functions/functions.php');
require(__DIR__.'/fpdf/fpdf.php');

class AlphaPDF extends FPDF{
	
}

if(isset($_POST['action'])){

	// Déclaration des variables 

	//var_dump($_POST);
	//echo "<br>";
	$gender=trim(htmlentities($_POST['genre']));
	$liste1=trim(htmlentities($_POST['liste1']));
	$liste2=trim(htmlentities($_POST['liste2']));
	$liste3=trim(htmlentities($_POST['liste3']));
	$liste4=trim(htmlentities($_POST['liste4']));

	$ageRange=trim(htmlentities($_POST['ageRange']));
	$kg=trim(htmlentities($_POST['numKg']));
	$meters=trim(htmlentities($_POST['meters']));
/* 	function Taille($meters){
		$taille=$meters*2;
		return $taille;
	} */
	$taille=$meters*2;
	$taille2=$meters*$meters;
	

	$sport=trim(htmlentities($_POST['sport']));
	$nameSport=trim(htmlentities($_POST['nameSport']));
	$answerWalk=trim(htmlentities($_POST['answerWalk']));
	$timeWalk=trim(htmlentities($_POST['timeWalk']));
	$targets=trim(htmlentities($_POST['targets']));
	
	//echo "Meters =".$_POST['meters']."<br>";
	//echo "Taille =".$taille."<br>";
	
	//$tab=array($gender,$ageRange,$meters);
	
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
/* 	foreach($tab as $value){
		echo $value;
	} */
	
// Programme du diagnostic fitness
	//1. Calcul imc

	//echo "*".$meters."<br>";
	//echo "..".$timeWalk."<br>";
	//echo "...".$kg."<br>";
	//echo "...".$gender."<br>";
	function imc($kg,$taille){
		if($kg!=null AND $taille!=null AND isset($kg,$taille)){
			try{
				$imc=$kg/$taille;
				return $imc;
			}catch(Exception $exception){
				echo "".$exception->getMessage();
			}
		}	
	}
	if(isset($imc)){
		echo "votre imc est de".$imc;
	}
	//2. Calcul de la répartition de l'alimentation et récupérer les labels ou intitulés des champs
	$alimentMax=max($liste1,$liste2,$liste3,$liste4);
	
	if($alimentMax!=null){
		echo "L'aliment dominant est :".$alimentMax;
		//return $_POST['name'];
	}
	// TODO : recuperer l' id, name ou value de l'input
	
	
	//3. Calcul de la duree totale d'exercice hebdomadaire
	//4. Prise en compte de l'objectif, recommandation pertinente par rapport aux données précédentes
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
			<div class="row">
			<?php 
			 if(isset($kg,$taille) AND $kg!=null AND $taille!=null){
				 echo "<div class='alert alert-info' role='alert'>Votre Imc est de ".imc($kg,$taille)."</div>";
			 }else{
				 echo "<div></div>";
			 }
			 
			?>
				<div class="radio">
					<label class="radio-inline" >
						<input type="radio" name="genre"  id="radWomen" value="Madame" checked> Femme
					</label>
					<label class="radio-inline">
						<input type="radio" name="genre" id="radMen" value="Monsieur"> Homme
					</label>
				</div>
				
				<div class="form-group">
					<label for="">Repartition alimentation en %</label>
					<div class="row">
						<div class="col-xs-2">
							<input id="liste1" type="text" class="form-control" name="liste1" aria-describedby="inputSuccess3Status" placeholder=""  onchange="" ng-model="nb1" value="0" focus>
						</div>
						<div class="col-xs-10">
						<b>% de legumes </b>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-xs-2">
							<input id="liste2" name="liste2"  type="text" class="form-control" aria-describedby="inputSuccess3Status" placeholder=""  onchange="" ng-model="nb1" value="0">
						</div>
						<div class="col-xs-10">
						<b>% de proteines (viandes, poissons, oeufs...) </b>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-xs-2">
							<input id="liste3" name="liste3"  type="text" class="form-control" aria-describedby="inputSuccess3Status" placeholder=""  onchange="" ng-model="nb1" value="0">
						</div>
						<div class="col-xs-10">
						<b>% de fruits </b>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-xs-2">
							<input id="liste4" name="liste4"  type="text" class="form-control" aria-describedby="inputSuccess3Status" placeholder=""  onchange="" ng-model="nb1" value="0">
						</div>
						<div class="col-xs-10">
						<b>% de sucres, farine, féculents </b>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-xs-2">
							<input id="liste5" name="liste5" type="text" class="form-control" aria-describedby="inputSuccess3Status" placeholder=""  onchange="" ng-model="nb1" value="0">
						</div>
						<div class="col-xs-10">
						Le Total doit faire 100%
						</div>
					</div>
							<div class="">
							<!--{{+(nb1-0)+(nb2-0)+(nb3-0)+(nb4-0)}}-->
							<p></p>
							</div>
						
				 <div class="form-group">
					<label for="ageRange">Tranche d'age</label>
					<select class="form-control" id="ageRange" name="ageRange">
						<option value="1">Entre 18 et 24 ans</option>
						<option value="2">Entre 25 et 39 ans</option>
						<option value="3">Entre 40 et 55 ans</option>
						<option value="4">Entre 55 et 69 ans</option>
						<option value="5">Entre 69 et plus</option>
					</select>
				</div>
				<div class="form-group">
					<label for="numKg">Poids en kg</label>
					<input type="number" class="form-control" id="numKg" name="numKg" placeholder="65">
				</div>
				<div class="form-group">
					<label for="meters">Taille</label>
					<input type="text" class="form-control" id="meters" name="meters" placeholder="168 si 1.68 m">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Pratiquez-vous une activité sportive ?</label>
	
				<div class="radio">
					<label class="radio-inline" >
						<input type="radio" name="sport"  id="sport" value="Madame"> oui
					</label>
					<label class="radio-inline">
						<input type="radio" name="sport" id="sport" value="Monsieur" checked> non
					</label>
				</div>
				</div>
				<div class="form-group">
					<label for="nameSport">Nature du sport pratique par semaine</label>
					<select class="form-control" id="nameSport" name="nameSport">
					
						<option value="viande" selected>Cardio : course a pied, vélo,piscine</option>
						<option value="viande2">squash</option>
						<option value="viande3">tennis</option>
						<option value="viande4">sport de combat</option>
						<option value="viande5">gymnastique</option>
						<option value="viande6">musculation</option>
					</select>
				</div>
				<div class="form-group">
					<label for="timeSport">Temps consacre au sport par semaine en minutes</label>
					<input type="text" class="form-control" id="timeSport"  name="timeSport"placeholder="60">
				</div>

				<div class="form-group">
					<label for="answerWalk">Est-ce que vous marchez ou courrez durant vos occupations quotidiennes ?</label>
					<div class="radio">
						<label class="radio-inline" >
							<input type="radio" name="answerWalk"  id="sport" value="Madame" checked> oui
						</label>
						<label class="radio-inline">
							<input type="radio" name="answerWalk" id="sport" value="Monsieur" > non
						</label>
					</div>
				</div>
				<div class="form-group">
					<label for="timeWalk">Si oui combien de temps en minutes ?</label>
					<input type="text" class="form-control" id="timeWalk" name="timeWalk"placeholder="20">
				</div>
				<div class="form-group">
					<label for="targets">Votre objectif prioritaire</label>
					<select class="form-control" id="targets" name="targets">
						<option value="1">Mincir</option>
						<option value="1">Grossir</option>
						<option value="2">Muscler/Tonifier/Raffermir</option>
						<option value="3">Etre en forme</option>
						<option value="4">Ameliorer ma sante(digestion, douleurs musculaires, névralgies...)</option>
					</select>
				</div>
				<div class="checkbox">
					<label>
					  <input type="checkbox">souscription newsletter
					</label>
				</div>
			  <button type="submit" class="btn btn-success" name="action" onclick="recupAllValues();calculateProg();">Afficher</button>
			  <button type="submit" class="btn btn-success" name="generate" >Generer Pdf</button>
			  <input id="reset" class="btn btn-success" type="reset" class="" value="Reset">
			
			</form>         
        </article>
		<aside>
		<div row="col-md-5">
		<img id="aside" src="img/legumes.jpg" class="img-responsive">
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