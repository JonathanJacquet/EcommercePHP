<aside class="col-lg-3">
<i class="fas fa-user-circle fa-5x"></i>
  <ul class="list-group">
    <?php
    foreach ($_SESSION["user"] as $key => $value) {
      echo "<li class='list-group-item'>$key : $value</li>";
    }
    echo $_SESSION["total"];
    ?>
   <a href="logout.php"><button type="button" class="btn btn-danger">Déconnexion</button></a>
  </ul>
</aside>
