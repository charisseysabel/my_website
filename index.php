<?= (file_get_contents("./templates/header.php"))?>

<div class="jumbotron">
      <div class="container content header">
        <h1>Hi, I'm Charisse</h1>
        <p>Self-taught junior developer.</p>
      </div>
    </div>

    <div class="section">
      <p>Works</p>
    </div>

    <div class="container image_hover">
      <div class="col-md-4">
        <a href="rocket.php">
          <img src="../img/rocket-thumb.jpg" alt="Rocket app thumbnail" class="workImg"/>
          <p class="workDescription">
            <span class="project_name">Rocket</span><br>
            A cashflow web application
          </p>
        </a>
      </div>

      <div class="col-md-4">
        <a href="ecosia.php">
          <img src="../img/ecosia.png" alt="Ecosia logo" class="workImg"/>
          <p class="workDescription">
            <span class="project_name">Ecosia</span><br>
            Website redesign
          </p>
        </a>
      </div>

      <div class="col-md-4">
        <a href="kingdom_of_thieves.php">
          <img src="../img/kingdom_of_thieves.jpg" alt="Kingdom of Thieves cover" class="workImg"/>
          <p class="workDescription">
            <span class="project_name">The Kingdom of Thieves</span>
            Personal self-published book
          </p>
        </a>
      </div>
    </div><!-- container collapse -->

    <div class="section">
      <p>Why we should work together</p>
    </div>

    <div class="container content">
        <p>
          Discovering the world of programming and software development literally changed my life.<br>
          It's always evolving and there's room to improve every single day.
          It's been a hell of a wild ride so far, but all the struggles are worth it.
          We should work together because I want to be able to share the ride with you. It'd be fun!
        </p>
        <div class="link">
          <a href="about.php" class="cta">Learn more about me</a>
        </div>
    </div>

<div class="section">
    <p>Leave me a note at:</p>
</div>

  <div class="container content link">
    <p>
      <a href="mailto:charisse.ysabel930@gmail.com" class="cta">
        charisse.ysabel930@gmail.com
      </a>
    </p>
  </div>


<?= (file_get_contents("./templates/footer.php") )?>