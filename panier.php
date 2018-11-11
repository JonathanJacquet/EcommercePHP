<?php
session_start();
include "Template/header.php";
include "Template/aside.php";

?>

<div class="row mt-5">
  <section class="col-lg-9">
      <h2>Votre panier</h2>
  <div class="container-fluide">
  <div class="row">

<?php
foreach ($_SESSION['panier'] as $key => $product) {
?>
<div class="col-lg-6 my-4">
  <div class="card"style="width: 18rem;">
    <img class="card-img-top" src="tile.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><?php echo $product["name"] ?></h5>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Prix : <?php echo $product["price"] ?></li>
       <!--<li class="list-group-item">Lieu de production: <?php echo $product["made_in"] ?></li>-->
        <!--<li class="list-group-item">Catégorie : <?php echo $product["category"] ?></li>-->   
      </ul>
      <a href="supressionproduitpanier.php?key=<?php echo $key;?>" class='btn btn-primary'>Supprimer</a>
    </div>
  </div>
</div>


<?php 
}
?>
    </div>
    </div>
    </section>
</div>
  