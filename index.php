<?= (file_get_contents("./templates/header.php"))?>

<div class="jumbotron">
      <div class="container">
        <h1>Hi, I'm Charisse</h1>
        <p>I'm a self-taught junior developer.</p>
      </div>
    </div>

    <div class="section">
      <p>Works</p>
    </div>

    <div class="container">
      <div class="col-md-4">
        <a href="rocket.php">
          <img src="../img/rocket-thumb.jpg" alt="rocket" class="workImg"/>
          <p class="workDescription">
            <span class="project_name">Rocket</span><br>
            A cashflow web application built from the ground up
          </p>
        </a>
      </div>

      <div class="col-md-4">
        <a href="#">
          <img src="../img/ecosia.png" alt="map" class="workImg"/>
          <p class="workDescription">
            <span class="project_name">Ecosia</span><br>
            Website redesign
          </p>
        </a>
      </div>

      <div class="col-md-4">
        <a href="#">
          <img src="../img/map.jpg" alt="map" class="workImg"/>
          <p class="workDescription">
            <span class="project_name">Coming soon!</span></br>
            Future project
          </p>
        </a>
      </div>
    </div><!-- container collapse -->

    <div class="section">
      <p>Why we should work together</p>
    </div>

    <div class="container">
      <section>
        <p>
          Discovering the world of programming and software development literally changed my life.<br>
          It's always evolving and there's room to improve every single day. It's been a hell of a wild ride so far,
          but all the struggles are worth it.<br>
          We should work together because I want to be able to share the ride with you. It'd be fun!
        </p>
        <a href="about.php" id="learn_more">Learn more about me</a>
      </section>

    </div>

<div class="section">
    <p>Leave me a note at:</p>
</div>

  <div class="container">
    <p>
      <a href="mailto:charisse.ysabel930@gmail.com" id="email">
        charisse.ysabel930@gmail.com
      </a>
    </p>
  </div>

    <div class="container end_note">
      <p class="greetings">Thanks for dropping by!</p>
    </div>

<?= (file_get_contents("./templates/footer.php") )?>