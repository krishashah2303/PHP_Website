<?php  
    include('config.php');  

    $email = $_POST['email'];  
    $password = md5($_POST['password']);  
    //https://www.geeksforgeeks.org/how-to-display-logged-in-user-information-in-php/
      
        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($conn, $email);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select * from user where email = '$email' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result); 
       
          
        if($count == 1){  
           // echo "<h1><center> Login successful </center></h1>"; 
           //$_SESSION[uid]=$row['u_id']
           //header("location: index.php");
           echo ("<script LANGUAGE='javaScript'>
                    window.alert('Login successful.');
                    window.location.href='index.php';
                    </script>");
           session_start();
           $_SESSION["login"] = "ok";
           $_SESSION['user_id']=$row['u_id'];
           $_SESSION['user_name']=$row['uname'];
           //echo '<pre>';
           //var_dump($_SESSION);
           //echo '<pre>';
        }  
        else{  
            echo ("<script LANGUAGE='javaScript'>
            window.alert('Incorrect Email id or Password !');
            window.location.href='login.php';
            </script>");
        } 
        //chetu90
        //pragati123
        //krisha2303
        //12345    
?>  