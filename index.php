<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require "config.php";
$sqlget = "select * from students";
$sqldata = mysqli_query($conn, $sqlget);
$row = mysqli_fetch_assoc($sqldata);

$sql_ok = "select count(id) from students where status = 'Apporoved'";
$query_ok = mysqli_query($conn, $sql_ok);
$row_ok= mysqli_fetch_assoc($query_ok);

$sql_pend = "select count(id) from students where status = 'Pending'";
$query_pend = mysqli_query($conn, $sql_pend);
$row_pend= mysqli_fetch_assoc($query_pend);

$sql_update="select * from students where id =".$row['id'];
$query_update=mysqli_query($conn,$sql_update);
$row=mysqli_fetch_assoc($query_update);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin-Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Student-Portal</span>
      </a>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <!--<img src="" alt="Profile" class="rounded-circle">--> Profile
            <span class="d-none d-md-block dropdown-toggle ps-2"></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6></h6>
              <span>Admin</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <main id="main" class="main">

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Approved</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-check-square"></i>
                    </div>
                    <div class="ps-3">
                      <h6>
                      <?php
                      echo $row_ok['count(id)'];
                      ?>
                      </h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">Pending</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-clock"></i>
                    </div>
                    <div class="ps-3">
                      <h6>
                      <?php
                      echo $row_pend['count(id)'];
                      ?>
                      </h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Students</h5>
                <!-- Table with stripped rows -->
                <div class="table-responsive">
                <table class="table datatable">
                  <thead>
                    <tr>
                      <th>Sno</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Father's Name</th>
                      <th>Mother's Name</th>
                      <th>Mobile Number</th>
                      <th>Kulam</th>
                      <th>Kovil</th>
                      <th>Pincode</th>
                      <th>Status</th>
                      <th>Edit-Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    while($row = mysqli_fetch_assoc($sqldata)){
                      echo "<tr><td>";
                      echo $row['id'];
                      echo "</td><td>";
                      echo $row['login_name'];
                      echo "</td><td>";
                      echo $row['email'];
                      echo "</td><td>";
                      echo $row['father_name'];
                      echo "</td><td>";
                      echo $row['mother_name'];
                      echo "</td><td>";
                      echo $row['mobile_no'];
                      echo "</td><td>";
                      echo $row['kulam'];
                      echo "</td><td>";
                      echo $row['kovil'];
                      echo "</td><td>";
                      echo $row['pincode'];
                      echo "</td><td>";
                      echo $row['status'];
                      echo "</td><td>";
                      echo '<form method="POST" action="">
                      <button type="button" class="btn btn-outline-primary rounded-pill" data-bs-toggle="dropdown">
                       Edit
                      </button>
                      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow ">
                      <li>
                      <button class="dropdown-item d-flex align-items-center" name="approve">
                      <i class="bi bi-bookmark-check-fill"></i>
                      <span>Approve</span>
                      </button>
                      </li>
                      <li>
                      <button class="dropdown-item d-flex align-items-center" name="disapprove">
                      <i class="bi bi-bookmark-x-fill"></i>
                      <span>DisApprove</span>
                      </button>
                      </li>
                      </ul>
                      </form>
                      ';
                      echo "</td></tr>";
                    }/*
                    while($row = mysqli_fetch_assoc($sqldata)){
                      $id= $row['id'];
                      if(isset($_POST["approve"])){
                        $sql2 = "UPDATE students SET status='Approved' WHERE id= '$id'";
                        $run = mysqli_query($conn , $sql2);
                      } elseif(isset($_POST["disapprove"])){
                        $sql2 = "UPDATE students SET status='Disapproved' WHERE id= '$id'";
                        $run = mysqli_query($conn , $sql2);
                      } 
                    }*/
                      ?>
                  </tbody>
                </table>
                </div>
                <!-- End Table with stripped rows -->

              </div>

            </div>
    </section>

  </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>