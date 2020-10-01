<?php
session_start();
 if(isset($_SESSION["id"])){
   include("inc/header.log.inc.php");
 }
 else{
   include("inc/header.inc.php");
 } 

 ?>

<section class="hero">
        <div class="hero-content">
            <h1 style="text-align: center">Nous vivons dans l'ombre pour servir la lumière</h1>                                    
        </div>                       
</section>
	<!-- Banner -->
    <section id="banner">
        <header>
            <h2></h2>
            <p></p>
        </header>
    </section>


    <?php include("inc/footer.inc.php"); ?>


