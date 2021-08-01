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
  <title>My Yearbook</title>
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
  opacity: 100%;
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

.pic{
  width: 200px;
  height: 250px;
}
.picbig{
  position: absolute;
  width:0px;
  -webkit-transform: translate(-84%, -27%);
  transform: translate(-84%, -27%);
  z-index:1;
}
.pic:hover + .picbig{
  width:280px;
  height:350px;
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
  <a href="display2.php" class="active">My Yearbook</a>
  <a href="latest.php">Latest</a>
  <a href="#forums">Forums</a>
  <div class="dropdown">
    <button class="dropbtn">About &#8711;
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="history.php">About the History</a>
      <a href="about.php">About the Developer</a>
    </div>
  </div>
  <a href="logout3.php">Logout</a>
  <a href="javascript:void(0);"
     style="font-size:15px;"
     class="icon"
     onclick="myFunction()">&#9776;</a>
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
  <div id="parallax-world-of-ugg">

<section>
  <div class="title">
    <h3>Graduates of</h3>
    <h1>Dr. Filemon C. Aguilar Memorial College of Las Piñas - IT campus<br>Batch <?php echo $_SESSION['Users3'] ?></h1>
  </div>
</section>

<section>
    <div class="parallax-one">
      <img src="styles/CvSU/logo-removebg.png" style="width:250px;height:250px;">
      <h2 style="text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">KABATAAN, TAGAPAGDALA NG KAUNLARAN SA BANSANG PILIPINAS</h2>
    </div>
</section>

<section>
  <div class="block">
    <h1>Mission</h1>
    <span  class="first-character sc">G</span><p>uided by its vision, the DFCAMCLP committed to: Motivate and develop
competent, productive and ethical professionals, leaders and citizens of Las Pinas.</p>
    <p class="line-break margin-top-10"></p>
    <h1>Vision</h1>
    <span  class="first-character sc">T</span><p>he Dr. Filemon C. Aguilar Memorial College of Las Pinas (DFCAMCLP), as a public
institution of higher learning, commits itself to educate and serve the less priviledge but
deserving students of Las Pinas City.<br>

Through quality tertiary education by emphasizing the importance of knowledge
and skills honed through strong values fashioned from the best in human and Filipino tradition.
It shall strive to achieve responsible service that will contribute to the common efforts
towards community building, national development and global solidarity.</p>
  </div>
</section>
</div><!--End of Palax-->

<section>
  <h2 class="board">- Administrative Officers -</h2>
   <div class="yb-php">
  <?php
  $db=mysqli_connect('localhost','root','','yearbook');
  $goo= $_SESSION['Users3'];
         $user_check_query = "SELECT * FROM  tab2 WHERE year = '$goo'";
         $result = mysqli_query($db, $user_check_query);

         while ($row = mysqli_fetch_array($result)){
            echo "<div class='container'>";
            echo "<div class='card'>";
            echo "<div class='imgBx'>";
            echo '<img class="pic" src="data:image/jpeg;base64,'.base64_encode($row['image1'] ).'"/>';
            echo '<img class="picbig" src="data:image/jpeg;base64,'.base64_encode($row['image1'] ).'"/>';
            echo "</div>";
            echo "<div class='contentt'>";
            echo "<h2 style='margin-top:0;'>".$row['fname']."&nbsp;".$row['mname']."&nbsp;".$row['lname']."</h2>";
            echo $row['position'];
            echo "</div>";
            echo "</div>";
            echo "</div>";
      }
  ?>
   </div>
</section>
<section>
  <h2 class="board">- Academic Affairs -</h2>
   <div class="yb-php">
  <?php
  $db=mysqli_connect('localhost','root','','yearbook');
  $goo= $_SESSION['Users3'];
         $user_check_query = "SELECT * FROM tab3 WHERE year = '$goo'";
         $result = mysqli_query($db, $user_check_query);

         while ($row = mysqli_fetch_array($result)){
            echo "<div class='container'>";
            echo "<div class='card'>";
            echo "<div class='imgBx'>";
            echo '<img  class="pic" src="data:image/jpeg;base64,'.base64_encode($row['image1'] ).'"/>';
            echo '<img  class="picbig" src="data:image/jpeg;base64,'.base64_encode($row['image1'] ).'"/>';
            echo "</div>";
            echo "<div class='contentt'>";
            echo "<h2 class='unselectable'>".$row['fname']."&nbsp;".$row['mname']."&nbsp;".$row['lname']."</h2>";
            echo $row['position'];
            echo "</div>";
            echo "</div>";
            echo "</div>";
      }
  ?>
   </div>
</section>


  <h2 class="board">- The Graduates -</h2>
   <div class="yb-php">
  <?php
  $db=mysqli_connect('localhost','root','','yearbook');
  $goo= $_SESSION['Users3'];
         $user_check_query = "SELECT * FROM shs WHERE year='$goo' ORDER BY lname";
         $result = mysqli_query($db, $user_check_query);

         while ($row = mysqli_fetch_array($result)){
            echo "<div class='container'>";
            echo "<div class='card'>";
            echo "<div class='imgBx'>";
            echo '<img  class="pic" src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'"/>';
            echo '<img  class="picbig" src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'"/>';
            echo "</div>";
            echo "<div class='contentt'>";
            echo "<h2 class='unselectable'>".$row['lname'].", ".$row['fname']."&nbsp;".$row['mname']."</h2>";
            echo $row['year'];
            echo "</div>";
            echo "</div>";
            echo "</div>";
      }
  ?>
   </div>

<section>
  <h2 class="board">- Milestones & Activities -</h2>
   <div class="yb-php2">
  <?php
  $db=mysqli_connect('localhost','root','','yearbook');
  $goo= $_SESSION['Users3'];
         $user_check_query = "SELECT * FROM tab11 WHERE year = '$goo'";
         $result = mysqli_query($db, $user_check_query);

         while ($row = mysqli_fetch_array($result)){
            echo "<table  class='unselectable'>";
            echo "<tr>";
            echo "<td class='unselectable'><img class='imahe' src='data:image/jpeg;base64,".base64_encode($row['image1'] )."'></td><br>";
            echo "</tr>";
            echo "</table>";
      }
  ?>
   </div>


</section>
 </div>
 <div style="background-color:#333" align="center">
  <a href="https://www.laspinascity.gov.ph/"><img src="styles/CvSU/lpc.jpg" style="width: 250px;height: 200px;"></a>
</div>

</body>
</html>
