<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<style>
body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
  background-image: url('wallpaper.jpg');
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #8FC95E;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #fafafa;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #fff000;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

.header {
  padding: 15px;
  text-align: right;
  background: #1abc9c;
  color: white;
  font-size: 10px;
}
</style>
</head>
<body>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">News</a>
  <a href="#">Registrars</a>
  <a href="#">Faculty & Departments</a><hr>
  <a style="font-size: 25px; color: #fafafa; padding: 8px 8px 8px 32px;">Courses</a>
  <a href="#">BSE</a>
  <a href="#">BSBM</a>
  <a href="#">BSCS</a>
  <a href="#">BSHRM</a>
  <a href="#">BSIT</a>
  <a href="#">BSC</a>
  <a href="#">BSP</a>
  <hr>
  <a href="login.php">Logout</a>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <h4 style="padding: 8px 8px 8px 32px; text-decoration: none; font-size: 20px; color: #fafafa; display: block; transition: 0.3s;"><?php echo  date("m/d/Y");?></h4>
</div>

<div id="main">
  
  <span style="font-size:30px;cursor:pointer; color:green;" onclick="openNav()">&#9776;</span>

</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
</body>
</html> 
