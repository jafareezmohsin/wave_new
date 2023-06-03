<?php
include("connection.php");
// session_start();  
    $email = mysqli_real_escape_string($db, $_POST["email"]);
    $password = mysqli_real_escape_string($db, md5($_POST["password"]));
        $query = "INSERT INTO `users`(`email`,`password`) Value ('$email','$password')";
        $message = 'Data Inserted';
    
    if (mysqli_query($db, $query)) {
      
        header("location: signin.php");
    } else {
        $output .= 'Error' . $query;
    } 
 

?>
