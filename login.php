<?php
 include 'connection.php';

 if(isset($_POST['submit']))
 {
 	$email = $_POST['email'];
 	$password = $_POST['password'];

 	$sql = "SELECT * FROM `reg` INNER JOIN `city` ON `reg`.`city` = `city`.`city_id` WHERE `email` = '$email' AND `password` = '$password'";
 	$ex = $conn->query($sql);

 	$login = mysqli_fetch_object($ex);

 	if($ex->num_rows == 1)
 	{
 		//num_rows count rows 
 		//echo "login";
 		session_start();
 		$_SESSION['id'] = $login->id;
 		$_SESSION['fname'] = $login->fname;
 		$_SESSION['email'] = $login->email;
 		$_SESSION['password'] = $login->password;
 		$_SESSION['dob'] = $login->dob;
		$_SESSION['image'] = $login->image;
		$_SESSION['city_name'] = $login->city_name;
        header('location:profile.php');



 	}
 	else
 	{
 		echo "please check username and password";
 	}






 }



  ?>




<form method="POST">

<label> email </label>
<input type="email" name ="email"><br>

<label> password </label>
<input type="password" name ="password"><br>
<input type="submit" name="submit" value="LOGIN">



</form>