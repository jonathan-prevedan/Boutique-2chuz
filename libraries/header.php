<!DOCTYPE html>
    <html lang="fr">
	    <head>
            <meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			
 <!-- Bootstrap core CSS -->
 <link href="../bootstrap//vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->

<link href="libraries/boutique.css" rel="stylesheet">


            
	</head>
    <script src="../bootstrap/vendor/jquery/jquery.min.js"></script>
  <script src="../bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<body>
<?php 
$user = new user;
$infos_user=$user->infosUser();


if(isset($_SESSION['username']))
{
   ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">2Chuz'</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="../index.php">Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profil.php">Modifications Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="produits.php">Produits</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cart.php">Panier</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="disconnect.php">Déconnexion</a>
          </li>
        
<?php
    if($infos_user[0][6] == "admin")
    {
?>

    <li class="nav-item">
            <a class="nav-link" href="administration.php">Panel Admin</a>
          </li>
          </ul>
         </div>
     </div>
    </nav>
<?php
    }
}

else
{
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">2Chuz'</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="connect.php">Connexion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="produits.php">Produits</a>
        </ul>
      </div>
    </div>
  </nav>
</body>
<?php
}
?>