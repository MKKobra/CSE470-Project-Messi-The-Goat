<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reset_password.css">
    <title>Reset Password</title>
</head>
<body>
    <p><h5><a href="./login.php" style="text-decoration: none;color: white;">Login Page</a></h5></p>
    <div class="reset_password">
        <div class="form">
        <p>Please enter email to reset your password</p>
          <form class="reset-password-form">
            <input type="email" placeholder="Email" />
            <button onclick="myFunction()">Submit</button>            
            <script>
              function myFunction() {
                alert("Check your Email");
              }
              </script>
          </form>
        </div>
      </div>
</body>
</html>