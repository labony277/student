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

$sqlupdate="DELETE FROM student WHERE id='$id'";
$query=mysqli_query($connect,$sqlupdate);
if ($query) {
 echo "<h1>DELETE successfully</h1>";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Book Info Delete Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<body>
<div class="container">
<form action="" method="post">
<h1>Book Info DELETE Form</h1>
<hr>
<table>
	<tr>
		<td><label for="kid"><b>STUDENT id</b></label></td>
		<td><input type="text" name="sid" value="<?php echo $result["id"]?>" required></td>
	</tr>
</table>

<hr>
<input type="submit" name="btn" value="DELETE Info">
</div>
</form>
</div>
</body>
</html>
