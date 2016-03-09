<?= (file_get_contents("./templates/header.php"))?>
<article class="fluid content-container">
    <div class="header-container">
        <h1>About</h1>
        <p>
            Hello! I'm Charisse.<br>
            I'm a junior developer and designer.<br>
            Occassional writer, artist and forever lover of dogs.
        </p>
    </div>

  <figure class="screenshot">
    <img src="../img/charisse.jpg" alt="Me taking a picture of me" class="workImg"/>
  </figure>

      <section>
        <h3 class="chapter">A really brief history</h3>

        <p class="text">
            I’m one of those people who has some difficulty figuring out what to do with my life.
            I came from wanting to be a ballerina, a nurse, and finally a chef. I also liked drawing,
            but I thought its an impractical career until I discovered graphic design.
            I attended a course for 2 years, interned and got some part-time jobs;
            I was pretty much set on becoming a designer by then. Until one day,
            I decided I want to learn web programming to build my portfolio website from scratch.
            Since then, I’ve been spending more time trying to become a better developer than a designer.
            I still love graphic design and most of what I learned is still applicable and extremely helpful in this new adventure that I’m on, which is great!
        </p>
      </section>

      <section>
        <h3 class="chapter">How I Work</h3>

        <p class="text">
          Striving to live a simple life in this modern world reflects on the work that I do and
          I believe that simplicity can make a more long-lasting impact.
          My curiosity and willingness to learn allows me to be flexible and I am always looking for ways to improve.
        </p>
      </section>
</article>

<aside class="content-links">
  <h3 class="chapter">
    Let's be friends! Shoot me a mail:
  </h3>

    <p class="link">
      <a href="mailto:charisse.ysabel930@gmail.com">
        charisse.ysabel930@gmail.com
      </a>
    </p>
</aside>
<?= (file_get_contents("./templates/footer.php") )?>