<?php
$conn=mysqli_connect("localhost","root","","exam_2025");
$delete =$_GET['id'];
$sql="DELETE FROM hasa_exam WHERE id='$delete'";
if(mysqli_query($conn,$sql)){
	header('location:crud.php');
}else{
	echo "delete is failed";
}
?>