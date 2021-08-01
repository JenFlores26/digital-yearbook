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
  <title>About History</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/style2.css">
<link rel="shortcut icon" href="styles/CvSU/logo.ico">
<style>
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
  <div class="dropdown">
    <button class="dropbtn" style="background-color: darkcyan;
  color: white;">About &#8711;
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="history.php" class="active">About the History</a>
      <a href="about.php">About the Developer</a>
    </div>
  </div>
  <a href="logout3.php">Logout</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

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
<div id="parallax-world-of-ugg">
<section class="main-section">
  <div class="title">
    <p><u>About the history</u></p>
    <p>A true story behind</p>
  </div>

    <img class="old-building" src="styles/CvSU/dfcam.jpg">
    <p class="disc"><i>Photo of DFCAMCLP Building</i></p>

  <div class="parag">
    <p>DFCAMCLP started as a special project of <strong>former Mayor Vergel "Nene" A. Aguilar
    </strong>which is backed up and supported by his wife, the incumbient <strong>City Mayor Imelda T. Aguilar.
    </strong>City Ordinance <strong>No. 352-97 Series of 1997 </strong>was enacted on <strong>August 13, 1997
    </strong>establishing DFCAMC.</p><br><br></p>
  </div>
  <img class="dr" src="styles/CvSU/dr.png">
  <p class="disc"><i>Photo of Dr. Filemon C. Aguilar</i></p>

  <div class="parag">
    <p>The school was named in honor of his father namely,<strong> Dr. Filemon C. Aguilar</strong>. In <strong>March 12, 1998</strong>,
      the inauguration of a campus is also the birthdate of DFCAMCLP Founder Former Mayor <strong>Imelda "Nene" Aguilar</strong>.
       DFCAMC began to offer courses of <strong>Bachelor of Science in Business Administration Major in Management, Marketing, Entrepreneurship
      , Economics and Banking and Finance</strong> in <strong>March 12, 1998</strong> with a total of <strong>1,083</strong>
       enrolled from various secondary schools. In <strong>October 7, 1998</strong>, the issuance of <b>City Accordance No. 417-A-98</b>
        correct the spelling of Felimon to Filemon. The College Offered a new program, the <b>Bachelor of Science in Accountancy</b>.
         It is complimented it's other program, the <b>Bachelor of Science in Business Accountancy</b> strengthening DFCAMC’s mandate
          to become a full-blown school of business. In a year <b>2000</b>, the school affiliated with <b>American Civil Liberties Union</b>
           making its presence felt across the region. The college disproved the elitist notion that quality education is the monopoly
            with expensive private colleges and universities. The first commencement exercises was held at Aguilar Sports Complex
            in Pilar Village, Las Piñas City in <b>April 5, 2002</b> with <b>558</b> graduates. In October 2003, DFCAMCLP produced
             its first three CPA passers with 50% passing rate. In April 2009, the City Ordinance No. 887-09 Series of 2009 changed the
             name of the school to <b>Dr. Filemon C. Aguilar Memorial College of Las Piñas (DFCAMCLP)</b>. </p><br><br></p>
  </div>

  <img class="old-building" src="styles/CvSU/dfcamit.jpg">
  <p class="disc"><i>Photo of DFCAMCLP-IT Building</i></p>
  <div class="parag">
    <p>From 2019 to present, the school named <b>Dr. Filemon C. Aguilar Information Technology Training Institute</b> change it's name into <b>Dr. Filemon C. Aguilar Memorial College of Las Piñas - Information Technology Campus.</b></p>
  </div>
</section>
</div>
</body>
</html>
