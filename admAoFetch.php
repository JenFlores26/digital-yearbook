<?php

$connect = mysqli_connect("localhost", "root", "", "yearbook");
$output = '';
if(isset($_POST["Squery"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["Squery"]);
	$query = "
	SELECT * FROM tab2
	WHERE fname LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM tab2 ORDER BY lname";
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
