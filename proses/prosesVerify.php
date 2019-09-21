<?php
    if(isset($_GET['email']) && isset($_GET['hash'])){
        include('../db.php');

        $email = $_GET['email'];
        $hash = $_GET['hash'];

        $search = mysqli_query($con,"SELECT * FROM users WHERE email='$email' LIMIT 1")
        or die(mysqli_error($con));

        if($search){
            while($data = mysqli_fetch_assoc($search)){
                if($data['hash']==$hash){
                    $input = mysqli_query($con,"UPDATE users SET status=1 WHERE email='$email'")
                    or die(mysqli_error($con));
                    echo '<script>alert("success"); window.location = "../index.php"</script>';
                }
            }
            echo '<script>alert("Hash Invalid");</script>';
        }else{
                echo '<script>window.history.back()</script>';
        }
    }
?>