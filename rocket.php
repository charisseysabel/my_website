<?= (file_get_contents("./templates/header.php"))?>

<div class="jumbotron">
  <div class="container content header">
    <h1>Rocket</h1>
    <p>Cashflow Web Application</p>
  </div>
</div>

<div class="container content article">
  <h2>"Designed to make accounting easy and fun."</h2>
    <p>
      Rocket is a web application submitted as a final project for a popular Massive Open Online Course (MOOC) by Harvard University: CS50x through Edx.org.<br>
      The idea of making such an application came from seeing an Excel file that contained data of my family's coffee shop business.
      Spreadsheets are very useful but I wanted to make something that is much simpler but does not take away the basic accounting that small business owners are generally required to do.
    </p>
    
    <img src="../img/devices-rocket.png" class="work_img" alt="Rocket in devices"/>

    <p>
      Making the application accessible via the web was one of the advantages of Rocket from spreadsheets that require a few extra steps
      to be shared from one device to another. Using the techniques taught in the course, setting up the database and php controllers was a breeze. 
    </p>

    <img src="../img/report.png" class="work_img" alt="Rocket report page"/>

    <p>
      But what fun is a final project if it was easy? When I decided to build a cashflow application, I initally had no idea how to
      implement it -- I only had a problem and an idea on how to solve it. The biggest challenge I faced was using tools I have never used before, but which were a valuable part of the application that I cannot remove, or else I won't be crossing out the main objective of making things easier. A lot of things did not go as I intended to at first, but taking a step back, asking questions, reading documentations and searching in forums soon allowed me to fix the issues and make everything work.
    </p> 

      <img src="../img/cashflow.png" class="work_img" alt="Rocket expenses and income page"/>

    <p>
      This first version of Rocket is still far from 'perfect'. The application still needs a lot of improvement but I am really proud of my work and how it turned out. I love the idea of it becoming a free open source application one day!
    </p>
</div>

<?= (file_get_contents("./templates/footer.php") )?>