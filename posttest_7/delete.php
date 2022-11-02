<?php
session_start();
if (!isset($_SESSION["login"])) {
  header("Location: login.php");
}
     include('koneksi.php');

   if(isset($_GET['id'])){
      $delete = mysqli_query($koneksi, "DELETE FROM goods WHERE id_barang= '".$_GET['id']."'");

      if($delete){
         ?>
            <script>
            alert("data berhasil dihapus");
            window.location=('tampilan.php');
            </script>
         <?php
      }
   }
?>