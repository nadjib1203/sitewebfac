<?php
include 'server.php';

$sql_articles = "SELECT * FROM items";
$articles = $conn->query($sql_articles);

// Créer les listes
$idItems = array();
$titreItems = array();
$descItems = array();
$lienItems = array();
$imgItems = array();
$prixItems = array();
$idArticles_Items = array();

if ($articles->num_rows > 0) {
    // output data of each row
    while($row = $articles->fetch_assoc()) {
        array_push($idItems, $row['idArticle']);
        array_push($titreItems, $row['titre']);
        array_push($descItems, $row['description']);
        array_push($lienItems, $row['lien']);
        array_push($imgItems, $row['image']);
        array_push($prixItems, $row['prix']);
        array_push($idArticles_Items, $row['idArticles']);
    }
  }
else {
    echo "0 results";
}

$body = <<< body
<nav>				<!-- création de la barre navigation (limite)-->
		<h1>Le Football</h1>   <!-- titre-->
		<div class="onglets"> <!--creation d'onglets qui permet de mettre des rubriques-->
			<a href="Index.html">Home</a>
			<a href="boutique.html">Boutique</a>
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

    <a href="chaussure.html">Chaussures de foot</a>
    <a href="short.html">Shorts</a>
    <a href="maillot.html">Maillots</a>
    <a href="chaussette.html">Chaussettes</a>
  
</section>

<section class="premier" id="Produits">

    <div class="content">
body;

$body_items = "";

for ($i = 0; $i < $articles->num_rows; $i++){
    $body_items = $body_items . "
    <div class='content'>
      
        <div class='card'>
            <div class='left'> 
                <h1>" . $titreItems[$i] . "</h1>
                <p>" . $descItems[$i] . "</p>
                <p> Prix = " . $prixItems[$i] . "$</p>
                
                <button><a href='" . $lienItems[$i] . "'>DECOUVRIR</a></button>   <!-- ce qui me permet davoir le lien nos stages qui me dirige vers la page du stage-->
            </div>
            <div class='right'>
                <img src='" . $imgItems[$i] . "'>
            </div>
        </div>
    </div>";
}

$body = $body . $body_items;

echo $boutique;