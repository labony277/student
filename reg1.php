<?php 
session_start();

?>
<html> 
<head> 
   <title>Final Project </title>
   <style>
        
        
            table{border-collapse:collapse}
            tr,td{
                
                border:1px solid black; 
                text-align:center; 
            
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



</tr>
</table>

<body>
<h1>Registration: </h1>
 <form name="reg" action="insert.php" method="POST" enctype='multipart/form-data'>
 id:<input type="text" name="sid"> <br> <br>
 name:<input type="text" name="sn"> <br><br>
 age:<input type="text" name="sa"> <br> <br> 
password:<input type="text" name="sp"> <br> <br>

Birthday: <input type="date" name="bday"> <br> <BR>
Country:
<select name="country">

  <option value="country">Select...</option>

  <option value="BANGLADESH">BANGLADESH</option>

  <option value="INDIA">INDIA</option>
  
   <option value="PAKISTAN">PAKISTAN</option>

</select> <br> <br>


SEX: <br>
  <input type="radio" name="radio" value="Male">Male <br>
<input type="radio" name="radio" value="Female">Female <br>
<input type="radio" name="radio" value="Other">Other <br>



Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">


<input type="submit" name="sr" value="submit">
</form>
</body>
   




  



</html>
    