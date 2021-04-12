<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<form method="post" action="dbconnection.php">
			Enter rollno
			<input type="text" name="x" />
			<br>
			<br>
			Enter name
			<input type="text" name="y" />
			<br>
			<br>
			<input type="submit" value="submit">
			<input type="reset" value="clear">
		</form>
</body>
</html>
<?php
		$a=mysqli_connect("localhost","root","","databaseconnection");
		$b=$_POST['x'];
		$c=$_POST['y'];

		$d="insert into student values($b,'$c')";
		$query=mysqli_query($a,$d);
		if($query)
		{
			echo "record inserted";
		}
		else
		{
			echo "record not inserted";
		}

?>