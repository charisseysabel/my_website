<?= (file_get_contents("./templates/header.php"))?>

<div class="jumbotron">
  <div class="container content header">
    <h1>Ecosia</h1>
    <p>Website redesign</p>
  </div>
</div>

<div class="container content article">
  <h2>"Friendly and informative for all ages."</h2>
    <p>
      Rocket is a web application submitted as a final project for a popular Massive Open Online Course (MOOC) by Harvard University: CS50x through Edx.org.<br>
      The idea of making such an application came from seeing an Excel file that contained data of my family's coffee shop business.<br>
      Spreadsheets are very useful but I wanted to make something that is much simpler but does not take away the basic accounting that small business owners are required to do.<br>
      Built using: HTML &#8226; CSS &#8226; JS &#8226; PHP &#8226; SQL</p>
        
      <img src="../img/ecosia-home.png" class="work_img"/>

      <img src="../img/ecosia-mobile.png" class="work_img"/>

      <p>Tracking the health of your business is a crucial task.
        To save business owners from manually calculating their incomes and expenses, Rocket does it all for you
        and displays the result using a lively set of graphs.
      
      For every transaction recorded, deleted or edited, the graphs and summaries are updated as well.
        Rocket handles the synchronization of your data so you do not have to do it yourself.
      </p>

      <p>To stay afloat when running a business, its always important to know where your money comes from and where you spend it.
      
      The data entered in these two separate tables are the same data that are automatically generated in the overall report. Keeping the data correct is a must! 
      </p>

      <img src="../img/ecosia-mock.png" class="work_img"/>
</div>



<?= (file_get_contents("./templates/footer.php") )?>