<?php
    if(isset($_GET['id'])){
        include('../db.php');

        $id = $_GET['id'];
        
        $delete = mysqli_query($con,"DELETE FROM cart WHERE id='$id'")
        or die(mysqli_error($con));
            if($delete){
                echo '<script>alert("success"); window.location = "../user/userCart.php"</script>';
            }else{
                echo '<script>alert("failed"); window.location = "../user/userCart.php"</script>';
            }
            }else{
                echo '<script>window.history.back()</script>';
            }
        
?>