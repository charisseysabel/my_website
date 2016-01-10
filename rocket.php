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
      The idea of making such an application came from seeing an Excel file that contained data of my family's coffee shop business.<br>
      Spreadsheets are very useful but I wanted to make something that is much simpler but does not take away the basic accounting that small business owners are required to do.<br>
      Built using:<br>HTML &#8226; CSS &#8226; JS &#8226; PHP &#8226; SQL
    </p>
    
    <img src="../img/devices-rocket.png" class="work_img"/>

        <p>Rocket is a web-based application. It works anywhere there is an
          Internet connection so that you can study about the core of your business on the go, at anytime.
        </p> 
      
    <img src="../img/report.png" class="work_img"/>

      <p>
        Tracking the health of your business is a crucial task.
        To save business owners from manually calculating their incomes and expenses, Rocket does it all for you
        and displays the result using a lively set of graphs.<br>     
        For every transaction recorded, deleted or edited, the graphs and summaries are updated as well.
        Rocket handles the synchronization of your data so you do not have to do it yourself.<br>
        To stay afloat when running a business, its always important to know where your money comes from and where you spend it.<br>      
        The data entered in these two separate tables are the same data that are automatically generated in the overall report. Keeping the data correct is a must! 
      </p>

      <img src="../img/cashflow.png" class="work_img"/>
</div>

      <footer class="work_footer">
        <p>&copy; 2015 Charisse Ysabel De Torres</p>
    </footer>


<?= (file_get_contents("./templates/footer.php") )?>