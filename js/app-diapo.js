//Recuperation des diapositives
var diapositives = document.querySelector(".diapositives");
var nb_diapos = document.querySelectorAll(".diapositive").length;
var indice_lecture = 0;

/*
* Permet d'afficher l'image suivantes
*/

function afficherImageSuivante(){
	console.log("in");
	if (indice_lecture < nb_diapos - 1){
		let top = diapositives.style.top === "" ? 0 : parseInt(diapositives.style.top);
		top -= 625;
		diapositives.style.top = top + "px";
		indice_lecture++;
	} else {
		diapositives.style.top = "0px";
		indice_lecture = 0;
	}
}

function afficherImagePrecedente(){
	if (indice_lecture > 0){
		let top = diapositives.style.top === "" ? 0 : parseInt(diapositives.style.top);
		top += 625;
		diapositives.style.top = top + "px";
		indice_lecture--;
	} else {
		let positionTop = (nb_diapos - 1) * 625;
		diapositives.style.top = "-" + positionTop + "px";
		indice_lecture = nb_diapos - 1 ;
	}
}
function changerImage(){
	//afficherImageSuivante();
	//afficherImagePrecedente();//

}

setInterval(function(){
	changerImage();
}, 1000);

document.querySelector(".go-back").onclick =function(){
	afficherImagePrecedente();
}

document.querySelector(".go-forward").onclick =function(){
	afficherImageSuivante();
}
