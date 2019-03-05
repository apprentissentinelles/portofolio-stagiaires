	<div class="backgroundkillian">
		<h1 class="bannerkillian">Bienvenue chez Killian | Front-end de père en fils.</h1>
		<h2 class="bannerkillian">Presentation des projets réalisé au cours de la formation au sein de Groupes Sentinelles.</h2>
	</div>

	<section class="projetsPendu">
		<div class ="pendu">
			<h3>Jeu du pendu</h3>
			<p>Nous avons conçu un jeu du pendu en Javascript</p>
		</div>
	</section>	


	<div class="container">
		<header class="row entete">
			<div class="col-lg-12"> 
				<h1 class="titrepage">
					Le Pendu - Sentinelles Tech - DWWM
				</h1>
				<p>
					Voici un jeu du pendu fait par les  &eacute;quipes de Sentinelles Technologies.
				</p>
				<div>
					<input type="button" value="Come get some !" name="jouer" id="bouton_jouer">
				</div>
			</div>
		</header>
		<div class="row containerpendu">
			<div class="col-lg-9">
				<div class="row">
					<div class="col-lg-6" style="background-color: #A9A9A9; height: 100px">
						<!-- Le mot à deviner -->
						<div id="mot_cache"></div>

					</div>
					<div class="col-lg-3" style="background-color: #A9A9A9; height: 100px">
						<!-- La progression -->
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
						</div>

					</div>
					<div class="col-lg-3" style="background-color: #A9A9A9; height: 100px">
						<!-- Le nombre d'essaie -->
						<div id="nb_essais">0</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<span class="lettre" id="lettre_a">A</span>
				<span class="lettre" id="lettre_b">B</span>
				<span class="lettre" id="lettre_c">C</span>
				<span class="lettre" id="lettre_d">D</span>
				<span class="lettre" id="lettre_e">E</span>
				<span class="lettre" id="lettre_f">F</span>
				<span class="lettre" id="lettre_g">G</span>
				<span class="lettre" id="lettre_h">H</span>
				<span class="lettre" id="lettre_i">I</span>
				<span class="lettre" id="lettre_j">J</span>
				<span class="lettre" id="lettre_k">K</span>
				<span class="lettre" id="lettre_l">L</span>
				<span class="lettre" id="lettre_m">M</span>
				<span class="lettre" id="lettre_n">N</span>
				<span class="lettre" id="lettre_o">O</span>
				<span class="lettre" id="lettre_p">P</span>
				<span class="lettre" id="lettre_q">Q</span>
				<span class="lettre" id="lettre_r">R</span>
				<span class="lettre" id="lettre_s">S</span>
				<span class="lettre" id="lettre_t">T</span>
				<span class="lettre" id="lettre_u">U</span>
				<span class="lettre" id="lettre_v">V</span>
				<span class="lettre" id="lettre_w">W</span>
				<span class="lettre" id="lettre_x">X</span>
				<span class="lettre" id="lettre_y">Y</span>
				<span class="lettre" id="lettre_z">Z</span>
			</div>

		</div>
	</div>

 