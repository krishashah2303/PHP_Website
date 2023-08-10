<?php
    if (isset($_POST['upload'])){
        //$file = $_FILES['file'];
        //print_r($file);
        $file_name =$_FILES['file']['name'];
        $file_type =$_FILES['file']['type'];
        $file_size =$_FILES['file']['size'];
        $file_tem_loc=$_FILES['file']['tmp_name'];
        $file_store = "upload/".$file_name;

        move_uploaded_file($file_tem_loc, $file_store);
    }
?>


<!DOCTYPE html>
<html>
<head>
<title>uploading file</title>
</head>
<body>
<form action="?" method="POST" enctype="multipart/form-data">
<lable>uploading file</lable>
<p><input type="file" name="file"/></p>
<p><input type="submit" name="upload" value="upload image"></p>
</form>
</body>
</html>
<!--include "config.php";
$result = mysqli_query($conn, "SELECT book.image, book.name, category.cname, sub_category.subcat_name, book.author, book.amount, book.qty, book.edition from book where cat_id =1");

echo "<center>";
echo "<h1> books available</h1>";


echo "<table border ='1'>";
echo "<tr>
<th>IMAGE</th>
<th>NAME</th>
<th>CNAME</th>
<th>SUBCAT ID</th>
<th>AUTHOR</th>
<th>AMOUNT</th>
<th>QUNATITY</th>
<th>EDITION</th>
<th>ORDER</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
    echo"<tr>";
    echo"<td>".$row['image']."</td>";
    echo"<td>".$row['name']."</td>";
    echo"<td>".$row['cname']."</td>";
    echo"<td>".$row['subcat_name']."</td>";
    echo"<td>".$row['author']."</td>";
    echo"<td>".$row['amount']."</td>";
    echo"<td>".$row['qty']."</td>";
    echo"<td>".$row['edition']."</td>";
    echo"</tr>";
}
echo"</table>";
echo"</center>";
mysqli_close();-->