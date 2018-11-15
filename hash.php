<?php require_once('inc-connect.php'); ?>
<?php
    if ($_GET["pwd"]) {
        $pwd = $_GET["pwd"];
    /**
     * We just want to hash our password using the current DEFAULT algorithm.
     * This is presently BCRYPT, and will produce a 60 character result.
     *
     * Beware that DEFAULT may change over time, so you would want to prepare
     * By allowing your storage to expand past 60 characters (255 would be good)
     */
    $hash = password_hash("$pwd", PASSWORD_DEFAULT);

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
                <form action="hash.php" method = 'GET' >
                    <div class="form-group">
                        <label for="exampleInputPassword1">Enter password to encrypt</label>
                        <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-3"></div>
        </div>
        <div class="row align-items-center">
            <div class="col-3"></div>
            <div class="col-6">
                <?php
                    if($hash){
                        echo "Encrypted password is $hash";
                    } 
                ?>
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