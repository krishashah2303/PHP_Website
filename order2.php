<?php
session_start();
include "config.php";
if(isset($_POST['submit']))
{
    $uid = $_SESSION['user_id'];
    $amt=$_SESSION['amounts'];
    $boookid = $_SESSION['bookid'];
    $o_date = date('Y-m-d');
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $quantity = $_POST['quantity'];
    
    $total_price = ($amt * $quantity);

                        $result = mysqli_query($conn,"INSERT INTO `order`(`o_id`, `u_id`, `b_id`, `o_date`, `address`, `contact`, `quantity` , `total_price`) VALUES('','$uid','$boookid','$o_date','$address','$contact','$quantity','$total_price')");    
                        if($result)
                            {
                                echo ("<script LANGUAGE='javaScript'>
                               window.alert('THANK YOU FOR SHOOPING WITH US. YOUR ORDER HAS BEEN CONFIRMED.');
                               window.location.href='index.php';
                               </script>");
                                //echo '<script type="text/javascript"> alert("Data inserted") </script>';
                            }
                            else
                            {
                                echo ("<script LANGUAGE='javaScript'>
                               window.alert('oops..an error occured!.Please Try Again.');
                               window.location.href='index.php';
                               </script>");
                                //echo '<script type="text/javascript"> alert("Data not inserted") </script>';
                            }
                        
                        }
//$usid=$_SESSION['user_id'];
//$o_date= date('Y-m-d');
//$amt=$_SESSION['amounts'];

echo '<pre>';
var_dump($_SESSION);
echo "$o_date";
print_r($address);
print_r($contact);
print_r($quantity);

echo '<pre>';
                       
?>