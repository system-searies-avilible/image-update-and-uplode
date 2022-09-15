


<!--for image display-->
<table border="2" width="500px">
<tr>
<th>ID</th>
<th>Name</th>
<th>Image</th>
</tr>

<?php
$connect=mysqli_connect("localhost","root","","mytest");
$select=mysqli_query($connect,"select * from display_image_uplode ");
$num=mysqli_num_rows($select);

for($i=0; $i<$num; $i++){
	$row=mysqli_fetch_array($select);
	echo"<tr>";
	echo"<td>".$row[0]."</td>";
	echo"<td>".$row[1]."</td>";
	echo"<td>".'<img src="pics/'.$row[2].'" width="100px">'."</td>";
	echo"<td>".'<a href="mypage.php?id='.$row[0].'">Update</a>'."</td>";
	echo"</tr>";
	
}

?>
</table>