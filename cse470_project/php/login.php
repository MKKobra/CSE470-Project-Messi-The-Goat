<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '../php/connect.php';
    $username = $_POST["username"];
    $password = $_POST["password"]; 
    
    $sql = "Select * from user_registration where username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location: biography.php");

    } 
    else{
        $showError = "Invalid Credentials";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Login Page</title>
</head>
<body>
  <video autoplay muted loop id="loginVideo">
    <source src="../code_media/Argentina ● Road to Victory - World Cup 2022.mp4" type="video/mp4">
  </video>
    <div class="login-page">
        <div class="form">
          <form class="login-form" action="../php/login.php" method="post">
            <input type="text" placeholder="username" id="username" name="username"/>
            <input type="password" placeholder="password" id="password" name="password"/>
            <button><a href="./biography.php" style="text-decoration: none;color: white;">login</a></button>
            <p class="message">Not registered? <a href="./register.php" style="text-decoration: none;">Create an account</a></p>
            <p class="message">Forget Password? <a href="./reset_password.php" style="text-decoration: none;">Click here</a></p>
          </form>
        </div>
      </div>
    <script src="../js/login.js"></script>
</body>
</html>
