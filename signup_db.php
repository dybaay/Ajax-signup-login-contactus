<?php 

$user = "root";
$pass = "";
$db = new PDO('mysql:dbname=test;host=localhost', $user, $pass);




if(empty($_POST['username']) || empty($_POST['password']) || empty($_FILES['photo']['name'])){
    echo "Check all fields and fill";
}else{


$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$photoname = $_FILES['photo']['name'];
$fileTmpLoc = $_FILES['photo']['tmp_name'];
    $send = $db->query("INSERT INTO users (username, email, password) 
    VALUES ('$username', '$email', '$password')");
    if ($send == TRUE){

        $pid = $db->lastInsertId();
        $newFileName = "$pid.jpg";
        if(move_uploaded_file($fileTmpLoc, "./uploads/$newFileName")){
            echo "Registration Successful";

        }else{
            echo "error";
    }
    }
}






























?>