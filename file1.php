<table border="2">
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Password</th>

</tr>

<?php
$connect=mysqli_connect("localhost","root","","test");

$select=mysqli_query($connect,"select * from register where id=2");
$num=mysqli_num_rows($select);
for($i=0; $i<$num; $i++){
	$row=mysqli_fetch_array($select);
	
	echo"<tr>";
	echo"<td>".$row[0]."</td>";
	echo"<td>".$row[1]."</td>";
	echo"<td>".$row[2]."</td>";
	echo"<td>".$row[3]."</td>";
	echo"</tr>";
	
	
}


?>
</table>