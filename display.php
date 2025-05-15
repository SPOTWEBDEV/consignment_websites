<?php
include('./saver/connection.php');
$url = $domain . 'track.php';
if (isset($_GET['track']) && $_GET['track'] != "") {
    $track = $_GET['track'];
    $query = mysqli_query($connection, "SELECT * FROM `user` WHERE `track`='$track' ");

    if (mysqli_num_rows($query) > 0) {

        while ($row = mysqli_fetch_assoc($query)) { ?>






<?php  }
    } else {

        echo "<script>window.open('$url', '_self');</script>";
    }
} else {
    echo "<script>window.open('$url', '_self');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">



<!-- Mirrored from thetestingstudio.com/logispeed/tracking.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Oct 2024 03:10:46 GMT -->

<head>
    <!-- Responsive -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="logistics, air freight, sea freight, road Freight, Transportaion, shipping, cargo, port, supply chain, Temperature Cargo, Warehouse, custom clearance">
    <meta name="description" content="LogiSpeed - Transportaion Html Responsive Template">
    <title> <?php echo  $sitename ?> - details </title>

    <!-- favicon -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">





    <!-- css styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive-style.css">


    <style>


    </style>
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>





    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->


    <div class="page-wrapper">

        <?php include('components/header2.php')  ?>

        <div class="stricky-header stricked-menu main-menu main-menu-three">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->
        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
            </div>

            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index-2.html">Home</a></li>
                        <li><span>/</span></li>
                        <li>Tracking</li>
                    </ul>
                    <h2>Shippment Details</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->




        </style>

        </style>




<style>
    /* Importing a clean Google font */
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap');

    /* Reset styles */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    :root {
        --main: #03051E;
        --secondary: #F0F0F0;
    }

    /* Applying font family to the body */
    body {
        font-family: 'Roboto', sans-serif;
        background-color: #F4F7FB;
        color: #333;
        line-height: 1.6;
    }

    /* Header styles */
    #display header {
        width: 100%;
        padding: 30px 10px;
        color: white;
        background: var(--main);
        font-weight: 400;
        font-size: 24px;
    }

    /* Section styles */
    #display section {
        display: flex;
        flex-wrap: wrap;
        margin-top: 30px;
        padding: 10px;
    }

    #display>section>main {
        flex: 1;
        min-width: 300px;
        padding: 20px;
    }

    #display>section>aside {
        width: 400px;
        box-shadow: 0 0 2px black;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
        gap: 20px;
        background: var(--secondary);
    }

    #display>section>aside h1 {
        font-size: 30px;
        font-weight: 500;
        text-align: center;
        color: #333;
    }

    #display>section>aside p,
    #display>section>aside h5 {
        font-size: 18px;
        color: #555;
    }

    /* Table Title */
    .table-title {
        font-size: 22px;
        font-weight: 500;
        padding: 20px;
        background: var(--main);
        color: white;
        margin-top: 20px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    /* Table styles */
    table {
        border: 1px solid #ddd;
        width: 100%;
        margin: 20px 0;
        border-collapse: collapse;
        font-size: 16px;
    }

    th, td {
        padding: 12px;
        text-align: left;
    }

    th {
        background: #F0F0F0;
        font-weight: 500;
    }

    td {
        background: white;
        font-weight: 300;
    }

    tr:nth-child(even) td {
        background: #f9f9f9;
    }

    /* Making the layout responsive */
    @media screen and (max-width: 1293px) {
        #display>section {
            flex-direction: column;
            align-items: center;
        }

        #display>section>aside {
            width: 100%;
            box-shadow: none;
            padding: 20px;
        }

        #display>section>main {
            width: 100%;
            padding: 10px 0;
        }

        table {
            box-shadow: none;
        }

        th, td {
            font-size: 14px;
        }
    }

    /* Blink effect */
    .blink {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        animation: blink-animation 1s infinite;
    }

    @keyframes blink-animation {
        0%, 100% {
            opacity: 1;
        }
        50% {
            opacity: 0;
        }
    }

    /* Adding some styling for the blinking ball */
    .blink.red {
        background-color: red;
    }

    .blink.green {
        background-color: green;
    }

    /* Custom font style for messages */
    #display header, 
    #display h1, 
    #display p, 
    #display table th, 
    #display table td {
        font-family: 'Roboto', sans-serif;
        color: #333;
    }

    /* Additional custom styles */
    #return {
        display: flex;
        align-items: center;
        justify-content: flex-start;
    }

    @media screen and (max-width: 1295px) {
        #return {
            display: flex !important;
            justify-content: space-between !important;
        }
    }

    .last {
        display: none !important;
    }

    /* Specific class when blinking */
    .blink.red {
        background-color: red;
    }

    .blink.green {
        background-color: green;
    }

