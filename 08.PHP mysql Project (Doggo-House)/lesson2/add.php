<?php 

	// if(isset($_GET['submit'])){
	// 	echo $_GET['email'] . '<br />';
	// 	echo $_GET['dogName'] . '<br />';
	// 	echo $_GET['specialFeatures'] . '<br />';
	// }

	if(isset($_POST['submit'])){
		echo $_POST['email'] . '<br />';
		echo $_POST['dogName'] . '<br />';
		echo $_POST['specialFeatures'] . '<br />';
	}

?>

<!DOCTYPE html>
<html>
	
	<?php include('templates/header.php'); ?>

	<section class="container grey-text">
		<h4 class="center">Add a doggo</h4>
		<form class="white" action="add.php" method="POST">
			<label>Your Email</label>
			<input type="text" name="email">
			<label>Doggo Name</label>
			<input type="text" name="dogName">
			<label>Special features (comma separated)</label>
			<input type="text" name="specialFeatures">
			<div class="center">
				<input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">
			</div>
		</form>
	</section>

	<?php include('templates/footer.php'); ?>

</html>