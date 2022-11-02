<?php
    session_start();
    if (isset($_SESSION["login"])) {
        header("Location: tampilan.php");
    }
    require("koneksi.php");
    if (isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
       

        $result = mysqli_query($koneksi, "SELECT * FROM users WHERE username = '$username'");

        if (mysqli_num_rows($result) == 1) {
            
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row["password"])) {

                $_SESSION["login"] = true;
                header("Location:tampilan.php");
            } 
        }

        $error = true;
    }


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="login1.css">
    <title>Login</title>
  </head>
  <body>
    <div class="global-container">
        <div class="card login-form">
            <div class="card-body">
                <h1 class="card-title text-center">L O G I N</h1>
                <?php if(isset($error)) : ?>
                    <p style="color:red; font-style:italic; text-align:center">Username / Password Salah!</p>
                <?php endif; ?>    
            </div>
            <div class="card-text">
            <form action="" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Enter Username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>
                <!-- <div class="form-group">
                    <a href="#" id="signup">Register</a>
                </div> -->
                <div class="d-grid gap-2">
                    <button type="submit" name="login" class="btn btn-primary">Submit</button>
                </div>
                <div class="signup">
                    <p>Don't Have an Account? <a href="register.php">Sign up</a></p>
                </div>
            </form>
            </div>
        </div>
    </div>
  </body>
</html>
