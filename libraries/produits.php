<?php include("functions.php");?> 


<!DOCTYPE html>
    <html lang="fr">
	    <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="boutique.css" rel="stylesheet">
            <title>PRODUITS</title>
	</head>
<body>
	<?php 

$produit= new product();

if(isset($_GET['search']))
{
	$resultat=$produit->recherche($_GET['search']);
}
?>

<div class="barre_recherche">
	<form method="get" action="">
		<input placeholder="Votre recherche" name="search" type="text">
		<input type="submit" value="Rechercher">
	</form>
</div>



<div class="produits_encadrement">
<p>Nos Produits</p>

<?php


$image=$produit -> images();

if(isset($_GET['search']))
{
	if(sizeof($resultat)==0)
	{
	?>
		<div class="hover_produits1">
			<p>La recherhe n'a retournée aucun résultat</p>
		</div>
	<?php
	}
	for($i=0; $i < sizeof($resultat); $i++)
	{
		
	?>
		<div class="hover_produits">
			<a href="description.php?id=<?php echo  $resultat[$i][2];?>"><img height="<?php echo $resultat[$i][5];?>" width="<?php echo $resultat[$i][6];?>" src="<?php echo $resultat[$i][8];?>"></a>
		</div>
	<?php
	}
}

else if(!isset($_GET['id']) && !isset($_GET['id2']))
{

	for($i=0; $i < sizeof($image); $i++)
	{
		
	?>
		<div class="hover_produits">
			<a href="description.php?id=<?php echo  $image[$i][2];?>"><img height="<?php echo $image[$i][5];?>" width="<?php echo $image[$i][6];?>" src="<?php echo $image[$i][8];?>"></a>
		</div>
	<?php
	}
}
else if(!isset($_GET['id']) || !isset($_GET['id2']))
{
	header('Location: index.php');

}
else 
{
	for($i=0; $i < sizeof($image); $i++)
	{
	if($_GET['id']== $image[$i][1] && $_GET['id2']==  $image[$i][0])
	{
		
	?>
	<div class="hover_produits">
		<a href="description.php?id=<?php echo  $image[$i][2];?>"><img height="<?php echo $image[$i][5];?>" width="<?php echo $image[$i][6];?>" src="<?php echo $image[$i][8];?>"></a>
	</div>
	<?php
	}
	}

}
?>
</div>




</body>
</html>