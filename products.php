
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
  <title>products</title>
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
    <div class="smallpadding"></div>

        <div class="smallpadding"></div>
        <?php
include_once("database_con.php");
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
  while($row = $result->fetch_assoc())
  {
    $productName = $row["product_name"];  ;
    $productDesc=$row["description"];
    $price=$row["price"];
    $productDesc=substr($productDesc,0,130);
    echo " <div class='divider-row-padding fader wh'><p class='imagesize textstyle'><img src='img/p".$row["productID"].".jpg' alt='".$productName."'</p></div></div>";
    echo "<br>Product Name: " . $productName. "<br>Description: " . $productDesc.  " <br>Price: " . $price. "<div><a href='http://unn-w14043450.newnumyspace.co.uk/web2/products_details.php?productID=".$row["productID"]."'>Read More</a></div><br>";
  }
}
?>
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
