<?php
include 'header.php';
?>
 <div class="main-container">
    <div class="main wrapper clearfix">
		<article>
			<form>
				<div class="radio">
					<label class="radio-inline" >
						<input type="radio" name="genre"  id="exampleInputCheckbox" value="Madame" placeholder=""> Femme
					</label>
					<label class="radio-inline">
						<input type="radio" name="genre" id="exampleInputCheckbox2" value="Monsieur" placeholder=""> Homme
					</label>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Repartition alimentation en %</label>
					<div class="row">
						<div class="col-xs-2">
							<input list="liste" type="text" class="form-control" id="exampleInputPassword1" placeholder="">
							<input list="liste" type="text" class="form-control" id="exampleInputPassword1" placeholder="">
							<input list="liste" type="text" class="form-control" id="exampleInputPassword1" placeholder="">
							<input list="liste" type="text" class="form-control" id="exampleInputPassword1" placeholder="">	
						</div>
					</div>
					<br>
				</div>
				 <div class="form-group">
					<label for="exampleInputPassword1">Tranche d'age</label>
					<!--<input type="number" class="form-control" id="exampleInputPassword1" placeholder="">-->
					<select class="form-control" id="liste">
						<option value="viande">
						<option>Entre 18 et 24 ans</option>
						<option>Entre 25 et 39 ans</option>
						<option>Entre 40 et 55 ans</option>
						<option>Entre 55 et 69 ans</option>
						<option>Entre 69 et plus</option>
					</select>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Poids en kg</label>
					<input type="number" class="form-control" id="exampleInputEmail1" placeholder="65">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Taille</label>
					<input type="text" class="form-control" id="exampleInputPassword1" placeholder="1.68 m">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Activites</label>
					<input type="text" class="form-control" id="exampleInputPassword1" placeholder="text">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Nature</label>
					<input type="text" class="form-control" id="exampleInputPassword1" placeholder="text">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Temps consacré</label>
					<input type="text" class="form-control" id="exampleInputPassword1" placeholder="text">
				</div>

				<div class="form-group">
					<label for="exampleInputPassword1">Moyen de transport</label>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Temps de transport</label>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Objectif(s)</label>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div>
				<div class="checkbox">
					<label>
					  <input type="checkbox"> Check me out
					</label>
				</div>
			  <button type="submit" class="btn btn-default">Submit</button>
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