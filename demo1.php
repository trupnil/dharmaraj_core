<?php 

require_once('demo2.php');


//include_once('demo2.php');
// include 'session.php';

// echo $_SESSION['userdata'];

	$x = 1;

	//echo $x;
	//echo "hello world";

	// $_GET
	// $_POST
	// $_REQUEST
	// $_SERVER
	// $_SESSION
	// $_COOKIES
	// $_FILE
	// $_ENV
	// $_GLOBLE
	

		if(isset($_REQUEST['plus']))
		{
			//echo "oke";
			$x = $_REQUEST['x'];
			$y = $_REQUEST['y'];

			$ans = $x + $y;

			echo $ans;

		}


		if(isset($_REQUEST['sub']))
		{

			$x = $_REQUEST['x'];
			$y = $_REQUEST['y'];

			$ans = $x - $y;

			echo $ans;
		}
?>
<!-- <p> <?php echo  $x; ?> </p> -->


<form method="POST" > 

	<label>Enter value of X :</label>
	<input type="number" name="x" >
	<label>Enter value of Y :</label>
	<input type="number" name="y" >
	<input type="submit" name="plus" value="+">
	<input type="submit" name="sub" value="-">
	<input type="submit" name="mult" value="*">


 </form>

