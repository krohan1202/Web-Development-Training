<?php 

	// connect to the database
	$conn = mysqli_connect('localhost', 'Rohan', '123456', 'testing');

	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}

	// write query for all dogs
	$sql = 'SELECT dogName, specialFeatures, id FROM dogs ORDER BY created_at';

	// get the result set (set of rows)
	$result = mysqli_query($conn, $sql);

	// fetch the resulting rows as an array
	$dogs = mysqli_fetch_all($result, MYSQLI_ASSOC);

	// free the $result from memory (good practice)
	mysqli_free_result($result);

	// close connection
	mysqli_close($conn);


?>

<!DOCTYPE html>
<html>
	
	<?php include('templates/header.php'); ?>

	<h4 class="center green-text">Doggo List</h4>

	<div class="container">
		<div class="row">

			<?php foreach($dogs as $dog){ ?>

				<div class="col s6 md3">
					<div class="card z-depth-0">
						<div class="card-content center">
							<h6><?php echo htmlspecialchars($dog['dogName']); ?></h6>
							<div><?php echo htmlspecialchars($dog['specialFeatures']); ?></div>
						</div>
						<div class="card-action right-align">
							<a class="brand-text" href="#">more info</a>
						</div>
					</div>
				</div>

			<?php } ?>

		</div>
	</div>

	<?php include('templates/footer.php'); ?>

</html>