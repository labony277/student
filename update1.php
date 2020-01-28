<?php
$host_name="localhost";
$username="root";
$password="";
$database_name="ums2";
$connect=mysqli_connect($host_name,$username,$password,$database_name);
$id=$_GET['id'];
$sql="SELECT * FROM student WHERE id=$id";
$query=mysqli_query($connect,$sql);
$result=mysqli_fetch_assoc($query);
//update
if (isset($_POST['btn'])){
$uid=$_POST['sid'];
$uname=$_POST['sn'];
$uage=$_POST['sa'];

$upassword=$_POST['sp'];


$sqlupdate="UPDATE student SET id='$uid',name='$uname',age='$uage',
password='$upassword' WHERE 
id='$id'";
$query=mysqli_query($connect,$sqlupdate);
if ($query) {
 echo "<h1>Update successfully</h1>";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Book Info Update Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<body>
<div class="container">
<form action="" method="post">
<h1>Book Info Update Form</h1>
<hr>
<table>
	<tr>
		<td><label for="kid"><b>STUDENT id</b></label></td>
		<td><input type="text" name="sid" value="<?php echo $result["id"]?>" required></td>
	</tr>
	<tr>
		<td><label for="name"><b>STUDENT name</b></label></td>
		<td><input type="text" name="sn" value="<?php echo $result["name"]?>" required></td>
	</tr>
	<tr>
		<td><label for="age"><b>age</b></label></td>
		<td><input type="text" name="sa" value="<?php echo $result["age"]?>" required></td>
	</tr>
	
	<tr>
		<td><label for="password"><b>password</b></label></td>
		<td><input type="text" name="sp" value="<?php echo $result["password"]?>" required></td>
	</tr>
        
</table>
<hr>
<input type="submit" name="btn" value="Update Info">
</div>
</form>
</div>
</body>
</html>
