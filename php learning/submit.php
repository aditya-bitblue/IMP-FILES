<?php

// echo "Aditya Vartak";

// // // echo realpath("index.php");
// $filename = basename($_SERVER['PHP_SELF']);
// echo $filename;
// // echo dirname($filename);

// // syslog(LOG_ERR, "error");

// setcookie("category", "user", time() + 86400, "/");

// $servername = 'localhost';
// $username = 'root';
// $password = '';

// $dbname = 'phpcorelearning';


// $conn = mysqli_connect($servername, $username, $password, $dbname);

// if ($conn) {
//     echo "Database connected";
// } else {
//     echo mysqli_connect_error();
//     die();
// }


// // $sql = 'CREATE DATABASE $dbname';

// // if (mysqli_query($conn, $sql)) {
// //     echo "Database created ";
// // } else {
// //     echo "error occured";
// // }

// $sql = 'CREATE TABLE `Persons` (
//     `PersonID` INT(6),
//     `LastName` VARCHAR(255),
//     `FirstName` VARCHAR(255),
//     `Address` VARCHAR(255),
//     `City` VARCHAR(255)
// )';

// if (mysqli_query($conn, $sql)) {
//     echo 'Table created successfully';
// } else {
//     echo 'Table not created successfully';
// }

// if(isset($_POST['submi']))

if (isset($_POST)) {
    print_r($_POST);
}



$fullname = 'Aditya vartak';

$action  = 'http://localhost/curl/submit.php';


$url = 'submit.php';


// initialise curl session
$ch = curl_init();

//set options
curl_setopt($ch, CURLOPT_POST, true);



// execute  

curl_exec($ch);


// close session
curl_close($ch);
