<?php
if(isset($_POST['num'])){
$c1 = $_POST['num'];

if ($c1=="18010634") {
	echo "<script>alert('Welcome');window.location='A1.php';</script>";
}else{
	echo "<script>alert('Invalid');window.location='index.php';</script>";
}
}
?>