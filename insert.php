<?php 

$con=mysqli_connect('localhost','root','','ums2');
$id=$_POST['sid'];
$name=$_POST['sn'];
$age=$_POST['sa'];
$password=$_POST['sp'];
$birth=$_POST['bday'];
$country=$_POST['country'];
$sex=$_POST['radio'];


$FILENAME=$_FILES["fileToUpload"]["name"];
$TEMPNAME=$_FILES["fileToUpload"]["tmp_name"];
$folder="uploads/".$FILENAME;
move_uploaded_file($TEMPNAME,$folder);

if($id=="" || $name=="" || $age=="" || $password=="" ) {
echo "please input the value";
}
else {

$sql="insert into student (id,name,age,password,birthday,country,sex,image) values ('$id','$name',$age,'$password','$birth','$country','$sex','$folder')";
mysqli_query($con,$sql);
echo "Successfully Registration";


}
?>