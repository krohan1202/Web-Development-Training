<?php 

	include('config/db_connect.php');

	// check GET request id param
	if(isset($_GET['id'])){
		
		// escape sql chars
		$id = mysqli_real_escape_string($conn, $_GET['id']);

		// make sql
		$sql = "SELECT * FROM dogs WHERE id = $id";

		// get the query result
		$result = mysqli_query($conn, $sql);

		// fetch result in array format
		$dog = mysqli_fetch_assoc($result);

		mysqli_free_result($result);
		mysqli_close($conn);

	}

?>

<!DOCTYPE html>
<html>

	<?php include('templates/header.php'); ?>

	<div class="container center">
		<?php if($dog): ?>
			<h3><?php echo $dog['dogName']; ?></h4>
			<h6>Created by <?php echo $dog['email']; ?></h6>
			<p><?php echo date($dog['created_at']); ?></p>
			<h5 class="green-text">Special Features:</h5>
			<p><?php echo $dog['specialFeatures']; ?></p>
		<?php else: ?>
			<h5>No such doggo exists. 😟</h5>
		<?php endif ?>
	</div>

	<?php include('templates/footer.php'); ?>

</html>