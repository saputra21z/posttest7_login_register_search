<?php
  session_start();
  if (!isset($_SESSION["login"])) {
    header("Location: login.php");
  }
   include('koneksi.php');
  //  $barang = query("SELECT * FROM goods");
   $tampil = mysqli_query($koneksi, "SELECT * FROM goods order by id_barang asc");
  //  var_dump($tampil);
  //  die();
    

    if (isset($_POST["cari"])) {
        $tampil = mysqli_query($koneksi, "SELECT * FROM goods WHERE 
                               nama_barang LIKE '%".$_POST['keyword']."%' OR
                               stok_barang LIKE '%".$_POST['keyword']."%' OR
                               status_barang LIKE '%".$_POST['keyword']."%' OR
                               jenis_barang LIKE '%".$_POST['keyword']."%' 
                               ");

    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POST TEST 7</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="forms1.css">
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
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
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
      </ul>
        <form action="" method="post" class="form-inline my-2 my-lg-0">
          <input type="text" name="keyword" class="form-control mr-sm-2"  placeholder="Search" aria-label="Search">
          <button name="cari" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
  </nav>
  <div class="tabel col-md-9">
        <h2 class="alert alert-success text-center mt-5">Tampilan Data Barang</h2>
        <table rules="rows" class="table table-dark mt-2">
          <a href="forms.php" class="btn btn-success">Tambah</a>
          <thead>
              <tr>
              <th scope="col">ID Barang</th>
              <th scope="col">Nama Alat Olahraga</th>
              <th scope="col">Jenis Alat Olahraga</th>
              <th scope="col">Stok Barang</th>
              <th scope="col">Satus Barang</th>
              <th scope="col">Gambar</th>
              <th scope="col">Tanggal & Waktu</th>
              <th scope="col">Aksi</th>
              </tr>
          </thead>
          <?php
            // $no = 1;
            // $tampil = mysqli_query($koneksi, "SELECT * FROM goods order by id_barang asc");
            //   function cari($keyword){
            //     $query = "SELECT * FROM goods
            //               WHERE
            //               stok_barang = '$keyword'
            //               ";
            //     return query($query);
            //   }
            //   if (isset($_POST["cari"])) {
            //       $tampil = cari($_POST["keyword"]);

            //   }
              
          
              
            while($data = mysqli_fetch_array($tampil)):
          ?>
          <tbody>
              <tr>
                  <th scope="row"><?=$data['id_barang'] ?></th>
                  <td><?=$data['nama_barang'] ?></td>
                  <td><?=$data['jenis_barang'] ?></td>
                  <td><?=$data['stok_barang'] ?></td>
                  <td><?=$data['status_barang'] ?></td>
                  <td><img src="<?=$data['gambar'] ?>" width="80px" alt=""></td>
                  <td><?=$data['tanggal'] ?></td>
                  <td>
                    <a href="update.php?id=<?=$data['id_barang'] ?>" class="btn btn-success">Edit</a>
                    <a href="delete.php?id=<?=$data['id_barang'] ?>" class="btn btn-danger">Delete</a>
                  </td>
              </tr>
          <?php endwhile; ?>
        </table>
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
        <a href="#">Home</a
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
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

