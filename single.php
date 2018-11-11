<?php
session_start();
include "Template/header.php"
?>

<?php
require "Model/function.php";
$products = getProducts();
$id = $_GET["id"];
//$_SESSION["product"] = $product;
if (empty($_SESSION["user"])) {
    header("Location: index.php");
   exit;
}
?>


<div class="row mt-5">
<section class="col-lg-9">
    <h2>Nos produits</h2>
<div class="container-fluide">
<div class="row">

<?php
foreach ($products as $key => $product) {
  if($product["id"] == $id) {
?>
<div class="col-lg-6 my-4">
<div class="card"style="width: 18rem;">
  <img class="card-img-top" src="tile.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $product["name"] ?></h5>
    <p class="card-text"><?php echo $product["description"] ?></p>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Prix : <?php echo $product["price"] ?></li>
      <li class="list-group-item">Lieu de production: <?php echo $product["made_in"] ?></li>
      <li class="list-group-item">Catégorie : <?php echo $product["category"] ?></li>
      <li class="list-group-item"><?php
      if($product["stock"]) {
            echo "disponible";
          }
          else {
            echo "indisponible";
          }
        ?></li>
    </ul>
    <?php
      if($product["stock"]) {
        echo " <a href='ajoutproduitpanier.php?id=" . $product['id'] . "'class='btn btn-primary'>+ Ajouter au panier</a>";
      }

    ?>
   

  </div>
</div>
</div>


<?php 

  }
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