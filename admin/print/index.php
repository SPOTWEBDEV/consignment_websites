<?php  include('../../saver/connection.php'); include('../../saver/authorization.php'); ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from init-bill.vercel.app/regular-invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Oct 2024 10:27:36 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="different types of invoice/bill/tally designed with friendly and markup using modern technology, you can use it on any type of website invoice, fully responsive and w3 validated.">
    <meta name="keywords" content="bill , receipt, tally, invoice, cash memo, invoice html, invoice pdf, invoice print, invoice templates, multipurpose invoice, template, booking invoice, general invoice, clean invoice, catalog, estimate, proposal">
    <meta name="author" content="initTheme">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Acestackhub Shipment Invoice </title>
    <link rel="icon" type="image/x-icon" sizes="20x20" href="assets/images/icon/favicon.png">
    
    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/main-style.css">


</head>
<body class="section-bg-one">

    <?php 

        $track = $_GET['track'];
        $sql = mysqli_query($connection,"SELECT details.*, user.* 
        FROM details 
        JOIN user ON details.track = user.track
        WHERE details.track = '$track' AND user.track = '$track'");

        while($info = mysqli_fetch_assoc($sql)){

        
    ?>

    <main class="container invoice-wrapper" id="download-section">
        <!-- invoice Top -->
        <div class="invoice-top">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 text-center text-sm-start mb-3 mb-sm-1">
                    <a href="index.html"><img src="../../assets/images/logo2.png" title="invoice" alt="invoice"></a>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 text-center text-sm-end mb-3 mb-sm-1">
                    <h4 class="text-30 mb-0 mt-0">Invoice</h4>
                </div>
            </div>
            <hr>
            <div class="col-sm-6"><strong>Note:</strong> for enquires for any kind of issues contact<strong>:</strong> <br>support@acestackhub.com <br>+1 (206) 638-3417 <br> </div>
            <hr>
            <div class="row">
                <div class="col-sm-6"><strong>Date:</strong> <?php  echo $info['shippment_date'] ?></div>
                <div class="col-sm-6 text-sm-end"> <strong>Invoice No:</strong> 16835</div>
            </div>
            <hr>
        </div>
        <hr>
        <!-- invoice Details -->
        <div class="invoice-details border-top mt-20 pt-20">
            <div class="row">
                <div class="col-sm-6 text-sm-end order-sm-1">
                    <strong class="text-18 mb-3 d-inline-block">Sender info:</strong>
                    <address class="mb-4">
                        <strong>Name:</strong> <?php  echo $info['sender_name'] ?><br>
                        <strong>Phone:</strong> <?php  echo $info['sender_phone'] ?><br>
                        <strong>Email:</strong> <?php  echo $info['sender_email'] ?><br>
                        <strong>Address:</strong><?php  echo $info['sender_address'] ?>
                    </address>
                </div>
                <div class="col-sm-6 order-sm-0">
                    <strong class="text-18 mb-3 d-inline-block">Shippment To:</strong>
                    <address class="mb-4">
                        <strong>Name:</strong> <?php  echo $info['receiver_name'] ?><br>
                        <strong>Phone:</strong> <?php  echo $info['receiver_phone'] ?><br>
                        <strong>Email:</strong> <?php  echo $info['receiver_email'] ?><br>
                        <strong>Address:</strong> <?php  echo $info['receiver_address'] ?>
                    </address>
                </div>
            </div>
        </div>
        <!-- invoice descriptions -->
        <div class="card mb-3">
            <div class="card-body p-0">
                <div class="table-responsive">
                <table class="table mb-0">
                <thead class="card-header">
                    <tr>
                        <td class="col-3"><strong>Weight</strong></td>
                        <td class="col-3"><strong style="white-space: nowrap;">tracking Number</strong></td>
                        <td class="col-4"><strong>Description</strong></td>
                        <td class="col-2 text-center" style="white-space: nowrap;"><strong>Current Location</strong></td>
                        <td class="col-1 text-center"><strong>Destination</strong></td>
                        <td class="col-1 text-center" style="white-space: nowrap;"><strong>Arrival Date</strong></td>
                        
                    </tr>
                </thead>
                    <tbody>
                        <tr>
                            <td class="col-3"><?php  echo $info['weight'] ?></td>
                            <td class="col-3"><?php  echo $info['track'] ?></td>
                            <td class="col-4"><?php  echo $info['description'] ?></td>
                            <td class="col-2 text-center"><?php  echo $info['current_country'] ?></td>
                            <td class="col-1 text-center"><?php  echo $info['destination'] ?></td>
                            <td class="col-1 text-center"><?php  echo $info['arrival_date'] ?></td>
                            
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr  class="">
                            <td colspan="5" class="text-end"><strong>Sub Total:</strong></td>
                            <td >International Shipping Fee Of <?php  echo $info['paid_fee'] ?> Paid</td>
                        </tr>
                        <tr>
                            <td colspan="5" class="text-end border-bottom-0"><strong>Total:  </strong></td>
                            <td ><?php  echo $info['total_fee'] ?></td>
                        </tr>

                    </tfoot>
                </table>
                </div>
            </div>
        </div>
    </main>

    <?php }

    ?>
    <!-- invoice Bottom  -->
    <div class="text-center mt-5 mb-4 regular-button">
        <div class="d-print-none d-flex justify-content-center flex-wrap gap-10"> 
         
            <a href="javascript:window.print()" class="btn-primary-fill">Print Invoice</a>
            <a href="../dashboard/" class="btn-primary-fill">Home</a>
        </div>
    </div>

    <!-- jquery-->
    <script src="assets/js/jquery-3.7.0.min.js"></script>
    <!-- Plugin -->
    <script src="assets/js/plugin.js"></script>
    <!-- Main js-->
    <script src="assets/js/mian.js"></script>
</body>

<!-- Mirrored from init-bill.vercel.app/regular-invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Oct 2024 10:27:43 GMT -->
</html>