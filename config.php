<?php
// $dbhost = "localhost";
// $dbuser = "root";
// $dbpass = "";
// $bdname = "shopping";

// $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $bdname);

// if(!$conn){
//     die('Could not connect to Database'.mysqli_connect_error());
// }

//Use Define Function() as a Constant For PayPal
define('PAYPAL_CLIENT_ID', '/**iD GOES HERE*/');
define('PAYPAL_SECRETE_ID', '/**iD GOES HERE*/');
define('PAYPAL_SANDBOX', TRUE); // Set False for Production
//Use Define Function() as a Constant DataBase

//define('DATABASE_HOST', 'localhost:3306');
//define('DATABASE_USRERNAME', 'root');
//define('DATABASE_PASSWORD', '');
//define('DATABASE_NAME', 'neuf');

// define('DB_SERVER', 'localhost:3036');
//    define('DB_USERNAME', 'root');
//    define('DB_PASSWORD', '');
//    define('DB_DATABASE', 'neuf');
//    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "neuf";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if($conn->connect_error){
    die('Could not connect to Database'.$conn->connect_error);
}



?>