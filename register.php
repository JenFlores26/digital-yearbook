<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <link rel="stylesheet" href="styles/style1.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="shortcut icon" href="styles/CvSU/logo.ico">
  <style>
#message {
  display:none;
  background: white;
  color: #000;
  position: relative;
}

#message p {
  font-size: 15px;
  margin-left: 80px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}
</style>
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>

  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
    <div class="input-group">
      <input type="number" name="Num" placeholder="Student No." oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" onkeypress="return isNumberKey(event)" maxlength="9" value="<?php echo $id; ?>" required>
    </div>
  	<div class="input-group">
  	  <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>" required>
  	</div>
    <div class="input-group">
      <input type="password" placeholder="Password" name="psw" id="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
    </div>
      <div id="message">
  <h3 style="font-size: 15px;">Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>

<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
    <div class="input-group">
      <input type="password" placeholder="Confirm Password" name="password_2" required>
    </div>
    <div class="input-group">
      <input type="text" name="firstname" placeholder="Firstname" value="<?php echo $firstname; ?>" required>
    </div>
    <div class="input-group">
      <input type="text" name="middlename" placeholder="Middlename" value="<?php echo $middlename; ?>" required>
    </div>
    <div class="input-group">
      <input type="text" name="lastname" placeholder="Lastname" value="<?php echo $lastname; ?>" required>
    </div>
    <div class="input-group">
      <input type="number" name="conn" required placeholder="Contact No." oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" onkeypress="return isNumberKey(event)" maxlength="11"  value="<?php echo $contact; ?>">
    </div>
    <div class="input-group">
      <input type="number" name="year"  placeholder="Batch Year" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" onkeypress="return isNumberKey(event)" maxlength="4" value="<?php echo $contacts; ?>" required>
    </div>
    <p style="font-size: 10px;text-align: justify;">Due to the RA10173 or simply known as the "Data Privacy Act of 2012", by clicking the "Register" button, you are consenting us to use your information for this system.</p>
  	<div class="input-group" align="center">
      <button class="button button1" name="reg_user">Register</button>
    </div>

  	<p style="font-size: 15px;">
  		Already a member? Login <a href="LC.php">here</a>
  	</p>
  </form>


</body>
</html>
