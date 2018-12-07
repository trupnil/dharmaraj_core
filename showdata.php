<?php 
include 'connection.php';

$sql = "SELECT * FROM `reg` INNER JOIN `city` ON `reg`.`city` = `city`.`city_id`  ";

$ex = $conn->query($sql);

//print_r($ex);

//$data = mysqli_fetch_object($ex);





  ?>


<table border="2" > 

<tr> 
	<th>image</tH>
	<tH>id</th>
		<tH>fname</th>
	    <tH>email</th>
	   <tH>password</th>
	   <tH>dob</th>
	   	<th>City</tH>
	   	<th> Action </th>
	   	
</tR>

<?php
while ($data =  mysqli_fetch_object($ex)) {  ?>

	<tr>
		<td> <img src="upload/<?php echo $data->image ?>" height="100px" width="100px"> </td>
	<td> <?php echo $data->id  ?>     </tD>
	<td><?php echo $data->fname  ?>  </tD>
    <td> <?php echo $data->email  ?> </tD>
    <td> <?php echo $data->password  ?>  </tD>
    <td><?php echo $data->dob  ?> </tD>
				<td><?php echo $data->city_name  ?> </tD>
		<td> <a href="edit.php?id=<?php echo $data->id ?>">Edit</a> </tD>
    </tr>


 	
	
<?php  }    ?>




 </table>