<?php
include 'server.php';

$sql_articles = "SELECT * FROM items WHERE idArticle = 4";
$articles = $conn->query($sql_articles);

// Créer les listes
$idChaussete = array();
$titreChaussete = array();
$descChaussete = array();
$imgChaussete = array();
$prixChaussete = array();
//$idArticles_Chaussete = array();

if ($articles->num_rows > 0) {
    // output data of each row
    while($row = $articles->fetch_assoc()) {
        array_push($idChaussete, $row['idArticle']);
        array_push($titreChaussete, $row['titre']);
        array_push($descChaussete, $row['description']);
        array_push($imgChaussete, $row['image']);
        array_push($prixChaussete, $row['prix']);
        //array_push($idArticles_Chaussete, $row['idArticles']);
    }
  }
else {
    echo "0 results";
}

$chaussette = <<< body

<html>
<head>
	<title>Chaussette</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="chaussette.css">

</head>
<body>

<nav>				<!-- création de la barre navigation (limite)-->
		<h1>Le Football</h1>   <!-- titre-->
		<div class="onglets"> <!--creation d'onglets qui permet de mettre des rubriques-->
			<a href="Index.html">Home</a>
			<a href="boutique.php">Boutique</a>
			<a href="stage.html">Stage</a>
			<!--<a href="connexion.html">Connexion</a> -->
			<a href="index.html">Contact</a>
</nav>
		</div>

			<nav>
	<header>

			<h1>Nos Chaussettes</h1>
			<h4> Toutes les paires de chaussettes de vos clubs preferés sont disponibles</h4>

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

$body_Chaussete = "";

for ($i = 0; $i < $articles->num_rows; $i++){
    $body_Chaussete = $body_Chaussete . "
    <div class='content'>
      
        <div class='card'>
            <div class='left'> 
                <h1>" . $titreChaussete[$i] . "</h1>
                <p>" . $descChaussete[$i] . "</p>
                <p> Prix = " . $prixChaussete[$i] . "$</p>

            </div>
            <div class='right'>
                <img src='" . $imgChaussete[$i] . "'>
            </div>
        </div>
    </div>";
}

$chaussette = $chaussette . $body_Chaussete;

echo $chaussette;