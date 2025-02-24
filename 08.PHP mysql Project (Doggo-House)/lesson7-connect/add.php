<?php 

	$email = $dogName = $specialFeatures = '';
	$errors = array('email' => '', 'dogName' => '', 'specialFeatures' => '');

	if(isset($_POST['submit'])){
		
		// check email
		if(empty($_POST['email'])){
			$errors['email'] = 'An email is required';
		} else{
			$email = $_POST['email'];
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$errors['email'] = 'Email must be a valid email address';
			}
		}

		// check dogName
		if(empty($_POST['dogName'])){
			$errors['dogName'] = 'A dogName is required';
		} else{
			$dogName = $_POST['dogName'];
			if(!preg_match('/^[a-zA-Z\s]+$/', $dogName)){
				$errors['dogName'] = 'Doggo name must be letters and spaces only';
			}
		}

		// check specialFeatures
		if(empty($_POST['specialFeatures'])){
			$errors['specialFeatures'] = 'At least one special feature is required';
		} else{
			$specialFeatures = $_POST['specialFeatures'];
			if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $specialFeatures)){
				$errors['specialFeatures'] = 'Special features must be a comma separated list';
			}
		}

		if(array_filter($errors)){
			//echo 'errors in form';
		} else {
			//echo 'form is valid';
			header('Location: index.php');
		}

	} // end POST check

?>

<!DOCTYPE html>
<html>
	
	<?php include('templates/header.php'); ?>

	<section class="container grey-text">
		<h4 class="center">Add a Doggo</h4>
		<form class="white" action="add.php" method="POST">
			<label>Your Email</label>
			<input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
			<div class="red-text"><?php echo $errors['email']; ?></div>
			<label>Doggo Name</label>
			<input type="text" name="dogName" value="<?php echo htmlspecialchars($dogName) ?>">
			<div class="red-text"><?php echo $errors['dogName']; ?></div>
			<label>Special Features (comma separated)</label>
			<input type="text" name="specialFeatures" value="<?php echo htmlspecialchars($specialFeatures) ?>">
			<div class="red-text"><?php echo $errors['specialFeatures']; ?></div>
			<div class="center">
				<input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">
			</div>
		</form>
	</section>

	<?php include('templates/footer.php'); ?>

</html>