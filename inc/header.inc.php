<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Webflow</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' href='assets/css/style.css'>
    <script src="https://kit.fontawesome.com/45109b19e5.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    
</head>
<body>
	<div class="contenu">
    <header >

		<h2>ESL CREW</h2>
        
		<nav>
			<ul>
				<li>
					<a href="home.php">Accueil</a>
                </li>
                
				<li>
					<a href="boutique.php">Boutique</a>
                </li>
                
				<li>
					<a href="sav.php">Service client</a>
                </li>

                <li>
                    <a href="panier.php">
						<i class="fas fa-shopping-basket"></i>
                    </a>
                </li>
            </ul>           
        </nav>
            <ul>
				<li>
                 	<a class="connexion" href="connexion.php"  >
					 	Connexion
				 		<i class="fas fa-sign-in-alt"></i>
                 	</a> 
				</li>
            </ul>
	</header>
	
	<main>

<?php include("inc/data.inc.php"); ?>