<?php
    if(isset($_POST['store'])){
        include('../db.php');

        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $colour = $_POST['colour'];
        $stock = $_POST['stock'];

        if($_FILES['image']['size'] == 0){
            $input = mysqli_query($con,"UPDATE shoes SET name='$name' ,price='$price',colour='$colour',stock='$stock' WHERE id=$id") or die(mysqli_error($con));
        }else{
            function rnd($length = 4) {
                $characters = '0123456789';
                $charactersLength = strlen($characters);
                $randomString = '';
                for ($i = 0; $i < $length; $i++) {
                    $randomString .= $characters[rand(0, $charactersLength - 1)];
                }
                return $randomString;
            }
            
            $namaGambar = $_FILES['image']['name'];
            $namaTmp = $_FILES['image']['tmp_name'];
            $imageType = strtolower(pathinfo($namaGambar,PATHINFO_EXTENSION));
    
            $dirGambar = "../img/";
            $namaNow = $name."_".rnd().".".$imageType;
            
            $terupload = move_uploaded_file($namaTmp, $dirGambar.$namaNow);
    
            if ($terupload) {
                $image = "img/".$namaNow;
            } else {
                echo "Upload Gambar Gagal!";
            }
    
            $input = mysqli_query($con,"UPDATE shoes SET name='$name' ,price='$price',colour='$colour',stock='$stock',image='$image' WHERE id=$id") or die(mysqli_error($con));
        }
        
        if($input){
            echo '<script>alert("success"); window.location = "../admin/listShoes.php"</script>';
        }else{
            echo '<script>window.history.back()</script>';
        }
    }
?>