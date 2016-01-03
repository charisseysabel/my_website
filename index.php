<?= (file_get_contents("./templates/header.php"))?>

    <div class="jumbotron">
      <div class="container">
        <h1>Minimal</h1>
      </div>
    </div>

    <div class="section">
      <p>Works</p>
    </div>

    <div class="container">
      <div class="col-xs-6 col-sm-4">
        <a href="rocket.php">
          <img src="../img/rocket-thumb.jpg" alt="rocket" class="workImg"/>
          <p class="workDescription">A cashflow web application built from the ground up</p>
        </a>
      </div>

      <div class="col-xs-6 col-sm-4">
        <a href="#">
          <img src="../img/map.jpg" alt="map" class="workImg"/>
          <p class="workDescription">A database of game items</p>
        </a>
      </div>

      <div class="col-xs-6 col-sm-4">
        <a href="#">
          <img src="../img/map.jpg" alt="map" class="workImg"/>
          <p class="workDescription">...</p>
        </a>
      </div>

    </div><!-- container collapse -->

<?= (file_get_contents("./templates/footer.php") )?>