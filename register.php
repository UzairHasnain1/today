<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <center>
        <h1>REGISTER</h1>
        <form action = "" method="POST" enctype="multipart/form-data">
        <br>first name:<br>
        <input type="text" name="name" id=""> <br>
        <br>password:<br>
        <input type="password" name="pass" id=""><br>
        <br>email:<br>
        <input type="email" name="email" id=""><br>
        <br>age:<br>
        <input type="number" name="age" id=""><br>
        <br><br>
        <input type="file" name="img" id=""><br>
        <input type="submit" value="LOGIN" name="r">
</form>
</center>

</body>
</html>

<?php

if(isset($_POST['r'])){
    include('conn.php');

    $fn = $_FILES['img']['name'];
    $ft = $_FILES['img']['type'];
    $ftmp = $_FILES['img']['tmp_name'];
    $fs = $_FILES['img']['size'];

    move_uploaded_file($ftmp,"image/".$fn);

    $sql = "INSERT INTO `computer`(`first_name`, `password`, `email`, `age`, `image`) VALUES ('".$_POST['name']."','".$_POST['pass']."','".$_POST['email']."','".$_POST['age']."', '".$_FILES['img']['name']."')";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo '
        <div class="alert alert-success" role="alert">
        INSERTED
        </div>';

    }
    else{
        $e= 'Record not inserted';
    }
}

?>