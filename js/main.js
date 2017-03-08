//1.r?cup?rer la valeur du bouton radio 


//2.r?cup?rer la date, id="dateHeure"

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

// ins?rer setTimeout pour rafra?chir 


//3.afficher un ensemble en fonction de la value d'un select, ou d'une case coch?e

//4.personnaliser des tranches d'ann?es de naissance 

//5. stocker une fonction dans un bouton pour afficher le password 


var ty="123";
var op="jjj";

var tab = ("et","rt");
//alert("ok");
console.log("ok");

function CalculRepartAliments(){
	
	var liste1=parseInt((document.getElementById('liste1').value),10);
	var liste2=document.getElementById('liste2').value;
	var liste3=document.getElementById('liste3').value;
	var liste4=document.getElementById('liste4').value;
	
	if(liste1!=null || liste1!="undefined"){
		document.getElementById('liste2').value=100-(document.getElementById('liste1').value);
	}
}