<!-- Voici la page qui va afficher le formulaire dans le template -->
<?php
    include "Template/header.php"
?>


<?php
 // if(isset($_GET["message"])) {
   // $message = $_GET["message"];
    //echo "<p> Attention : $message</p>";
  
?>

<form action="login.php" method="POST">
  <div class="form-group">
    <label for="name">Nom</label>
    <input type="name" class="form-control" name="name" aria-describedby="nameHelp" placeholder="Entrer votre nom">
  </div>
  <div class="form-group">
    <label for="password">Mot de passe</label>
    <input type="password" class="form-control" name="password" placeholder="Entrer mot de passe">
  </div>
  <button type="submit" class="btn btn-primary">Connexion</button>
</form>

 <?php
 include "Template/footer.php"
  ?>
