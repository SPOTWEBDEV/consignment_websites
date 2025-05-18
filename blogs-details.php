<?php include('./server/connection.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
         <!-- Responsive -->
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta name="keywords" content="logistics, air freight, sea freight, road Freight, Transportaion, shipping, cargo, port, supply chain, Temperature Cargo, Warehouse, custom clearance">
         <meta name="description" content="<?php echo $sitename   ?> - Transportaion Html Responsive Template">
         <title><?php echo  $sitename ?> - blog </title>

         <!-- favicon -->
         <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
         <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">


         <link rel="stylesheet" href="assets/css/blog.css">
         <!-- css styles -->
         <link rel="stylesheet" href="assets/css/style.css">
         <link rel="stylesheet" href="assets/css/responsive-style.css">
</head>

<body class="custom-cursor">

      





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
                                                      <li>news</li>
                                             </ul>
                                             <h2>Latest news</h2>
                                    </div>
                           </div>
                  </section>
                  <!--Page Header End-->
                  <!-- Start of blog post feed section
    ============================================= -->
                  <div class="blog-list-section bc-background ptb-120">
                           <div class="container">
                                    <div class="row justify-content-center">
                                             <div class="col-xl-8 col-lg-7">
                                                      <div class="row">
                                                               <div class="col-lg-12 mb-50">
                                                                        <div class="blog-item style1">
                                                                                 <div class="blog-img">
                                                                                          <a href="blog-details.html">
                                                                                                   <img src="assets/images/blogs/supply-chain2.jpg"
                                                                                                            alt="Supply Chain">
                                                                                          </a>
                                                                                          <ul class="post-categories">
                                                                                                   <li><a href="blog-details.html">Supply Chain</a></li>
                                                                                          </ul>
                                                                                 </div>
                                                                                 <div class="blog-content">
                                                                                          <h3 class="blog-title"><a href="blog-details.html">Understanding the Basics of Supply Chain Management</a></h3>
                                                                                          <div class="blog-meta">
                                                                                                   <ul class="btm-cate">
                                                                                                            <li>
                                                                                                                     <div class="author">
                                                                                                                              <i class="fas fa-user"></i> Super Admin
                                                                                                                     </div>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                     <div class="blog-date">
                                                                                                                              <i class="fas fa-calendar"></i> July 08, 2023
                                                                                                                     </div>
                                                                                                            </li>
                                                                                                            <li><i class="fas fa-comment"></i> 89</li>
                                                                                                   </ul>
                                                                                          </div>
                                                                                          <div class="blog-desc">
                                                                                                   Supply Chain Management is the management of the flow of goods and services, including the movement and storage of raw materials, work-in-process inventory, and finished goods, from the point of origin to the point of consumption.
                                                                                          </div>

                                                                                 </div>
                                                                        </div>
                                                               </div>



                                                      </div>

                                             </div>

                                    </div>
                           </div>
                  </div>
                  <!-- End of blog post section
        ============================================= -->

                  <section class="tracking">
                           <div class="container-auto">
                                    <div class="tracking__inner">
                                             <div class="tracking-shape-4 float-bob-y">
                                                      <img src="assets/images/shapes/tracking-shape-4.png" alt="logistics">
                                             </div>
                                             <div class="tracking__left">
                                                      <div class="tracking__content">
                                                               <h3 class="tracking__title">Let Us Move You With Honesty And Greatness.</h3>
                                                      </div>
                                             </div>
                                             <div class="tracking__btn-box">
                                                      <a href="contact.html" class="thm-btn tracking__btn">Contact Us</a>
                                             </div>
                                    </div>
                           </div>
                  </section>


                  <?php include('components/footer.php')  ?>


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



</html>