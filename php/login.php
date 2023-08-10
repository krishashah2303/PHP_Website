<?php
include(config.php);
?>

if($_POST)
{
    $uname = $_POST["uname"];
    $pass = $_POST["pass];

    $mysqli=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

    $sql = mysqli_query = "select * from login where email id ='$email_id'";
    $result = mysqli_query



}