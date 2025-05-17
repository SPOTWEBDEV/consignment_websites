<?php include('../../server/connection.php');
include('../../server/authorization.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="different types of invoice/bill/tally designed with friendly and markup using modern technology, you can use it on any type of website invoice, fully responsive and w3 validated.">
    <meta name="keywords" content="bill , receipt, tally, invoice, cash memo, invoice html, invoice pdf, invoice print, invoice templates, multipurpose invoice, template, booking invoice, general invoice, clean invoice, catalog, estimate, proposal">
    <meta name="author" content="initTheme">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo  $sitename ?> Shipment Invoice </title>
    <link rel="icon" type="image/x-icon" sizes="20x20" href="assets/images/icon/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/main-style.css">

    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>


</head>

<body class="section-bg-one">

    <?php
    $track = $_GET['track'];
    $sql = mysqli_query($connection, "SELECT details.*, user.* 
    FROM details 
    JOIN user ON details.track = user.track
    WHERE details.track = '$track' AND user.track = '$track'");

    while ($info = mysqli_fetch_assoc($sql)) {
    ?>

        <main class="container invoice-wrapper" id="download-section">
            <!-- Invoice Top -->
            <div class="invoice-top">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 text-center text-sm-start mb-3 mb-sm-1">
                        <a href="index.html"><img style="height: 85px;" src="<?php echo $domain ?>assets/images/logo_2.png" title="Invoice" alt="Invoice"></a>
                    </div>
                    <hr>
                    <div class="col-sm-6">
                        <strong>Note:</strong> For inquiries or any kind of issues, contact: <br>
                        <strong><?php echo $siteemail ?></strong><br>
                        +1 (206) 638-3417
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6"><strong>Date:</strong> <?php echo $info['shippment_date'] ?></div>
                        <div class="col-sm-6 text-sm-end"><strong>Invoice No:</strong> <?php echo $info['track'] ?></div>
                    </div>
                    <hr>
                </div>

                <!-- Invoice Details -->
                <div class="invoice-details border-top mt-20 pt-20">
                    <div class="row">
                        <div class="col-sm-6 text-sm-end order-sm-1">
                            <strong class="text-18 mb-3 d-inline-block">Sender Info:</strong>
                            <address class="mb-4">
                                <strong>Name:</strong> <?php echo $info['sender_name'] ?><br>
                                <strong>Phone:</strong> <?php echo $info['sender_phone'] ?><br>
                                <strong>Email:</strong> <?php echo $info['sender_email'] ?><br>
                                <strong>Address:</strong> <?php echo $info['sender_address'] ?>
                            </address>
                        </div>
                        <div class="col-sm-6 order-sm-0">
                            <strong class="text-18 mb-3 d-inline-block">Shipment To:</strong>
                            <address class="mb-4">
                                <strong>Name:</strong> <?php echo $info['receiver_name'] ?><br>
                                <strong>Phone:</strong> <?php echo $info['receiver_phone'] ?><br>
                                <strong>Email:</strong> <?php echo $info['receiver_email'] ?><br>
                                <strong>Address:</strong> <?php echo $info['receiver_address'] ?>
                            </address>
                        </div>
                    </div>
                </div>

                <!-- Invoice Table -->
                <div class="card mb-3">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="card-header">
                                    <tr>
                                        <td class="col-3"><strong>Weight (kg)</strong></td>
                                        <td class="col-3"><strong>Tracking Number</strong></td>
                                        <td class="col-4"><strong>Description</strong></td>
                                        <td class="col-2 text-center"><strong>Shipping From</strong></td>
                                        <td class="col-1 text-center"><strong>Destination</strong></td>
                                        <td class="col-1 text-center"><strong>Arrival Date</strong></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?php echo $info['weight'] ?></td>
                                        <td><?php echo $info['track'] ?></td>
                                        <td><?php echo $info['description'] ?></td>
                                        <td class="text-center"><?php echo $info['current_country'] ?></td>
                                        <td class="text-center"><?php echo $info['destination'] ?></td>
                                        <td class="text-center"><?php echo $info['arrival_date'] ?></td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="5" class="text-end"><strong>Paid Fee:</strong></td>
                                        <td><?php echo $money . number_format($info['paid_fee'], 2) ?> (Paid)</td>
                                    </tr>
                                    <?php

                                    if ($info['total_fee'] != $info['paid_fee']) { ?>

                                        <tr>
                                            <td colspan="5" class="text-end"><strong>Unpaid Amount:</strong></td>
                                            <td><?php echo number_format($info['total_fee'] - $info['paid_fee'], 2) ?></td>
                                        </tr>

                                    <?php }

                                    ?>

                                    <tr>
                                        <td colspan="5" class="text-end border-bottom-0"><strong>Total Fee:</strong></td>
                                        <td><?php echo $money . number_format($info['total_fee'], 2) ?></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
        </main>

    <?php } ?>

    <!-- Invoice Bottom -->
    <div class="text-center mt-5 mb-4 regular-button">
        <div class="d-print-none d-flex justify-content-center flex-wrap gap-10">
            <a href="javascript:window.print()" class="btn-primary-fill">Print Invoice</a>
            <a href="../dashboard/" class="btn-primary-fill">Home</a>
        </div>
    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery-3.7.0.min.js"></script>
    <script src="assets/js/plugin.js"></script>
    <script src="assets/js/mian.js"></script>

</body>



</html>