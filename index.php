<?= (file_get_contents("./templates/header.php"))?>

<div class="jumbotron">
      <div class="container content header">
        <h1>Hi, I'm Charisse</h1>
        <p>Junior developer &amp; designer</p>
      </div>
    </div>

    <div class="section">
      <p>Works</p>
    </div>

      <div class="container image_hover">
      <div class="col-md-4">
        <a href="rocket.php">
          <img src="../img/rocket/rocket-thumb.jpg" alt="Rocket app thumbnail" class="workImg"/>
          <p class="workDescription">
            <span class="project_name">Rocket</span><br>
            A cashflow web application
          </p>
        </a>
      </div>

      <div class="container image_hover">
      <div class="col-md-4">
        <a href="words.php">
          <img src="../img/words/wordsProject.jpg" alt="Words Project logo" class="workImg"/>
          <p class="workDescription">
            <span class="project_name">Words</span><br>
            A visual interpretation of rare English words
          </p>
        </a>
      </div>

      <div class="col-md-4">
        <a href="ecosia.php">
          <img src="../img/ecosia/ecosia.png" alt="Ecosia logo" class="workImg"/>
          <p class="workDescription">
            <span class="project_name">Ecosia</span><br>
            Website redesign concept
          </p>
        </a>
      </div>

      <div class="col-md-4">
        <a href="kingdom_of_thieves.php">
          <img src="../img/kingdom_of_thieves/kingdom_of_thieves.jpg" alt="Kingdom of Thieves" class="workImg"/>
          <p class="workDescription">
            <span class="project_name">The Kingdom of Thieves</span><br>
            Book design and Illustration
          </p>
        </a>
      </div>

      <div class="col-md-4">
        <a href="beast.php">
          <img src="../img/beast/beast.jpg" alt="Rezvani Beast brochure" class="workImg"/>
          <p class="workDescription">
            <span class="project_name">Rezvani Beast</span><br>
            Brochure
          </p>
        </a>
      </div>

      <div class="col-md-4">
        <a href="urbino.php">
          <img src="../img/urbino/urbino.png" alt="University of Urbino" class="workImg"/>
          <p class="workDescription">
            <span class="project_name">University of Urbino</span><br>
            Print
          </p>
        </a>
      </div>

    </div><!-- container collapse -->


<div class="section">
    <p>Leave a note and say hi!</p>
</div>

  <div class="container content link">
    <p>
      <a href="mailto:charisse.ysabel930@gmail.com" class="cta">
        charisse.ysabel930@gmail.com
      </a>
    </p>
  </div>



<?= (file_get_contents("./templates/footer.php") )?>