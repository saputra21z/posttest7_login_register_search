<?php
  session_start();
  if (!isset($_SESSION["login"])) {
    header("Location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POST TEST 7</title>
  <style>
    input[type="checkbox"]{
      margin: 9px;
      position: relative;
      width: 40px;
      height: 20px;
      appearance: none;
      background-color: #434343;
      outline: none;
      border-radius: 10px;
      transition: .5s ease;
      cursor: pointer;
    }
    input[type="checkbox"]:checked{
      background-color: #3664ff;
     
      
    }
    input[type="checkbox"]::before{
      content: '';
      position: absolute;
      width: 16px;
      height: 16px;
      background-color: #fcfcfc;
      border-radius: 50%;
      top: 2px;
      left: 2px;
      transition: .5s ease;
      
    }

    input[type="checkbox"]:checked::before{
      transform: translateX(20px);
     
      
    }
    .dark{
      background-color: #333333;
      color: #fcfcfc;
    }
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand text-success" href="#">HendySports</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="forms.php">Forms</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tampilan.php">Read Data</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Alat Olahraga
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Bulu Tangkis</a>
              <a class="dropdown-item" href="#">Futsal</a>
              <a class="dropdown-item" href="#">Renang</a>
              <a class="dropdown-item" href="#">Basket</a>
              <a class="dropdown-item" href="#">Sepak Bola</a>
            </div>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About Me</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
          <li class="nav-item">
            <input type="checkbox" onclick="ubahMode()">
            <script>
                function ubahMode(){
                    var r = confirm("Apakah Anda Ingin Mengganti Mode?");
                    if (r == true) { 
                        var element = document.body;
                        element.classList.toggle("dark");
                    }  
                }
            </script>
          </li>
        </ul>
        <!-- <form action="" method="post" class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" name="keyword" type="search" placeholder="Search" aria-label="Search">
          <button name="cari" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> -->
      </div>
    </nav>
    <div class="tipe">
      <marquee scrollamount="10" id="text" behavior="" direction=""><h1>SELAMAT DATANG DI WEBSITE HENDY.....!!!</h1></marquee>
    </div>
    <div class="logo">
      <img id="foto" src="foto_hendy.jpg" alt="" srcset="">
    </div>
    <div class="title-item">
      <p><b>All Items:</b></p>
    </div>
    <div class="card-row">
      <div class="card-coulmn">
        <div class="card">
          <img src="bola_basket.jpeg" alt="">
          <p>Wilson NBA Drive Basketball Red</p>
          <br>
          <p>Rp. 299.000</p>
        </div>
      </div>
      <div class="card-coulmn">
        <div class="card">
          <img src="raket.jpeg" alt="">
          <p>Astec HUR600 G5 Badminton Racket - Deep Blue</p>
          <p>Rp. 299.000</p>
        </div>
      </div>
      <div class="card-coulmn">
        <div class="card">
          <img src="baju_futsal.jpeg" alt="">
          <p>ASTEC FARREL MEN'S BASIC T SHIRT - Dark Grey</p>
          <p>Rp. 129.000</p>
        </div>
      </div>
      <div class="card-coulmn">
        <div class="card">
          <img src="sepatu.jpg" alt="">
          <p>SAUCONY GUIDE 15 Men Running Shoes - Blue</p>
          <p>Rp. 1.609.300 </p>
        </div>
      </div>
      <div class="card-coulmn">
        <div class="card">
          <img src="skiping.jpeg" alt="">
          <p>PTP Be U Elite Jump Rope - White</p>
          <p>Rp. 499.000</p>
          <br>
        </div>
      </div>
      <div class="card-coulmn">
        <div class="card">
          <img src="kacamata.jpg" alt="">
          <p>Speedo Unisex Adult Hydropulse Mirror Goggles - Light Blue/Grey</p>
          <p>Rp. 399.000</p>
        </div>
      </div>
      <div class="card-coulmn">
        <div class="card">
          <img src="tenis.jpeg" alt="">
          <p>BABOLAT UNISEX PURE STRIKE LITE G#2 UNSTRUNG TENNIS RACQUET</p>
          <p>Rp. 3.299.000</p>
        </div>
      </div>
      <div class="card-coulmn">
        <div class="card">
          <img src="sepatu_bola.jpeg" alt="">
          <p>Adidas Predator Edge.3 Laceless FG Men Soccer Shoes - Red</p>
          <p>Rp. 1.400.000</p>
        </div>
      </div>
      <div class="card-coulmn">
        <div class="card">
          <img src="stik_golf.jpeg" alt="">
          <p>WILSON X31 LADIES PACKAGE SET 10PCS - BLACK</p>
          <p>Rp. 6.999.000</p>
        </div>
      </div>
      <div class="card-coulmn">
        <div class="card">
          <img src="tongkat_golf.jpeg" alt="">
          <p>TAYLORMADE IRON SET MDS P790 R - SILVER</p>
          <p>Rp. 20.599.000</p>
        </div>
      </div>
    </div>
    <div class="title-item">
      <p><b>About Me:</b></p>
    </div>
    <div class="profile">
      <p>
        <img id="gambar" class="profile__image" src="foto_hendy_1.jpeg" alt="profile image">
      </p>
      <div class="profile__name">Hendy Saputra</div>
      <div class="profile__title">
        <p>Informatika C'21</p>
        <p>2109106120</p>
      </div>
      <div class="profile__detail">
        <i class="icon-male"></i>
          2021
      </div>
    </div>
    <section class="footer">
      <div class="social">
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
      </div>
      <ul class="list">
        <li>
          <a href="#">Home</a>
        </li>
        <li>
          <a href="#">Services</a>
        </li>
        <li>
          <a href="#">About</a>
        </li>
        <li>
          <a href="#">Terms</a>
        </li>
        <li>
          <a href="#">Privacy Policy</a>
        </li>
      </ul>
      <p class="copyright">
        Future Coders &copy;2022 - by Hendy Saputra
      </p>
    </section>
  <!-- <script>
    $(document).ready(function(){
      $("#text").on({
          mouseover: function(){
              $(this).css("color", "red");
          }
      }); 
      
      $("#text").on({
          mouseout: function(){
              $(this).css("color", "black");
          }
      });    
    });

  </script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="script.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>