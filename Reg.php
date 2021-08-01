<!--this is a admin-style branch-->

<?php
    session_start();

    if(!isset($_SESSION['User2']))
    {
      echo "<script>alert('You must login as Admin first.');window.location='logout.php';</script>";
    }
    isset($_SESSION['User2']);
    isset($_SESSION['Users2']);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles/style3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!--<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>-->
<link rel="shortcut icon" href="styles/CvSU/logo.ico">
<script src="styles/js/jquery-3.6.0.js"></script>
</head>
<body>
  <div class="sidenav" id="mySidenav">
    <header>
        <div><i class="fas fa-user"></i></div>
        <div>
          <h3><?php echo $_SESSION['User2'] ?></h3>
          <h3>Admin</h3>
      </div>
    </header>
  <ul class="nav">
    <li><a class="active admin-m" href="#adm-message">Message</a></li>
    <li><a class="active admin-ao" href="#adm-ao">Administrative Officers</a></li>
    <li><a class="active"href="#adm-affairs">Academic Affairs</a></li>
    <li><a class="active"href="#gradutes">Graduates</a></li>
    <li><a class="active"href="#adm-milestones-activities">Milestones & Activities</a></li>
    <li><a class="active" href="#adm-reg-accounts">Registered Accounts</a></li>
    <li><a class="active"href="#adm-req-accounts">Request Accounts</a></li>
    <li><a href="logout2.php">logout</a></li>
  </ul>
  </div>

  <div class="adm-container">
    <section class="adm-section" id="adm-message">
      <!----pang message line---->
    </section>

    <section class="adm-section" id="adm-ao">
      <div class="search-container">
          <div>
              <input type="text" placeholder="Search by name" name="search-text" id="search_text">
              <button type="submit"><i class="fas fa-search"></i></button>
          </div>
          <br>
          <div id="result"></div>
      </div>
      <script>
        $(document).ready(function(){
          load_data();
          function load_data(Squery)
          {
            $.ajax({
              url:"admAoFetch.php",
              method:"post",
              data:{Squery:Squery},
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

    <section class="adm-section" id="adm-affairs">
      <div class="search-container">
          <div>
              <input type="text" placeholder="Search by name" name="search-texts" id="search_texts">
              <button type="submit"><i class="fas fa-search"></i></button>
          </div>
          <br>
          <div id="results"></div>
      </div>
      <script>
        $(document).ready(function(){
          load_data();
          function load_data(Squery2)
          {
            $.ajax({
              url:"adm2.php",
              method:"post",
              data:{Squery2:Squery2},
              success:function(data)
              {
                $('#results').html(data);
              }
            });
          }

          $('#search_texts').keyup(function(){
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


    <section class="adm-section" id="gradutes">
      <?php
      //just add form tag here to use the search function
      $db = mysqli_connect('localhost', 'root', '', 'yearbook');

      if(isset($_POST['search'])){
      $searchKey=$_POST['search'];
      $sql = "SELECT * from shs where lname LIKE '%$searchKey%' or fname LIKE '%$searchKey%' or mname LIKE '%$searchKey%' ORDER BY lname, year";
      $result = mysqli_query($db,$sql);
      }else{
      $sql = "SELECT * from shs ORDER BY lname, year";
      $searchKey="";
      }
      $result = mysqli_query($db,$sql);
      ?>

      <div class="search-container">
        <div>
            <input type="text" placeholder="Search.." name="search" value="<?php echo $searchKey; ?>">
            <button type="submit"><i class="fas fa-search"></i></button>
        </div>
        </form>
        <script type="text/javascript">
         window.addEventListener('keydown',function(e){
            if(e.keyIdentifier=='U+000A'||e.keyIdentifier=='Enter'||e.keyCode==13){
            if(e.target.nodeName=='INPUT'&&e.target.type=='text'){
            e.preventDefault();return false;}}},true);
          </script>
      </div>

      <table>
        <tbody>
        <tr>
            <th>Image</th>
            <th>First Name</th>
            <th>Middle Initial</th>
            <th>Last Name</th>
            <th>Year</th>
        </tr>

        <?php
        while($row = mysqli_fetch_array($result)){
          echo "<tr class='main'>";
          echo "<td>".'<img class="image-official" src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'"/>'."</td>";
          echo "<td>" . $row['fname'] . "</td>";
          echo "<td>" . $row['mname'] . "</td>";
          echo "<td>" . $row['lname'] . "</td>";
          echo "<td>" . $row['year'] . "</td>";
          echo "</tr>";
        }
        mysqli_close($db);
        ?>
      </table>
    </section>
    <section class="adm-section" id="adm-milestones-activities">
      <?php
      //just add form tag here to use the search function
      $db = mysqli_connect('localhost', 'root', '', 'yearbook');

      if(isset($_POST['search'])){
      $searchKey=$_POST['search'];
      $sql = "SELECT * from tab11";
      $result = mysqli_query($db,$sql);
      }else{
      $sql = "SELECT * from tab11";
      $searchKey="";
      }
      $result = mysqli_query($db,$sql);
      ?>

      <div class="search-container">
        <div>
            <input type="text" placeholder="Search.." name="search" value="<?php echo $searchKey; ?>">
            <button type="submit"><i class="fas fa-search"></i></button>
        </div>
        </form>
        <script type="text/javascript">
         window.addEventListener('keydown',function(e){
            if(e.keyIdentifier=='U+000A'||e.keyIdentifier=='Enter'||e.keyCode==13){
            if(e.target.nodeName=='INPUT'&&e.target.type=='text'){
            e.preventDefault();return false;}}},true);
          </script>
      </div>

      <table>
        <tbody>
        <tr>
            <th>Image</th>
            <th>Year</th>
        </tr>

        <?php
        while($row = mysqli_fetch_array($result)){
          echo "<tr class='main'>";
          echo "<td>".'<img class="image-official" src="data:image/jpeg;base64,'.base64_encode($row['image1'] ).'"/>'."</td>";
          echo "<td>" . $row['year'] . "</td>";
          echo "</tr>";
        }
        mysqli_close($db);
        ?>
      </table>
    </section>
    <section class="adm-section" id="adm-reg-accounts">
      <?php
      //just add form tag here to use the search function
      $db = mysqli_connect('localhost', 'root', '', 'yearbook');
      $sql = "SELECT * from confirmed WHERE usertype='Student'";
      $result = mysqli_query($db,$sql);
      ?>

      <div class="search-container">
        <div>
            <input type="text" placeholder="Search.." name="search" value="<?php echo $searchKey; ?>">
            <button type="submit"><i class="fas fa-search"></i></button>
        </div>
        </form>
        <script type="text/javascript">
         window.addEventListener('keydown',function(e){
            if(e.keyIdentifier=='U+000A'||e.keyIdentifier=='Enter'||e.keyCode==13){
            if(e.target.nodeName=='INPUT'&&e.target.type=='text'){
            e.preventDefault();return false;}}},true);
          </script>
      </div>

      <table>
        <tbody>
        <tr>
            <th>School ID</th>
            <th>Email</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Batch Year</th>
            <th>Contact No.</th>
            <th>Action</th>
        </tr>

        <?php
        while($row = mysqli_fetch_array($result)){
          echo "<tr class='main'>";
          echo "<td>" . $row['id'] . "</td>";
          echo "<td>" . $row['email'] . "</td>";
          echo "<td>" . $row['fname'] . "</td>";
          echo "<td>" . $row['mname'] . "</td>";
          echo "<td>" . $row['lname'] . "</td>";
          echo "<td>" . $row['year'] . "</td>";
          echo "<td>" . $row['Contact'] . "</td>";
          echo "<td align='center'>
                  <button class='button2' style='border:1px solid;width:30px;'>
                <a class='delbtn' style='text-decoration:none; color:white;' href ='registarFunction.php?edit=".$row['id']."'>&#9998;</a>
                  </button>
                  <button class='button3' style='border:1px solid;width:30px;'>
                <a class='delbtn' style='text-decoration:none; color:white;' href='registarFunction.php?email=".$row['email']."'>&#128465;</a>
                  </button>
                </td>";
          echo "</tr>";
        }
        mysqli_close($db);
        ?>
      </table>
    </section>
    <section class="adm-section" id="adm-req-accounts">
      <?php
      //just add form tag here to use the search function
      $db = mysqli_connect('localhost', 'root', '', 'yearbook');
      $sql = "SELECT * from confirm";
      $result = mysqli_query($db,$sql);
      ?>

      <div class="search-container">
        <div>
            <input type="text" placeholder="Search.." name="search" value="<?php echo $searchKey; ?>">
            <button type="submit"><i class="fas fa-search"></i></button>
        </div>
        </form>
        <script type="text/javascript">
         window.addEventListener('keydown',function(e){
            if(e.keyIdentifier=='U+000A'||e.keyIdentifier=='Enter'||e.keyCode==13){
            if(e.target.nodeName=='INPUT'&&e.target.type=='text'){
            e.preventDefault();return false;}}},true);
          </script>
      </div>

      <table>
        <tbody>
        <tr>
            <th>School ID</th>
            <th>Email</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Batch Year</th>
            <th>Contact No.</th>
            <th>Action</th>
        </tr>

        <?php
        while($row = mysqli_fetch_array($result)){
          echo "<tr class='main'>";
          echo "<td>" . $row['id'] . "</td>";
          echo "<td>" . $row['email'] . "</td>";
          echo "<td>" . $row['fname'] . "</td>";
          echo "<td>" . $row['mname'] . "</td>";
          echo "<td>" . $row['lname'] . "</td>";
          echo "<td>" . $row['year'] . "</td>";
          echo "<td>" . $row['Contact'] . "</td>";
          echo "<td align='center'>
                  <button class='button2' style='border:1px solid;width:30px;'>
                <a class='delbtn' style='text-decoration:none; color:white;' href ='registarFunction.php?edit=".$row['id']."'>&#9998;</a>
                  </button>
                  <button class='button3' style='border:1px solid;width:30px;'>
                <a class='delbtn' style='text-decoration:none; color:white;' href='registarFunction.php?email=".$row['email']."'>&#128465;</a>
                  </button>
                </td>";
          echo "</tr>";
        }
        mysqli_close($db);
        ?>
      </table>
    </section>
  </div>
  <script src="styles/js/admin.js"></script>
</body>
</html>
