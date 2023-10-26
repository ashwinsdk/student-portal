<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
require 'func.php';

//Insert values into registeration table
connect();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Register</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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

  <main>
    <div class="container-xxl">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container-xxl">
          <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="#" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">Student-portal</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>

                  <!-- Form -->
                  <form class="row g-1 needs-validation" method="POST" action="" novalidate >
                    <?php
                    register();
                    ?>
                    <div class="col-12">
                      <input type="text" name="name" class="form-control" id="yourName" placeholder="Your Name" required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label"> </label>
                      <input type="email" name="email" class="form-control" id="yourEmail" placeholder="Your Email" required>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>

                    <div class="col-md-6">
                      <label for="yourPassword" class="form-label"></label>
                      <input type="password" name="password" class="form-control" id="yourPassword" placeholder="Password" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>
                    <div class="col-md-6">
                      <label for="yourPassword" class="form-label"> </label>
                      <input type="password" name="cpassword" class="form-control" id="yourPassword" placeholder="Confirm Password" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>
                    
                    <div class="col-12">
                      <label for="yourName" class="form-label"></label>
                      <input type="text" name="father_name" class="form-control" id="yourName" placeholder="Father's Name" required>
                      <div class="invalid-feedback">Please, enter your father's name!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourName" class="form-label"></label>
                      <input type="text" name="mother_name" class="form-control" id="yourName" placeholder="Mother's Name" required>
                      <div class="invalid-feedback">Please, enter your mother's name!</div>
                    </div>

                    <div class="col-md-6">
                      <label for="yourName" class="form-label"></label>
                      <input type="text" name="kulam" class="form-control" id="yourName" placeholder="Kulam" required>
                      <div class="invalid-feedback">Please, enter your kulam!</div>
                    </div>

                    <div class="col-md-6">
                      <label for="yourName" class="form-label"></label>
                      <input type="text" name="kovil" class="form-control" id="yourName" placeholder="Kovil" required>
                      <div class="invalid-feedback">Please, enter your kovil!</div>
                    </div>

                    <div class="col-md-6">
                      <label for="yourName" class="form-label"></label>
                      <input type="text" name="mobile_no" class="form-control" id="yourName" placeholder="Mobile Number" required>
                      <div class="invalid-feedback">Please, enter your mobile number!</div>
                    </div>

                    <div class="col-md-6">
                      <label for="yourName" class="form-label"></label>
                      <input type="text" name="pincode" class="form-control" id="yourName" placeholder="Pincode" required>
                      <div class="invalid-feedback">Please, enter your pincode!</div>
                    </div>

                    <div class="col-12">
                       <br><p class="text-center small">Already have an account? <a href="login.php">Log in</a></p>
                    </div>
                    
                    <div class="text-center">
                      <button class="btn btn-outline-primary rounded-pill w-50" name="register" type="submit">Create Account</button>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>

      </section>
      

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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