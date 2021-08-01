<?php
    session_start();

    if(!isset($_SESSION['User3']))
    {
      echo "<script>alert('You must login as Student first.');window.location='logout3.php';</script>";
    }
    isset($_SESSION['User3']);
    isset($_SESSION['Users3']);
?>
<!DOCTYPE html>
<html>
<head>
  <title>About the Developers</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="D2.css">
<link rel="shortcut icon" href="CvSU/logo.ico">
<style>
body {margin:0;font-family:Oswald}

.topnav {
 display: inline-block;
    margin: 0 auto;
    width: 100%;
    max-width: 100%;
    box-shadow: none;
    background-color:#3a4af8;
    position: fixed;
    height: 53px!important;
    z-index: 10;
    opacity: 95%;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;

}

.active {
  background-color: darkcyan;
  color: white;
}

.topnav .icon {
  display: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: white;
  color: black;
}

.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.column1 {
  float: left;
  width: 30%;
  padding: 5px;
  margin-left: 30px;

}
.column2 {
  float: left;
  width: 30%;
  padding: 5px;
  margin-left:0;

}
.column3 {
  float: left;
  width: 30%;
  padding: 5px;
  margin-left:0;

}

/* Clearfix (clear floats) */
.row1::after {
  content: "";
  clear: both;
  display: table;
}

.card2 {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 100%;
  border-radius: 10px;
  
}

.card2:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.containerd {
  padding: 2px 16px;
}
/* Media */
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="display2.php">My Yearbook</a>
  <a href="latest.php">Latest</a>
  <a href="#forums">Forums</a>
  <div class="dropdown" class="active">
    <button class="dropbtn" style="background-color: darkcyan;
  color: white;">About &#8711; 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="history.php">About the History</a>
      <a href="about.php" class="active">About the Developer</a>
    </div>
  </div> 
  <a href="logout3.php">Logout</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
<div>
<div id="parallax-world-of-ugg">
<section>
  <div class="title">
<center><p style="font-size: 80px;font-family: 'Oswald';margin-bottom: 30px;"><u>ABOUT THE DEVELOPERS</u></p></center><br>
  <p align="center" style="font-size: 20px;">A digital yearbook or eYearbook has a developer who creates a system for the campus.<br>The developers of this system are the following:</p><br><br>

  <div class="row1">
  <div class="column1">
    <div class="card2"style="width:90%; height:110%; border: 2px solid #0000FF;">
  <img src="courses/maricar.jpg" alt="Avatar" style="width:100%; height:110%; border-top-left-radius: 9px; border-top-right-radius: 9px">
  <div class="containerd">
    <p style="color:blue;font-size:22px;font-family: 'Oswald';" align="CENTER"><b>Maricar G. Cajote</b></p> 
    <p align="justify" style="font-size:22px;">&nbsp;&nbsp;Maricar is a third year Bachelor of Science in Information Technology student of Cavite state University - Bacoor City Campus. She is the one who helps documentaries and the flow of the system.</p><br> 
  </div>
</div>
</div>

  <div class="column2">
    <div class="card2" style="width:90%; height:110%; border: 2px solid #0000FF;">
  <img src="courses/rod.jpg" alt="Avatar" style="width:100%; height:110%; border-top-left-radius: 9px; border-top-right-radius: 9px">
  <div class="containerd">
    <p style="color:blue;font-size:22px;font-family: 'Oswald';" align="CENTER"><b>Rodney P. Arceño</b></p> 
    <p align="justify" style="font-size:22px;">&nbsp;&nbsp;Rodney is a third year Bachelor of Science in Information Technology student of Cavite state University - Bacoor City Campus. He is the one who leads the group and also the one who codes and creates the entire system.</p> 
  </div>
</div>
</div>

  <div class="column3">
    <div class="card2" style="width:90%; height:110%; border: 2px solid #0000FF;">
  <img src="courses/jennifer.jpg" alt="Avatar" style="width:100%; height:110%; border-top-left-radius: 9px; border-top-right-radius: 9px">
  <div class="containerd">
    <p style="color:blue;font-size:22px;font-family: 'Oswald';" align="CENTER"><b>Jennifer E. Flores</b></p> 
    <p align="justify" style="font-size:22px;">&nbsp;&nbsp;Jennifer is a third year Bachelor of Science in Information Technology student of Cavite state University - Bacoor City Campus. She is the one who helps coding and creating a system and making documentaries.</p>
  </div>
</div>
</div>
</div>
</div>
</section>
  </div>
</div>
</body>
</html>