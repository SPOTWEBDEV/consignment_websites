<?php include('../../saver/connection.php')?>
<?php 

    function getUserIP() {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if(isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }


    function getUserCountry() {

        // Get user IP address
        global $ip ;
        $ip =  getUserIP(); // You can use the getUserIP function from the previous response
    
        // API URL to fetch geolocation data
        $url = "https://ipinfo.io/{$ip}/json";
    
        // Initialize cURL session
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        
        // Execute cURL request
        $response = curl_exec($ch);
        curl_close($ch);
    
        // Decode the JSON response
        $data = json_decode($response, true);
    
        // Check if 'country' is set and return it
        return isset($data['country']) ? $data['country'] : 'Country not found';
    }
    
    
    

    
   
   


?>
<?php

if (isset($_POST['login'])){


    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = mysqli_query($connection, "SELECT * FROM `admin` WHERE `email`= '$email' AND `password` = '$password'");
    
    if ( $details = mysqli_fetch_assoc($query)){

        
        $_SESSION['admin'] = $details['id'];
        $user_email = $details['username'];
        $user_ip =  $userIP = getUserIP();
        $user_Country = getUserCountry();
        $currentDateTime = date('Y-m-d H:i:s');

        $query = mysqli_query($connection,"INSERT INTO `history`(`ip`, `country`, `username`,`date`) VALUES ('$user_ip','$user_Country','$user_email','$currentDateTime')");

        if ($query){

            echo "<script> location.href='../dashboard/' </script>";
            
            
        }else{
            
            echo "<script> alert( 'SORRY TRY AGAIN') </script>";
            
            
        }
        

        



    }else{

        echo "<script> alert( 'INCORRECT USERNAME AND PASSWORD') </script>";

    }






}






?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from argon-dashboard-laravel.creative-tim.com/login by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Sep 2024 11:11:14 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <title>login page</title>
    <meta name="keywords" content="creative tim, updivision, html dashboard, laravel, argon, html css dashboard laravel, argon dashboard laravel, laravel argon dashboard, argon admin, laravel dashboard, laravel admin, web dashboard, bootstrap 5 dashboard laravel, bootstrap 5, css3 dashboard, bootstrap 5 admin laravel, argon dashboard bootstrap 5 laravel, frontend, responsive bootstrap 5 dashboard, argon dashboard, argon laravel bootstrap 5 dashboard" />
    <meta name="description" content="A free Laravel Dashboard featuring dozens of UI components & basic Laravel CRUDs." />
    <meta itemprop="name" content="Argon Dashboard 2 Laravel by Creative Tim & UPDIVISION" />
    <meta itemprop="description" content="A free Laravel Dashboard featuring dozens of UI components & basic Laravel CRUDs." />
    <meta itemprop="image" content="../s3.amazonaws.com/creativetim_bucket/products/140/original/argon-dashboard-laravel.jpg" />
    <meta name="twitter:card" content="product" />
    <meta name="twitter:site" content="@creativetim" />
    <meta name="twitter:title" content="Argon Dashboard 2 Laravel by Creative Tim & UPDIVISION" />
    <meta name="twitter:description" content="A free Laravel Dashboard featuring dozens of UI components & basic Laravel CRUDs." />
    <meta name="twitter:creator" content="@creativetim" />
    <meta name="twitter:image" content="../s3.amazonaws.com/creativetim_bucket/products/140/original/argon-dashboard-laravel.jpg" />
    <meta property="fb:app_id" content="655968634437471" />
    <meta property="og:title" content="Argon Dashboard 2 Laravel by Creative Tim & UPDIVISION" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://www.creative-tim.com/live/argon-dashboard-laravel" />
    <meta property="og:image" content="../s3.amazonaws.com/creativetim_bucket/products/140/original/argon-dashboard-laravel.jpg" />
    <meta property="og:description" content="A free Laravel Dashboard featuring dozens of UI components & basic Laravel CRUDs." />
    <meta property="og:site_name" content="Creative Tim" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="assets/css/nucleo-svg.css" rel="stylesheet" />

    <script src="../kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="assets/css/nucleo-svg.css" rel="stylesheet" />

    <link id="pagestyle" href="assets/css/argon-dashboard.css" rel="stylesheet" />
</head>

<body class>
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <div class="container position-sticky z-index-sticky top-0">
                    <div class="row">
                        <div class="col-12">


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                            <div class="card card-plain">
                                <div class="card-header pb-0 text-start">
                                    <h4 class="font-weight-bolder">Sign In</h4>
                                    <p class="mb-0">Enter your email and password to sign in</p>
                                </div>
                                <div class="card-body">
                                    <form  method="POST" >
                                        
                                        <div class="flex flex-col mb-3">
                                            <input type="email" name="email" placeholder="example@gmail.com" class="form-control form-control-lg"  required aria-label="Email">
                                        </div>
                                        <div class="flex flex-col mb-3">
                                            <input type="password" name="password" class="form-control form-control-lg" placeholder="secret" required aria-label="Password">
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" name="remember" type="checkbox" id="rememberMe">
                                            <label class="form-check-label" for="rememberMe">Remember me</label>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0" name="login">Sign in</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                            <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('../raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signin-ill.jpg');
              background-size: cover;">
                                <span class="mask bg-gradient-primary opacity-6"></span>
                                <h4 class="mt-5 text-white font-weight-bolder position-relative">"be mindfull of who is behind you "</h4>
                                <p class="text-white position-relative">email and password should be kept in a secured please to avoid miss placement .</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>
    <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>

    <script async defer src="../buttons.github.io/buttons.js"></script>

    <script src="assets/js/argon-dashboard.js"></script>
    ;
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"8c8a9278deb173cd","version":"2024.8.0","serverTiming":{"name":{"cfExtPri":true,"cfL4":true}},"token":"1b7cbb72744b40c580f8633c6b62637e","b":1}' crossorigin="anonymous"></script>
</body>

</html>

