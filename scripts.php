        <?php
        session_start();

// initializing variables
        $username = "";
        $email    = "";
        $errors = array(); 

        $db = mysqli_connect('localhost', 'root', '', 'yearbook');

        if(isset($_POST['sendMailBtn'])){
          $sid = mysqli_real_escape_string($db, $_POST['id']);
          $username = mysqli_real_escape_string($db, $_POST['toEmail']);
          $password_1 = mysqli_real_escape_string($db, $_POST['password']);
          $password_2 = mysqli_real_escape_string($db, $_POST['password1']);
          $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
          $middlename = mysqli_real_escape_string($db, $_POST['middlename']);
          $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
          $usertypes = mysqli_real_escape_string($db, $_POST['types']);


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
  array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE email='$username' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['email'] === $username) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($password_1);
    $query = "INSERT INTO confirmed (email, password, fname, mname, lname, usertype) 
              VALUES('$username', '$password', '$firstname', '$middlename', '$lastname', '$usertypes')";
    mysqli_query($db, $query);

          $to = $_POST['toEmail'];
         $subject = "Registered";
         $message = "<p>Hi ".$_POST['firstname']."! </p><br>";
         $message .= "<p>The admin added an account for you on our Digital Yearbook. Your Access Key on yearbook is ".$_POST['id']." and your password is ".$_POST['password'].". You can now access your account in ".$_POST['types']." login form. Thank you. </p><br>";
         $message .= "<p>-Campus Administrator</p><br>";
         $header = "From: rarceno503@gmail.com \n";
         $header .= "Cc:rarceno503@gmail.com \n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\n";
         $retval = mail ($to,$subject,$message,$header);
            if( $retval == true ) {
            echo "<script>alert('Added Successfully!');window.location='Reg1.php';</script>";
         }else {
            echo "<script>alert('Error Inputs');window.location='Reg1.php';</script>";
         }
// connect to the database
  } 
     }


if(isset($_POST['Cancel'])){
    header("Location: Ad1.php");
}
      ?>
