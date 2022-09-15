<!--for updateing images-->
<form method="post" enctype="multipart/form-data">

<?php
$connect=mysqli_connect("localhost","root","","mytest");
$id=$_GET['id'];

$update=mysqli_query($connect,"select *from display_image_uplode");
$row=mysqli_fetch_array($update);


if(isset($_POST['btn_update'])){
	$name=$_POST['txtname'];
	$pic=$_FILES['img']['name'];
	move_uploaded_file($_FILES['img']['tmp_name'],'pics/'.$pic);
	
	if($update){
		$upd=mysqli_query($connect,"update display_image_uplode set name='$name',image='$pic' where id='$id'");
		echo"<script>alert('Data updated')</script>";
		echo"<script>window.location.assign('file1.php');</script>";
	}
	
	
}


?>
<table border="2">
<tr>
<th>Name :</th>
<td><input type="text" name="txtname" value="<?php echo $row[1]; ?>"/></td>
</tr>

<tr>
<th>Image :</th>
<td><input type="file" name="img" value="<?php echo $row[2]; ?>"></td>
</tr>


<tr>
<th>Update:</th>
<td><input type="submit" name="btn_update" value="UPDATE"></td>
</tr>
</table>
</form>