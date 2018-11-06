<!-- voici la page qui n'est accessible que si l'utilisateur est connecté, qui affiche les produit et les informations sur l'utilisateur -->
<?php
session_start();
//echo "Bonjour : " . $_SESSION["user"]["name"];
require "Model/function.php";
include "Template/header.php";


$products = getProducts();
?>


<div class="row mt-5">
  <section class="col-lg-9">
      <h2>Nos produits</h2>
  <div class="container-fluide">
  <div class="row">

<?php
foreach ($products as $key => $product) {
?>
<div class="col-lg-6 my-4">
  <div class="card"style="width: 18rem;">
    <img class="card-img-top" src="tile.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><?php echo $product["name"] ?></h5>
      <p class="card-text"><?php echo $product["description"] ?></p>
      <a href="#" class="btn btn-primary">Voir +</a>
    </div>
  </div>
</div>


<?php 
}
?>
    </div>
  </div>
</section>

<?php 
include "Template/aside.php"; 
?>
  </div>

 <?php
 include "Template/footer.php"
  ?>


