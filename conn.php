<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'today';
    
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if($conn){
        echo 'Pakistan is the voice of everyheart';

    }
    else
    {
        echo 'Error';
    }

?>


</body>
</html>