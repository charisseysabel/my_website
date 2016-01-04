<?= (file_get_contents("./templates/header.php"))?>

    <div class="jumbotron">
      <div class="container">
        <h1>Hi, I'm Charisse</h1>
        <p class="greetings">I like to design and program stuff.</p>
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
          <img src="../img/map.jpg" alt="map" class="workImg"/>
          <p class="workDescription">
            <span class="project_name">Backpack</span><br>
            A database of game items
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
      <p>A Brief Summary</p>
    </div>

    <div class="container">
      <section>
        <p id="brief_sum">I'm a junior developer with a background in graphic design.</p>
        <p>
          insert some random text here that would blow people's minds.insert some random text here that would blow people's minds.insert some random text here that would blow people's minds.insert some random text here that would blow people's minds.insert some random text here that would blow people's minds.insert some random text here that would blow people's minds.insert some random text here that would blow people's minds.insert some random text here that would blow people's minds.insert some random text here that would blow people's minds.<br>
          insert some random text here that would blow people's minds.insert some random text here that would blow people's minds.insert some random text here that would blow people's minds.insert some random text here that would blow people's minds.insert some random text here that would blow people's minds.
        </p>
      </section>
    </div>

    <div class="section">
      <p>Leave a note</p>    
    </div>

    <div class="container">
      <section>
        <p>General inquiries and / or greetings are welcome! I love receiving kind emails.<br>Please fill out the form and I will reply to you as soon as I can.</p>
        
      </section>
    </div>

    <div class="container send_note">
      <div class="form_container">
        <form method="post" action="send_a_msg.php">
          <p>Name<span class="asterisk">&#42;</span>
            <input type="text" placeholder="eg.Charisse De Torres" name="name" required/>
          </p>
          
          <p>Email<span class="asterisk">&#42;</span>
            <input type="email" placeholder="eg. cydetorres@gmail.com" name="email" required/>
          </p>

          <p id="msg_label">Message<span class="asterisk">&#42;</span>
            <textarea cols="60" rows="10" name="message" required></textarea>
          </p>

          <p id="submit_notice">I promise to keep your details private.</p>
          <button name="">Submit</button>
        </form>
      </div>
    </div>


<?= (file_get_contents("./templates/footer.php") )?>