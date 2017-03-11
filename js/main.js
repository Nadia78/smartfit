//1.recuperer la valeur du bouton radio 


//2.recuperer la date, id="dateHeure"

function AfficheLaDate(){
	
	
	var date = new Date();
	
	var jour=date.getDate();
	var mois=date.getMonth();
	var heure=date.getHours();
	var minutes=date.getMinutes();
	var annee = date.getFullYear();
	
	var resultat=document.write(jour+" "+mois);
	return resultat;
}

// TODO inserer setTimeout pour rafraichir 

//3.afficher un ensemble en fonction de la value d'un select, ou d'une case coch?e

//4.personnaliser des tranches d'ann?es de naissance 

//5. stocker une fonction dans un bouton pour afficher le password 

//END TODO

//*****************Calcul automatique de la r?partition des proportions ***********************************************************************

//1. R?cup?rer les derni?res valeurs saisies

function recupVal(id){
	
	var tabValeursSaisies=[];
	if(document.getElementById(id).value){
		
			var valeursSaisies=document.getElementById(id).value;
			
			console.log(valeursSaisies);
				tabValeursSaisies.push(valeursSaisies);					
	}
	return tabValeursSaisies;
}
console.log(tabValeursSaisies);

document.getElementById("numKg").addEventListener("change", function(){
 
});
//2. stocker les valeurs dans un tableau ? 4 ?l?ments et r?cup?rer les 4 derniers ?l?ments pour faire le calcul


//3. Effectuer le calcul de la r?partiion en fonction des valeurs saisies allant jusqu'? 4 et conserver les derni?res valeurs
function CalculRepartAliments(id){

	if(document.getElementById(id).value){
		//document.getElementById(id).value=(100-(tabValeursSaisies.length)/(tabValeursSaisies.length);
		//document.getElementById('liste3').value=(100-document.getElementById('liste1').value)/3;
		//document.getElementById('liste4').value=(100-document.getElementById('liste1').value)/3;
	}
	//else if(liste1!=null || liste1!="undefined" && liste2!=null || liste2!="undefined"){
		//document.getElementById('liste3').value=100-(document.getElementById('liste1').value)+(document.getElementById('liste3').value);
	//}
	else{
		
	}
	// .value=nombre4-(nombre!=0);
	// var compteur=0; qui quantifie les valeurs diff de 0
	// var compteur++;	
	}
/* 	var i=5;
	do {
		
	}while(liste1!=0 ||liste2!=0||liste3!=0||liste2!=0); */
	//else if(liste1!=null || liste1!="undefined" && liste2!=null || liste2!="undefined"&& liste3!=null || liste3!="undefined")
/* 	switch case (){
		case
		case 
		case 
	} */
//**************************************Programme************************************************************************************************
//1) croisement tableau valSaisies et timeSport + time Walk

function value(id){
	document.getElementById(+'"'+id+'"'+).value;
}
var genre=value()
function calculateProg(){
	
	if((document.getElementById("liste1").value)>40 && document.getElementById("timeSport").value + document.getElementById("timeWalk").value<60){
		document.getElementById("result").innerHTML("vous consommez une quantit? de sucres que vous n'?liminez pas int?gralement par une activit? suffisante");
	}
}


//2) croisement tabValeursSaisies et targets




//3) croisement genre + poids + taille : genre+ meters + numKg 
