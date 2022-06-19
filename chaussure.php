<?php
include 'server.php';

$sql_articles = "SELECT * FROM items WHERE idArticle = 1";
$articles = $conn->query($sql_articles);

// Créer les listes
$idChaussure = array();
$titreChaussure = array();
$descChaussure = array();
$imgChaussure = array();
$prixChaussure = array();
//$idArticles_Chaussure = array();

if ($articles->num_rows > 0) {
    // output data of each row
    while($row = $articles->fetch_assoc()) {
        array_push($idChaussure, $row['idArticle']);
        array_push($titreChaussure, $row['titre']);
        array_push($descChaussure, $row['description']);
        array_push($imgChaussure, $row['image']);
        array_push($prixChaussure, $row['prix']);
        //array_push($idArticles_Chaussure, $row['idArticles']);
    }
  }
else {
    echo "0 results";
}

$Chaussure = <<< body

<html>
<head>
	<title>Chaussure</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="chaussure.css">

</head>
<body>


<nav>				<!-- création de la barre navigation (limite)-->
		<h1>Le Football</h1>   <!-- titre-->
		<div class="onglets"> <!--creation d'onglets qui permet de mettre des rubriques-->
			<a href="Index.html">Home</a>
			<a href="boutique.php">Boutique</a>
			<a href="stage.html">Stage</a>
			<!--<a href="connexion.html">Connexion</a> -->
			<a href="Contacter nous">Contact</a>
</nav>
		</div>

			<nav>
	<header>

			<h1>Nos Paires</h1>
			<h4> Toutes les paires de crampons sur mesure</h4>

			<!-- <BUTTON>DECOUVRIR</BUTTON> -->

	</header>
</nav> 
  
   <section class="barre" id="equipements">

    <a href="chaussure.php">Chaussures de foot</a>
    <a href="short.php">Shorts</a>
    <a href="maillot.php">Maillots</a>
    <a href="chaussette.php">Chaussettes</a>
  
</section>

<section class="premier" id="Produits">

    <div class="content">
body;

$body_Chaussure = "";

for ($i = 0; $i < $articles->num_rows; $i++){
    $body_Chaussure = $body_Chaussure . "
    <div class='content'>
      
        <div class='card'>
            <div class='left'> 
                <h1>" . $titreChaussure[$i] . "</h1>
                <p>" . $descChaussure[$i] . "</p>
                <p> Prix = " . $prixChaussure[$i] . "$</p>

            </div>
            <div class='right'>
                <img src='" . $imgChaussure[$i] . "'>
            </div>
        </div>
    </div>";
}

$Chaussure = $Chaussure . $body_Chaussure;

echo $Chaussure;