<?php
include "config.php";

$q=mysql_query($conn,"SELECT * FROM user") or die(mysql_error());

//$data = mysql_fetch_row($q);
//echo $data[0].$data[1].$data[2].$data[4].$data[5].$data[6];

$count = mysqli_num_rows($q);
echo "$count record found";
echo "<table border='1'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>NAME</th>";
echo "<th>EMAIL</th>";
echo "<th>PASSWORD</th>";
echo "<th>ADREES</th>";
echo "<th>GENDER</th>";
echo "<th>CONTACT NO</th>";
echo "</tr>";

while($data = mysql_fetch_row($q))
{
    echo"<tr>";
    echo "<td>$data[0]</td><td>$data[1]</td><td>$data[2]</td><td>$data[3]</td><td>$data[4]</td><td>$data[5]</td><td>$data[6]</td><td>$data[7]</td><td>$data[8]</td>";
    echo"</tr>";
}
//$result=mysqli_query($mysqli,"select * from users where u_id ='1'");
?>
