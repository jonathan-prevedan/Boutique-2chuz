<?php 

include("libraries/functions.php");
include("libraries/header.php");

$categorie = new product;
$affichecat=$categorie->categorie();
$news =$categorie->nouveautees();
$resultat = $categorie->images();

?>



<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Bootstrap core CSS -->
 <link href="bootstrap//vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->

<link href="libraries/boutique.css" rel="stylesheet">
  <title>Accueil 2Chuz'</title>
  <style>
	body 
	{
		background-color: rgb(37, 62, 99);
		color:#CDD6D8;
	}
	.row 
	{
		display:flex;
		flex-wrap:wrap;
		width:100%;
		height:40%;
	}
	h1
	{
  padding-top:55px;
	text-align:center;
	color:#CDD6D8;
  }
  .col
  {
    text-align:center;
  }
	
	label
	{
		color:#CDD6D8;
	}
  
				</style>



</head>

<body>


 
    <p>NOS NOUVEAUTEES</p>
    

      <div class="col">

        <h1>Bienvenue sur 2Choez'</h1>
        <p>Nos Nouveautées</p>
</br>
        
          
          <?php  for($i=0; $i < sizeof($affichecat); $i++)
          {
            ?>
            <a href="libraries/sous-cat.php" class="list-group-item"><?php echo $affichecat[$i][1];?></a>
            <?php
          }  ?></a>
        
        </div>

      </div>
        </br>
      

          
          <?php 
          
          for($i=0; $i < sizeof($news); $i++)
          {
            
            ?>
            
            
          <?php
          }
          
?><div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
</ol>
<div class="carousel-inner">
  <div class="carousel-item active">
         
          <?php 
          
for($i=0; $i < 1; $i++)
{ 
?>


<a href="libraries/description.php?id=<?php echo  $resultat[$i][2];?>">
      <img height="<?php echo $resultat[$i][5];?>" width="<?php echo $resultat[$i][6];?>" 
      src="<?php echo $resultat[$i][8];?>"><img src="<?php $news[$i][0]; ?>" alt=""class="d-block w-100" alt="..."></a>
    <div class="carousel-caption d-none d-md-block">
      <h5><?php echo $resultat[$i][3];?></h5>
      <p><?php echo $resultat[$i][7];?></p>
    </div>
  </div>
  <?php
}
?>
<?php
for($i=1; $i < 2; $i++)
{
?>
<div class="carousel-item">
  <a href="libraries/description.php?id=<?php echo  $resultat[$i][2];?>">
      <img height="<?php echo $resultat[$i][5];?>" width="<?php echo $resultat[$i][6];?>" 
      src="<?php echo $resultat[$i][8];?>"><img src="<?php $news[$i][0]; ?>" alt=""></a>
    <div class="carousel-caption d-none d-md-block">
      <h5><?php echo $resultat[$i][3];?></h5>
      <p><?php echo $resultat[$i][7];?></p>
    </div>
  </div>
  <?php
  }
  ?>
  <?php
  for($i=2; $i < 3; $i++)
  {?>
  <div class="carousel-item">
  <a href="libraries/description.php?id=<?php echo  $resultat[$i][2];?>">
      <img height="<?php echo $resultat[$i][5];?>" width="<?php echo $resultat[$i][6];?>" 
      src="<?php echo $resultat[$i][8];?>"><img src="<?php $news[$i][0]; ?>" alt=""></a>
    <div class="carousel-caption d-none d-md-block">
      <h5><?php echo $resultat[$i][3];?></h5>
      <p><?php echo $resultat[$i][7];?></p>
    </div>
  </div>
</div>
<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
</div>
      
<?php             
}
         
?>

  <!-- Footer -->
  <footer class="py-5 bg-dark fixed-bottom">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Jo&Dev 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="bootstrap/vendor/jquery/jquery.min.js"></script>
  <script src="bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
