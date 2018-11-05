<!-- voici la page qui n'est accessible que si l'utilisateur est connecté, qui affiche les produit et les informations sur l'utilisateur -->
<?php
//session_start();
//echo "Bonjour : " . $_SESSION["user"]["name"];
require "Model/function.php";
include "Template/header.php";


$products = getProducts();
?>

<?php
include "Template/aside.php";

foreach ($products as $key => $product) {
?>

<div class="card"style="width: 18rem;">
  <img class="card-img-top" src="tile.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $product["name"] ?></h5>
    <p class="card-text"><?php echo $product["description"] ?></p>
    <a href="#" class="btn btn-primary">Voir +</a>
  </div>
</div>



<?php 
}
?>


 <?php
 include "Template/footer.php"
  ?>
