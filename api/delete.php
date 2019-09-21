<?php
include('../db.php');

$id = addslashes(htmlentities($_POST['id']));

$getdata = mysqli_query($con,"SELECT * FROM shoes WHERE id='$id'");
$rows = mysqli_num_rows($getdata);

$query = mysqli_query($con,"DELETE FROM shoes WHERE id='$id' ");

$respose = array();
if($rows > 0)
{
  if ($query) {
    $respose['code'] = 1;
    $respose['message'] = "Deleted Success";
  }else{
    $respose['code'] = 0;
    $respose['message'] = "Failed to Delete";
  }
}else{
  $respose['code'] = 0;
  $respose['message'] = "Failed to Delete, data Not Found";
}

echo json_encode($respose);
?>