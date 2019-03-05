<html>
<head>

  <title>Bienvenue chez moi</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <meta charset="utf-8">
  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="../css/style.css" rel="stylesheet">
</head>

<body class="body-kevin">
	<div class="titre">
		<h1> Portofolio de Kevin </h1>
	</div>
  <hr class="separateurkev"></hr>
<div class="container">
    <header>
      <div class="col-lg-12"> 
        <h1 class="titrepage">
          MusikWeb - DWWM
        </h1>
        <p>
          Voici l'application MusikWeb réalisée par de Sentinelles Technologies.
        </p>
      </div>
    </header>
    
    <div class="row container1">
      <!-- Boite Ã  outil -->
      <div class="col-lg-8">
        <div id="tool-box">
          <div class="row">
            <div class="col-lg-2">
              <input type="button" name="plus-rythme" id="plus-rythme" value="+" />
              <input type="button" name="moins-rythme" id="moins-rythme" value="-" />
            </div>
            <div class="ecrans col-lg-6">
              <input class="ecran" type="number" name="rythme" id="ecran-rythme" min ="0" max="450" value="0" />
              <input class="ecran" type="number" name="volume" id="ecran-volume" value="0" />
            </div>
            <div class="col-lg-2">
              <input type="range" min="0" max="100" class="slider" id="volume-slider" />
            </div>
          </div>
          <div class="row">
            <!--REC / STOP -->
            <div class ="col-lg-6">
            <span> <img id="btn-rec" class="btn-svg button"  src="images/circle-solid.svg" alt="bouton rec" /> </span>
            <span> <img id="btn-stop" class ="btn-svg button" class="btn-svg bouton" src="images/stop-solid.svg" alt="Bouton Pause" /> </span>
            </div>
            <!-- PLAY / PAUSE -->

            
            <div class = "col-lg-6">
              <span> <img class="btn-svg button" id="btn-play" src="images/play-solid.svg" alt="bouton play" /></span>
              <span> <img class="btn-svg button" id="btn-pause" src ="images/pause-solid.svg" alt="bouton pause"/></span>
            </div>
          </div>
      </div>
    </div>
      <!-- Espace membre -->
      <div class="col-lg-4">
        <div>
          <label for="login">Login</label><input type="text" name="login" />
        </div>
        <div>
          <label for="pass">Password</label><input type="text" name="pass" />
        </div>
        <div>
          <input type="submit" value="Se connecter" />
        </div>
      </div>
    </div>

    <div class="row">
      <!-- Clavier -->
      <div class="col-lg-12">
        <div id="clavier-container">
          <div class="groupe notes init">
            <div class="touche a0 note"></div>
            <div class="touche b0 bemol"></div>
            <div class="touche b0s note"></div>
          </div>
          <div class="groupe notes trois">
            <div class="touche c1 note">r</div>
            <div class="touche c1s bemol">t</div>
            <div class="touche d1 note">y</div>
            <div class="touche d1s bemol">q</div>
            <div class="touche e1 note">s</div>
          </div>
          <div class="groupe notes quatre">
            <div class="touche f1 note">p</div>
            <div class="touche f1s bemol">q</div>
            <div class="touche g1 note">s</div>
            <div class="touche g1s bemol">d</div>
            <div class="touche a1 note">a</div>
            <div class="touche a1s bemol">z</div>
            <div class="touche b1 note">e</div>
          </div>
          <div class="groupe notes trois">
            <div class="touche c2 note">y</div>
            <div class="touche c2s bemol"></div>
            <div class="touche d2 note"></div>
            <div class="touche d2s bemol"></div>
            <div class="touche e2 note"></div>
          </div>
          <div class="groupe notes final">
            <div class="touche fa-3 note"></div>
            <div class="touche sol-3 bemol"></div>
            <div class="touche sol-3 note"></div>
          </div>
        </div>
      </div>
    </div>
  
</div>


<hr class="separateurkev"></hr>


<!-- <titre> <h1> Diaporama </h1> </titre>

  <div id="sliderjs">
          <i class="go-back"> </i>
          <i class="go-forward"> </i>
          <div class="diapositives">
            <div class="diapositive" style="background-image: url('images/coding-on-laptop_4460x4460.jpg')" >
              
              <h1 class="titre1"> Mon titre image 1 </h1>
              <p class="paragraphe"> C'est bien le titre correspondant à la premiere image </p>
            
            </div>
            <div class="diapositive" style="background-image: url('images/office-team-business-meeting_4460x4460.jpg')">
              
                <h1 class="titre1"> Mon titre image 2 </h1>
                <p class="paragraphe"> C'est bien le titre correspondant à la deuxième image </p>
            </div>
            
            <div class="diapositive" style="background-image: url('images/programmer-focused-on-code_4460x4460.jpg')">
            
              
              <h1 class="titre1"> Mon titre image 3 </h1>
              <p class="paragraphe"> C'est bien le titre correspondant à la troisième image </p>
            
            </div>

          </div>
        </div>
-->

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>

    <!-- JS pour l'application -->
    <script type="text/javascript" src="js/app-piano.js"></script>
    <script type="text/javascript" src="js/app-diapo.js"> </script>


</body>




</html>