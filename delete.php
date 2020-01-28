<?php 
session_start();
$userprofile=$_SESSION['username'];

if($userprofile==true)

{


}

else {
 
 header('location:error.php');

}

?>
<html> 
<head> 
   <title>Final Project </title>
   <style>
        
        
            table{border-collapse:collapse}
            tr,td,th{
                
                border:1px solid black; 
                text-align:left; 
            
            }
            
        
        </style>
   
</head>

<img src="header.png" width="100%" height="30%">
<br>

<table width="100%">

   <tr>
     
       <td> <a href="home1.php"> Home </a> </td>
       <td> <a href="reg1.php"> Registration </a> </td>
      <td> <a href="logout.php"> Logout </a> </td>
       <td> <a href="update.php"> Update </a> </td>
       <td> <a href="delete.php"> Delete </a> </td>
        <td> <a href="search.php"> Search </a> </td>
       <td><?php echo "welcome"." ".$_SESSION['username']; ?> </td>

    </tr>

</table>



</html>
<?php
$con=mysqli_connect('localhost','root', '','ums2');
$sql="SELECT * FROM student";
$query=mysqli_query($con,$sql);


?>

<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>

<body>

<table class="table table-border">
<thead>
<tr>
<th scope="col">id</th>
<th scope="col">name</th>
<th scope="col">age</th>

<th scope="col">password</th>
<th scope="col">Birthday</th>
<th scope="col">Country</th>
<th scope="col">Sex</th>
<th scope="col">Image</th>

<th scope="col">Action</th>
</tr>
</thead>
<tbody>
<?php while($result=mysqli_fetch_assoc($query)){?>
<tr>
<td><?php echo $result["id"] ?></td>
<td><?php echo $result["name"] ?></td>
<td><?php echo $result["age"] ?></td>

<td><?php echo $result["password"] ?></td>


<td><?php echo $result["birthday"] ?></td>
<td><?php echo $result["country"] ?></td>
<td><?php echo $result["sex"] ?></td>
<td><img src="<?php echo $result['image'] ?>" width="100px" height="100px"> </td>

<td><a class="glyphicon glyphicon-edit" href="delete1.php?id=<?php echo $result["id"] ?>"></a></td>
</tr>
<?php } ?>
</tbody>

</table>
</div>
</body>
</html>
