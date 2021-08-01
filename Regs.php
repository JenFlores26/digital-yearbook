<!--this is admin-style branch-->
<?php
    session_start();

    if(!isset($_SESSION['User']))
    {
      echo "<script>alert('You must login first.');window.location='logout.php';</script>";
    }
    isset($_SESSION['User']);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registrar Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="styles/style4.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="shortcut icon" href="styles/CvSU/logo.ico">
<script src="styles/js/jquery-3.6.0.js"></script>
</head>
<body>
  <div class="sidenav" id="mySidenav">
    <header>
      <div><i class="fas fa-user"></i></div>
      <div>
        <h3><?php echo $_SESSION['User'] ?></h3>
        <h3>Registrar</h3>
      </div>
    </header>
    <ul class="nav">
      <li><a class="active" href="#reg-message">Message</a></li>
      <li><a class="active" href="#reg-ao">Administrative Officers</a></li>
      <li><a class="active" href="#reg-affairs">Academic Affairs</a></li>
      <li><a class="active" href="#gradutes">Graduates</a></li>
      <li><a class="active" href="#reg-milestones-activities">Milestones & Activities</a></li>
      <li><a href="logout2.php">logout</a></li>
    </ul>
  </div>
  <div class="reg-container">
    <section class="reg-section" id="reg-message">

    </section>
    <section class="reg-section" id="reg-ao">
      <div class="search-container">
          <div>
              <input type="text" placeholder="Search by name" name="search-text" id="search_text">
          </div>
          <br>
          <div id="result"></div>
      </div>

      <script>
        $(document).ready(function(){
          load_data();
          function load_data(query)
          {
            $.ajax({
              url:"fetch.php",
              method:"post",
              data:{query:query},
              success:function(data)
              {
                $('#result').html(data);
              }
            });
          }

          $('#search_text').keyup(function(){
            var search = $(this).val();
            if(search != '')
            {
              load_data(search);
            }
            else
            {
              load_data();
            }
          });
        });
      </script>
    </section>
    <section class="reg-section" id="reg-affairs">

    </section>
    <section class="reg-section" id="graduates">

    </section>
    <section class="reg-section" id="reg-milestones-activities">

    </section>
  </div>
  <script src="styles/js/reg.js"></script>
</body>
</html>
