<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>crud</title>
</head>
<body>
	<table border="1">
		<tr>
		<th>id</th>
		<th>username</th>
		<th>password</th>
		<th>email</th>
		<th colspan="2">operation</th>
	</tr>
	<?php
	$conn=mysqli_connect("localhost","root","","exam_2025");
	$sql=mysqli_query($conn,"SELECT * FROM hasa_exam");
	while($row=mysqli_fetch_array($sql)){
	?>
	<tr>
		<td><?php echo $row['id'];?></td>
		<td><?php echo $row['username'];?></td>
		<td><?php echo $row['password'];?></td>
		<td><?php echo $row['email'];?></td>
		<td><a href="delete.php?id=<?php echo $row['id'];?>">delete</td>
		<td><a href="update.php?id=<?php echo $row['id'];?>">update</td>
	</tr>
		<?php
	}
		?>
	</table>

</body>
</html>