<?php
include('../db.php');

$id = isset($_GET['id']) ? $_GET['id'] : '';
$sql_id = '';
if (!empty($id)) {
    $sql_id = ' where ID = '.$id;
}

$query = mysqli_query($con,"SELECT * FROM shoes ".$sql_id) or die(mysqli_error($con));
$array_data = array();

while($data = mysqli_fetch_assoc($query)){
    $array_data['info'] = 'success';
    $array_data['result'][] = $data;
}

echo json_encode($array_data);
?>