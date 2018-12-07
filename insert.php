<?php

include 'connection.php';


 if(isset($_REQUEST['submit']))
{
	$fname = $_POST['fname'];	
	$email = $_POST['email'];
	$password = $_POST['password'];
	$dob = $_POST['dob'];

		$city = $_POST['city'];

		$image = $_FILES['img']['name'];
		$size = $_FILES['img']['size'];
		$type = $_FILES['img']['type'];
		$tmp_name = $_FILES['img']['tmp_name'];
		$new_path = ('upload/'.$image);
		move_uploaded_file($tmp_name,$new_path);

	 $sql = "INSERT INTO `reg` (`fname`,`email`,`password`,`dob`,`city`,`image`) VALUES ('$fname','$email','$password','$dob','$city','$image')";

	 //echo $sql;
	 
	 $ex = $conn->query($sql);
	 if($ex)
	 {
	 	echo "inserted";

	 }
	 else
	 {
	 	echo "Error";
	 }




}


?>

<form method="POST" enctype="multipart/form-data"> 

<label> firstname </label>
<input type="text" name ="fname"> <br>


<label> email </label>
<input type="email" name ="email"><br>

<label> password </label>
<input type="password" name ="password"><br>

<label> dob </label>
<input type="date" name ="dob"><br>

<label> City </label>
<select name="city"> 

<option>please select city </option>
<?php $city = "SELECT * FROM `city`";

$cex = $conn->query($city);

while($ccity = mysqli_fetch_object($cex))
{
	?>
<option value="<?php echo $ccity->city_id; ?>"> <?php echo $ccity->city_name; ?> </option>



<?php }

  ?>

 </select> <br>

 <label> Image </label>
 <input type="file" name="img">

<input type="submit" name="submit" value="REGISTRASTION">


 </form>