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
	var liste2=parseInt((document.getElementById('liste2').value),10);
	var liste3=parseInt((document.getElementById('liste3').value),10);
	var liste4=parseInt((document.getElementById('liste4').value),10);
	
	
	if(liste1!=null || liste1!="undefined"){
		document.getElementById('liste2').value=(100-document.getElementById('liste1').value)/3;
		document.getElementById('liste3').value=(100-document.getElementById('liste1').value)/3;
		document.getElementById('liste4').value=(100-document.getElementById('liste1').value)/3;
	}
	else if(liste1!=null || liste1!="undefined" && liste2!=null || liste2!="undefined"){
		//document.getElementById('liste3').value=100-(document.getElementById('liste1').value)+(document.getElementById('liste3').value);
	}
	else{
/* 		var liste1=null;
		var liste2=null;
		var liste3=null;
		var liste4=null; */
	}
	//else if(liste1!=null || liste1!="undefined" && liste2!=null || liste2!="undefined"&& liste3!=null || liste3!="undefined")
/* 	switch case (){
		case
		case 
		case 
	} */
}