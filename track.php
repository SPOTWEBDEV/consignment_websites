<?php include('./server/connection.php') ?>
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
    <title> <?php echo  $sitename ?> - track </title>

    <!-- favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">



    <!-- css styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive-style.css">
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
                    <h2>Tracking</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->






        <section class="tracking">
            <div class="container-auto">
                <div class="tracking__inner">
                    <div class="col-md-12">
                        <h2 class="white-text mb-30">Track Your package</h2>
                        <form action="display.php">
                            <div class="row">
                                <div class="col-xl-7">
                                    <div class="comment-form__input-box">
                                        <input type="text" placeholder="Enter Your Tracking Number" name="track">
                                    </div>
                                </div>
                                <div class="col-xl-5">
                                    <button type="submit" class="thm-btn comment-form__btn"> Track Now
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>


        <!-- Footer Start-->
        <?php include('components/footer.php') ?>
        <!-- Footer End-->

    </div><!-- /.page-wrapper -->


    <?php include('./components/sidenav.php') ?>

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




    <!-- js file -->
    <script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from thetestingstudio.com/logispeed/tracking.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Oct 2024 03:10:46 GMT -->

</html>