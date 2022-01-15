<?php include('data-base.php') ?>

	<?php 

	$name = $_POST['name'];

	$f_name = $_POST['f_name'];

	$email = $_POST['email'];

	$dprt = $_POST['dprt'];

	$sem = $_POST['sem'];

	$c_no = $_POST['c_no'];

	$soc = $_POST['soc'];

	$des = $_POST['des'];

	$sql = "INSERT INTO student SET 
			name = '$name',
			f_name = '$f_name',
			email = '$email',
			department = '$dprt',
			semester = '$sem',
			contact_no = '$c_no',
			society = '$soc',
			designation = '$des'";

	$query = mysqli_query($connection, $sql);

	if ($query) 

	{
		echo "<script>alert('Login');</script>";
		echo "<script>document.location='form.php';</script>";
	}else

	{

		echo mysqli_error($connection);
		die();
	}

?>