<!DOCTYPE html>
    <html lang="fr">
	    <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="boutique.css" rel="stylesheet">
            <title>sous_cat</title>
	</head>

<body>
<?php include("functions.php");
require_once("header.php");?>



<div class="sous_categorie">
	<div>
		<?php
		$produit = new product;
		$tab=$produit -> categorie();
		$tab1=$produit -> souscat();
		

			for($i=0; $i < sizeof($tab1); $i++)
			{
			?>
			<a href="produits.php?type=<?php echo $_GET['type'];?>&id=<?php  echo $_GET['id'];?>&marque=<?php echo $tab1[$i][1]; ?>&id2=<?php echo $tab[$i][0];?>"><img width="<?php echo $tab1[$i][4];?>" height="<?php echo $tab1[$i][3];?>" src="<?php echo $tab1[$i][2];?>"></a>
			<?php
			}
			?>
	</div>
</div>



</body>
</html>


