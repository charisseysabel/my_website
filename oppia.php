<?= (file_get_contents("./templates/header.php"))?>
<article class="fluid content-container">
    <div class="header-container">
        <h1>Oppia</h1>
        <p>Open Source Contributions</p>
    </div>

    <p class="text">
          Oppia is an online learning and knowledge-sharing platform that aims
          to recreate the power of 1-on-1 tutoring through interactive modules.
          The website, being only 2 years old, calls for a lot of improvements and suggestions
          from the community. I help redesign parts of the website and practice my programming
          skills by taking an initial stab on inserting the designs I made that aims to improve communication
          and user experience.
    </p>

    <section class="chapter">
        <h3>1: About page</h3>

        <p class="text">
          Oppia's About page is what inspired me to join the community.
          Working with a team of 3 people, our task is to redesign and develop a new About page
          that communicates more effectively about what Oppia is, its purpose and how it can help people.
        </p>
    </section>

    <figure class="screenshot">
        <img src="../img/oppia/about.jpg" alt="Oppia's new About page"/>
    </figure>

    <section class="chapter">
        <h3>2: Learners and Creators pages</h3>

        <p class="text">
          The Learners and Creators pages aim to explain how to use Oppia if you are a learner or
          an Exploration creator.
        </p>
    </section>

    <div class="grid-container">
            <img src="../img/oppia/learners.jpg" alt="Learner's page"/>
            <img src="../img/oppia/creators.jpg" alt="Creator's pages"/>
    </div><!-- /grid.container -->

    <section class="chapter">
        <h3>3: The "No match" query page</h3>

        <p class="text">
          I volunteered to be assigned to redesign a page when a query does not match any lessons
          (called "Explorations"). With the feedback gained from Oppia's community,
          the final design involved the use of the website's mascot, an otter, making origami
          figures that depicts creativity that encourages anyone to make the matching Exploration.
        </p>
    </section>
    
    <figure class="screenshot">
        <img src="../img/oppia/no-match-screen.png" alt="No matching Exploration screen"/>
    </figure>
</article><!-- /content-container -->

<?= (file_get_contents("./templates/footer.php") )?>