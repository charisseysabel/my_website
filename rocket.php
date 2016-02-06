<?= (file_get_contents("./templates/header.php"))?>

<div class="fluid header-container">
    <h1>Rocket</h1>
    <p>Cashflow Web Application</p>
</div>

<div class="fluid content-container">
    <section class="text">
      <p>
        Rocket is a web application submitted as a final project for a popular Massive Open Online Course (MOOC) by Harvard University: CS50x through Edx.org.<br>
        The idea of making such an application came from seeing an Excel file that contained data of my family's coffee shop business.
        Spreadsheets are very useful but I wanted to make something that is much simpler but does not take away the basic accounting that small business owners are generally required to do.
        This project was built using HTML, CSS, Javascript, SQL, and PHP.
      </p>
    </section>
    
    <div class="screenshot">
      <img src="../img/rocket/devices-rocket.png" class="work_img" alt="Rocket in devices"/>
    </div>

    <section class="text">
      <p>
        Making the application accessible via the web was one of the advantages of Rocket from spreadsheets that require a few extra steps
        to be shared from one device to another. Using the techniques taught in the course, setting up the database and php controllers were a breeze. 
      </p>
    </section>

    <div class="screenshot">
      <img src="../img/rocket/report.png" class="work_img" alt="Rocket report page"/>
    </div>

    <section class="text">
      <p>
        But what fun is a final project if it was easy? When I decided to build a cashflow application, I had no idea how to
        implement it -- I only had a problem and a rough idea on how to solve it. The biggest challenge I faced was using tools I have never used before, 
        specifically Chartjs and DataTables, both of which were a valuable part of the application that I cannot remove, or else I won't be crossing out the main objective of making things easier. 
        A lot of things did not go as I intended to at first, but taking a step back, annoying the heck out of my fellow classmate with questions,
        reading documentations and searching in forums soon allowed me to fix the issues and make everything work.
      </p>
    </section> 

    <div class="screenshot">
      <img src="../img/rocket/cashflow.png" class="work_img" alt="Rocket expenses and income page"/>
    </div>

    <section class="text">
      <p>
        This first version of Rocket is still far from 'perfect'. The application still needs a lot of improvement but I am really proud of my work and how it turned out.
        As my skills improve, I would love to rebuild it using a more modern technology.
      </p>
    </section>

<div class="content-links">
    <p class="link">
      <a href="https://www.youtube.com/watch?v=kxixMl9usQw">
        Demo video
      </a>
    </p>
  </div><!-- /content-links -->
</div><!-- /content-container -->

<?= (file_get_contents("./templates/footer.php") )?>