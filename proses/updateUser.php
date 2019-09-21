<?php
    if(isset($_POST['store'])){
        include('../db.php');

        $id = $_POST['id'];
        $role = $_POST['role'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $passnew = $_POST['password'];
        $passold = $_POST['passold'];
        $password = password_hash($passnew, PASSWORD_DEFAULT);

        $query = mysqli_query($con,"SELECT * FROM users WHERE email='$email' LIMIT 1") or die(mysqli_error($con));
        while($data = mysqli_fetch_assoc($query)){
            $passDB = $data['password'];
            $role = $data['role'];
        }
        
        if(!password_verify($passold,$passDB)){
            if($role==1)
                echo '<script>alert("Incorrect password now"); window.location = "../admin/editProfile.php"</script>';
            else
                echo '<script>alert("Incorrect password now"); window.location = "../user/editProfile.php"</script>';
                 die();
        }

        if($_FILES['image']['size'] == 0){
            $input = mysqli_query($con,"UPDATE users SET name='$name' ,email='$email',password='$password' WHERE id=$id") or die(mysqli_error($con));
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
    
            $input = mysqli_query($con,"UPDATE users SET name='$name' ,email='$email',password='$password',image='$image' WHERE id=$id") or die(mysqli_error($con));
        }
        
        if($input){
            echo '<script>alert("success"); window.location = "../"</script>';
        }else{
            echo '<script>window.history.back()</script>';
        }
    }
?>