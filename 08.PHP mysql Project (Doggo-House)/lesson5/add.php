<?php 

	if(isset($_POST['submit'])){

		$email = $dogName = $specialFeatures = '';
		
		// check email
		if(empty($_POST['email'])){
			echo 'An email is required <br />';
		} else{
			$email = $_POST['email'];
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				echo 'Email must be a valid email address';
			}
		}

		// check dogName
		if(empty($_POST['dogName'])){
			echo 'A dog name is required <br />';
		} else{
			$dogName = $_POST['dogName'];
			if(!preg_match('/^[a-zA-Z\s]+$/', $dogName)){
				echo 'Doggo name must be letters and spaces only';
			}
		}

		// check specialFeatures
		if(empty($_POST['specialFeatures'])){
			echo 'At least one special feature is required <br />';
		} else{
			$specialFeatures = $_POST['specialFeatures'];
			if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $specialFeatures)){
				echo 'The special features must be a comma separated list';
			}
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