<?php
include 'server.php';

$sql_articles = "SELECT * FROM items WHERE idArticle = 2";
$articles = $conn->query($sql_articles);

// Créer les listes
$idShort = array();
$titreShort = array();
$descShort = array();
$imgShort = array();
$prixShort = array();

if ($articles->num_rows > 0) {
    // output data of each row
    while($row = $articles->fetch_assoc()) {
        array_push($idShort, $row['idArticle']);
        array_push($titreShort, $row['titre']);
        array_push($descShort, $row['description']);
        array_push($imgShort, $row['image']);
        array_push($prixShort, $row['prix']);
    }
  }
else {
    echo "0 results";
}

$Short = <<< body

<html>
<head>
	<title>Short</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="short.css">

</head>
<body>


<nav>				<!-- création de la barre navigation (limite)-->
		<h1>Le Football</h1>   <!-- titre-->
		<div class="onglets"> <!--creation d'onglets qui permet de mettre des rubriques-->
			<a href="Index.html">Home</a>
			<a href="boutique.php ">Boutique</a>
			<a href="stage.html">Stage</a>
			<!--<a href="connexion.html">Connexion</a> -->
			<a href="index.html">Contact</a>
</nav>
		</div>

			<nav>
	<header>

			<h1>Nos Shorts</h1>
			<h4> Touts les shorts en avant premiere </h4>

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

$body_Short = "";

for ($i = 0; $i < $articles->num_rows; $i++){
    $body_Short = $body_Short . "
    <div class='content'>
      
        <div class='card'>
            <div class='left'> 
                <h1>" . $titreShort[$i] . "</h1>
                <p>" . $descShort[$i] . "</p>
                <p> Prix = " . $prixShort[$i] . "$</p>

            </div>
            <div class='right'>
                <img src='" . $imgShort[$i] . "'>
            </div>
        </div>
    </div>";
}

$Short = $Short . $body_Short;

echo $Short;