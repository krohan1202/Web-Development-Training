<?php 

	if(isset($_POST['submit'])){
		
		// check email
		if(empty($_POST['email'])){
			echo 'An email is required <br />';
		} else{
			echo htmlspecialchars($_POST['email']) . '<br />';
		}

		// check dogName
		if(empty($_POST['dogName'])){
			echo 'A dog name is required <br />';
		} else{
			echo htmlspecialchars($_POST['dogName']) . '<br />';
		}

		// check specialFeatures
		if(empty($_POST['specialFeatures'])){
			echo 'At least one special feature is required <br />';
		} else{
			echo htmlspecialchars($_POST['specialFeatures']) . '<br />';
		}

	} // end POST check

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