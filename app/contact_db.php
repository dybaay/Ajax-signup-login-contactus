<?php
$user = "root";
$pass = "";
$db = new PDO('mysql:dbname=test;host=localhost', $user, $pass);


$email = $_POST['email'];
$message = $_POST['message'];

if(empty($email) || empty($message)){
    echo "Check all fields and fill";
}else{
    $send = $db->query("INSERT INTO contactus (email, message) VALUES ('$email', '$message')");
    if ($send == TRUE){
        echo "Thanks for contacting us";
    }else{
        echo "error";
    }
}

?>