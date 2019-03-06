
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<!--<body>-->
<!-- <div class="banner backgroundG">
	<h1 class="banner">Erwan GOASDOUE</h1>
	<h2>Présentation des projets réalisés à Sentinelles Technolohgies </h2>
</div>  -->
<div class="backgrounderwan">
	<img src="images/erwanbanner.png" class="bannererwan">
</div>
<section class="texterwan">
	<div>
		<ul><h3>Projet "RGB2HEX" :</h3>
			<p>Réalisation d'un convertisseur RGB to Hexadecimal, TP n°1 cours Développement Web/JavaScript.</p>

			<ul><h4>Langages utilisés :</h4>
				<li>HTML : structuration de la page web.</li>
				<li>JavaScript : dynamisation de la page web.</li>
				<li>CSS : simple mise en forme des différents éléments.</li>
			</ul>
			<ul>
			
			<ul><h4>Utilisation de JavaScript :</h4>
				<li>Initialisation du programme grâce à une <span>function initialisation</span>, regroupant toutes les autres fonctions.</li>
				<li>Traitement des valeurs RGB : en temps réel selon les modifications apportées à l'aide des boutons "range" (jauge).</li>
			</ul>

			</ul><h4>Compétences acquises :</h4>
				<li>Événements JavaScript : gestion des événements "onclick", "onchange", "oninput" et "onblur".</li>
				<li>Fonctions JavaScript : manipulation des fonctions JS (déclaration, appel et utilisation).</li>

		</ul>
	</div>
</section>

<section>
	<div class="containerRgb">
		<header class="row enteteRgb">
			<div class="col-lg-12"> 
				<h1 class="titrepage">
					RGB 2 HEX - Sentinelles Tech - DWWM
				</h1>
				<p class="soustitre">
					Voici un convertisseur RGB - Hexadécimal fait par les &eacute;quipes de Sentinelles Technologies.
				</p>
				<div>
					<input type="button" value="Rgb 2 Hex" name="rgb2hex" id="rgb2hex" hidden="" />
					<input type="button" value="Hex 2 Rgb" name="hex2rgb" id="hex2rgb" hidden="" />
				</div>
			</div>
		</header>
		<div class="row content">
			<div class="col-lg-3">
				<div class="row" id="rgb">
					<div class="col-lg-2">
						<label for="" class="r">Red</label>
						<input type="range" name="r" id="r" value="" style="width: 100px" max="255" min="0"/>
					</div>
					<br>
					<br>
					<div class="col-lg-2">
						<label for="" class="g">Green</label>
						<input type="range" name="g" id="g" value="" style="width: 100px" max="255" min="0"/>
					</div>	
					<br>
					<br>
					<div class="col-lg-2">
						<label for="" class="b">Blue</label>
						<input type="range" name="b" id="b" value="" style="width: 100px" max="255" min="0"/>
					</div>
					<br>
					<br>

					<div class="ecranrgb">
						<div id="r">Lol</div>
						<div id="g">LOL</div>
						<div id="b">lOl</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div id="carre_colore"></div>
			</div>
			<div class="col-lg-3">
				<input type="text" id="hex" value="ffffff" maxlength="6"/>
			</div>	
		</div>
	</div>

<div class="quijesuis">
	<h2 class="titreserwan">  Qui suis-je ? </h2>
	<div>
		<!--<img class="ninonpres" src=""/>-->
	</div>
	<div>
		<img class="nuage" src="images/nuageerwan.jpg" />
	</div>
</div>

<!--	Trigger the modal with a button
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

		Modal
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    	Modal content
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>-->

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>

    <!-- JS pour l'application -->
    <script type="text/javascript" src="js/app-rgbtohex.js"></script></section>

<!--</body>-->