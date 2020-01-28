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
div.ex1 {

  height: 100px;
  width: 1100px;

  overflow-y: scroll;
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


<table width="100%">

   <tr> 
     
      <th colspan="3"><div class="ex1">
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
What is Lorem Ipsum?



It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

</div>
 
  </th>


</tr>
</table>

<table width="100%">

<tr>
   <td><img src="1.jpg" height="100%" width="100%"> </td>
  
   <td> <img src="3.jpg" height="100%" width="100%"></td>
   <td> <img src="4.jpg" height="100%" width="100%"></td>
</tr>
</table> 


  



</html>
    