<?php
 include ('server.php');
if(isset($_SESSION['User'])) {
     header("Location: Regs.php"); // redirects them to homepage
     exit; // for good measure
}
if(isset($_SESSION['User2'])) {
     header("Location: Reg.php"); // redirects them to homepage
     exit; // for good measure
}
if(isset($_SESSION['User3'])) {
     header("Location: StudentDashboard.php"); // redirects them to homepage
     exit; // for good measure
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="styles/style1.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="shortcut icon" href="styles/CvSU/logo.ico">
</head>
<body>
  <div class="header">
    <h2>Login</h2>
  </div>

  <form method="post" action="LC.php">
    <?php include('errors.php') ?>
    <div class="input-group">
      <input type="text" name="username" placeholder="School ID No." value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
      <input type="password" name="password" placeholder="Password" id="myInput"><br>
    </div>
    <div style="font-size: 15px;">
      <input type="checkbox" onclick="myFunc()" style="width:20px;">Show Password
    </div><br>
    <div class="input-group">
      <button class="button button1" name="lc">Login</button>
      <p style="font-size: 15px;">
        Not yet a member? Register <a href="register.php">here.</a>
      </p>
    </div>
  </form>
</body>
</html>

<script>
function myFunc() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
