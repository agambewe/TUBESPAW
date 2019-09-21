<?php
include('../db.php');
error_reporting(0);

$name = addslashes(htmlentities($_POST['name']));
$price = addslashes(htmlentities($_POST['price']));
$colour = addslashes(htmlentities($_POST['colour']));
$image = addslashes(htmlentities($_POST['image']));
$stock = addslashes(htmlentities($_POST['stock']));


$query = mysqli_query($con,"INSERT INTO shoes(name,price,colour,image,stock) VALUES ('$name','$price','$colour','$image','$stock')");
$response = array();
if($query)
{
  $response['code'] =1;
  $response['message'] = "Success! Data Inserted";
}else{
  $response['code'] =0;
  $response['message'] = "Failed! Data Not Inserted";
}

echo json_encode($response);

?>