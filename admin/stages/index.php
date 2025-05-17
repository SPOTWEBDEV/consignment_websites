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

    

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <?php include('../components/sidebar.php'); ?>
    <!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1> Stage Shippmet </h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Stages</li>

                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">


                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Stages info</h5>



                            <form class="row g-3" method="POST">


                                <div class="col-12">
                                    <label for="inputEmail4" class="form-label">Date</label>
                                    <input type="date" name="date" class="form-control" id="inputEmail4" required>
                                </div>
                                <div class="col-12">
                                    <label for="inputEmail4" class="form-label">location</label>
                                    <input type="text" name="country" class="form-control" id="inputEmail4" required>
                                </div>
                                <!--<div class="col-12">-->

                                <!--    <label for="inputAddress" class="form-label">Country</label>-->
                                <!--    <select name="country" id="select_country" class="form-control" id="inputAddress" required>-->



                                <!--    </select>-->
                                <!--</div>-->
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">Status</label>
                                    <select name="status" class="form-control" id="inputAddress" required>

                                        <option value="">select</option>
                                        <option value="current">current Country</option>
                                        <option value="previouse">previouse</option>



                                    </select>
                                </div>

                                <div class="">
                                    <button type="submit" name="sumit" class="btn btn-primary">Submit</button>

                                </div>


                            </form>


                        </div>
                    </div>



                </div>
            </div>
        </section>

        <div class="col-12">
            <div class="card recent-sales overflow-auto">

                <div class="card-body">
                    <h5 class="card-title">Stages <span>| List</span></h5>

                    <table class="table table-borderless datatable">
                        <thead>
                            <tr>
                                <th scope="col" style="white-space: nowrap;">#</th>
                                <th scope="col" style="white-space: nowrap;"> DATE </th>
                                <th scope="col" style="white-space: nowrap;">COUNTRY </th>
                                <th scope="col" style="white-space: nowrap;">STATUS </th>
                                <th scope="col" style="white-space: nowrap;">ACTION </th>

                            </tr>
                        </thead>
                        <tbody>


                            <?php

                            $id = $_GET['track'];
                            $query = mysqli_query($connection, "SELECT * FROM `stages` WHERE `track`='$id'");

                            if (mysqli_num_rows($query) > 0) {
                                $count = 0;
                                while ($details = mysqli_fetch_assoc($query)) {
                                    $count++ ?>

                                    <tr>
                                        <th scope="row"><a href="#"><?php echo $count;; ?></a></th>
                                        <td><?php echo $details['date']; ?></td>
                                        <td><?php echo $details['country']; ?></td>
                                        <td><?php echo $details['status']; ?></td>
                                        <td><a href="?track=<?php echo $details['track']; ?>&del=<?php echo $details['id']; ?>"><span class="badge" style="background-color:red;padding:7px;">Delete</span></a></td>


                                    </tr>


                            <?php  }
                            }

                            ?>


                        </tbody>
                    </table>

                </div>

            </div>
        </div



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



if (isset($_GET['del'])) {

    $del_id = $_GET['del'];
    $track = $_GET['track'];

    $query = mysqli_query($connection, "DELETE FROM `stages` WHERE `id`='$del_id'");

    if ($query) {

        echo "<script> location.href='index.php?track=$track'  </script> ";
    } else {


        echo "<script> alert('UNABLE TO DELETE')  </script> ";
    }
}

if (isset($_GET['mode'])) {

    $mode = $_GET['mode'];
    $track = $_GET['track'];
    $id = $_GET['id'];

    $query = mysqli_query($connection, "UPDATE `stages` SET `status`='$mode' WHERE `id`='$id'");

    if ($query) {

        echo "<script> location.href='index.php?track=$track'  </script> ";
    } else {


        echo "<script> alert('UNABLE TO stage')  </script> ";
    }
}



if (isset($_POST['sumit'])) {


    $date = $_POST['date'];
    $country = $_POST['country'];
    $status = $_POST['status'];
    $track = $_GET['track'];

    $sql = mysqli_query($connection, "INSERT INTO `stages`(`track`, `country`, `status`,`date`) VALUES ('$track','$country','$status','$date')");


    if ($sql) {

        echo "<script>   location.href='index.php?track=$track' </script> ";
    } else {


        echo "<script> alert('adding stages failed')  </script> ";
    }
}



?>