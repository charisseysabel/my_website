<?= (file_get_contents("./templates/header.php"))?>
<div class="fluid header-container">
    <h1>About</h1>
    <p>Hello! I'm Charisse.</p>
    <p>I'm a junior developer and designer.<br>
    Occassional writer, artist and forever lover of dogs.</p>
</div>

<div class="fluid content-container">
  <div class="screenshot">
    <img src="../img/charisse.jpg" alt="Me taking a picture of me" class="workImg"/>
  </div>

  <section class="chapter">
      <p>A really brief history</p>
  </section>

  <section class="text">
    <p>
        Growing up, I never really knew what I wanted to do with my life.
        My first ambition was to become a ballerina (no joke), then a nurse, then a chef.
        I basically had my mind set on becoming a chef. I do enjoy cooking, afterall.<br>
        Fast forward a few years later, we left the bustling city of Manila to travel halfway across the world
        and move to the boot-shaped country, where I am right now. One day, I saw a graphic design course in town.
        I studied and then discovered programming in an attempt to build my portfolio website from scratch.
    </p>
  </section>

  <section class="chapter">
    <p>Me &amp; Programming</p>
  </section>

  <section class="text">
    <p>
        Building a program that solves an actual problem is what really made me want to become a better developer.
        I like to build things that would make our lives simpler. And if possible, something that would benefit nature as well.
        Programming opened the doors for me to be able to make a difference. It's a forever learning process,
        and I am far from being the best. But its challenging and rewarding and that pretty much all that matters to me.
    </p>
  </section>

  <div class="chapter">
    <p>Let's be friends! Shoot me a mail:</p>
  </div>

  <div class="content-links">
    <p class="link">
      <a href="mailto:charisse.ysabel930@gmail.com">
        charisse.ysabel930@gmail.com
      </a>
    </p>
  </div>
</div>
<?= (file_get_contents("./templates/footer.php") )?>