<?php
session_start();
if(!$_SESSION['isLogin']){
    header("location: ../");
}else{
    include('../db.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="backgroundAll"></div>
<div class="dashboard">
    <?php 
        if(isset($_SESSION['user']['email'])){
            $email = $_SESSION['user']['email'];
            $id = $_SESSION['user']['id'];
            $role = $_SESSION['user']['role'];
        }
        $query = mysqli_query($con,"SELECT * FROM users WHERE email='$email'") or die(mysqli_error($con));
        echo'<p class="h1" id="subjudul">Edit Profile</p>';
        while($data = mysqli_fetch_assoc($query)){
            $name = $data['name'];
            $email = $data['email'];
            $password = $data['password'];
            $image = $data['image'];
        }
    ?>
    <form onsubmit="return validateFormProfile()" method="POST" action="../proses/updateUser.php" class="form-horizontal" name="myForm" role="form" enctype="multipart/form-data">
        <fieldset>
            <tr>
                <div class="form-group col-md-9">
                    <label for="image" class="col-sm-3 control-label">Image</label>
                    <div class="col-sm-9">
                        <img src="../<?php echo $image?>" style="max-width: 100px;" id="output_image"/>
                        <input id="image" name="image" type="file" class="btn btn-file" data-show-preview="true" onchange="preview_image(event)">
                    </div>
                </div>

                <div class="form-group col-md-9">
                    <label for="name" class="col-sm-3 control-label">Nama</label>
                    <div class="col-sm-9">
                        <input value="<?php echo $name?>" type="text" name="name" id="name" placeholder="Linus Torvalds" class="form-control" onkeyup="">
                        <p id="" class="errMsg"></p>
                    </div>
                </div>

                <div class="form-group col-md-9">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input value="<?php echo $email?>" type="text" name="email" id="email" placeholder="admin@linux.org" class="form-control" onkeyup="">
                        <p id="" class="errMsg"></p>
                    </div>
                </div>

                <div class="form-group col-md-9">
                    <label for="passold" class="col-sm-3 control-label">Password Now</label>
                    <div class="col-sm-9">
                        <input type="text" name="passold" id="passold" placeholder="********" class="form-control" onkeyup="">
                        <p id="" class="errMsg"></p>
                    </div>
                </div>

                <div class="form-group col-md-9">
                    <label for="passnew" class="col-sm-3 control-label">New Password</label>
                    <div class="col-sm-9">
                        <input type="text" name="passnew" id="passnew" placeholder="********" class="form-control" onkeyup="">
                        <p id="" class="errMsg"></p>
                    </div>
                </div>

                <div class="form-group col-md-9">
                    <label for="password" class="col-sm-3 control-label">Re-type New Password</label>
                    <div class="col-sm-9">
                        <input type="text" name="password" id="password" placeholder="********" class="form-control" onkeyup="">
                        <p id="message" class="errMsg"></p>
                    </div>
                </div>
            </tr>
        </fieldset>
        <div class="form-group col-md-6">
            <input value="<?php echo $id?>" type="hidden" name="id">
            <input value="<?php echo $role?>" type="hidden" name="role">
            <button name="store" type="submit" class="btn btn-primary btn-block" style="margin-left: 250px;">Perbarui</button>
        </div>
    </form>
</div>
</body>
<script type='text/javascript'>
function preview_image(event) {
    var reader = new FileReader();
    reader.onload = function()
    {
    var output = document.getElementById('output_image');
    output.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
}

$('#password').on('keyup', function () {
  if ($('#passnew').val() == $('#password').val()) {
    $('#message').html('Matching').css('color', 'green');
  } else 
    $('#message').html('Not Matching').css('color', 'red');
});
</script>
<script src="../script/script.js"></script>
</html>