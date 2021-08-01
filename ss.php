<?php 
session_start();

    if(!isset($_SESSION['User']))
    {
      echo "<script>alert('You must login first.');window.location='LC.php';</script>";
    }
    else{
    isset($_SESSION['User']);
}
$mysqli = new mysqli('localhost','root','','yearbook') or die(mysqli_error($mysqli));


if(isset($_POST['save2'])){
	$id= $_POST['id'];
	$fname = $_POST['firstname'];
	$mname = $_POST['middlename'];
	$lname = $_POST['lastname'];
	$password = $_POST['position'];
	$year = $_POST['year'];

	$mysqli->query("UPDATE tab2 SET fname='$fname', mname='$mname', lname='$lname', position='$password', year='$year' WHERE id='$id'") or die($mysqli->error());
	echo "<script>alert('Edit Successfully!');window.location='tabs2.php';</script>";
}

if(isset($_POST['save3'])){
	$id= $_POST['id'];
	$fname = $_POST['firstname'];
	$mname = $_POST['middlename'];
	$lname = $_POST['lastname'];
	$password = $_POST['position'];
	$year = $_POST['year'];

	$mysqli->query("UPDATE tab3 SET id='$id', fname='$fname', mname='$mname', lname='$lname', position='$password', year='$year' WHERE id='$id'") or die($mysqli->error());
	echo "<script>alert('Edit Successfully!');window.location='tabs3.php';</script>";
}

if(isset($_POST['save4'])){
	$id= $_POST['id'];
	$fname = $_POST['firstname'];
	$mname = $_POST['middlename'];
	$lname = $_POST['lastname'];
	$password = $_POST['position'];
	$year = $_POST['year'];

	$mysqli->query("UPDATE tab4 SET id='$id', fname='$fname', mname='$mname', lname='$lname', position='$password', year='$year' WHERE id='$id'") or die($mysqli->error());
	echo "<script>alert('Edit Successfully!');window.location='tabs4.php';</script>";
}

if(isset($_POST['save5'])){
	$id= $_POST['id'];
	$fname = $_POST['firstname'];
	$mname = $_POST['middlename'];
	$lname = $_POST['lastname'];
	$password = $_POST['position'];
	$year = $_POST['year'];

	$mysqli->query("UPDATE tab5 SET id='$id', fname='$fname', mname='$mname', lname='$lname', position='$password', year='$year' WHERE id='$id'") or die($mysqli->error());
	echo "<script>alert('Edit Successfully!');window.location='tabs5.php';</script>";
}

if(isset($_POST['save6'])){
	$id= $_POST['id'];
	$fname = $_POST['firstname'];
	$mname = $_POST['middlename'];
	$lname = $_POST['lastname'];
	$password = $_POST['position'];
	$year = $_POST['year'];

	$mysqli->query("UPDATE tab6 SET id='$id', fname='$fname', mname='$mname', lname='$lname', position='$password', year='$year' WHERE id='$id'") or die($mysqli->error());
	echo "<script>alert('Edit Successfully!');window.location='tabs6.php';</script>";
}

if(isset($_POST['save7'])){
	$id= $_POST['id'];
	$fname = $_POST['firstname'];
	$mname = $_POST['middlename'];
	$lname = $_POST['lastname'];
	$password = $_POST['position'];
	$year = $_POST['year'];

	$mysqli->query("UPDATE tab7 SET id='$id', fname='$fname', mname='$mname', lname='$lname', position='$password', year='$year' WHERE id='$id'") or die($mysqli->error());
	echo "<script>alert('Edit Successfully!');window.location='tabs7.php';</script>";
}

if(isset($_POST['save8'])){
	$id= $_POST['id'];
	$fname = $_POST['firstname'];
	$mname = $_POST['middlename'];
	$lname = $_POST['lastname'];
	$year = $_POST['year'];

	$mysqli->query("UPDATE tab8 SET id='$id', fname='$fname', mname='$mname', lname='$lname', year='$year' WHERE id='$id'") or die($mysqli->error());
	echo "<script>alert('Edit Successfully!');window.location='tabs8.php';</script>";
}

if(isset($_POST['save9'])){
	$id= $_POST['id'];
	$fname = $_POST['firstname'];
	$mname = $_POST['middlename'];
	$lname = $_POST['lastname'];
	$year = $_POST['year'];

	$mysqli->query("UPDATE shs SET id='$id', lname='$lname',  fname='$fname', mname='$mname', year='$year' WHERE id='$id'") or die($mysqli->error());
	echo "<script>alert('Edit Successfully!');window.location='tabs9.php';</script>";
}


if(isset($_POST['save10'])){
	$id= $_POST['id'];
	$fname = $_POST['firstname'];
	$mname = $_POST['middlename'];
	$lname = $_POST['lastname'];
	$year = $_POST['year'];

	$mysqli->query("UPDATE tab10 SET id='$id', lname='$lname',  fname='$fname', mname='$mname', year='$year' WHERE id='$id'") or die($mysqli->error());
	echo "<script>alert('Edit Successfully!');window.location='tabs10.php';</script>";
}

if(isset($_POST['save11'])){
	$id= $_POST['id'];
	$year = $_POST['year'];

	$mysqli->query("UPDATE tab11 SET id='$id', year='$year' WHERE id='$id'") or die($mysqli->error());
	echo "<script>alert('Edit Successfully!');window.location='tabs11.php';</script>";
}


?>