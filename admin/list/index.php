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
  <link rel="preconnect" href="https://fonts.googleapis.com">
                  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
                           rel="stylesheet">
</head>

<body>

<style>

  *{
    font-family:'Poppins', sans-serif;
  }
  a{
     text-transform:capitalize;
     font-weight:300;
  }
   
</style>

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

        

        <

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php include('../components/sidebar.php'); ?>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-12">
          <div class="row">


            <!-- End Customers Card -->

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Shipping <span>| List</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col" style="white-space: nowrap;">#</th>
                        <th scope="col" style="white-space: nowrap;">SENDER NAME </th>
                        <th scope="col" style="white-space: nowrap;">SENDER EMAIL </th>
                        <th scope="col" style="white-space: nowrap;">RECEIVER NAME </th>
                        <th scope="col" style="white-space: nowrap;">TRACKING CODE</th>
                        <th scope="col" style="white-space: nowrap;">ACTION</th>

                      </tr>
                    </thead>
                    <tbody>


                      <?php


                      $query = mysqli_query($connection, "SELECT * FROM `user`");

                      if (mysqli_num_rows($query) > 0) {
                        $count = 0;
                        while ($details = mysqli_fetch_assoc($query)) {
                          $count++ ?>

                          <tr>
                            <th scope="row"><a href="#"><?php echo $count;; ?></a></th>
                            <td><?php echo $details['sender_name']; ?></td>
                            <td><?php echo $details['sender_email']; ?></td>                            
                            <td><?php echo $details['receiver_name']; ?></td>                            
                            <td><?php echo $details['track']; ?></td>
                            <td>

                               <div style="display:flex; gap:20px">
                                  <a href="../view/?track=<?php echo $details['track']; ?>"><span class="badge " style="background-color:blue;padding:7px;">View</span></a>

                            <a onclick="return confirm('Are you sure')" href="?del=<?php echo $details['id']; ?>&track=<?php echo $details['track']; ?>">
                                <span class="badge" style="background-color:red;padding:7px;">Delete</span>
                              </a>

                            <a href="../manage/?track=<?php echo $details['track']; ?>"><span class="badge" style="background-color:blue;padding:7px;">Manage</span></a>

                            <a href="../board/?track=<?php echo $details['track']; ?>"><span class="badge" style="background-color:blue;padding:7px;">Billboard</span></a>

                            <a href="../stages/?track=<?php echo $details['track']; ?>"><span class="badge" style="background-color:blue;padding:7px;">stages</span></a>
                               </div>

                            </td>

                            


                          </tr>


                      <?php  }
                      }

                      ?>


                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->



          </div>
        </div>


      </div>
    </section>

  </main><!-- End #main -->



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

</body>

</html>

<?php



if (isset($_GET['del'])) {

  $del_id = $_GET['del'];
  $track = $_GET['track'];

  $query1 = mysqli_query($connection, "DELETE FROM `user` WHERE `id`='$del_id'");
  $query2 = mysqli_query($connection, "DELETE FROM `details` WHERE `track`='$track'");

  if ($query1 && $query1) {

    echo "<script> location.href='index.php'  </script> ";
  } else {


    echo "<script> alert('UNABLE TO DELETE')  </script> ";
  }
}



?>