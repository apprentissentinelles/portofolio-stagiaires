(function() {

	// Variables globales
	// Input & sliders
	var volume_slider = document.querySelector("#volume-slider");
	var plus_rythme = document.querySelector("#plus-rythme");
	var moins_rythme = document.querySelector("#moins-rythme");

	// Ecrans
	var ecran_rythme = document.querySelector("#ecran-rythme");
	var ecran_volume = document.querySelector("#ecran-volume");

	// Touches clavier
	var touches_clavier = document.querySelectorAll(".touche");

	// Enregistreur de mÃ©lodies
	var melodies = [];
	var indice_note_melodie = 0;
	var enregistrement_active = false;

	// Gestion du rythme
	var intervalRythme;

	initialisation();

	function initialisation() {
		volume_slider.oninput = function() {
			let value = volume_slider.value;
			ecran_volume.value = value;
		}

		ecran_volume.onchange = function() {
			let value = ecran_volume.value;
			if (value > 100) {
				value = 100;
			} else if (value < 0) {
				value = 0;
			}
			ecran_volume.value = value;
			volume_slider.value = value;
		}
		plus_rythme.onclick = function () {
			if (ecran_rythme.value < 450) {
			ecran_rythme.value++;
		}
}

		moins_rythme.onclick = function () {
			if (ecran_rythme.value > 0) {
			ecran_rythme.value--;
		}
}
		ecran_volume.onchange= function(){
			
			if (ecran_volume.value > 100){
				ecran_volume.value = 100;
			}
			else if (ecran_volume.value < 0){
					 ecran_volume.value = 0;
			}
			volume_slider.value = ecran_volume.value;

		}

		ecran_rythme.onchange= function(){
			
			if (ecran_rythme.value > 450){
				ecran_rythme.value = 450;
			}
			else if (ecran_rythme.value < 0){
					 ecran_rythme.value = 0;
			}
		}

		for (let i = 0; i<touches_clavier.length; i++) {
			touches_clavier[i].onmousedown = function(e) {
				let note = e.target.className.replace("touche", "");
				note = note.replace("bemol", "");
				note = note.replace("note", "");
				note = note.replace(" ", "");
				note = note.replace(" ", "");
				jouerSon(note);
			};

			touches_clavier[i].onmouseup = function(e) {
				let note = e.target.className.replace("touche", "");
				note = note.replace("bemol", "");
				note = note.replace("note", "");
				note = note.replace("jouee", "");
				note = note.replace(" ", "");
				note = note.replace(" ", "");
				note = note.replace(" ", "");
				couperSon(note);
			};
		}

		document.querySelector("#btn-rec").addEventListener("click", function(e) {
			e.target.style.display = "none";
			document.querySelector("#btn-stop").style.display = "inline-block";
			enregistrement_active = true;
		});

		document.querySelector("#btn-stop").addEventListener("click", function(e) {
			e.target.style.display = "none";
			document.querySelector("#btn-rec").style.display = "inline-block";
			enregistrement_active = false;
		});

		document.querySelector("#btn-play").addEventListener("click", function(e) {
			e.target.style.display = "none";
			document.querySelector("#btn-pause").style.display = "inline-block";
			jouerEnregistrement();
		});

		document.querySelector("#btn-pause").addEventListener("click", function(e) {
			afficherPlayMasquerPause();
		});

		document.querySelector("body").onkeydown = function(e) {
			let note = assignerNote(e.key);
			if (note !== "non_traite") {
				jouerSon(note);
			}
		}

		document.querySelector("body").onkeyup = function(e) {
			let note = assignerNote(e.key);
			if (note !== "non_traite") {
				couperSon(note);
			}
		}
	}

	function jouerSon(note) {
		// Jouer le son
		let audio = new Audio('mp3/' + note + '.mp3');
		audio.play();

		// Enregistrer le son
		if (enregistrement_active) {
			enregistrerSon(note);
		}

		// Afficher l'effet
		let toucheClass = document.querySelector("." + note).className;
		if (toucheClass.indexOf("jouee") === -1) {
			document.querySelector("." + note).className += " jouee";
		}
	}

	function couperSon(note) {
		let toucheClass = document.querySelector("." + note).className;
		if (toucheClass.indexOf("jouee") !== -1) {
			document.querySelector("." + note).className = toucheClass.replace(" jouee", "");
		}
	}

	function enregistrerSon(note) {
		melodies.push(note);
	}

	function jouerEnregistrement() {
		if (!enregistrement_active) {
			intervalRythme = setInterval(function() {
				if (indice_note_melodie < 0 || indice_note_melodie >= melodies.length) {
					arreterLecture();
				} else {
					let note = melodies[indice_note_melodie];
					jouerSon(note);
					let t = setTimeout(function() {
						couperSon(note);
					}, 250);
					
					indice_note_melodie++;
				}
			}, getIntervalBPM());
		}
	}

	function getIntervalBPM(){
		return parseInt (60000 / ecran_rythme.value);
	}

	function arreterLecture() {
		indice_note_melodie = 0;
		clearInterval(intervalRythme);
		afficherPlayMasquerPause();
	}


	function changerVolume(volume) {
		
	}

	function changerRythme(rythme) {
			
	}

	function assignerNote(key) {
		switch(key) {
			case "q":
			case "q":
				return "c1";

			case "z":
			case "Z":
				return "c1s";

			case "s":
			case "S":
				return "d1";

			case "e":
			case "E":
				return "d1s";

			case "d":
			case "D":
				return "e1";

			case "f":
			case "F":
				return "f1";

			case "t":
			case "T":
				return "f1s";

			case "g":
			case "G":
				return "g1";

			case "y":
			case "Y":
				return "g1s";

			case "h":
			case "H":
				return "a1";

			case "u":
			case "U":
				return "a1s";

			case "j":
			case "J":
				return "b1";

			case "k":
			case "K":
				return "c2";

			default:
				return "non_traite";
		}
	}

	function afficherPlayMasquerPause() {
		document.querySelector("#btn-pause").style.display = "none";
		document.querySelector("#btn-play").style.display = "inline-block";
	}

})();