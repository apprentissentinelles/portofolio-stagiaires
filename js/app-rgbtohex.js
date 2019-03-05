(function() {

	initialisation();

//* Déroulement du programme :

	function initialisation() {
		/**
		 *
		 * Ecoute du clic sur le bouton hex2rgb
		 *
		 */
		document.querySelector("#hex2rgb").onclick = function(e){
			miseAJourValeursRGB();
		}

		/**
		 *
		 * Ecoute du clic sur le bouton rgb2hex
		 *
		 */
		document.querySelector("#rgb2hex").onclick = function(e){
			miseAJourValeursHEX();
		}

		/**
		 *
		 * Remplissage auto, par des zeros, du champs HEX  
		 *
		 */
		document.querySelector("#hex").onchange = function(){
			let hex = document.querySelector("#hex").value;
			let i = hex.length;
			let new_value = hex;
			while(i < 6){
				new_value += "0";
				i++;
			}
			document.querySelector("#hex").value = new_value;
		}

		/**
		 *
		 * Ecoute du changement du parametre "r" du RGB
		 *
		 */
		document.querySelector("#r").oninput = function(e){
			miseAJourValeursHEX();
			carreColore();
		}

		/**
		 *
		 * Ecoute du changement du parametre "g" du RGB
		 *
		 */
		document.querySelector("#g").oninput = function(e){
			miseAJourValeursHEX();
			carreColore();
		}
			
		/**
		 *
		 * Ecoute du changement du parametre "b" du RGB
		 *
		 */
		document.querySelector("#b").oninput = function(e){
			miseAJourValeursHEX();
			carreColore();
		}

		/**
		 *
		 * Ecoute du changement du parametre hex
		 *
		 */
		document.querySelector("#hex").onblur = function(e){
			miseAJourValeursRGB();
			carreColore();
		}	
	}

//* Les Fonction utilisées :

	/** 
	 *
	 *Fonction mise a jour valeurs RBG
	 *
	 */
	function miseAJourValeursHEX(){
			let r = document.querySelector("#r").value;
			let g = document.querySelector("#g").value;
			let b = document.querySelector("#b").value;
			let hex = convertirRGB2HEX([r, g, b]);
			document.querySelector("#hex").value = hex;
	}

	/** 
	 *
	 *Fonction mise a jour valeurs HEX
	 *
	 */
	function miseAJourValeursRGB(){
			let hex = document.querySelector("#hex").value;
			let rgb = convertirHEX2RGB(hex);
			// Mise a jour des input
			document.querySelector("#r").value = rgb[0];
			document.querySelector("#g").value = rgb[1];
			document.querySelector("#b").value = rgb[2];
	}

	/**
	 *
	 * Cette fonction retourne le code hexadecimal
	 * de la valeur rgb passée en paramètre
	 *
	 */
	function convertirRGB2HEX(rgb) {
			if (rgb.length !== 3) {
				alert("Une erreur s'est produite [convertirRGB2HEX] !");
				return "NotAnHexa";
			}

			let rStr = convertirBase10VersBase16(rgb[0]);
			let gStr = convertirBase10VersBase16(rgb[1]);
			let bStr = convertirBase10VersBase16(rgb[2]);
			return rStr + gStr + bStr + "";
	}

	/**
	 *
	 * Cette fonction retourne le tableau de codes rgb
	 * de la valeur hexadecimale passée en paramètre
	 *
	 */
	function convertirHEX2RGB(hex){
		if (hex.length !== 6){
			alert("Une erreur s'est produite [convertirRGB2HEX] !");
			return -1;
		}

		let rgb = [];
		let rStr = hex.substring(0, 2);
		let gStr = hex.substring(2, 4);
		let bStr = hex.substring(4, 6);
		rgb[0] = convertirBase16VersBase10(rStr);
		rgb[1] = convertirBase16VersBase10(gStr);
		rgb[2] = convertirBase16VersBase10(bStr);
		return rgb;
	}

	function convertirBase16VersBase10(hex) {
		if (hex.length < 0 || hex.length > 2) {
			alert("Une erreur s'est produite !");
			return -1;
		}
		// Notre nombre en hexa a bien deux caractères
		let premiereLettre = hex.charAt(0);
		let secondeLettre = hex.charAt(1);
		return determinerValeurBase16VersBase10(premiereLettre)*16 
		+ determinerValeurBase16VersBase10(secondeLettre);
	}

	function convertirBase10VersBase16(b10) {
		if (b10 < 0 || b10 > 255) {
			alert("Une erreur s'est produite !");
			return "NotAnHexa";
		}
		// Notre nombre en hexa a bien deux caractères
		let resultatDivision = Math.floor(b10 / 16);
		let reste = b10 % 16;
		return determinerValeurBase10VersBase16(resultatDivision) 
		+ determinerValeurBase10VersBase16(reste) + "";	
	}

	function determinerValeurBase16VersBase10(valeurStr) {
		//Equivalent HEX2RGB
		switch (valeurStr) {
			case "0": case "1": case "2": case "3": case "4":
			case "5": case "6": case "7": case "8": case "9":
				return parseInt(valeurStr);
			case "a":
				return 10;
			case "b":
				return 11;
			case "c":
				return 12;
			case "d":
				return 13;
			case "e":
				return 14;
			case "f":
				return 15;
			default:
				alert("Une erreur s'est produite [determinerValeurBase16VersBase10] !");
				return -1;
		}
	}

	function determinerValeurBase10VersBase16(valeurInt) {
		switch (valeurInt) {
			case 0: case 1: case 2: case 3: case 4:
			case 5: case 6: case 7: case 8: case 9:
				return valeurInt + "";
			case 10:
				return "a";
			case 11:
				return "b";
			case 12:
				return "c";
			case 13:
				return "d";
			case 14:
				return "e";
			case 15:
				return "f";
			default:
				alert("Une erreur s'est produite [determinerValeurBase10VersBase16] !");
				return "NotAnHexa";
		}
	}

	function carreColore(){
		console.log("#carre_colore");
		let hex = document.querySelector("#hex").value;
		let rgb = convertirHEX2RGB(hex);
		// Mise a jour des input
		document.querySelector("#r").value = rgb[0];
		document.querySelector("#g").value = rgb[1];
		document.querySelector("#b").value = rgb[2];
		document.querySelector("#carre_colore").style.backgroundColor = "#" + hex;
	}
})();
