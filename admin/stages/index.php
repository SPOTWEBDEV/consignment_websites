<?php 
include('../../server/connection.php');
include('../../server/authorization.php'); 

// Get all users (not directly used here but kept for your logic)
$queryfac = mysqli_query($connection, "SELECT * FROM `user`");
$queryfacnum = mysqli_num_rows($queryfac);

function generateRandomFACCode($num) {
    $randomNumber = str_pad(rand(0, 999999999), 9, '0', STR_PAD_LEFT);
    $facCode = 'FAC' . $randomNumber . $num;
    return $facCode;
}

// ============= FETCH DATA FOR EDIT ============
$editData = null;
if (isset($_GET['edit'])) {
    $edit_id = $_GET['edit'];
    $track   = $_GET['track'];
    $queryEdit = mysqli_query($connection, "SELECT * FROM `stages` WHERE `id`='$edit_id'");
    $editData = mysqli_fetch_assoc($queryEdit);
}

// ============= DELETE FUNCTIONALITY ============
if (isset($_GET['del'])) {
    $del_id = $_GET['del'];
    $track  = $_GET['track'];

    $query = mysqli_query($connection, "DELETE FROM `stages` WHERE `id`='$del_id'");

    if ($query) {
        echo "<script> location.href='index.php?track=$track'  </script> ";
    } else {
        echo "<script> alert('UNABLE TO DELETE')  </script> ";
    }
}

// ============= UPDATE FUNCTIONALITY ============
if (isset($_POST['update'])) {
    $date    = $_POST['date'];
    $country = $_POST['country'];
    $status  = $_POST['status'];
    $track   = $_GET['track'];
    $edit_id = $_GET['edit'];

    $sql = mysqli_query($connection, 
        "UPDATE `stages` SET `date`='$date', `country`='$country', `status`='$status' 
         WHERE `id`='$edit_id'");

    if ($sql) {
        echo "<script> location.href='index.php?track=$track' </script>";
    } else {
        echo "<script> alert('Updating stage failed') </script>";
    }
}

// ============= ADD FUNCTIONALITY ============
if (isset($_POST['sumit'])) {
    $date    = $_POST['date'];
    $country = $_POST['country'];
    $status  = $_POST['status'];
    $track   = $_GET['track'];

    $sql = mysqli_query($connection, 
        "INSERT INTO `stages`(`track`, `country`, `status`,`date`) 
         VALUES ('$track','$country','$status','$date')");

    if ($sql) {
        echo "<script>   location.href='index.php?track=$track' </script> ";
    } else {
        echo "<script> alert('adding stages failed')  </script> ";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - <?php echo $sitename ?></title>
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>

<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
        <a href="index.php" class="logo d-flex align-items-center">
            <img src="../assets/img/logo.png" alt="">
            <span class="d-none d-lg-block">NiceAdmin</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>
</header>

<?php include('../components/sidebar.php'); ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1> Stage Shipment </h1>
    </div>

    <!-- ======= Form Section ======= -->
    <section class="section">
        <div class="row">
            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo $editData ? "Edit Stage" : "Add Stage"; ?>
                        </h5>

                        <form class="row g-3" method="POST">

                            <div class="col-12">
                                <label for="date" class="form-label">Date</label>
                                <input type="date" name="date" class="form-control"
                                       value="<?php echo $editData ? $editData['date'] : ''; ?>" required>
                            </div>

                            <div class="col-12">
                                <label for="country" class="form-label">Location</label>
                                <input type="text" name="country" class="form-control"
                                       value="<?php echo $editData ? $editData['country'] : ''; ?>" required>
                            </div>

                            <div class="col-12">
                                <label for="status" class="form-label">Status</label>
                                <select name="status" class="form-control" required>
                                    <option value="">Select</option>
                                    <option value="current" <?php if ($editData && $editData['status'] == 'current') echo 'selected'; ?>>Current Country</option>
                                    <option value="previouse" <?php if ($editData && $editData['status'] == 'previouse') echo 'selected'; ?>>Previous</option>
                                </select>
                            </div>

                            <div class="">
                                <?php if ($editData) { ?>
                                    <button type="submit" name="update" class="btn btn-warning">Update</button>
                                    <a href="index.php?track=<?php echo $_GET['track']; ?>" class="btn btn-secondary">Cancel</a>
                                <?php } else { ?>
                                    <button type="submit" name="sumit" class="btn btn-primary">Submit</button>
                                <?php } ?>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Form Section -->

    <!-- ======= Table Section ======= -->
    <div class="col-12">
        <div class="card recent-sales overflow-auto">
            <div class="card-body">
                <h5 class="card-title">Stages <span>| List</span></h5>

                <table class="table table-borderless datatable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Date</th>
                            <th>Country</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
                    $id = $_GET['track'];
                    $query = mysqli_query($connection, "SELECT * FROM `stages` WHERE `track`='$id'");
                    if (mysqli_num_rows($query) > 0) {
                        $count = 0;
                        while ($details = mysqli_fetch_assoc($query)) {
                            $count++;
                    ?>
                        <tr>
                            <td><?php echo $count; ?></td>
                            <td><?php echo $details['date']; ?></td>
                            <td><?php echo $details['country']; ?></td>
                            <td><?php echo $details['status']; ?></td>
                            <td>
                                <a href="?track=<?php echo $details['track']; ?>&edit=<?php echo $details['id']; ?>">
                                    <span class="badge bg-warning" style="padding:7px;">Edit</span>
                                </a>
                                <a href="?track=<?php echo $details['track']; ?>&del=<?php echo $details['id']; ?>" 
                                   onclick="return confirm('Are you sure you want to delete this stage?');">
                                    <span class="badge bg-danger" style="padding:7px;">Delete</span>
                                </a>
                            </td>
                        </tr>
                    <?php
                        }
                    }
                    ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</main>

<footer id="footer" class="footer">
    <div class="copyright">
        &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
</footer>

<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/main.js"></script>
</body>
</html>
