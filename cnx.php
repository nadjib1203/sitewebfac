<?php
session_start(); // permet d'échanger des infos sur toute les pages 
if (isset($_POST['valider'])) {
	if (!empty($_POST['pseudo']) AND !empty($_POST['mdp'])) {  //empty pour si ils ne sont pas vide on exécute
$pseudo_par_default='admin'; //pseudo par default
$mdp_par_default='123456789'; //mdp par default 

$pseudo_saisie= htmlspecialchars($_POST['pseudo']) ;  //pseudo saisie correspond au pseudi par default ,pseudosaisie stock le pseudo saisie . hmlchars empeche quon rajoute du code
$mdp_saisie= htmlspecialchars($_POST['mdp']);
if ($pseudo_saisie == $pseudo_par_default AND $mdp_saisie== $mdp_par_default) { // verifier pseudo et mdp correctes 
	$_SESSION['mdp'] = $mdp_saisie;      // verifier si il est bien connecter
	header('location : http://localhost/sitewebfin/index.php') ;    // redirigé l'utilisateur vers la page d'administration 
	
} else {
	echo "vos informations sont fausses";
}

	  
	} else {
		echo "Veuillez remplir tous les champs"	;  // snn veuillez remplir les chammps
	}
}
?>






<!DOCTYPE html>
<html>
<head>
	<title>Espace de connexion admin</title>
	<meta charset="utf-8"
	>
</head>
<body>
	<form method="POST"  action=""  align="center">
		<input type= "text" name="pseudo" autocomplete="off"><br>
		<input type="passeword" name="mdp"> <br><br>
		<input type="submit" name="valider">
		



	</form>

</body>
</html>