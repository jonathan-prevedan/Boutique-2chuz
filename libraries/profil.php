<?php include("functions.php");



// if(!isset($_SESSION['username']))
// {
// 	header('Location: index.php');
// }



$user = new user;
$infos_user=$user->infosUser();


?>

<!-- ---------------------------------------------- -->
<!-- ---------- FORMULAIRE HTML-------------------- -->

<!DOCTYPE html>
    <html lang="fr">
	    <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="boutique.css" rel="stylesheet">
            <title>Modification profil</title>
	</head>

	<body>
		

<h1 class="log_titre">Vos informations</h1>
<div id="form_log2">
		<form action="" method="post">
		<?php
			if(isset($_POST['change']))
				{
					
					$profil_update=$user->update($_POST['username'], $_POST['psw'], $_POST['nom'], $_POST['prenom'], $_POST['email']);
					if($profil_update == "erreur")
					{
						?><p>Login déjà existant</p><?php
					}
					else if($profil_update == "erreur2")
					{
						?><p>Mot de passe trop court (5 caractères minimums)</p><?php
					}
				}	
		?>
			<input type="text" name="username" required placeholder="Login" value="<?php echo $infos_user[0][1]; ?>">
			<input type="password" name="psw" required placeholder="Password" value="<?php echo $infos_user[0][2];?>">
			<input type="text" name="nom" required placeholder="Nom" value="<?php echo $infos_user[0][3]; ?>">
			<input type="text" name="prenom" required placeholder="Prénom" value="<?php echo $infos_user[0][4]; ?>">
			<input type="email" name="email" required placeholder="Email" value="<?php echo $infos_user[0][5];?>">
			<input type="submit" name="change" required value="Modifier">
		</form>
</div>
		
	</body>
</html>