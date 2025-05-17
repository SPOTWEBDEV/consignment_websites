<?php include('../../server/connection.php');
include('../../server/authorization.php'); ?>
<?php


$queryfac = mysqli_query($connection, "SELECT * FROM `user`");
$queryfacnum = mysqli_num_rows($queryfac);
function generateRandomFACCode($num)
{

    $randomNumber = str_pad(rand(0, 999999999), 9, '0', STR_PAD_LEFT);
    $facCode = 'FAC' . $randomNumber . $num;
    return $facCode;
}




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



    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <?php include('../components/sidebar.php'); ?>
    <!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1> Add Issues </h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Add Issues</li>

                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">


                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Shipent billoard</h5>

                            <?php

                            if (isset($_POST['summit'])) {

                                $track = $_GET['track'];
                                $status = $_POST['status'];
                                $description = $_POST['description'];

                                $query = mysqli_query($connection, "INSERT INTO `issues`(`description`, `track`,`status`) VALUES ('$description','$track','$status')");

                                if ($query) {

                                    echo "<script> location.href='../list/'  </script> ";
                                } else {


                                    echo "<script> alert('UNABLE TO DELETE')  </script> ";
                                }
                            }
                            ?>

                            <!-- Vertical Form -->
                            <form class="row g-3" method="POST">

                                <!--sender information  -->
                                <div class="col-12">
                                    <label for="status" class="form-label">Status</label>
                                    <select name="status" id="status">
                                        <option value="pending">Pending</option>
                                        <option value="resolve">Resolve</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="inputEmail4" class="form-label">Desription</label>
                                    <input type="text" name="description" class="form-control" id="inputEmail4" required>
                                </div>

                                <div class="">

                                    <button type="submit" name="summit" class="btn btn-primary">Submit</button>

                                </div>
                            </form><!-- Vertical Form -->

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