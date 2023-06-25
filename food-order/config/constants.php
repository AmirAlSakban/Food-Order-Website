<?php
ob_start();
    session_start();

//cream constante pt a stoca valori
define('SITEURL', 'http://localhost/food-order/');
define('LOCALHOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'food-order');

$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error());//conexiunea la bd
$db_select = mysqli_select_db($conn, DB_NAME) or die(msqli_error());//selectam baza de date

?>