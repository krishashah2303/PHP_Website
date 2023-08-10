
<?php
echo ("<script LANGUAGE='javaScript'>
window.alert('You've been logged out');
window.location.href='index.php';
</script>");
?>


<?php
session_start();
unset($_SESSION['user_id']);
unset($_SESSION['user_name']);
unset($_SESSION['email']);
unset($_SESSION['password']);
error_reporting(0);
// //error_reporting(E_ERROR | E_PARSE);
// echo ("<script LANGUAGE='javaScript'>
//         window.alert('You've been logged out');
//         window.location.href='index.php';
//         </script>");

die();
?>