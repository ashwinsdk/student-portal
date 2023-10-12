<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require "config.php";

$email = $_GET['email'];
$sqlget = "select * from students";
$sqldata = mysqli_query($conn, $sqlget);

$sqlname = " SELECT * FROM students WHERE email = '$email'";
$result = mysqli_query($conn, $sqlname);

   if(mysqli_num_rows($result) > 0){
    
    $row1 = mysqli_fetch_array($result);
    $_SESSION['user_name'] = $row1['login_name'];
  }

/*
$email=$_GET['email'];
$sql1="select * from students where email =".$email;
$query=mysqli_query($conn,$sql1);

$row=mysqli_fetch_assoc($query);
if(isset($_POST["submit"])){

       $status = $_POST["status"];
   
       $sql2 = "UPDATE students SET status='$status'
         WHERE email='$email'";
         
   
         $run = mysqli_query($conn , $sql2);
         
         if($run){
            echo "
            <div class='alert alert-success'>
            successfully Approved
            </div>
            ";
            
         }else{
             echo "
             <div class='alert alert-danger'>
            Failed to Approve
            </div>
             ";
         }
   
}
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>EDIT</title>
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
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Apporve/Disapprove</h5>

              <!-- Multi Columns Form -->
              <form class="row g-3" method="GET">
                <div class="col-md-12">
                  <label for="inputName5" class="form-label">Email</label>
                  <select id="inputState" class="form-select" name="email">
                    <option selected>Choose...</option>
                    
                    <?php
                         while($row = mysqli_fetch_assoc($sqldata)){
                          echo "<option>";
                          echo $row['email'];
                          echo "</option>";
                        }
                    ?>
                    
                  </select>
                </div>

                <div class="col-md-6">
                  <label for="inputEmail5" class="form-label">Name</label>
                  <input type="" class="form-control" id="inputEmail5" value="<?php echo $_SESSION['user_name'] ?>" disabled>
                </div>

                <div class="col-md-6">
                  <label for="inputPassword5" class="form-label" name="status">Apporve/Disapprove</label>
                  <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>Approve</option>
                    <option>Disapprove</option>
                  </select>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End Multi Columns Form -->

            </div>
          </div>
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