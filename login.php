<!-- Voici la page qui va recevoir les données du formulaire, les traiter et rediriger l'utilisateur vers la page adéquate -->
<?php
require "Model/function.php";

$users = getUsers();

var_dump($users);


foreach ($users as $key => $user) {
  if($user["name"] === $_POST["name"] && $user["password"] === $_POST["password"]) {
    session_start();
    $_SESSION["user"] = $_POST;
    header("Location: products.php");
    exit;
  }
}

header("Location: index.php?message=Attention je ne conais pas ces identifiants");
exit;
 ?>