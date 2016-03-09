<?= (file_get_contents("./templates/header.php"))?>
<article class="fluid content-container">
    <div class="header-container">
        <h1>Beast</h1>
        <p>Brochure</p>
    </div>

    <p class="text">
        A brochure to promote a supercar by Rezvani Automotive Designs.
        I was given the freedom to design it in any way that reflects the car which
        gave me the opportunity to be creative. The overall design of the brochure was based on the supercar's sleek and sharp features.
    </p>
                
    <figure class="screenshot">
        <img src="../img/beast/Cover-Beast.jpg" class="screenshot" alt="Beast brochure cover"/>
    </figure>

    <div class="grid-container">
        <img src="../img/beast/Spread1-Beast.jpg" alt="Beast brochure page"/>
        <img src="../img/beast/Spread2-Beast.jpg" alt="Beast brochure page"/>
        <img src="../img/beast/Spread3-Beast.jpg" alt="Beast brochure page"/>
        <img src="../img/beast/Back-Beast.jpg" alt="Beast brochure back"/>
    </div>
</article>
<?= (file_get_contents("./templates/footer.php") )?>