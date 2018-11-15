<?php 
  require_once('inc-connect.php'); 
   
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 
      
    $myUserName = mysqli_real_escape_string($conn,$_POST['username']);
    $myPassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
    $sql = "SELECT id FROM users WHERE password = '$myPassword' AND username = '$myUserName'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];
      
    $count = mysqli_num_rows($result);
      
    // If result matched $myusername and $mypassword, table row must be 1 row
    
    if($count == 1) {
      $cookie_name = username;
      $cookie_value = $myUserName;
      setcookie($cookie_name, $cookie_value);
      header( "Location: home.php" );
    } else {
      $error = "Your Login Name or Password is invalid";
      echo $error;
    }
  }
?>

<?php mysqli_close($conn); ?>

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

    <title>BCGP INTRANET</title>
  </head>

  <body>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-3"></div>
            <div class="col-6">
                <form action="index.php" method = 'POST' >
                    <div class="form-group" >
                        <h2>Intranet Login</h2>
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        <small id="pwdHelp" class="form-text text-muted">Honest.</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-3"></div>
        </div>
    </div>

    <br />

    <?php include 'inc-footer.php'; ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>