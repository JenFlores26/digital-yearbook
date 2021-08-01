<?php
session_start();

if(!isset($_SESSION['User']))
{
  echo "<script>alert('You must login first.');window.location='logout.php';</script>";
}
isset($_SESSION['User']);

$connect = mysqli_connect("localhost", "root", "", "yearbook");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM tab2
	WHERE fname LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM tab2";
}
$result = mysqli_query($connect, $query);

if(mysqli_num_rows($result) > 0)
{
	$output .= '
          <div>
					<table class="table">
          <tbody id="table">
						<tr>
							<th>Image</th>
							<th>First Name</th>
							<th>Middle Name</th>
							<th>Last Name</th>
							<th>Position</th>
							<th>Year</th>
              <th>Action</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr class="main">
				<td><img class="image-official" src="data:image/jpeg;base64,'.base64_encode($row["image1"]).'"/></td>
				<td>'.$row["fname"].'</td>
        <td>'.$row["lname"].'</td>
				<td>'.$row["mname"].'</td>
				<td>'.$row["position"].'</td>
				<td>'.$row["year"].'</td>
        <td align="center">
                <button class="button2" style="border:1px solid;width:30px;">
              <a class="delbtn" style="text-decoration:none; color:white;" href ="registarFunction.php?edit='.$row["id"].'">&#9998;</a>
                </button>
                <button class="button3" style="border:1px solid;width:30px;">
              <a class="delbtn" style="text-decoration:none; color:white;" href="registarFunction.php?email='.$row["fname"].'">&#128465;</a>
                </button>
              </td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>
