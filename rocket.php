<?= (file_get_contents("./templates/header.php"))?>

<div class="jumbotron work_title">
  <div class="container">
    <h1>Rocket</h1>
    <p>HTML &#8226; CSS &#8226; JS &#8226; PHP &#8226; SQL</p>
  </div>
</div>


<div class="container work_article">
      <h1>"Rocket is designed to make accounting easy and fun."</h1>
      <p>
        Rocket is a web application submitted as a final project for a popular Massive Open Online Course (MOOC) by Harvard University: CS50x through Edx.org.
      </p>
      <p>
        The idea of making such an application came from seeing an Excel file that contained data of my family's coffee shop business.
        Spreadsheets are very useful but I wanted to make something that is simpler but does not take away the basic functionality of accounting.
      </p>
</div>

<div class="container">

  <div class="section work_feature">
        <p>Simple and easy to use</p>
  </div>

    <div class="col-sm-6 article_caption">
        <article>        
          OBJECTIVES:
          <ul>
            <li>To keep it simple and very easy to use.</li>
            <li>To display data through the use of graphics.</li>
            <li>To handle operations under the hood so that users can focus on adding and viewing their data.</li>
          </ul>
        </p>
        <p>
          Cashflow management applications typically have logos or names that directly represent money.
          Rocket's branding was developed to set itself apart from its competitors.
        </p>
      </article>
    </div>

  <div class="col-sm-6 article_img">
      <img src="../img/rocket-inv.jpg" class="work_img"/>
  </div>

</div>


<?= (file_get_contents("./templates/footer.php") )?>