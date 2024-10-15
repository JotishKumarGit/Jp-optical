<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "jpoptical";

$con = mysqli_connect($host, $user, $password, $database);

if (!$con) {
    die("Connection Fields" . mysqli_connect_error());
}
//  else {
//     echo "Success";
// }
?>