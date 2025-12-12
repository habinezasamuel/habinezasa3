
<?php
$conn=mysqli_connect("localhost","root","","exam_2025");
if(!$conn){
	die("Connection is failed:" .mysqli_connect_error());
}
if(isset($_POST['login'])){
	$user=$_POST['username'];
	$pass=$_POST['password'];
	$em=$_POST['email'];
	$sql=mysqli_query($conn,"SELECT * FROM hasa_exam WHERE username='$user' AND password='$pass' AND email='$em'");
	$result=mysqli_num_rows($sql);
	if($result>0){
		//echo "login is done";
		header('location:crud.php');
	}else{
		echo "login is failed". mysqli_error($conn);
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
	<h2>login_page</h2><br>
	<form action="" method="POST">
	<label>username</label><br>
	<input type="text" name="username" placeholder="enter username"><br>
	<label>password</label><br>
	<input type="password" name="password" placeholder="enter password"><br>
	<label>email</label><br>
	<input type="email" name="email" placeholder="enter your email"><br><br>
	<input type="submit" name="login"><br><br>
	<a href="create.php">back</a>

</body>
</html>