<?php
$conn=mysqli_connect("localhost","root","","exam_2025");
if(!$conn){
	die("Connection is failed".mysqli_connect_error());
}
if(isset($_POST['create'])){
	$user=$_POST['username'];
	$pass=$_POST['password'];
	$em=$_POST['email'];
	$sql="INSERT INTO `hasa_exam` (`username`, `password`, `email`) VALUES ('$user', '$pass', '$em')";
	$result =mysqli_query($conn,$sql);
	if($result){
		//echo "create is done";
		header('location:login.php');
	}else{
		echo "create is failed" .mysqli_connect_error($conn);
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login_form</title>
</head>
<body>
	<h2>create_user</h2>
	<form action="" method="POST">
	<label>username</label><br>
	<input type="text" name="username" placeholder="enter username"><br>
	<label>password</label><br>
	<input type="password" name="password" placeholder="enter password"><br>
	<label>email</label><br>
	<input type="email" name="email" placeholder="enter your email"><br><br>
	<input type="submit" name="create">

</body>
</html>