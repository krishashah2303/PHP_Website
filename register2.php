<?php
session_start();
include "config.php";


if(isset($_POST['submit'])){
                            //$u_id=$_POST['u_id'];
                            $name=$_POST['name'];
                            $email=$_POST['email'];
                            $password=md5($_POST['password']);
                            //$enctype_pwd=md5($password)
                            $mobile=$_POST['mobile'];
                            $address=$_POST['address'];
                            $gender=$_POST['gender'];
                            
                            //$result=mysqli_query($conn,"INSERT INTO `user`(`u_name`, `email_id`, `password`, `contact_no`, `address`, `gender`) VALUES ('$name','$email','$password','$mobile','$address','$gender')");
                            $result=mysqli_query($conn,"INSERT INTO user VALUES('','$name','$email','$password','$mobile','$address','$gender','')");
                            if($result)
                            {
                                echo ("<script LANGUAGE='javaScript'>
                               window.alert('Your responce has been submitted. please give us a quick moment to login');
                               window.location.href='login.php';
                               </script>");
                                //echo '<script type="text/javascript"> alert("Data inserted") </script>';
                            }
                            else
                            {
                                echo ("<script LANGUAGE='javaScript'>
                               window.alert('oops..an error occured!');
                               window.location.href='index.php';
                               </script>");
                                //echo '<script type="text/javascript"> alert("Data not inserted") </script>';
                            }
                           //echo $_SESSION['uid'] = $_POST['u_id'];
                            
                        }


?>

