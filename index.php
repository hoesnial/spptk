<?php

include "config.php";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPPK</title>

    <!-- bootstrap css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/datatables.min.css">

    <link rel="stylesheet" href="assets/css/all.css">

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="assets/css/bootstrap-chosen.css">

</head>
<body>


<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#">Home</a>
    </li>
    <li class="nav-item  active">
      <a class="nav-link" href="?page=gejala">Gejala</a>
    </li>
    <li class="nav-item  active">
      <a class="nav-link" href="?page=penyakit">Penyakit</a>
    </li>
    <li class="nav-item  active">
      <a class="nav-link" href="?page=aturan">Basis Aturan</a>
    </li>
    <li class="nav-item  active">
      <a class="nav-link" href="?page=konsultasi">Konsultasi</a>
    </li>
    <li class="nav-item  active">
      <a class="nav-link" href="#">Logout</a>
    </li>
  </ul>
</nav>

<div class="container">
   <!-- setting menu -->
   <?php
    $page = isset($_GET['page']) ? $_GET['page'] : "";
    $action = isset($_GET['action']) ? $_GET['action'] : "";

    if ($page==""){
        include "welcome.php";
    }elseif ($page=="gejala"){
        if ($action==""){
            include "tampil_gejala.php";
        }elseif ($action=="tambah"){
            include "tambah_gejala.php";
        }elseif ($action=="update"){
            include "update_gejala.php";
        }else{
            include "hapus_gejala.php";
        }
    }elseif ($page=="penyakit"){
        if ($action==""){
            include "tampil_penyakit.php";
        }elseif ($action=="tambah"){
            include "tambah_penyakit.php";
        }elseif ($action=="update"){
            include "update_penyakit.php";
        }else{
            include "hapus_penyakit.php";
        }
    }elseif ($page=="aturan"){
        if ($action==""){
            include "tampil_aturan.php";
        }elseif ($action=="tambah"){
            include "tambah_aturan.php";
        }elseif ($action=="update"){
            include "update_penyakit.php";
        }else{
            include "hapus_penyakit.php";
        }
    }elseif ($page=="konsultasi"){
        if ($action==""){
            include "tampil_konsultasi.php";
        }elseif ($action=="tambah"){
            include "tambah_penyakit.php";
        }elseif ($action=="update"){
            include "update_penyakit.php";
        }else{
            include "hapus_penyakit.php";
        }
    }else{
        include "";
    }
    ?>

</div>

<!-- jQuert -->
<script src="assets/js/jquery-3.7.0.min.js"></script>

<!-- Bootstrap js -->
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/datatables.min.js"></script>

<script>
      $(document).ready(function() {
            $('#myTable').DataTable();
      } );
</script>

<script src="assets/js/all.min.js"></script>

<script src="assets/js/chosen.jquery.min.js"></script>
<script>
      $(function() {
        $('.chosen').chosen();
      });
</script>

</body>
</html>