<?php
session_start();
require "Model/function.php";
$products = getProducts();


$id = $_GET['id'];
foreach ($products as $key => $value) {
    if($id == $value['id']) {
        $product = $value;
        array_push($_SESSION['panier'], $product);
        echo $_SESSION['total'] + $product['price'];
        header("Location: panier.php");
        exit;
    }
}

?>


