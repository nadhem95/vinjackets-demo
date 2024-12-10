<?php  
session_start();

$email = $_POST['email'];
$password = $_POST['password']; 
$_SESSION['email'] = $email;

if(isset($_POST['check'])){
    setcookie('email', $email, time() + 365*24*360);
    setcookie('password', $password, time() + 365*24*3600);
}

header('location:vinjackets.php');
exit();
?>
