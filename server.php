<?php
session_start();
// initializing variables
$username = "";
$firstname = "";
$middlename = "";
$lastname = "";
$email    = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'yearbook');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  $id = mysqli_real_escape_string($db, $_POST['Num']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['psw']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $middlename = mysqli_real_escape_string($db, $_POST['middlename']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  $contact = mysqli_real_escape_string($db, $_POST['conn']);
  $contacts = mysqli_real_escape_string($db, $_POST['year']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($email)) { array_push($errors, "School No. is required/Invalid"); }
  if (empty($email)) { array_push($errors, "Email is required/Invalid"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM confirmed WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($password_1);
  	$query = "INSERT INTO confirm (Sid, email, password, fname, mname, lname, Contact, usertype, year)
  			  VALUES('$id','$email', '$password', '$firstname', '$middlename', '$lastname', '$contact', 'Student', '$contacts')";
  	mysqli_query($db, $query);
    echo "<script>alert('Thank you for registering. Please wait for a confirmation email that will sent to you.');window.location='LC.php';</script>";
  }

}

if (isset($_POST['lc'])) {

  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
              $query = "SELECT * FROM confirmed WHERE Sid='$username' AND password='$password'";
              $results=mysqli_query($db,$query);
              if (mysqli_num_rows($results) == 1) {
              $logged_in_user = mysqli_fetch_assoc($results);
              if ($logged_in_user['usertype'] == 'Registrar') {
                $_SESSION['User']=$username;
                  $years = "SELECT year FROM confirmed WHERE Sid='$username'";
                  $resulta=mysqli_query($db,$years);
                  $log = mysqli_fetch_assoc($resulta);
                  $tot= $log['year'];
                   $_SESSION['Users']= $tot;
                  echo "<script>alert('Registrar');window.location='Regs.php';</script>";
              }
              else if ($logged_in_user['usertype'] == 'Admin') {
                  $_SESSION['User2']=$username;
                  $years = "SELECT year FROM confirmed WHERE Sid='$username'";
                  $resulta=mysqli_query($db,$years);
                  $log = mysqli_fetch_assoc($resulta);
                  $tot= $log['year'];
                   $_SESSION['Users2']= $tot;
                  echo "<script>alert('Admin');window.location='Reg.php';</script>";

            }
              else if ($logged_in_user['usertype'] == 'Student') {
                  $_SESSION['User3']=$username;
                  $years = "SELECT year FROM confirmed WHERE Sid='$username'";
                  $resulta=mysqli_query($db,$years);
                  $log = mysqli_fetch_assoc($resulta);
                  $tot= $log['year'];
                   $_SESSION['Users3']= $tot;
                  echo "<script>alert('Student');window.location='display2.php';</script>";
              }
              else{
                  echo "<script>alert('Invalid');window.location='LC.php';</script>";
              }
         }else{
          array_push($errors, "Email/Password doesn't exist or incorrect.");
         }
      }
}

if (isset($_POST['LA'])) {
  header('location: LA.php');
}

if (isset($_POST['LB'])) {
  header('location: LB.php');
}

if (isset($_POST['LC'])) {
  header('location: LC.php');
}

if (isset($_POST['LD'])) {
  header('location: LD.php');
}
?>
