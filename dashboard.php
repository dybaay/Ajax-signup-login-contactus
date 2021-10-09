<?php 

session_start();
if(isset($_SESSION['user']) == false){

header("Location:index.php");
}




?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord</title>
    <link rel="stylesheet" href="css/w3.css">

</head>
<body>
    <h1>Welcome to your dashboard</h1>
    <h2> <?php echo $_SESSION['user'] ?> </h2>
</body>
</html>