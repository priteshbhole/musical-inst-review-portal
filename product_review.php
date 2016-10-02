<?php

$actual_link = "http://$_SERVER[HTTP_HOST]";//to get parameter from URL
include_once("database_con.php");
$fname = '';
$lname = '';
$productID = '';
$review_title = '';
$testimonial ='';
$result = '';


/*If fields in form is set than assigning its value to a varaiable*/
if (isset( $_POST ['fname'] )) {
	$fname = $_POST ['fname'];
}
if (isset( $_POST ['pid'] )) {
    $productID = $_POST ['pid'];
}
if (isset( $_POST ['lname'] )) {
	$lname = $_POST ['lname'];
}
if (isset( $_POST ['review_title'] )) {
	$review_title = $_POST ['review_title'];
}
if (isset( $_POST ['testimonial'] )) {
	$testimonial = $_POST ['testimonial'];
}

/*TO check if field are not empty */
if(empty($fname) ||empty($lname) || empty($testimonial) ||empty($review_title)||empty($productID)){
$_SESSION ['ERRMSG_ARR'] = 'Please fill all the fields';
	exit ();
}



$fname = mysqli_real_escape_string($conn,$fname);
$lname = mysqli_real_escape_string($conn,$lname);
$review_title = mysqli_real_escape_string($conn,$review_title);
$testimonial = mysqli_real_escape_string($conn,$testimonial);


/* Insertion of values in database entered by user */
$sql2= "INSERT INTO `product_reviews`( `productID`, `customer_forename`, `customer_surname`, `review_title`, `review_text`) VALUES ('$productID','$fname','$lname','$review_title','$testimonial');";
echo $sql2;
try {
$result = $conn->query ( $sql2 );

header('Location:'.$actual_link.'/web2/products_details.php?productID='.$productID);/*Taking back to same page where query came from i.e. where form data came from.*/ 

}
catch (MySQLDuplicateKeyException $e) {
    // duplicate entry exception
    $e->getMessage();
}
catch (MySQLException $e) {
    // other mysql exception (not duplicate key entry)
    $e->getMessage();
}
catch (Exception $e) {
    // not a MySQL exception
    $e->getMessage();
}


?>