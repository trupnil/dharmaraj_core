<?php 
session_start();
if(!isset($_SESSION['email']))
{
	header('location:login.php');
}

echo  "WELCOME ". $_SESSION['email'];






?>
<table border="2" > 
	<tr>
		<tH> <a href="logout.php">Logout</a> </tH>
	</tr>

<tr> 
	<th>image</tH>
	<tH>id</th>
		<tH>fname</th>
	    <tH>email</th>
	   <tH>password</th>
	   <tH>dob</th>
	   	<th>City</tH>
	
	   	
</tR>



	<tr>
		<td> <img src="upload/<?php echo $_SESSION['image']; ?>" height="100px" width="100px"> </td>
	
	<td><?php echo $_SESSION['id'];  ?>  </tD>
    <td> <?php echo $_SESSION['fname'];  ?> </tD>
    <td> <?php echo $_SESSION['email'];  ?>  </tD>
    <td><?php echo $_SESSION['password'];  ?> </tD>
	<td><?php echo $_SESSION['dob'];  ?> </tD>
		<td><?php echo $_SESSION['city_name'];  ?> </tD>
		
    </tr>


 	
	





 </table>