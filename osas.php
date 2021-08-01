<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style3.css">
<link rel="shortcut icon" href="CvSU/logo.ico">
<style>
  div.scroll {
                width: 1020px;
                height: 450px;
                overflow-x: auto;
                overflow-y: auto;
            }
  .topnav {
  overflow: hidden;
  width: 250%;
  background: none;
}


.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  margin-bottom:8px;
  margin-left: 80px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
 .topnav input[type=text], .topnav .search-container button {
    display: block;
    text-align: left;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}

.sidenav {
  width: 190px;
  position: fixed;
  z-index: 1;
  background: #0275d8;
  overflow-x: hidden;
  padding: 8px 0;
}
.active {
  background-color: #020cbd;
  color: white;
}
.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 16px;
  color: white;
  display: block;
}

.search-container {
  float: right;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
  .button {
  border-radius: 25px;  
  border:none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  color: black;
  
}
.button1 {background: linear-gradient(to right, blue, blue);font-size: 20px;color:white;border:1px solid;border-color: black;}
.button2 {background: linear-gradient(to right, green, green);font-size: 20px;} /* Green */
.button3 {background: linear-gradient(to right, red, red);font-size: 20px;} /* Blue */
}
</style>
</head>
<body>
<form action="" method="post">
<div class="row">
  <div class="column" style="width:190px;">
<div id="mySidenav" class="sidenav">
  <a href="#">Office of the President</a>
  <a href="gui.php">Guidance Office</a>
  <a href="edp.php">EDP Services</a>
  <a href="#">Registrar Office</a>
  <a href="osas.php" class="active">OSAS</a>
  <a href="acad.php">Academic Services</a>
  <a href="#">Faculty Members</a>
  <a style="font-size: 20px; color: #fafafa; padding: 8px 8px 8px 32px;">Graduates</a>
  <a href="#">DFCAMCLP-IT</a>
  <p style="margin-top:3px; margin-bottom: 3px; margin-left: 15px; color: white;">DFCAITTI</p>
  <a href="#">&nbsp;&nbsp;&nbsp;Senior High</a>
  <a href="#">&nbsp;&nbsp;&nbsp;TechVoc</a>
  <hr>
  <a href="#">Milestones & activities</a>
  <a href="Reg1.php">Registered Accounts</a>
  <a href="select.php">Logout</a>
  <br>
  <br>
  <br>
  <br>
  <h4 style="padding: 8px 8px 8px 32px; text-decoration: none; font-size: 20px; color: #fafafa; display: block; transition: 0.3s;"><?php echo  date("m/d/Y");?></h4>
</div>

</div>

<div class="column">
<div class="row">
        <?php 
        $db = mysqli_connect('localhost', 'root', '', 'yearbook');
        if(isset($_POST['Add1'])){
    header("Location: osas2.php");
}
if(isset($_POST['sort'])){
    header("Location: osas.php");
}
        if(isset($_POST['search'])){
        $searchKey=$_POST['search'];
        $sql = "SELECT * from osas where lname LIKE '%$searchKey%' or fname LIKE '%$searchKey%' or mname LIKE '%$searchKey%'";
        $result = mysqli_query($db,$sql);
      }else{
        $sql = "SELECT * from osas ORDER BY lname";
        $searchKey="";

      }
        $result = mysqli_query($db,$sql);
        ?>
         <div class="topnav">
  <div class="search-container">
    <form action="">
      <button type="submit" name="Add1" class="button1" style="float: left;margin-right: 5px;background-color: blue;">Add Account</button>
      <button type="submit" name="sort" class="button1" style="float: left;background-color: blue;margin-right: 440px;">Sort</button>
      <input type="text" placeholder="Search.." name="search">
      <button type="button1" style="font-size: 15px;background-color:#0275d8;">&#128269;</button>
    </form>
  </div>
  </div>
        <br>
        <br>
        </div>
        <table id="customers">
          <tr>
            <th>&nbsp;&nbsp;&nbsp;&nbsp;Image&nbsp;&nbsp;&nbsp;&nbsp;</th>
            <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Firstname&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
            <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Middlename&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
            <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lastname&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
            <th><center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Position&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
            <th><center>&nbsp;&nbsp;&nbsp;Action&nbsp;&nbsp;&nbsp;&nbsp;</th>
          </tr>
        </table>
          <div class="scroll">
        <table id="customers">
          <?php while($row = mysqli_fetch_array($result)){ 
          echo "<tr style='width: 100%;'>";
          echo "<td style='width:40px;'>".'<img class="imahe" style="width:80px; height:100px;" src="data:image/jpeg;base64,'.base64_encode($row['image1'] ).'"/>'."</td>";
          echo "<td style='width:200px;'>" . $row['fname'] . "</td>";
          echo "<td style='width:200px;'>" . $row['mname'] . "</td>";
          echo "<td style='width:200px;'>" . $row['lname'] . "</td>";
          echo "<td>" . $row['position'] . "</td>";
          echo "<td style='width:80px;' align='center'>
                  <button class='button2' style='border:1px solid;border-color:green;width:90%'>
                <a class='delbtn' style='text-decoration:none; color:white;' href ='registarFunction.php?edita=".$row['id']."'>&#9998;</a>
                  </button><br><br>
                  <button class='button3' style='border:1px solid;width:90%'>
                <a class='delbtn' style='text-decoration:none; color:white;' href='registarFunction.php?emails=".$row['fname']."'>&#128465;</a>
                  </button>
                </td>";
          echo "</tr>";
}

echo "</table>";
echo "</div>";
mysqli_close($db);
?>
      </div>
    </div>
</form>
</body>
</html> 