</style>




        <div id="display">

            <?php

            $track = $_GET['track'];
            $sql = mysqli_query($connection, "SELECT * FROM `details` WHERE `track`='$track'");

            while ($message = mysqli_fetch_assoc($sql)) { ?>

                <header>
                    <p style="font-size:20px !important;color:white !important"><?php echo $message['message'];  ?></p>
                </header>

            <?php  }


            ?>

            <section>



                <?php

                $track = $_GET['track'];
                $sql = mysqli_query($connection, "SELECT * FROM `details` WHERE `track`='$track'");

                while ($message = mysqli_fetch_assoc($sql)) { ?>

                    <aside>
                        <h1>Shipping Weight: <?php echo $message['weight'];  ?> </h1>
                        <h5>Description: <?php echo $message['description'];  ?></h5>
                        <p><b>Shipping Insurance:</b> we always make sure that your package gets to its door step</p>
                        <p><b>Expected Arrival Date:</b> <?php echo $message['arrival_date'];  ?> </p>
                        <p><b>Shipping Date:</b> <?php echo $message['shippment_date'];  ?></p>
                    </aside>

                <?php  }


                ?>


                <main>
                    <div class="container">
                        <h2 class="table-title">Recipient Information</h2>

                        <?php

                        $track = $_GET['track'];
                        $sql = mysqli_query($connection, "SELECT * FROM `user` WHERE `track`='$track'");

                        while ($message = mysqli_fetch_assoc($sql)) { ?>

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" class="px-6 py-3">full Name</th>
                                        <th scope="col" class="px-6 py-3">Email</th>
                                        <th scope="col" class="px-6 py-3">phone</th>
                                        <th scope="col" class="px-6 py-3">country</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td data-label="full-name"> <?php echo $message['receiver_name'];  ?></td>
                                        <td data-label="Email"><?php echo $message['receiver_email'];  ?></td>
                                        <td data-label="phone"><?php echo $message['receiver_phone'];  ?></td>
                                        <td data-label="country"><?php echo $message['receiver_country'];  ?></td>
                                    </tr>
                                </tbody>
                            </table>

                        <?php  }


                        ?>

                        <h2 class="table-title">Sender Information</h2>


                        <?php

                        $track = $_GET['track'];
                        $sql = mysqli_query($connection, "SELECT * FROM `user` WHERE `track`='$track'");

                        while ($message = mysqli_fetch_assoc($sql)) { ?>

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" class="px-6 py-3">Name</th>
                                        <th scope="col" class="px-6 py-3">Email</th>
                                        <th scope="col" class="px-6 py-3">Phone</th>
                                        <th scope="col" class="px-6 py-3">Address</th>
                                        <th scope="col" class="px-6 py-3">Country</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td data-label="name"> <?php echo $message['sender_name'];  ?></td>
                                        <td data-label="Email"><?php echo $message['sender_email'];  ?></td>
                                        <td data-label="phone"><?php echo $message['sender_phone'];  ?></td>
                                        <td data-label="address"><?php echo $message['sender_address'];  ?></td>
                                        <td data-label="country"><?php echo $message['sender_country'];  ?></td>
                                    </tr>
                                </tbody>
                            </table>


                        <?php  }


                        ?>

                        <h2 class="table-title">Shippment Details</h2>

                        <?php

                        $track = $_GET['track'];
                        $sql = mysqli_query($connection, "SELECT * FROM `details` WHERE `track`='$track'");

                        while ($message = mysqli_fetch_assoc($sql)) { ?>


                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" class="px-6 py-3">Description</th>
                                        <th scope="col" class="px-6 py-3">Tracking Number</th>
                                        <th scope="col" class="px-6 py-3">Status</th>
                                        <th scope="col" class="px-6 py-3">Weight</th>
                                        <th scope="col" class="px-6 py-3">Current Location</th>
                                        <th scope="col" class="px-6 py-3">Destination</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td data-label="description"><?php echo $message['description'];  ?></td>
                                        <td data-label="tracking-number"><?php echo $message['track'];  ?></td>
                                        <td data-label="status"><?php echo $message['status'];  ?></td>
                                        <td data-label="weight"><?php echo $message['weight'];  ?></td>
                                        <td data-label="current"><?php echo $message['current_country'];  ?></td>
                                        <td data-label="destination"><?php echo $message['destination'];  ?></td>
                                    </tr>
                                </tbody>
                            </table>

                        <?php  }


                        ?>




                        <h2 class="table-title">shippment History</h2>
                        <table class="table">



                            <thead>
                                <tr>

                                    <!--<th scope="col" class="px-6 py-3">Tracking Number</th>-->
                                <tr>
                                    <th scope="col" class="px-6 py-3">Location</th>
                                    <th scope="col" class="px-6 py-3">Stage</th>
                                    <th scope="col" class="px-6 py-3">Status</th>
                                </tr>


                                </tr>
                            </thead>

                            <tbody>



                                <?php

                                $track = $_GET['track'];
                                $sql = mysqli_query($connection, "SELECT * FROM `stages` WHERE `track`='$track'");

                                while ($message = mysqli_fetch_assoc($sql)) { ?>


                                    <tr>
                                        <td class="dont" data-label="Location"><?php echo $message['country'];  ?></td>
                                        <td class="dont" data-label="Date"><?php echo $message['status']; ?></td>

                                        <?php


                                        if ($message['status'] == 'previouse') { ?>


                                            <td class="dont" data-label="Previouse-Location:" id="return">
                                                <div class="last"><?php echo $message['country']; ?></div>
                                                <div class="blink" style="background:red"></div>
                                            </td>


                                        <?php  }

                                        if ($message['status'] == 'current') { ?>


                                            <td class="dont" data-label="Current-Location" id="return">
                                                <div class="last"><?php echo $message['country']; ?></div>
                                                <div class="blink" style="background:green"></div>
                                            </td>


                                        <?php  }

                                        ?>
                                    </tr>


                                <?php  }


                                ?>

                            </tbody>



                        </table>
                        <h2 class="table-title">Billboard</h2>




                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" class="px-6 py-3">Description</th>
                                    <th scope="col" class="px-6 py-3">Amount</th>
                                    <th scope="col" class="px-6 py-3">Status</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php

                                $track = $_GET['track'];
                                $sql = mysqli_query($connection, "SELECT * FROM `bills` WHERE `track`='$track'");

                                while ($message = mysqli_fetch_assoc($sql)) { ?>


                                    <tr>
                                        <td data-label="Description"><?php echo $message['description'];  ?></td>
                                        <td data-label="Amount"><?php echo $message['amount'];  ?></td>
                                        <td data-label="Status" id="return">
                                            <div class="blink" style="background:red"></div>
                                        </td>
                                    </tr>



                                <?php  }


                                ?>
                            </tbody>
                        </table>

                    </div>
                </main>
            </section>
        </div>




        <!-- Footer Start-->
        <?php include('components/footer.php') ?>
        <!-- Footer End-->

    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index-2.html" aria-label="logo image"><img src="assets/images/logo.png" width="143" alt="logo"></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:support@<?php echo  $sitename ?>.com">support@<?php echo  $sitename ?>.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:1234567890">+1(206) 638-3417</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here...">
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/odometer/odometer.min.js"></script>
    <script src="assets/vendors/swiper/swiper.min.js"></script>
    <script src="assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/countdown/countdown.min.js"></script>
    <script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="assets/vendors/vegas/vegas.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="assets/vendors/timepicker/timePicker.js"></script>
    <script src="assets/vendors/circleType/jquery.circleType.js"></script>
    <script src="assets/vendors/circleType/jquery.lettering.min.js"></script>
    	<script>
		// Function to set the viewport to force desktop view
		function forceDesktopView() {
			var viewportMeta = document.querySelector('meta[name="viewport"]');
			if (viewportMeta) {
				// Change the content to force a desktop layout
				viewportMeta.setAttribute('content', 'width=700'); // Or any value you prefer
			}
		}

		// Check if the device is a tablet based on width and set to desktop view
		if (window.innerWidth <= 1000) {
			forceDesktopView();
		}

		// Optional: Listen for window resize to reapply the setting on change
		window.addEventListener('resize', function() {
			if (window.innerWidth <= 768) {
				forceDesktopView();
			}
		});
	</script>



    <!-- js file -->
    <script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from thetestingstudio.com/logispeed/tracking.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Oct 2024 03:10:46 GMT -->

</html>