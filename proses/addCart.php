<?php
session_start();
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        include('../db.php');
        $jumlah = $_POST['product-quantity'];
        $email = $_POST['email'];
        $size = $_POST['size'];
        $id = $_POST['id'];

        $search = mysqli_query($con,"SELECT * FROM shoes WHERE id='$id'") or die(mysqli_error($con));
        while($data = mysqli_fetch_assoc($search)){
          $name = $data['name'];
          $price = $data['price'];
          $colour = $data['colour'];
          $stock = $data['stock'];
          $image = $data['image'];
        }

        $input = mysqli_query($con,"INSERT INTO cart(id,email,name,colour,image,size,price,pieces) 
          VALUES('$id','$email','$name','$colour','$image','$size','$price','$jumlah')")or die(mysqli_error($con));
        if($input){
          echo '<script>alert("berhasel masok"); window.location = "../"</script>';
        }
      }
?>