<?php
 include 'connection.php';
if(isset($_GET['id']))
{
	$id = $_GET['id'];
	$sql = "SELECT * FROM `reg` WHERE `id` = '$id'";
	$ex = $conn->query($sql);

}


if(isset($_POST['Update']))
{
	$fname = $_POST['fname'];	
	$email = $_POST['email'];
	$password = $_POST['password'];
	$dob = $_POST['dob'];
	$id = $_POST['id'];
	$city = $_POST['city'];

	if($_FILES['image']['name'])
	{

			$image = $_FILES['image']['name'];
            $size = $_FILES['image']['size'];
            $type = $_FILES['image']['type'];
            $tmp_name = $_FILES['image']['tmp_name'];
            $new_path = ("upload/".$image);
            move_uploaded_file($tmp_name, $new_path);

     }
	else
	{
		$image = $_POST['old_image'];
	}

	 echo $update = "UPDATE `reg` SET `fname` = '$fname',`email` ='$email',`password` = '$password',`dob` = '$dob',`city` = '$city',`image` = '$image' WHERE `id` = '$id'";

	$uex = $conn->query($update);

	if($uex)
	{
		header('location:showdata.php');
	}
	else

	{
		echo "Error";
	}

}


 ?>
<?php while($res = mysqli_fetch_object($ex))
{ ?>

<form method="POST" enctype="multipart/form-data"> 

<label> id </label>
<input type="text" name ="id" readonly value="<?php echo $res->id; ?>">  <br>

<label> firstname </label>
<input type="text" name ="fname" value="<?php echo $res->fname; ?>">  <br>


<label> email </label>
<input type="email" name ="email" value="<?php echo $res->email; ?>"><br>

<label> password </label>
<input type="text" name ="password" value="<?php echo $res->password; ?>"><br>

<label> dob </label>
<input type="date" name ="dob" value="<?php echo $res->dob; ?>"><br>

<label> City </label>
<select name="city">
	<?php $city = "SELECT  * FROM `city`";
	$cex = $conn->query($city);
	while($c = mysqli_fetch_object($cex))
	{ ?>

<option  <?php if($c->city_id == $res->city){ echo "selected";  }  ?> value="<?php echo $c->city_id; ?>" > <?php echo $c->city_name; ?>   </option> 

<?php 	}
	  ?>

	


 </select>
 <bR>
 	<label> Current image </label>
 	<img src="upload/<?php echo $res->image ?>" height="100px" width="100px"> 
 	<input type="text" readonly name="old_image" value="<?php echo $res->image; ?>">
<br>

<label> change image </label>
<input type="file" name="image" >
<input type="submit" name="Update" value="UPDATE">


 </form>




<?php }  ?>
 
