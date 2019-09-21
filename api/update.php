<?php
include('../db.php');
error_reporting(0);

$id = addslashes(htmlentities($_POST['id']));

$name = addslashes(htmlentities($_POST['name']));
$price = addslashes(htmlentities($_POST['price']));
$colour = addslashes(htmlentities($_POST['colour']));
$image = addslashes(htmlentities($_POST['image']));
$stock = addslashes(htmlentities($_POST['stock']));

$getdata = mysqli_query($con,"SELECT * FROM shoes WHERE id='$id'");
$rows = mysqli_num_rows($getdata);

$query = mysqli_query($con,"UPDATE shoes SET name='$name',price='$price',colour='$colour',image='$image',stock='$stock' WHERE id='$id' ");
$respose = array();

if($rows > 0)
{
  if($query)
  {
    $respose['code'] = 1;
    $respose['message'] = "Updated Success";
  }else{
    $respose['code'] = 0;
    $respose['message'] = "Updated Failed";
  }
}else{
    $respose['code'] = 0;
    $respose['message'] = "Updated Failed, Not data selected";
}

echo json_encode($respose);
?>