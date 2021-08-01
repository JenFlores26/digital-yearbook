<?php
    session_start();

    if(!isset($_SESSION['User3']))
    {
      echo "<script>alert('You must login as Student first.');window.location='logout3.php';</script>";
    }
    isset($_SESSION['User3']);
    isset($_SESSION['Users3']);
    header("location:display2.php");
?>