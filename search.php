<?php 
session_start();
$userprofile=$_SESSION['username'];

if($userprofile==true)

{


}

else {
 
 header('location:error.php');

}

?><html>
<head>
  <style>
        
        
            table{border-collapse:collapse}
            tr,td,th{
                
                border:1px solid black; 
                text-align:left; 
            
            }
            
        
        </style

 </head>

<body>
  <form action="" method="post">
  Search student information:

          
            <input type="text" name="id" placeholder="Give student ID"> <br>
         
           
            <input type="submit" name="search" value="Search data">
        </form>


<?php
$host_name="localhost";
$username="root";
$password="";
$database_name="ums2";
$connect=mysqli_connect($host_name,$username,$password,$database_name);

if(isset($_POST['search']))
{
  $id=$_POST['id'];

  $sql="SELECT * FROM student WHERE id='$id'";
  $query=mysqli_query($connect,$sql);
 
   while ($row=mysqli_fetch_array($query))

 {
   ?>

  <table class="table table-border" width="100%">
<thead>
<tr>
<th scope="col">Id</th>
<th scope="col">Name</th>
<th scope="col">Age</th>

<th scope="col">Password</th>

<th scope="col">Birthday</th>
<th scope="col">Country</th>
<th scope="col">Sex</th>
<th scope="col">Image</th>

</tr>
</thead>
<tbody>

<tr>
<td><?php echo $row["id"] ?></td>
<td><?php echo  $row["name"] ?></td>
<td><?php echo  $row["age"] ?></td>

<td><?php echo $row["password"] ?></td>

<td><?php echo  $row["birthday"] ?></td>
<td><?php echo  $row["country"] ?></td>
<td><?php echo  $row["sex"] ?></td>
<td><img src="<?php echo  $row['image'] ?>" width="100px" height="100px"> </td>

</tr>
</body>
<table>
<?php 

}
}
?>




  

</body>
</html>

