<aside class="col-lg-3">
<i class="fas fa-user-circle fa-7x"></i>
  <ul class="list-group">
    <?php
    foreach ($_SESSION["user"] as $key => $value) {
      echo "<li class='list-group-item'>$key : $value</li>";
    }
    ?>
  </ul>
</aside>
