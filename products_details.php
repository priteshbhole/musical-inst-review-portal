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
  <title>productsdetails</title>
  <meta name="description" content=""/>
  <meta name="keywords" content=" " />
</head>
<body>
  <!--Products review and comments page -->
  <?php
  include_once("database_con.php");
//getting product ID from URL
  if ( isset( $_GET['productID'] ) ) 
  {
    $productID =  $_GET['productID'];    
  }
//Query to display product details
  $sql = "SELECT * FROM products where productID='$productID'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc())
    {
      $productName = $row["product_name"];  ;
      $productDesc=$row["description"];
      $price=$row["price"];
    }
  } 
  ?>


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
  <div class=" imageleft fader">
    <h2 class="text tx"><?php echo $productName ?></h2>
    <p><img class="imageleft" src="img/p<?php echo $productID ?>.jpg" alt="<?php echo $productName ?>">
    </div>
    <div class="text textstyle"> <?php echo $productDesc ?><br>
      <br><?php echo "<div class='temp123 textstyle'> Price&nbsp;".$price."&nbsp; Pounds On Average </div>" ?><br>
    </div>
  </div>
  <div class="smallpadding"></div>
  <div class="temp123">
    <div class="tx">Write your Views</div><br>
    <form method="post" action="product_review.php">
      <input type="hidden" name='pid' value="<?php echo $productID; ?>">
      <div class="textstyle">
        <div class="tfclear">
          <!--Form starts here for comment-->
          <div class="textstyle">First Name: <input type="text" name="fname"  class="html-text-box"  placeholder="Forename"  required /></div><br>
          <div class="textstyle">Last Name: <input type="text" name="lname"  class="html-text-box"  placeholder="Surname" required /></div><br>
          <div class="textstyle">Review Title: <input type="text" name="review_title"  class="html-text-box"  placeholder="Review Title"  required /></div><br>
          <textarea name="testimonial" class="html-text-box" cols="60" rows="4" placeholder="Leave a comment here.... " required /></textarea>
          <br><input type="submit" value="Submit" class="html-text-box"/>&nbsp;&nbsp;&nbsp;<input type="reset" value="Reset" class="html-text-box"/>
        </div>
      </div>
    </form>
  </div>
  <!--Form Ends Here-->
  <div class="smallpadding"></div>

  <!--Code to Display comment on website-->                                 
  <?php 
  $sql = "SELECT * FROM product_reviews where productID='$productID' order by reviewID DESC ";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<div align='center'>Previous Comments</div><br>";
      echo "<div class='comments' <br>Review Title: " . $row["review_title"]. " <br>Name: " . $row["customer_forename"].  " <br>Review Text: " . $row["review_text"]. "<br><hr><hr></div>";
    }
  } else {
    echo "<div align='center'>Be the First One to comment..</div>";
  }
              //mysqli_free_result($result); 
              //mysqli_close($conn);

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



