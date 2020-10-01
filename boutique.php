<?php
session_start();
 if(isset($_SESSION["id"])){
   include("inc/header.log.inc.php");
 }
 else{
   include("inc/header.inc.php");
 } 

 ?>


<div class="TITRE" id="NEWS" >Boutique</div>

<section class="news_list" > 

<?php
        $requeteSQL = $pdo->prepare("SELECT * FROM annonces ");
        $requeteSQL->execute();
        while ($userinfo = $requeteSQL->fetch()) { ?> 

<div class="product">                    
    <div class="article">
       <div class="article1">
        <img class="article1" src="<?php echo $userinfo['img_annonce'];?>" >
            <div class="overlay">
                    <button>Ajouter au panier</button>
            </div>
       </div>                              
    </div>                    
    <p><?php echo $userinfo['titre']?>  <br>  <?php echo $userinfo['prix']; ?>€</p>
</div>

        <?php }
        ?>
    
</section>  

<?php include("inc/footer.inc.php"); ?>