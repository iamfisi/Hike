<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Images</title>
    <script src="js/images_js.js">

    </script>
    <link rel="stylesheet" href="css/images_css.css">
  </head>
  <body onload="currentSlide(1)">



    <header>


      <div class="headerwrapper">
        <?php include("navbar.php") ?>

    </div>
    <div class="h1div">


    <h1 class="view">View pictures taken from hiking</h1>
    </div>
    </header>



  <div class="wrapper">


<div class="slideshow-container">

<!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 5</div>
    <img src="img/slide1.jpg" style="width:100%">

  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 5</div>
    <img src="img/slide2.jpg" style="width:100%">

  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 5</div>
    <img src="img/slide3.jpg" style="width:100%">

  </div>

  <div class="mySlides fade">
    <div class="numbertext">4 / 5</div>
    <img src="img/slide4.jpg" style="width:100%">

  </div>
  <div class="mySlides fade">
    <div class="numbertext">5 / 5</div>
    <img src="img/slide5.jpg" style="width:100%">

  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
</div>


  </body>
</html>
