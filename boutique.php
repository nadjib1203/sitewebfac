<?php
include 'server.php';

$sql_articles = "SELECT * FROM articles";
$articles = $conn->query($sql_articles);

// Créer les listes
$idArticles = array();
$titreArticles = array();
$descArticles = array();
$lienArticles = array();
$imgArticles = array();

if ($articles->num_rows > 0) {
    // output data of each row
    while($row = $articles->fetch_assoc()) {
        array_push($idArticles, $row['idArticle']);
        array_push($titreArticles, $row['titre']);
        array_push($descArticles, $row['description']);
        array_push($lienArticles, $row['lien']);
        array_push($imgArticles, $row['image']);
    }
  }
else {
    echo "0 results";
}

$boutique = <<< boutique

<html>
<head>
	<title>Boutique</title>
	<link rel="stylesheet" type="text/css" href="stylebout.css">
	<meta charset="utf-8">
</head>
<body>

  
 
  

<nav>				<!-- création de la barre navigation (limite)-->
		<h1>Le Football</h1>   <!-- titre-->
		<div class="onglets"> <!--creation d'onglets qui permet de mettre des rubriques-->
			<a href="Index.html">Home</a>
			<a href="#">Boutique</a>
			<a href="stage.html">Stage</a>
			<!--<a href="">Connexion</a>  -->
			<a href="index.html">Contact</a>
</nav>
		</div>

			<nav>
	<header>

			<h1>EQUIPEMENTS</h1>
			<h4> Tous les articles de football disponible ici </h4>

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
boutique;

$body_articles = "";

for ($i = 0; $i < $articles->num_rows; $i++){
    $body_articles = $body_articles . "
    <div class='content'>
      
        <div class='card'>
            <div class='left'> 
                <h1>" . $titreArticles[$i] . "</h1>
                <p>" . $descArticles[$i] . "</p>
                
                <button><a href='" . $lienArticles[$i] . "'>DECOUVRIR</a></button>   <!-- ce qui me permet davoir le lien nos stages qui me dirige vers la page du stage-->
            </div>
            <div class='right'>
                <img src='" . $imgArticles[$i] . "'>
            </div>
        </div>
    </div>";
}

$boutique = $boutique . $body_articles;

echo $boutique;
