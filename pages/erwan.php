
<!--<body>-->
<div class="banner backgroundG">
	<h1 class="banner">Erwan GOASDOUE</h1>
	<h2>Présentation des projets réalisés à Sentinelles Technolohgies </h2>
</div>
<section>
	<div>
		<ul><h3>Projet "RGB2HEX" :</h3>
			<p>Réalisation d'un convertisseur RGB to Hexadecimal, TP n°1 cours Développement Web.</p>

			<ul><h4>Langages utilisés :</h4>
				<li>HTML : structuration de la page web.</li>
				<li>JavaScript : innitialisation du jeu, et traitement des différentes fonctions utilisées dans le bon déroulement du jeu.</li>
				<li>CSS : simple mise en forme de la disposition des lettres de l'alpahbet, et alignement de chaque élément.</li>
			</ul>
			<ul>
				
			</ul><h4>Compétences acquises :</h4>

		</ul>
	</div>
</section>

<section>
	<div class="containerr">
		<header class="row entete">
			<div class="col-lg-12"> 
				<h1 class="titrepage">
					RGB 2 HEX - Sentinelles Tech - DWWM
				</h1>
				<p>
					Voici un convertisseur RGB - Hexadécimal fait par les &eacute;quipes de Sentinelles Technologies.
				</p>
				<div>
					<input type="hidden" value="Rgb 2 Hex" name="rgb2hex" id="rgb2hex" />
					<input type="hidden" value="Hex 2 Rgb" name="hex2rgb" id="hex2rgb" />
				</div>
			</div>
		</header>
		<div class="row containerr1">
			<div class="col-lg-6">
				<div class="row">
					<div class="col-lg-2 col-lg-offset-2">
						<input type="number" name="r" id="r" value="255" style="width: 100px" max="255" min="0"/>
					</div>
					<div class="col-lg-2">
						<input type="number" name="g" id="g" value="255" style="width: 100px" max="255" min="0"/>
					</div>
					<div class="col-lg-2">
						<input type="number" name="b" id="b" value="255" style="width: 100px" max="255" min="0"/>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div id="carre_colore"></div>
			</div>
			<div class="col-lg-3">
				<input type="text" id="hex" value="ffffff"/>
			</div>
		</div>
	</div>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>

    <!-- JS pour l'application -->
    <script type="text/javascript" src="js/app-rgbtohex.js"></script></section>

<!--</body>-->