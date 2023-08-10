<html>
<body>
<form action="#" method="POST">
name
<br>
<input type="text" name="name">
<br>
email_id
<br>
<input type="email" name="email" >
<br>
password
<br>
<input type="pass" name="password">
<br>
contact no
<br>
<input type="number" name="mobile">
<br>
address
<br>
<input type="text" name="address">
<br>
gender
<br>
<input type="text" name="gender">
<br>
<button type="ok" name="ok" value="ok" class="btn-btn-default">ok</button>
</form>
<?php
//$con = mysqli_connect("localhost","root","","demo") or die ("could not connect");

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="bsh";
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conn){
    die("sorry can not connect:" . mysqli_connect_error());
}
else{
    echo "connection was successful<br>";
}
/*if(isset($_POST["ok"])){

    echo "its working";
}*/
if(isset($_POST['ok'])){
                            $name=$_POST['name'];
                            $email=$_POST['email'];
                            $password=$_POST['password'];
                            $mobile=$_POST['mobile'];
                            $address=$_POST['address'];
                            $gender=$_POST['gender'];
                            
                            //$result=mysqli_query($conn,"INSERT INTO `user`(`u_name`, `email_id`, `password`, `contact_no`, `address`, `gender`) VALUES ('$name','$email','$password','$mobile','$address','$gender')");
                            $result=mysqli_query($conn,"INSERT INTO user VALUES('','$name','$email','$password','$mobile','$address','$gender')");
                            if($result)
                            {
                                echo "record inserted";
                            }
                            else
                            {
                                echo "record not inserted";
                            }
                        }
?>
</body>
</html>


