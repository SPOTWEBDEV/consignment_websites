<?php include('../../saver/connection.php');
include('../../saver/authorization.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - NiceAdmin Bootstrap Template</title>
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

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-bell"></i>
                        <span class="badge bg-primary badge-number">4</span>
                    </a><!-- End Notification Icon -->

                    <!-- End Notification Dropdown Items -->

                </li><!-- End Notification Nav -->

                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-chat-left-text"></i>
                        <span class="badge bg-success badge-number">3</span>
                    </a><!-- End Messages Icon -->

                    <!-- End Messages Dropdown Items -->

                </li><!-- End Messages Nav -->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="../assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo  $name;   ?></span>
                    </a><!-- End Profile Iamge Icon -->


                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <?php include('../components/sidebar.php'); ?>
    <!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Manage shipment</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">edit Shippmet</li>

                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">


                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Shipent Information</h5>

                            


                            <?php 

                                $track =  $_GET['track'];

                                $sql = mysqli_query($connection,"SELECT * FROM `details` WHERE `track`='$track'");

                                while($details = mysqli_fetch_assoc($sql)){?>


                                        <form class="row g-3" method="POST">
                                            
                                            
                                            
                                            <div class="col-12">
                                                <label for="inputNanme4" class="form-label">Tracking id </label>
                                                <input type="text" name="track" class="form-control" id="inputNanme4" value="<?php echo $details['track'];  ?>" readonly>
                                            </div>
                                            
                                            <div class="col-12">
                                                <label for="inputNanme4" class="form-label">Description</label>
                                                <input type="text" name="description" value="<?php echo $details['description'];?>" class="form-control" id="inputNanme4" required>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputEmail4" class="form-label">Insurance</label>
                                                <input type="text" name="insurance" value="<?php echo $details['insurance'];?>" class="form-control" id="inputEmail4" required>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputPassword4" class="form-label">Weight</label>
                                                <input type="text" name="weight" value="<?php echo $details['weight'];?>" class="form-control" id="inputPassword4" required>
                                            </div>
                                            <div class="col-12">

                                                <label for="inputAddress" class="form-label">Current Country</label>
                                                <select name="current_country" id="select_country" class="form-control" id="inputAddress" required>



                                                </select>
                                            </div>
                                            <div class="col-12">

                                                <label for="inputAddress" class="form-label">Destination</label>
                                                <select name="destination" id="select_country" class="form-control" id="inputAddress" required>



                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputAddress" class="form-label">Paid Fee</label>
                                                <input type="text" name="paid_fee" value="<?php echo $details['paid_fee'];?>" class="form-control" id="inputAddress" required>
                                            </div>


                                            <div class="col-12">
                                                <label for="inputNanme4" class="form-label">Total Fee</label>
                                                <input type="text" name="total_fee" value="<?php echo $details['total_fee'];?>" class="form-control" id="inputNanme4" required>
                                            </div>
                                            <div class="col-12">

                                                <label for="inputAddress" class="form-label">Status</label>
                                                <select name="status" class="form-control" id="inputAddress" required>

                                                    <option value="">select</option>
                                                    <option value="on transit">on transit</option>
                                                    <option value="stop">stop</option>
                                                    <option value="arrived">arrived</option>



                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputEmail4" class="form-label">Shipment Date</label>
                                                <input type="date" name="shipment_date"  class="form-control" id="inputEmail4" required>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputPassword4" class="form-label">Arrival Date</label>
                                                <input type="date" name="arrival_date" class="form-control" id="inputPassword4" required>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputPassword4" class="form-label">Message</label>
                                                <input type="text" name="message" value="<?php echo $details['message'];?>" class="form-control" id="inputPassword4" required>
                                            </div>
                                        
                                            <div class="">

                                                <button type="submit" name="sumit" class="btn btn-primary">Submit</button>

                                            </div>

                                        </form>




                              <?php  }

                            ?>
                            
                        </div>
                    </div>



                </div>
            </div>
        </section>

    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </footer><!-- End Footer -->

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







?>


<?php

    if (isset($_POST['sumit'])) {
        

        $description=$_POST['description'];
        $insurance=$_POST['insurance'];
        $weight=$_POST['weight'];
        $current_country=$_POST['current_country'];
        $destination=$_POST['destination'];
        $paid_fee=$_POST['paid_fee'];
        $total_fee=$_POST['total_fee'];
        $status=$_POST['status'];
        $shipment_date=$_POST['shipment_date'];
        $arrival_date=$_POST['arrival_date'];
        $message=$_POST['message'];
        $track=$_POST['track'];

        $sql = mysqli_query($connection,"UPDATE `details` SET `description`=' $description',`insurance`='$insurance',`weight`='$weight',`paid_fee`='$paid_fee',`total_fee`='$total_fee',`status`='$status',`destination`='$destination',`current_country`='$current_country',`shippment_date`='$shipment_date',`arrival_date`='$arrival_date',`message`='$message' WHERE `track`= '$track'");

        if ($sql){

            echo "<script> location.href='../print/index.php?track=$track'</script>";

        }else{

            echo "<script> alert('unable to manage this shippment') </script>";
        }




    }


?>