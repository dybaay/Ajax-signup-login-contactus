<?php 

$user = "root";
$pass = "";
$db = new PDO('mysql:dbname=test;host=localhost', $user, $pass);
session_start();

if(isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = $db->query("SELECT username FROM users where username='$username' AND password='$password'");
if($query->rowCount() === 1){
    $_SESSION['user'] = $username;
    echo "login";
}else{
    echo "Username or password incorrect";
}


}






?>