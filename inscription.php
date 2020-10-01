<?php include("inc/header.inc.php"); ?>

<?php
if (isset($_POST['inscription'])){

    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = htmlspecialchars($_POST['nom']);
    $mail = htmlspecialchars($_POST['mail']);
    $identifiant = htmlspecialchars($_POST['identifiant']);
    $motdepasse = htmlspecialchars($_POST['mot_de_passe']);

  if(!empty($prenom) AND !empty($nom) AND !empty($mail) AND !empty($identifiant) AND !empty($motdepasse)){
    $requeteSQL = $pdo->prepare("INSERT INTO profil (prenom, nom, mail, identifiant, mot_de_passe) VALUES (?, ?, ?, ?, ?)");
    $requeteSQL->execute(array($prenom, $nom, $mail, $identifiant, $motdepasse));
    header('Location: login.php');
    }
  else {
       $message = 'Tous les champs doivent être complétés. ';
  }
 
}
?>
<h1 style="text-align: center">Inscription</h1>
<section class="contact-form">


<form class="form-group" action="" method="post" name="inscription">
  <div class="form-group">
    <h5 for="text">Nom</h5>
    <input type="text" class="form-control" name="nom" id="">
  </div>
  <div class="form-group">
    <h5 for="text">Prénom</h5>
    <input type="text" class="form-control" name="prenom" id="">
  </div>
  <div class="form-group">
    <h5 for="text">identifiant</h5>
    <input type="text" class="form-control" name="identifiant" id="">
  </div>
  <div class="form-group">
    <h5 for="text">Mot de passe</p></h5>
    <input type="password" class="form-control" name="mot_de_passe" id="">
  </div>
  <div class="form-group">
    <h5 for="text">Mail</h5>
    <input type="email" class="form-control" name="mail" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <input type="submit" value="S'inscrire" name="inscription">
</form>
<?php if (! empty($message)) { ?>
              <p><?php echo $message; ?></p>
          <?php } ?>
</section>


<?php include("inc/footer.inc.php"); ?>