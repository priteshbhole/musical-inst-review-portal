<!DOCTYPE html>
<html lang="en">
<head>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link rel="stylesheet"  type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/search.css">
  <link rel="stylesheet" type="text/css" href="css/header1.css">
  <link rel="stylesheet" type="text/css" href="css/header.css">
  <link rel="stylesheet" type="text/css" href="css/slider.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <link rel="stylesheet" type="text/css" href="css/imagezoomer.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <title>index</title>
  <meta name="description" content=""/>
  <meta name="keywords" content=" " />
</head>
<body>
  <?php 
  include_once("header.php");
  ?>

  <?php 
   include_once("search.php");
  ?>
  <button id="plustext" onclick="resizeText(1)" >A+</button>
  <button id="minustext" onclick="resizeText(-1)">A-</button>
  <button id="plustext1"  onclick="resetToDefaultFontSize()">A</button>
  <?php 
  include_once("header1.php");
  ?>
  <div class="pad"></div>

  <?php 
  include_once("slider.php");
  ?>

  <div class="fader wh">
    <div class="text">OUR LATEST</div>
    <div class="smallpadding"></div>
    <div class="divider-row-padding">
      <div class="divider-third">
        <h2 class="text">Electric Guitar</h2>
        <p class="imagesize"> <img src="img/793696-electric-guitar-wallpaper.jpg" alt="Electric Guitar"></p>
        <p class="textstyle">The desire to increase the sound volume of the acoustic guitar existed long before the development of electronic amplifiers and speakers. As the musical performances in the 19th century grew.<a href="http://unn-w14043450.newnumyspace.co.uk/web2/products_details.php?productID=1">Read More</a></p>
      </div>

      <div class="divider-third">
        <h2 class="text">Piano</h2>
        <p class="imagesize1"><img src="img/Piano_Andrés_Bello.jpg" alt="Piano"></p>
        <p class="textstyle">Pianos have entertained thousands over the last century or 2. When we think about this grand instrument composers like Mozart and Beethoven come to mind. The pianos got their boost in <a href="http://unn-w14043450.newnumyspace.co.uk/web2/products_details.php?productID=3">Read More</a></p>
      </div>

      <div class="divider-third">
        <h2 class="text">Flute</h2>
        <p class="imagesize"><img src="img/tumblr_mnkpzdzGuw1so520to1_1280.jpg" alt="Flute"></p>
        <p class="textstyle">Flute, flute wind instrument in which the sound is produced by a stream of air directed against a sharp edge upon which the air breaks up into eddies that alternate regularly  <a href="http://unn-w14043450.newnumyspace.co.uk/web2/products_details.php?productID=2">Read More</a></p>
      </div>
    </div>
  </div>
  <div class="smallpadding"></div>

  <?php 
  include_once("footer.php");
  ?>

  <script src="js/jquery.min.js"></script>
  <script src="js/navigationbar.js"></script>
  <script src="js/fontsizer.js"></script>
  <script src="js/hidenavigationbar.js"></script>
  <script></script>
</body>
</html>
