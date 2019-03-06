<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Sentinelles Technologies : accélerateur de succès</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target="#navbar-example">

	<div class="container">
    <div class="row">
      <div class="col-lg-12">
        <!-- Navigation -->
        <nav class="navbar navbar-default">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            <!-- Brand -->
            <a class="navbar-brand page-scroll sticky-logo" href="index.php">
              <h1><span>&nbsp Sentinelles</span>Technologies</h1>
            </a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
            <ul class="nav navbar-nav navbar-right">
              <li class="active">
                <a class="page-scroll" href="index.php?page=accueil">Accueil</a>
              </li>
              <li>
                <a class="page-scroll" href="index.php?page=erwan">Erwan</a>
              </li>
              <li>
                <a class="page-scroll" href="index.php?page=kevin">Kévin</a>
              </li>
              <li>
                <a class="page-scroll" href="index.php?page=killian">Killian</a>
              </li>
              <li>
                <a class="page-scroll" href="index.php?page=ninon">Ninon</a>
              </li>
              <li>
                <a class="page-scroll" href="index.php?page=contact">Contact</a>
              </li>
            </ul>
          </div>
          <!-- navbar-collapse -->
        </nav>
        <!-- END: Navigation -->
      </div>
    </div>

<!--   <h1><?php echo ucfirst($_GET["page"]); ?></h1> -->

<?php if(!isset($_GET["page"])){
  $_GET["page"] = "accueil";
 }
?>
  
  <?php 
  switch($_GET['page']) {
    case "accueil":
      include('pages/accueil.php');
      break;
    case "erwan":
      include ('pages/erwan.php');
      break;
    case "kevin":
      include('pages/kevin.php');
      break;
    case "killian":
      include('pages/killian.php');
      break;
    case "ninon":
      include('pages/ninon.php');
      break;
    case "contact":
      include('pages/contact.php');
      break;
  }
  ?>
  
	<!-- JavaScript Libraries -->
	<script src="lib/jquery/jquery.min.js"></script>
	<script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/pendu.js"></script>
</body>

</html>
