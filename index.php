<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>project-3</title>
</head>
<body>
  <?php  include("nav.php"); ?>
    <section class="sec1">
        <div class="d1">
        <div class="innerdiv1"><h1>Bestel nu</h1></div>
        <div class="d2"><h1>Nu Populair</h1></div>
        <div class="swipe">
          <div class="swipe-child1" id="imgban4"></div>
          <div class="swipe-child2" id="imgban3"></div>
          <div class="swipe-child3" id="imgban2"></div>
          <div class="swipe-child4" id="imgban1"></div>
        </div></div>
      <script src="app.js"></script>
            <div class="demo1">
           <h1>Super Sale</h1>
          <h1 id="saleTime"></h1>
      </div>
    </section>


    <section class="sec2">
      <h1 class="h1">
        Niet tevreden met een product <br>
        of heeft u nog vragen?<br>
        <br>
        Druk op de knop om contact op te nemen.
      </h1>
      <div class="contact-button">
        <a href="contact.php" class="h2" onclick="contact.php">Contact</a>
      </div>
    </section> 

  <div id="cookie-banner">
    <p class="pcook" >This site uses cookies to provide you with a better browsing experience. By continuing to use this site, you consent to our use of cookies. </p>
  <button id="accept-cookies">Accept Cookies</button>
</div>
    <section class="sec3">
      </section>  
      <?php 
      include("footer.php");
      ?>
      <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

</body>
<script src="app.js"></script>
</html>  
