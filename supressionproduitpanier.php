<?php
session_start();
require "Model/function.php";
?>

<?php

$key = $_GET['key'];

    unset($_SESSION['panier'][$key]);
    header("Location: panier.php");
    exit;
?>