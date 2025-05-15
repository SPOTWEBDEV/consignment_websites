<?php include('../../saver/connection.php');
include('../../saver/authorization.php'); ?>
<?php

// Get the number of rows from the 'user' table
$queryfac = mysqli_query($connection, "SELECT * FROM user");
$queryfacnum = mysqli_num_rows($queryfac);

// Generate the tracking code by passing $queryfacnum to the function
$track = generateRandomFACCode($queryfacnum);  // Pass the number of rows as the argument




?>
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

        

               

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <?php include('../components/sidebar.php'); ?>
    <!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1> New Shippmet </h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">new Shippmet</li>

                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">


                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Shipent Information</h5>

                            
                            
                            <form class="row g-3" method="POST">

                                <!--sender information  -->
                                <div class="col-12">
                                    <label for="inputNanme4" class="form-label">Sender Full Name</label>
                                    <input type="text" name="sender_name" class="form-control" id="inputNanme4" required>
                                </div>
                                <div class="col-12">
                                    <label for="inputEmail4" class="form-label">Sender Email</label>
                                    <input type="text" name="sender_email" class="form-control" id="inputEmail4" required>
                                </div>
                                <div class="col-12">
                                    <label for="inputPassword4" class="form-label">Sender Phone</label>
                                    <input type="text" name="sender_phone" class="form-control" id="inputPassword4" required>
                                </div>
                                <div class="col-12">

                                    <label for="inputAddress" class="form-label">Sender Country</label>
                                    <select name="sender_country" id="select_country" class="form-control" id="inputAddress" required>



                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">Sender Address</label>
                                    <input type="text" name="sender_address" class="form-control" id="inputAddress" required>
                                </div>

                                <!-- receiver information -->

                                <div class="col-12">
                                    <label for="inputNanme4" class="form-label">Receiver Full Name</label>
                                    <input type="text" name="receiver_name" class="form-control" id="inputNanme4" required>
                                </div>
                                <div class="col-12">
                                    <label for="inputEmail4" class="form-label">Receiver Email</label>
                                    <input type="email" name="receiver_email" class="form-control" id="inputEmail4" required>
                                </div>
                                <div class="col-12">
                                    <label for="inputPassword4" class="form-label">Receiver Phone</label>
                                    <input type="text" name="receiver_phone" class="form-control" id="inputPassword4" required>
                                </div>

                                <div class="col-12">

                                    <label for="inputAddress" class="form-label">Receiver Country</label>
                                    <select name="receiver_country" id="select_country" class="form-control" id="inputAddress" required>






                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">Receiver Address</label>
                                    <input type="text" name="receiver_address" class="form-control" id="inputAddress" required>
                                </div>

                                <div class="">
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>

                                </div>
                            </form>


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

// Function to generate a random FAC code
function generateRandomFACCode($num) {
    $randomNumber = str_pad(rand(0, 999999999), 9, '0', STR_PAD_LEFT);
    $facCode = 'FAC' . $randomNumber . $num;
    return $facCode;
}



// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Get the form data
$sender_name = mysqli_real_escape_string($connection, $_POST['sender_name']);
$sender_email = mysqli_real_escape_string($connection, $_POST['sender_email']);
$sender_phone = mysqli_real_escape_string($connection, $_POST['sender_phone']);
$sender_country = mysqli_real_escape_string($connection, $_POST['sender_country']);
$sender_address = mysqli_real_escape_string($connection, $_POST['sender_address']);
$receiver_name = mysqli_real_escape_string($connection, $_POST['receiver_name']);
$receiver_email = mysqli_real_escape_string($connection, $_POST['receiver_email']);
$receiver_phone = mysqli_real_escape_string($connection, $_POST['receiver_phone']);
$receiver_country = mysqli_real_escape_string($connection, $_POST['receiver_country']);
$receiver_address = mysqli_real_escape_string($connection, $_POST['receiver_address']);

    
    
    
    // Get the current number of rows from the 'user' table to generate the tracking code
    $queryfac = mysqli_query($connection, "SELECT * FROM user");
    $queryfacnum = mysqli_num_rows($queryfac);

    // Generate a tracking code using the number of rows
    $track = generateRandomFACCode($queryfacnum);

    // Insert the data into the database
    $sql1 = mysqli_query($connection,"INSERT INTO user(sender_name, sender_email, sender_phone, sender_country, sender_address, receiver_name, receiver_email, receiver_phone, receiver_country, receiver_address, track) VALUES ('$sender_name','$sender_email','$sender_phone','$sender_country','$sender_address',' $receiver_name',' $receiver_email',' $receiver_phone','$receiver_country',' $receiver_address','$track')");
    $sql2 = mysqli_query($connection,"INSERT INTO `details`(`track`) VALUES ('$track')");
    // Execute the query
    
    if ($sql1 && $sql2) {
        echo "<script> location.href='../list/' </script>";
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}



?>



