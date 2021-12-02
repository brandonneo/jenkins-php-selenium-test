<?php
session_start();
if(isset($_POST['submit']))
{
//	if((isset($_POST['Search'] !='')){
		if (strpos($_POST['Search'],'<script>') !== false) { // attack

			echo '<script>alert("attacked by Prans")</script>';

  		$_POST['Search'] ="";
		}
		else{
			$_SESSION['Search'] =  $_POST['Search'];
			header('location:dashboard.php');
		 exit;
		}
}

 ?>
<!DOCTYPE html>
<html>
<head>
<title>Search Page</title>

</head>

<body>

	<div class="container">
		<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
				<label>Search</label>
				<input type="text" name="Search">
			</div>
			<div class="field-container">
				<button type="submit" name="submit">Search</button>
			</div>

		</form>
	</div>
</body>

</html>
