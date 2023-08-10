<?php
session_start();
include('config.php');
$sql = "DELETE FROM `book` WHERE b_id='$_GET[id]'";

$result=mysqli_query($conn,$sql);
if($result)
{
    echo ("<script LANGUAGE='javaScript'>
    window.alert('Record Deleted');
    window.location.href='yourposts.php';
    </script>");
}
else{
    echo ("<script LANGUAGE='javaScript'>
    window.alert('Opps...Somthing went wrong please try later');
    
    </script>");
}
?>