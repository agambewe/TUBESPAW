<?php
session_start();
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    include('../db.php');

    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = mysqli_query($con,"SELECT * FROM users WHERE email = '$email' Limit 1" ) or die (mysqli_error($con));
    if(mysqli_num_rows($query) == 0){
        echo '<script>alert("Email not found"); window.location = "../login.php"</script>';
    }else{
        $user = mysqli_fetch_assoc($query);
        if(password_verify($password,$user['password'])){
            if($user['status']==0){
                echo '<script>alert("akun belum teraktivasi, silahkan cek email anda untuk melakukan aktivasi"); 
                window.location = "../index.php"</script>';
                die();
            }
            $_SESSION['isLogin'] = true;
            $_SESSION['user'] = $user;
            if($user['role']==1){
                echo '<script>alert("success"); window.location = "../admin"</script>';
            }else{
                echo '<script>alert("success"); window.location = "../"</script>';
            }
        }else{
            echo '<script>alert("Email or Password Invalid"); window.location = "../index.php"</script>';
        }
    }
}else{
    echo '<script>window.history.back()</script>';
}
?>