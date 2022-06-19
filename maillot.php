<?php
include 'server.php';

$sql_articles = "SELECT * FROM items WHERE idArticle = 3";
$articles = $conn->query($sql_articles);

// Créer les listes
$idMaillot = array();
$titreMaillot = array();
$descMaillot = array();
$imgMaillot = array();
$prixMaillot = array();
//$idArticles_Maillot = array();

if ($articles->num_rows > 0) {
    // output data of each row
    while($row = $articles->fetch_assoc()) {
        array_push($idMaillot, $row['idArticle']);
        array_push($titreMaillot, $row['titre']);
        array_push($descMaillot, $row['description']);
        array_push($imgMaillot, $row['image']);
        array_push($prixMaillot, $row['prix']);
        //array_push($idArticles_Maillot, $row['idArticles']);
    }
  }
else {
    echo "0 results";
}

$maillot = <<< body

<html>
<head>
	<title>Maillot</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="maillot.css">

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

            <h1>Nos Maillots</h1>
            <h4> Touts les maillots sur mesure</h4>

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

$body_Maillot = "";

for ($i = 0; $i < $articles->num_rows; $i++){
    $body_Maillot = $body_Maillot . "
    <div class='content'>
      
        <div class='card'>
            <div class='left'> 
                <h1>" . $titreMaillot[$i] . "</h1>
                <p>" . $descMaillot[$i] . "</p>
                <p> Prix = " . $prixMaillot[$i] . "$</p>

            </div>
            <div class='right'>
                <img src='" . $imgMaillot[$i] . "'>
            </div>
        </div>
    </div>";
}

$maillot = $maillot . $body_Maillot;

echo $maillot;