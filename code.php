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
  <title>code</title>
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
  <div class="textstyle">
    Code Refrences<br><br>
    W3schools.com, (2016). W3Schools Online Web Tutorials. [online] Available at: http://www.w3schools.com/ [Accessed 1 dec. 2015].<br>
    Stackoverflow.com, (2016). Stack Overflow. [online] Available at: http://stackoverflow.com/ [Accessed 15 dec. 2015].<br>
    Php.net, (2016). PHP: Documentation. [online] Available at: http://php.net/docs.php [Accessed 10 dec. 2015].<br>
    jquery.org, j. (2016). jQuery. [online] Jquery.com. Available at: https://jquery.com/ [Accessed 10 dec. 2015].<br>
    Mozilla Developer Network, (2016). JavaScript. [online] Available at: https://developer.mozilla.org/en-US/docs/Web/JavaScript [Accessed 5 dec. 2015].<br>
    Docs.oracle.com, (2016). Database SQL Reference - Contents. [online] Available at: https://docs.oracle.com/cd/B19306_01/server.102/b14200/toc.htm [Accessed 25 dec. 2016].<br>
  </div>
  <div class="pad"></div>
  <div class="pad"></div>
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
