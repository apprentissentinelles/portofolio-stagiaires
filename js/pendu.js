var dictionnaire = [
	"BONJOUR",
	"AUREVOIR",
	"TITANESQUE",
    "ANABELLE",
    "POMPIER",
    "OBELISQUE",
    "PLACARD",
    "RADIATEUR",
    "DEODORANT",
    "CAMION",
    "HORLOGE",
    "MARGUERITE",
    "ELEPHANT",
    "IGLOO",
    "NAVIRE",	
];

var mot_a_deviner="";
var partie_commencee = false;
var trouve = false;
var nb_essais=10;
var mot_cache="";

document.querySelector("#bouton_jouer").addEventListener("click", function() {
	jouer();
});

// Clique sur les lettres
var lettres = document.querySelectorAll(".lettre");
for (var i=0; i<lettres.length; i++) {
	lettres[i].addEventListener("click", function(event) {
		var lettre = event.target.id.substring(7, 8);
		if (partie_commencee) {
			var lettre_trouve = verifierLettre(mot_a_deviner, lettre);
			updateLettreCliquee(lettre, lettre_trouve);
			if (!lettre_trouve) {
				decrementerNbEssais();
			} else {
				updateMotCache(lettre);
			}
			if (hasWin()) {
				alert("Winner winner, Chicken Dinner !");
			}
		}
	});
}



// Lancement
function jouer() {
	// On signale que la partie vient de commencer
	partie_commencee = true;

	// Choisir un mot du dictionnaire au hasard
	var indice_dico = getRandomInt(dictionnaire.length);
	mot_a_deviner = dictionnaire[indice_dico];

	// Initialiser l'affichage du mot caché
	mot_cache = masquer_caracteres(mot_a_deviner);
	document.querySelector("#mot_cache").innerHTML = mot_cache;

	// Initialiser l'affichage des boutons de lettre
	// var lettres = document.querySelectorAll(".lettre");
	for (var i=0; i<lettres.length; i++) {
		 lettres[i].className = "lettre ";
	}
	// Initialiser l'image du pendu 

	// Initialiser le nombre d'erreur possible
	nb_essais = 10;
	document.querySelector("#nb_essais").innerHTML = nb_essais;
}

/*
 * Au clic sur un bouton de lettre
 * Renvoie vrai si la lettre est dans le motADeviner
 */
function verifierLettre(motADeviner, lettre) {
	return mot_a_deviner.toLowerCase().includes(lettre);
}


function updateLettreCliquee(lettre, etat) {
	document.querySelector("#lettre_" + lettre).className = "lettre " + (etat ? "ok" : "ko");
}

// Deux méthodes :
// 1. Boucler sur mot_a_deviner et à chaque fois que je trouve la lettre
// Je le remplace dans mot_cache (Utiliser la fonction charAt)
// 2. Determiner directement les indices de la lettre avec la fonction js 
// indexOf et remplacer le "-" par la lettre concernée à l'indice ainsi trouvé
function updateMotCache(lettre) {
		var nouveau_mot_cache = "";
		console.log("Avant : " + mot_cache);
		for (var i=0; i<mot_a_deviner.length; i++) {
			var caractere_courant = mot_a_deviner.charAt(i).toLowerCase();
			if (caractere_courant == lettre) {
				nouveau_mot_cache += caractere_courant;
			} else {
				nouveau_mot_cache += mot_cache.charAt(i);
			}
		}
			mot_cache = nouveau_mot_cache;
			document.querySelector("#mot_cache").innerHTML = mot_cache;
			console.log("Après : " + mot_cache);
}



function decrementerNbEssais() {
	nb_essais--;
	document.querySelector("#nb_essais").innerHTML = nb_essais;
	if (nb_essais == 0) {
		confirm("Perdu ! Voulez vous recommencer ?", jouer());
	}
}

function getRandomInt(max){

	return Math.floor(Math.random() * Math.floor(max));
}

function masquer_caracteres(mot_a_deviner){
	var resultat = "";

	for (var i=0; i<mot_a_deviner.length; i++) {
		var caractere_courant = mot_a_deviner.charAt(i).toLowerCase();
		// si mot_a_deviner.charAt(i) est une lettre 
		// on met un tiret dans resultat
		switch (caractere_courant) {
			case 'a': case 'b': case 'c': case 'd': case 'e':
			case 'f': case 'g': case 'h': case 'i': case 'j':
			case 'k': case 'l': case 'm': case 'n': case 'o':
			case 'p': case 'q': case 'r': case 's': case 't':
			case 'u': case 'v': case 'w': case 'x': case 'y':
			case 'z':
				resultat = resultat + "-";
				break;
			// sinon on laisse le caractère tel quel
			default:
				resultat += "" + mot_a_deviner.charAt(i) + "";
				break;
		}
	}
	return resultat;
}

function hasWin(){
		console.log("hasWin");
		return mot_a_deviner.toLowerCase().localeCompare(mot_cache) == 0;
}