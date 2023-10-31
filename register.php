<?php
define('FILE_APPEND', 8);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_ARGON2I);
   
    $userDetails = "$username|$email|$password\n";
    file_put_contents("users.txt", $userDetails, FILE_APPEND);
  
    header("Location: login_form.php");
    exit;
}
?>
