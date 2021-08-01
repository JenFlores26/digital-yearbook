<?php 
$mysqli = new mysqli('localhost','root','','yearbook') or die(mysqli_error($mysqli));

if(isset($_POST['save'])){
	$id = $_POST['ids'];
	$ids = $_POST['id2'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$fname = $_POST['firstname'];
	$mname = $_POST['middlename'];
	$lname = $_POST['lastname'];

	$mysqli->query("UPDATE confirmed SET Sid='$ids', email='$email', password='$password', fname='$fname', mname='$mname', lname='$lname' WHERE id='$id'") or die($mysqli->error());
	echo "<script>alert('Edit Successfully!');window.location='Reg1.php';</script>";
}

if(isset($_POST['save2'])){
	$id= $_POST['id'];
	$image = addslashes(file_get_contents($_FILES['f1']['tmp_name']));
	$ids= $_POST['ids'];
	$fname = $_POST['firstname'];
	$mname = $_POST['middlename'];
	$lname = $_POST['lastname'];
	$password = $_POST['position'];
	$year = $_POST['year'];

	$mysqli->query("UPDATE tab2 SET image1='$image', fname='$fname', mname='$mname', lname='$lname', position='$password', year='$year' WHERE id='$id'") or die($mysqli->error());
	echo "<script>alert('Edit Successfully!');window.location='tab2.php';</script>";
}

if(isset($_POST['save3'])){
	$id= $_POST['id'];
	$image = addslashes(file_get_contents($_FILES['f1']['tmp_name']));
	$fname = $_POST['firstname'];
	$mname = $_POST['middlename'];
	$lname = $_POST['lastname'];
	$password = $_POST['position'];
	$year = $_POST['year'];

	$mysqli->query("UPDATE tab3 SET id='$id', image1='$image', fname='$fname', mname='$mname', lname='$lname', position='$password', year='$year' WHERE id='$id'") or die($mysqli->error());
	echo "<script>alert('Edit Successfully!');window.location='tab3.php';</script>";
}

if(isset($_POST['save4'])){
	$id= $_POST['id'];
	$fname = $_POST['firstname'];
	$mname = $_POST['middlename'];
	$lname = $_POST['lastname'];
	$password = $_POST['position'];
	$year = $_POST['year'];

	$mysqli->query("UPDATE tab4 SET id='$id', fname='$fname', mname='$mname', lname='$lname', position='$password', year='$year' WHERE id='$id'") or die($mysqli->error());
	echo "<script>alert('Edit Successfully!');window.location='tab4.php';</script>";
}

if(isset($_POST['save5'])){
	$id= $_POST['id'];
	$fname = $_POST['firstname'];
	$mname = $_POST['middlename'];
	$lname = $_POST['lastname'];
	$password = $_POST['position'];
	$year = $_POST['year'];

	$mysqli->query("UPDATE tab5 SET id='$id', fname='$fname', mname='$mname', lname='$lname', position='$password', year='$year' WHERE id='$id'") or die($mysqli->error());
	echo "<script>alert('Edit Successfully!');window.location='tab5.php';</script>";
}

if(isset($_POST['save6'])){
	$id= $_POST['id'];
	$fname = $_POST['firstname'];
	$mname = $_POST['middlename'];
	$lname = $_POST['lastname'];
	$password = $_POST['position'];
	$year = $_POST['year'];

	$mysqli->query("UPDATE tab6 SET id='$id', fname='$fname', mname='$mname', lname='$lname', position='$password', year='$year' WHERE id='$id'") or die($mysqli->error());
	echo "<script>alert('Edit Successfully!');window.location='tab6.php';</script>";
}

if(isset($_POST['save7'])){
	$id= $_POST['id'];
	$fname = $_POST['firstname'];
	$mname = $_POST['middlename'];
	$lname = $_POST['lastname'];
	$password = $_POST['position'];
	$year = $_POST['year'];

	$mysqli->query("UPDATE tab7 SET id='$id', fname='$fname', mname='$mname', lname='$lname', position='$password', year='$year' WHERE id='$id'") or die($mysqli->error());
	echo "<script>alert('Edit Successfully!');window.location='tab7.php';</script>";
}

if(isset($_POST['save8'])){
	$id= $_POST['id'];
	$image = addslashes(file_get_contents($_FILES['f1']['tmp_name']));
	$fname = $_POST['firstname'];
	$mname = $_POST['middlename'];
	$lname = $_POST['lastname'];
	$year = $_POST['year'];

	$mysqli->query("UPDATE shs SET id='$id', image='$image', fname='$fname', mname='$mname', lname='$lname', year='$year' WHERE id='$id'") or die($mysqli->error());
	echo "<script>alert('Edit Successfully!');window.location='tab8.php';</script>";
}

if(isset($_POST['save9'])){
	$id= $_POST['id'];
	$fname = $_POST['firstname'];
	$mname = $_POST['middlename'];
	$lname = $_POST['lastname'];
	$year = $_POST['year'];

	$mysqli->query("UPDATE shs SET id='$id', lname='$lname',  fname='$fname', mname='$mname', year='$year' WHERE id='$id'") or die($mysqli->error());
	echo "<script>alert('Edit Successfully!');window.location='tab9.php';</script>";
}


if(isset($_POST['save10'])){
	$id= $_POST['id'];
	$fname = $_POST['firstname'];
	$mname = $_POST['middlename'];
	$lname = $_POST['lastname'];
	$year = $_POST['year'];

	$mysqli->query("UPDATE tab10 SET id='$id', lname='$lname',  fname='$fname', mname='$mname', year='$year' WHERE id='$id'") or die($mysqli->error());
	echo "<script>alert('Edit Successfully!');window.location='tab10.php';</script>";
}

if(isset($_POST['save11'])){
	$id= $_POST['id'];
	$year = $_POST['year'];

	$mysqli->query("UPDATE tab11 SET year='$year' WHERE id='$id'") or die($mysqli->error());
	echo "<script>alert('Edit Successfully!');window.location='tab11.php';</script>";
}


?>