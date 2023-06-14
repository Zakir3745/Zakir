<?php
	include "dbconnect.php";
	
	$id=$_GET['d_id'];
	
	$nam=$_POST['f_name'];
	$des=$_POST['f_designation'];
	$pho=$_POST['f_phone'];
	$db=$_POST['f_date_of_birth'];
	
	$sql="UPDATE teacher SET name='$nam', designation='$des' ,
	phone='$pho' where id='$id'";
	
	if($conn->query($sql)){
		
		header('location:index.php');

		//echo "updated succesfully";
		}
	else 
	echo "update failed";

	$conn->close();
?>