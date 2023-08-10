<html>
<body bgcolor="pink">

   
<?php
include "config.php";

/*if(isset($_POST['search']))
{
    $str=mysqli_real_escape_string($conn,$_POST['str']);
    $sql="SELECT * FROM book WHERE name like '%$str%' or author like '%$str%'";
    $res=mysqli_query($conn,$sql);
    if(mysqli_num_rows($res)>0)
    {
        while($row=mysqli_fetch_assoc($res))
        {
            echo $row['name'];
            echo "<br/>" ;       
        }
    }
    else
    {
        echo "Not found";
    }
}*/
if(isset($_POST['search']))
{
    $name=$_POST['searchtxt'];
    //echo "<table border='1' align='center' cellspacing='5%' cellpadding='5%'><tr><th>b_id<th>subcat_id<th>name<th>author<th>amount<th>qty<th>image<th>edition</tr>";
    $result=mysqli_query($conn,"SELECT `b_id`,`subcat_id`,`name`,`author`,`amount`,`qty`,`image`,`edition` FROM book where `name` like '%$name%'");

    while($res = mysqli_fetch_array($result))
    {?>
        <table border='1' align='center' cellspacing='5%' cellpadding='5%'>
<tr>
<th>b_id</th>
<th>subcat_id</th>
<th>name</th>
<th>author</th>
<th>amount</th>
<th>qty</th>
<th>image</th>
<th>edition</th>
</tr><?php
        echo "<tr>";
        echo "<td>" .$res['b_id']. "</td>";
        echo "<td>" .$res['subcat_id']. "</td>";
        echo "<td>" .$res['name']. "</td>";
        echo "<td>" .$res['author']. "</td>";
        echo "<td>" .$res['amount']. "</td>";
        echo "<td>" .$res['qty']. "</td>";
        echo "<td>" .$res['image']. "</td>";
        echo "<td>" .$res['edition']. "</td>";
        echo "</tr>";
        
    }
    
}
else{
    echo "no result found";
}
?>
</table>
</body>
</html>