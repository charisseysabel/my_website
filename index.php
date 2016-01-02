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
        <a href="rocket.php"><img src="../img/rocket-thumb.jpg" alt="map" class="work"/></a>
        <p>A cashflow web application built from the ground up</p>
        <p>HTML &#8226; CSS &#8226; JS &#8226; PHP &#8226; SQL</p>
        <p>TODO: ROCKET description</p>
      </div>
      <div class="col-xs-6 col-sm-4">
        <a href="#"><img src="../img/map.jpg" alt="map" class="work"/></a>
        <p>A database of game items</p>
        <p>Python &#8226; SQL &#8226; HTML &#8226; CSS</p>
        <p>TODO: EVERYTHING</p>
      </div>
      <div class="col-xs-6 col-sm-4">
        <a href="#"><img src="../img/map.jpg" alt="map" class="work"/></a>
        <p>...</p>
        <p>...</p>
      </div>
    </div>

<?= (file_get_contents("./templates/footer.php") )?>