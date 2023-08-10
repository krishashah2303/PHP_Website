<?php
session_start();
@$bid=$_SESSION['b_id'];
@$userid = $_SESSION['user_id'];
include "config.php";

if(isset($_POST['submit'])){
    $cat_id = $_POST['cat_id'];
    $subcat_id = $_POST['subcat_id'];
    @$bid=$_SESSION['b_id'];
    @$userid = $_SESSION['user_id'];
    $name = $_POST['name'];
    $author = $_POST['author'];
    $amount = $_POST['amount']; 
    $qty = $_POST['qty'];
    $files = $_FILES['image'];
    $edition = $_POST['edition'];
    //$bstatus = $_POST['bstatus'];

    /*print_r($cat_id);
    echo"<br>";
    print_r($subcat_id);
    echo"<br>";
    print_r($userid);
    echo"<br>";
    print_r($name);
    echo"<br>";
    print_r($author);
    echo"<br>";
    print_r($amount);
    echo"<br>";
    print_r($edition);
    echo "<br>";
    print_r($files); 
    echo "<br>";*/

    $filename = $files['name'];
    //print_r($filename);
    $fileerror = $files['error'];
    $filetmp = $files['tmp_name'];

    $fileext = explode('.',$filename);
    $filecheck = strtolower(end($fileext));

    $fileextstored = array('png', 'jpg', 'jpeg');

    if(in_array($filecheck,$fileextstored)){

        $destinationfile ='upload/'.$filename;
        move_uploaded_file($filetmp,$destinationfile);

        $sql = "UPDATE `book` SET  `cat_id`=$cat_id,`subcat_id`=$subcat_id,`u_id`=$userid,`name`=$name,`author`=$author,`amount`=$amount,`quantity`=$qty,`image`=$destinationfile,`edition`=$edition,`bststus`='o',`created_at`='' WHERE b_id = $bid";
        //$result=mysqli_query($conn,$sql);
        if(mysqli_query($conn,$sql))
        {
            echo ("<script LANGUAGE='javaScript'>
           window.alert('Details have been edited');
           window.location.href='index.php';
           </script>");
            //echo '<script type="text/javascript"> alert("Data inserted") </script>';
        }
        else
        {
            echo ("<script LANGUAGE='javaScript'>
           window.alert('oops..an error occured! ');
           </script>");
            //echo '<script type="text/javascript"> alert("Data not inserted") </script>';
        }
        
        //$q ="INSERT INTO book VALUES ('','$cat_id','$subcat_id','$userid','$name','$author',''$amount','$destinationfile','$edition','$condition')";
        //$query = mysqli_query($conn,$q);

        //$displayquery = "select * from book";
        
    }
}
?>
