<?php
session_start();
if (!isset($_SESSION['status']) || $_SESSION['status'] != "y") {
  header("Location: login.php");
  exit();
}
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>SPPK - Sistem Pakar</title>

  <!-- Bootstrap & Icons -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/datatables.min.css" />
  <link rel="stylesheet" href="assets/css/bootstrap-chosen.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" />

  <!-- Custom CSS -->
  <style>
    :root {
      --primary: #0d6efd;
      --bg-light: #f4f6f9;
      --card-bg: #ffffff;
      --text-dark: #343a40;
    }

    body {
      background-image: url('assets/img/background.jpg');
      background-color: var(--bg-light);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: var(--text-dark);
    }

    .navbar {
      background-color: var(--primary);
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .navbar-brand {
      font-weight: bold;
      font-size: 1.3rem;
    }

    .navbar-nav .nav-link {
      transition: 0.3s;
    }

    .navbar-nav .nav-link:hover {
      color: #ffc107;
    }

    .content-container {
      padding: 40px 0;
    }

    .card {
      border-radius: 15px;
      border: none;
      box-shadow: 0 6px 20px rgba(0,0,0,0.08);
      background-color: var(--card-bg);
    }

    .card-title {
      font-size: 1.5rem;
      font-weight: bold;
    }

    .btn-custom {
      background-color: var(--primary);
      color: #fff;
      border-radius: 8px;
      padding: 8px 16px;
      transition: 0.3s;
    }

    .btn-custom:hover {
      background-color: #084298;
    }

    footer {
      background-color: var(--primary);
      color: white;
      text-align: center;
      padding: 20px 0;
      margin-top: 50px;
    }

    /* Table enhancements */
    .dataTables_wrapper .dataTables_filter input {
      border-radius: 8px;
      padding: 6px;
    }

    .chosen-container .chosen-single {
      height: 38px;
      border-radius: 8px;
      padding: 6px 12px;
    }

    @media (max-width: 576px) {
      .navbar-brand {
        font-size: 1.1rem;
      }
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="#"><i class="fas fa-diagnoses me-2"></i>SPPTK</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navmenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>

        <!-- setting hak akses -->
        <?php
         if($_SESSION['role']=="Pakar"){
          ?>
        <li class="nav-item"><a class="nav-link" href="?page=users">Users</a></li>
        <li class="nav-item"><a class="nav-link" href="?page=aturan">Basis Aturan</a></li>
        <li class="nav-item"><a class="nav-link" href="?page=konsultasi">Konsultasi</a></li>

        <?php
         }elseif($_SESSION['role']=="Admin"){
          ?>
        <li class="nav-item"><a class="nav-link" href="?page=users">Users</a></li>
        <li class="nav-item"><a class="nav-link" href="?page=gejala">Gejala</a></li>
        <li class="nav-item"><a class="nav-link" href="?page=penyakit">Penyakit</a></li>
        <li class="nav-item"><a class="nav-link" href="?page=aturan">Basis Aturan</a></li>
        <li class="nav-item"><a class="nav-link" href="?page=konsultasi">Konsultasi</a></li>

        <?php
         }else{
          ?>
        <li class="nav-item"><a class="nav-link" href="?page=konsultasi">Konsultasi</a></li>

        <?php
         }
         ?>

        <li class="nav-item"><a class="nav-link" href="?page=logout">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- status login -->
<?php 
    if($_SESSION['status']!="y"){
        header("Location:login.php");
    }
?>

<!-- Main Content -->
<div class="container content-container">
  <div class="card p-4">

    <?php
      $page = $_GET['page'] ?? '';
      $action = $_GET['action'] ?? '';

      if ($page == "") {
          include "welcome.php";
      } elseif ($page == "gejala") {
          if ($action == "") {
              include "tampil_gejala.php";
          } elseif ($action == "tambah") {
              include "tambah_gejala.php";
          } elseif ($action == "update") {
              include "update_gejala.php";
          } else {
              include "hapus_gejala.php";
          }
      } elseif ($page == "penyakit") {
          if ($action == "") {
              include "tampil_penyakit.php";
          } elseif ($action == "tambah") {
              include "tambah_penyakit.php";
          } elseif ($action == "update") {
              include "update_penyakit.php";
          } else {
              include "hapus_penyakit.php";
          }
      } elseif ($page == "aturan") {
          if ($action == "") {
              include "tampil_aturan.php";
          } elseif ($action == "tambah") {
              include "tambah_aturan.php";
          } elseif ($action == "update") {
              include "update_penyakit.php";
          } else {
              include "hapus_penyakit.php";
          }
     
      } elseif ($page == "konsultasi") {
          if ($action == "") {
              include "tampil_konsultasi.php";
          } else {
              include "hasil_konsultasi.php";
          }
      } elseif ($page == "users") {
          if ($action == "") {
              include "tampil_users.php";
          } elseif ($action == "tambah") {
              include "tambah_users.php";
          } elseif ($action == "update") {
              include "update_users.php";
          } else {
              include "hapus_users.php";
          }    
      } else {
          include "logout.php";
      }
    ?>
  </div>
</div>

<!-- Footer -->
<footer>
  <div class="container">
    <small>&copy; <?= date("Y"); ?> SPPK - Sistem Pakar Penentuan Penyakit. Built with 💙 by YourTeam.</small>
  </div>
</footer>

<!-- JS -->
<script src="assets/js/jquery-3.7.0.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/datatables.min.js"></script>
<script src="assets/js/chosen.jquery.min.js"></script>
<script>
  $(document).ready(function() {
    $('#myTable').DataTable();
    $('.chosen').chosen();
  });
</script>

</body>
</html>
