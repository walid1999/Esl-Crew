<?php
session_start();
 if(isset($_SESSION["id"])){
   include("inc/header.log.inc.php");
 }
 else{
   include("inc/header.inc.php");
 } 

 ?>

<div class="TITRE" id="CONTACT">CONTACTEZ-NOUS</div>


<section class="contact-form">

        <form>
                <div class="form-group">
                    <label>NOM *</label>
                    <input type="text" name="">
                </div>
                <div class="form-group">
                    <label>Prénom *</label>
                    <input type="text" name="">
                </div>
                <div class="form-group">
                        <label>Votre mail</label>
                        <input type="text" name="">
                </div>
                <div class="form-group">
                    <label>Votre message </label>
                    <textarea cols="38" rows="10"></textarea>
                </div>
                <div class="form-group">
                    
                        <input type="submit" value="ENVOYER" >
                                            
                </div>
        </form>

</section>

<?php include("inc/footer.inc.php"); ?>