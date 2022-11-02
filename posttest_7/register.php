<?php
    include("koneksi.php");
    function registrasi($data){
        global $koneksi;

        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($koneksi, $data["password"]);
        $cpassword = mysqli_real_escape_string($koneksi, $data["cpassword"]);
        

        if ($password != $cpassword) {
            echo "<script>
                alert('konfirmasi password tidak sesuai!');
            </script>";
        }
        $password = password_hash($password, PASSWORD_DEFAULT);
        mysqli_query($koneksi, "INSERT INTO users(id_users, username, password) VALUES(null, '$username', '$password')");
       

        return mysqli_affected_rows($koneksi);
    }


    if (isset($_POST["register"])) {
        
        if (registrasi($_POST) > 0) {
            echo "<script>
                alert('user baru berhasil ditambahkan');
            </script>";
        }else{
            echo mysqli_error($koneksi);
        }
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
    <link rel="stylesheet" href="register.css">
    <title>Registrasi</title>
  </head>
  <body>
    <div class="global-container">
        <div class="card login-form">
            <div class="card-body">
                <h1 class="card-title text-center">R e g i s t e r</h1>
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
                    <div class="form-group">
                        <label for="cpassword">Konfirmasi Password</label>
                        <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Password">
                    </div>
                    
                    <div class="d-grid gap-2">
                        <button type="submit" name="register" class="btn btn-primary">Submit</button>
                    </div>
                    <div class="signup">
                        <p>Have an account? <a href="login.php">Login Here</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </body>
</html>