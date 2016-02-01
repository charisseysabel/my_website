<?= (file_get_contents("./templates/header.php"))?>
<div class="fluid header-container">
    <h1>About</h1>
    <p>Hello! I'm Charisse.</p>
    <p>I'm a junior developer with a graphic design background.<br>
    Occassional writer, artist and forever lover of dogs.</p>
</div>

<div class="fluid content-container">
  <div class="screenshot">
    <img src="../img/charisse.jpg" alt="Me taking a picture of me" class="workImg"/>
  </div>

  <section class="section">
      <p>A really brief history</p>
  </section>

  <section class="text">
    Growing up, I never really knew what I wanted to do with my life.
    My first ambition was to become a ballerina (no joke), then a nurse, then a chef.
    I basically had my mind set on becoming a chef. I do enjoy cooking, afterall.<br>
    Fast forward a few years later, we left the bustling city of Manila to travel halfway across the world
    and move to the boot-shaped country, where I am right now. One day, I saw a graphic design course in town.
    I signed up and was admitted, even if I barely knew Italian that time. And for the next two years, graphic design
    basically took over my life. It still does; its something that would stick with me forever.<br>
    Programming came shortly after when I wanted to try building my own porfolio website. I enjoyed every bit of time I spent learning how to code.
    Soon after, I've been spending more time reading technical books online and coding tutorials and I thought, programming is a lot deeper than I expected;
    I can actually solve problems with it! And that's why I like it.
  </section>


  <div class="section">
    <p>Let's be friends! Shoot me a mail:</p>
  </div>

  <div class="content-links">
    <p class="link">
      <a href="mailto:charisse.ysabel930@gmail.com" class="cta">
        charisse.ysabel930@gmail.com
      </a>
    </p>
  </div>
</div>
<?= (file_get_contents("./templates/footer.php") )?>