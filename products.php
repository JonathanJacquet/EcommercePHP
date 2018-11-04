<!-- voici la page qui n'est accessible que si l'utilisateur est connecté, qui affiche les produit et les informations sur l'utilisateur -->
<?php
session_start();
echo "Bonjour : " . $_SESSION["user"]["name"];
?>