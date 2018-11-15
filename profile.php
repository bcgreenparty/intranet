<?php include 'inc-redirect.php'; ?>
<?php require_once('inc-connect.php'); ?>
<?php
  $cookie_name = "username";
  if(isset($_COOKIE[$cookie_name])) {
    $username = $_COOKIE[$cookie_name];
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result_mla = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($result_mla)){
      $firstName = $row['firstname'];
      $lastName = $row['lastname'];
      $userName = $row['username'];
      $thumb = $row['thumb'];
    }
  } else {
    $error = "<p>I'm sorry... You don't exist.</p>";
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/styles.css" />

    <style type="text/css">
      .thumbClass {
        width: 500px;
        border:1px solid #00A75C;
        padding: 15px;
      }
    </style>

    <title>BCGP INTRANET - Your Profile</title>
  </head>

  <body>
      
    <?php include 'inc-nav.php'; ?>

    <div class="container content">
      <div class="row">
          <div class="col-md-8">
            <h1>GBCGP INTRANET - iProfile</h1>
            <?php 
              if ($error) {
                echo "<p>I'm sorry, you don't seem to exist.";
              } else {
                echo "<h3>$firstName $lastName</h3>";
                echo "<img src='images/profiles/$thumb' alt='$firstName $lastName' class='thumbClass'/>";
                echo "<p>username: $userName</p>";
              }
            ?>
          </div>
          <div class="col-md-4">
            <?php include 'inc-sidebar.php'; ?>
          </div>
        </div>
    </div><!-- end container -->

    <?php include 'inc-footer.php'; ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>