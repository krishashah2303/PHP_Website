<?php
session_start();
//if($_SESSION['status']!="Active"){
    //header("location: login.php");
//}
include "config.php";
//$con = mysqli_connect("localhost","root","","demo") or die ("could not connect");

/*$sql = mysqli_query($conn, "SELECT * FROM user where u_id ='$u_id'");

while($row = mysqli_fetch_row($sql))
 {
   echo $u_id = $row[0];
   
if(isset($_POST["ok"])){

    echo "its working";
}*/


if(isset($_POST['submit'])){
    
                            $uid=$_SESSION['user_id'];
                            $name=$_POST['name'];
                            $email=$_POST['email'];
                            $subject=$_POST['subject'];
                            $message=$_POST['message'];

                           // echo $name1;
                           // echo $message;
                                //$result=mysqli_query($conn,"INSERT INTO `user`(`u_name`, `email_id`, `password`, `contact_no`, `address`, `gender`) VALUES ('$name','$email','$password','$mobile','$address','$gender')");
                                $result = mysqli_query($conn,"INSERT INTO `feedback`( `f_id`, `u_id`, `name`, `email`, `subject`, `message`) VALUES ('','$uid','$name','$email','$subject','$message')");
                               
                            if($result)
                            {
                                echo ("<script LANGUAGE='javaScript'>
                               window.alert('Thank You for your responce');
                               window.location.href='index.php';
                               </script>");
                                //echo '<script type="text/javascript"> alert("Thank You For Your Feedback ") </script>';
                            }
                            else
                            {
                               echo ("<script LANGUAGE='javaScript'>
                               window.alert('oops..an error occured! please check if you are login or not');
                               window.location.href='login.php';
                               </script>");
                               
                                //echo '<script type="text/javascript"> alert("Ooops...something went wrong ") </script>';
                            }
                            }  
                    
?>