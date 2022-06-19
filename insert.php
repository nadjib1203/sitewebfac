<?php
include 'server.php';


if (isset($_GET["nom"]) && isset($_GET["prénom"]) && isset($_GET["phone"]) && isset($_GET["mail"]) && isset($_GET["gender"]) )
{
   $nom = $_GET["nom"];
   $prénom=$_GET["prénom"];
   $phone= $_GET["phone"];
   $mail= $_GET["mail"];
   $sexe=$_GET["gender"];
   echo "ok";
   $sql = "INSERT INTO users (nom, prénom, phone, email, sexe)
VALUES ('$nom','$prénom','$phone','$mail','$sexe')";

if ($conn->query($sql) === TRUE) {
 echo "New record created successfully";
		} else {													//ce if pour s'inscrire

  echo "Error: " . $sql . "<br>" . $conn->error;
}
}




/*$sqlConnection = "SELECT email FROM users where email = '$mail'";
$result = $conn->query($sqlConnection );
/*
$row_cnt = $result->num_rows;  	//voir le nombre de ligne envoyé apr le resulat
echo strval($row_cnt)*/
/*
if ($result->num_rows > 0) {			// Pour donner le mail ou pas 
    echo "Vous ètes " . $mail;		// if pour ce connecter
  }
else{
   echo "Vous vous êtes trompé d'identifiant" ;
} */
?>


<style >
	
	body{
		background: beige;
	}
header {
	display: flex;
	flex-direction: column;
	align-items: center;
	background: url("image/entraineur2.jpg");
	
	
}
nav{
	display:flex;								
	flex-wrap:wrap;								
	justify-content: center;					
	align-items: center;			
	border-bottom: 6px solid black;		
	
	


}

nav h2 {										
		color :white;						
		font-family: "Lobster", sans-serif;		
		font-size: 25px;
		margin-right: 900px;

}


header h2{
		font-family: "Lobster", sans-serif;		
		font-size: 50px; 
		margin-left: 820px;
}

header a {
	text-decoration-line: none;
	display: center;
	color: black;

}


	.premier{
	margin-top: 40px;
	display: flex;
	align-items: center;
	flex-direction: column;


}



.premier .content .card {
	display: flex;
	flex-wrap: wrap;
	justify-content: center;
	margin-bottom: 20px;
}

.premier .content .card .left {

	flex: 0 0 30%
	padding:20px;
	background: black;
	color: white;
}



}
.premier .content .card.right {

	flex: 0 0 70%
}



.premier  .content .card .right .img{
		height: 300px;
		max-width: : 400px;
		

}

</style>



<nav>
  <header>

      <h2>Inscription confirmée </h2>
        <a href="index.html">Cliquer ici pour revenir au menu principal </a>
      

      <!-- <BUTTON>DECOUVRIR</BUTTON> -->

  </header>

</nav>

  <section class="premier" id="Produits">

		<div class="content">
			
			<div class="card">
				<div class="left"> 
					<h1></h1>
					<p>Vous venez d'effectué une inscription pour notre stage de football.</p>
					<p>Nos entrainements se divisent en 2 parties :</p>
					<p>- le travail physique </p>
					<p>- le travail technique </p>
					<p>Il vous est possible de choisir l'entrainement qui vous </p>
					<p>convient une fois sur place.</p>
				  <!-- ce qui me permet davoir le lien nos stages qui me dirige vers la page du stage-->

					


				</div>
				<div class="right">
					<img src="image.avif">

				</div>

			</div>