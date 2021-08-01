<?php include('scripts.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link rel="shortcut icon" href="CvSU/logo.ico">
    <title>Add Registrar</title>
<style>
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
}

select{
  height: 40px;
  width: 99%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
  font-family: 'Ubuntu', sans-serif;
}

.button1 {background: linear-gradient(to right, red, red);} /* Green */
.button2 {background: linear-gradient(to right, #9C27B0, #E040FB);} /* Blue */
}
</style>
</head>
<body>
    <div class="header">
    <h2>Add Account</h2>
  </div>
    <form action="adEmail.php" method="post">
        <div class="card">
            <div class="container">
        <div class="input-group" align="center">
            <?php include('errors.php'); ?>
            <input type="mail" id="id" name="id" placeholder="School Id" maxlength="10"><br><br>
            <input type="mail" id="toEmail" name="toEmail" placeholder="Email"><br><br>
            <input type="password" placeholder="Password" name="password" id="password"><br><br>
            <input type="password" placeholder="Confirm Password" name="password1" id="password1"><br><br>
            <input type="text" name="firstname" id="firstname" placeholder="Firstname" ><br><br>
            <input type="text" name="middlename" id="middlename" placeholder="Middlename"><br><br>
            <input type="text" name="lastname" id="lastname" placeholder="Lastname"><br><br>
            <select name="types" id="types">
                 <option value="Admin">Admin</option>
                 <option value="Registrar">Registrar</option>
            </select><br><br>
            <input type="number" id="conn" name="conn" placeholder="Contact No." oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" onkeypress="return isNumberKey(event)" maxlength="11">
            </div>
            <div class="input-group" align="center">
            <center><button type="submit" name="sendMailBtn" class="button button1">Add</button>
            </div>
            </div>
            </form>
           
</body>
</html>