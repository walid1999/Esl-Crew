<?php
session_start();
 if(isset($_SESSION["id"])){
   include("inc/header.log.inc.php");
 }
 else{
   include("inc/header.inc.php");
 } 

 ?>

	<!-- Banner -->
    <section id="banner">
        <header>
            <h2>Nous vivons dans l'ombre</h2>
            <p>pour servir la lumière</p>
        </header>
    </section>





