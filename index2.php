<?php require_once('inc-connect.php'); ?>
<?php
  $sql = "SELECT * FROM users";
  $result_mla = mysqli_query($conn,$sql);
  while($row = mysqli_fetch_array($result_mla)){
    $hash1 = $row['password'];
    //echo "This is the hash $hash";
  }
?>
<?php
    if ($_GET["pwd"]) {
        $pwd = $_GET["pwd"];
        $email = $_GET["email"];
        /* Password is gpbc */
        $hash2 = '$2y$10$RQTlzRu2i/VHukoFh7LUj.lL2TovFZV6FUXjRoV9f.GEUwPJQEPcS';
        echo "DB: $hash1<br />HC: $hash2<br />";
        // Check submitted password to db
       if (password_verify($pwd, $hash2)) {
           $cookie_name = email;
           $cookie_value = $email;
           setcookie($cookie_name, $cookie_value); // 86400 = 1 day
           header( "Location: home.php" );
       } else {
           echo 'Invalid password.';
       }

    } else {
        $pwd = "";
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
                <form action="index.php" method = 'GET' >
                    <div class="form-group" >
                        <h2>Intranet Login</h2>
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
                        <small id="emailHelp" class="form-text text-muted">Honest.</small>
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