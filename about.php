<?= (file_get_contents("./templates/header.php"))?>

<div class="jumbotron work_title">
  <div class="container">
    <h1>About</h1>
    <p>Philosophy &#8226; Skills &#8226; Interests</p>
  </div>
</div>

<div class="container work_article">
  <div class="col-xs-6 col-lg-4 article_caption">
      <h1>"Be simple."</h1>
  </div>

  <div class="col-xs-12 col-sm-6 col-lg-8 content">
    <img src="../img/charisse.jpg" alt="Charisse in front of the mirror" id="me" />
   <article>
    <p>
      paragraph here
    </p>
  </article>
  </div>
</div>

<?= (file_get_contents("./templates/footer.php") )?>