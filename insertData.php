
<?php
include "dbconnect.php";

$name=$_POST['f_name'];
$des=$_POST['f_designation'];
$pho=$_POST['f_phone'];
$db=$_POST['f_date_of_birth'];
$sql = "INSERT INTO teacher (id, name,designation,phone,date_of_birth) 
		VALUES (NULL, '$name', '$des', '$pho','$db')";

		
		if($conn->query($sql))
		{
			header('location:index.php');
			//echo "data inserted successfully";
			
		}
		else
		{
			echo "insertion failed";
		}
		
		
		$conn->close();
?>

