<?php include('../../saver/connection.php');
include('../../saver/authorization.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - <?php echo $sitename
 ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="../assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">NiceAdmin</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
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


                <li class="nav-item dropdown">

                   
                    <!-- End Messages Dropdown Items -->

                </li><!-- End Messages Nav -->

              

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <?php include('../components/sidebar.php'); ?>
    <!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>View Shipping</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">View Shipping</li>

                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">


                <div class="col-lg-12">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Shipping Information</h5>

      <?php 
      $track = $_GET['track'];

      // Fetch from details
      $sqlDetails = mysqli_query($connection, "SELECT * FROM `details` WHERE `track`='$track'");
      $details = mysqli_fetch_assoc($sqlDetails);

      // Fetch from user
      $sqlUser = mysqli_query($connection, "SELECT * FROM `user` WHERE `track`='$track'");
      $user = mysqli_fetch_assoc($sqlUser);

      if ($details && $user) {
      ?>

      <form class="row g-3" method="POST">
        <!-- Tracking ID -->
        <div class="col-12">
          <label class="form-label">Tracking ID</label>
          <input readonly type="text" name="track" class="form-control" value="<?php echo $details['track']; ?>" readonly>
        </div>

        <!-- Sender Info -->
        <h6 class="mt-4">Sender Information</h6>
        <div class="col-md-6">
          <label class="form-label">Name</label>
          <input type="text" name="sender_name" class="form-control" value="<?php echo $user['sender_name']; ?>" readonly>
        </div>
        <div class="col-md-6">
          <label class="form-label">Email</label>
          <input type="email" name="sender_email" class="form-control" value="<?php echo $user['sender_email']; ?>" readonly>
        </div>
        <div class="col-md-6">
          <label class="form-label">Phone</label>
          <input type="text" name="sender_phone" class="form-control" value="<?php echo $user['sender_phone']; ?>" readonly>
        </div>
        <div class="col-md-6">
          <label class="form-label">Country</label>
          <input type="text" name="sender_country" class="form-control" value="<?php echo $user['sender_country']; ?>" readonly>
        </div>
        <div class="col-12">
          <label class="form-label">Address</label>
          <input type="text" name="sender_address" class="form-control" value="<?php echo $user['sender_address']; ?>" readonly>
        </div>

        <!-- Receiver Info -->
        <h6 class="mt-4">Receiver Information</h6>
        <div class="col-md-6">
          <label class="form-label">Name</label>
          <input type="text" name="receiver_name" class="form-control" value="<?php echo $user['receiver_name']; ?>" readonly>
        </div>
        <div class="col-md-6">
          <label class="form-label">Email</label>
          <input type="email" name="receiver_email" class="form-control" value="<?php echo $user['receiver_email']; ?>" readonly>
        </div>
        <div class="col-md-6">
          <label class="form-label">Phone</label>
          <input type="text" name="receiver_phone" class="form-control" value="<?php echo $user['receiver_phone']; ?>" readonly>
        </div>
        <div class="col-md-6">
          <label class="form-label">Country</label>
          <input type="text" name="receiver_country" class="form-control" value="<?php echo $user['receiver_country']; ?>" readonly>
        </div>
        <div class="col-12">
          <label class="form-label">Address</label>
          <input type="text" name="receiver_address" class="form-control" value="<?php echo $user['receiver_address']; ?>" readonly>
        </div>

        <!-- Shipment Details -->
        <h6 class="mt-4">Shipment Details</h6>
        <div class="col-12">
          <label class="form-label">Description</label>
          <input type="text" name="description" value="<?php echo $details['description'];?>" class="form-control" required>
        </div>

        <div class="col-md-6">
          <label class="form-label">Weight (kg)</label>
          <input type="text" name="weight" value="<?php echo $details['weight'];?>" class="form-control" required>
        </div>

        <div class="col-md-6">
          <label class="form-label">Shipping From Country</label>
          <input type="text" name="current_country" value="<?php echo $details['current_country'];?>" class="form-control" required>
        </div>

        <div class="col-md-6">
          <label class="form-label">Destination</label>
          <input type="text" name="destination" value="<?php echo $details['destination'];?>" class="form-control" required>
        </div>

        <div class="col-md-6">
          <label class="form-label">Paid Fee (<?php echo $money ?>)</label>
          <input type="text" name="paid_fee" value="<?php echo $details['paid_fee'];?>" class="form-control" required>
        </div>

        <div class="col-md-6">
          <label class="form-label">Total Fee (<?php echo $money ?>)</label>
          <input type="text" name="total_fee" value="<?php echo $details['total_fee'];?>" class="form-control" required>
        </div>

        <div class="col-md-6">
          <label class="form-label">Status</label>
          <select name="status" class="form-control" required>
            <option value="<?php echo $details['status'];?>"><?php echo ucfirst($details['status']);?></option>
            <option value="on transit">On Transit</option>
            <option value="stop">Stop</option>
            <option value="arrived">Arrived</option>
          </select>
        </div>

        <div class="col-md-6">
          <label class="form-label">Shipment Date</label>
          <input value="<?php echo $details['shippment_date'];?>" type="date" name="shipment_date" class="form-control" required>
        </div>

        <div class="col-md-6">
          <label class="form-label">Arrival Date</label>
          <input value="<?php echo $details['arrival_date'];?>" type="date" name="arrival_date" class="form-control" required>
        </div>

        
      </form>

      <?php 
      } else {
        echo "<p>No data found for this tracking ID.</p>";
      }
      ?>

    </div>
  </div>
</div>

            </div>
        </section>

    </main>



    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/chart.js/chart.umd.js"></script>
    <script src="../assets/vendor/echarts/echarts.min.js"></script>
    <script src="../assets/vendor/quill/quill.js"></script>
    <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>
    <script src="../components/country.js"></script>

</body>

</html>

<?php






