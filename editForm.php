<?php
	include "dbconnect.php";
	$id=$_GET['edit_id'];
	$sql="SELECT * FROM teacher where id='$id'";
	$result=$conn->query($sql);
	
	$arr=$result->fetch_assoc();
	
	$nam=$arr['name'];
	$des=$arr['designation'];
	$pho=$arr['phone'];
	$db=$arr['date_of_birth'];
?>


<!DOCTYPE html>
<html lang="en">
<body>	
	<center>
		<h1>Edit Form</h1>
		<form method="POST" action="edit.php?d_id=<?php echo $id?>">
			<label>Name</label>
			<input type="text" value="<?php echo $nam ?>" name="f_name"> <br> <br>
			<label>designation</label>
			<input type="text" value="<?php echo $des ?>" name="f_designation"> <br> <br>
			<label>phone</label>
			<input type="text"  value="<?php echo $pho ?>" name="f_phone" > <br> <br>
			<label>date_of_birth</label>
			<input type="text" value="<?php echo $db ?>" name="f_date_of_birth"> <br> <br>
			<input type="submit" value="update">
		</form>
	</center>	
	
</body>
