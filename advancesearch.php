<!DOCTYPE html>
<html lang="en">
<head>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/search.css">
  <link rel="stylesheet" type="text/css" href="css/header1.css">
  <link rel="stylesheet" type="text/css" href="css/header.css">
  <link rel="stylesheet" type="text/css" href="css/slider.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <link rel="stylesheet" type="text/css" href="css/imagezoomer.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <title>advanceresult</title>
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
  <button id="plustext"  onclick="resizeText(1)" >A+</button>
  <button id="minustext" onclick="resizeText(-1)">A-</button>
  <button id="plustext1" onclick="resetToDefaultFontSize()">A</button>
  <?php 
  include_once("header1.php");
  ?>
  <div class="pad"></div>
   <div class="smallpad"></div>
 <br>
  
  <form  method="post" class="wrapper" action="advancesearchresult.php"  id="searchform1">
    <div class="textstyle">Product Name: 
        <input type="text" name="pname" class="html-text-box" placeholder="Product Name"  required />
    </div>
    <br>
    <div class="textstyle" >Minimum Price in Pounds:
        <input type="number" name="minprice" class="html-text-box" placeholder="Minimum Price in Pounds" required />
    </div>
    <br>
    <div class="textstyle">Maximum Price in Pounds:
        <input type="number" name="maxprice" class="html-text-box" placeholder="Maximum Price in Pounds" required />
    </div>
    <br>
    <input type="submit" name="submit" class="tfbutton button">
  </form>

  <div class="pad"></div>
  <div class="pad"></div>

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
