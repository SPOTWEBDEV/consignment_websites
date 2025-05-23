<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

function checkUrlProtocol($url)
{
    $parsedUrl = parse_url($url);
    return isset($parsedUrl['scheme']) ? $parsedUrl['scheme'] : 'invalid';
}

// Automatically get the current URL
$currentUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http")
    . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

// Get the protocol from the current URL
$request = checkUrlProtocol($currentUrl);

// Default configurations
define("HOST", "localhost");

// Determine if online or offline
$isLocalhost = ($_SERVER['HTTP_HOST'] === 'localhost');

// Database connection (Only use one based on environment)
$connection = '';

if ($isLocalhost) {
    // Offline (Localhost)
    $domain = "http://localhost/consignment_websites/";

    define("USER", "root");
    define("PASSWORD", "");
    define("DATABASE", "shipping");

    // Database connection
    $connection = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
} else {
    // Online (Live Server)
    $domain = "http://upsnlt.com/";

    define("USER", "bencofas_shipping");
    define("PASSWORD", "bencofas_shipping");
    define("DATABASE", "bencofas_shipping");

    // Database connection
    $connection = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
}


$siteshort = 'UPSIL';
$sitename = 'United Parcel Service International Limited';
$siteemail = 'support@upsnlt.com';

$money = '&#36;';





?>