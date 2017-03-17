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
//console.log(tabValeursSaisies);

/* document.getElementById("numKg").addEventListener("change", function(){
 
}); */
//2. stocker les valeurs dans un tableau ? 4 ?l?ments et r?cup?rer les 4 derniers ?l?ments pour faire le calcul

function addnum (id)
{
// si la value est un chiffre, parser et faire l'op?ration, trim aussi,if(codeCar=/d) {,
	
var NumProjet1= document.getElementById('liste1').value;
var NumProjet2= document.getElementById('liste2').value;
var NumProjet3= document.getElementById('liste3').value;
var NumProjet4= document.getElementById('liste4').value;

if (NumProjet1 >0 ||NumProjet2 >0 || NumProjet3 > 0 || NumProjet4 > 0)
 {

var A = parseInt(NumProjet1,10);
var B = parseInt(NumProjet2,10);
var C = parseInt(NumProjet3,10);
var D = parseInt(NumProjet4,10);


var Total= A + B + C + D;
document.getElementById('total').value = Total;
}
else{
document.getElementById('total').value == 0;
}

};
//3. Effectuer le calcul de la r?partiion en fonction des valeurs saisies allant jusqu'? 4 et conserver les derni?res valeurs

//**************************************Programme************************************************************************************************
//1) croisement tableau valSaisies et timeSport + time Walk

function value(id){
	//document.getElementById(+'"'+id+'"'+).value;

}
var genre=value();
function calculateProg(){
	
	if((document.getElementById("liste1").value)>40 && document.getElementById("timeSport").value + document.getElementById("timeWalk").value<60){
		document.getElementById("result").innerHTML("vous consommez une quantit? de sucres que vous n'?liminez pas int?gralement par une activit? suffisante");
	}
}
var x = document.getElementById("myForm");
var txt = "";
var i;
var tab=[];
for (i = 0; i < x.length; i++) {
    txt = txt + x.elements[i].value + "<br>";
	tab.push(x.elements[i].value);
	
}
document.getElementById("result").innerHTML = txt;
console.log(tab);

//2) croisement tabValeursSaisies et targets



//3) croisement genre + poids + taille : genre+ meters + numKg 
