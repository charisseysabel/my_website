<?= (file_get_contents("./templates/header.php"))?>

<div class="jumbotron work_title">

  <div class="container">
    <h1>Rocket</h1>
  </div>

  <div class="container work_article">
        <h2>"Designed to make accounting easy and fun."</h2>
        <p>
          Rocket is a web application submitted as a final project for a popular Massive Open Online Course (MOOC) by Harvard University: CS50x through Edx.org.
        </p>
        <p>
          The idea of making such an application came from seeing an Excel file that contained data of my family's coffee shop business.
          Spreadsheets are very useful but I wanted to make something that is much simpler but does not take away the basic accounting that small business owners are required to do.
        </p>
        <p>Built using:<br>HTML &#8226; CSS &#8226; JS &#8226; PHP &#8226; SQL</p>
  </div>

</div>




    <div class="col-sm-6 article_caption">
      <article>
      <h3>Accessible</h3>      
        <p>Rocket is a web-based application. It works anywhere there is an
          Internet connection so that you can study about the core of your business on the go, at anytime.
        </p> 
      </article>
    </div>

    <div class="col-sm-6 article_img">
        <img src="../img/devices-rocket.png" class="work_img"/>
    </div>



  <div class="col-sm-6 article_caption">
    <article>     
      <h3>Oh look! Graphs!</h3>      
   
      <p>Tracking the health of your business is a crucial task.
        To save business owners from manually calculating their incomes and expenses, Rocket does it all for you
        and displays the result using a lively set of graphs.
      </p>
      <p>For every transaction recorded, deleted or edited, the graphs and summaries are updated as well.
        Rocket handles the synchronization of your data so you do not have to do it yourself.
      </p>
    </article>
  </div>

  <div class="col-sm-6 article_img">
      <img src="../img/report.png" class="work_img"/>
  </div>


  <div class="col-sm-6 article_caption">
    <article>  
        <h3>Cashflow Monitoring</h3>
      
      <p>To stay afloat when running a business, its always important to know where your money comes from and where you spend it.
      </p>
      <p>The data entered in these two separate tables are the same data that are automatically generated in the overall report. Keeping the data correct is a must! 
      </p>
    </article>
  </div>

  <div class="col-sm-6 article_img">
      <img src="../img/cashflow.png" class="work_img"/>
  </div>


      <footer>
        <p>&copy; 2015 Charisse Ysabel De Torres</p>
    </footer>


<?= (file_get_contents("./templates/footer.php") )?>