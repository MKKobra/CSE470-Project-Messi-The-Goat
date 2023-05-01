<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/register.css">
    <title>Register Page</title>
</head>
<body>
    <video autoplay muted loop id="loginVideo">
        <source src="../code_media/Argentina ● Road to Victory - World Cup 2022.mp4" type="video/mp4">
    </video>
    <div class="register-page">
        <div class="form">
          <form class="register-form" action="../php/connect.php" method="post">
            <input type="text" placeholder="Full Name" id="username" name="username"/>
            <input type="text" placeholder="Email address" id="email" name="email"/>
            <input type="password" placeholder="Password" id="password" name="password"/>
            <button type="submit" style="text-decoration: none;color: white;">create</a></button>
          </form>
        </div>
      </div>
    <script src="../js/register.js"></script>
</body>
</html>