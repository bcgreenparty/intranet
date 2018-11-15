<?php require_once('inc-connect.php'); ?>
<?php
if ($_GET["id"]) {
    $id = $_GET["id"];
    $tag = $_GET["tag"];
    $function = $_GET["function"];
    $type = $_GET["type"];
    $sql = "UPDATE tags SET tag='$tag', function='$function', type='$type' WHERE id=$id";
    $result = $conn->query($sql);
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

    <title>BCGP INTRANET</title>
  </head>

  <body>

    <div class="container-fluid">
      <div class="row align-items-end home-banner">
        <div class="col">
        </div>
        <div class="col">
        </div>
        <div class="col">
          <h1 style="color: white">GREEN PARTY INTRANET</h1>
        </div>
      </div>
    </div>
      
    <?php include 'inc-nav.php'; ?>

    <div class="container content">
        <div class="row">
            <div class="col-md-8">
                <h1>NationBuilder Tag Wiki</h1>
            
                <div class="row">
                    <div class="col-lg-12">
                        <?php
                            if($result){
                                echo "<h2>$function has been successfully updated.</h2>";
                            } else {
                                echo "<h2>Oooops something went wrong.</h2>";
                         }
                        ?>
                        <p>Back to the <a href="wiki.php">Tag Wiki</a>.</p>
                    </div><!-- close col-lg-12 -->
                </div><!--  close row -->
            </div><!--  close col-md-8 -->

            <div class="col-md-4">
                <?php include 'inc-sidebar.php'; ?>
            </div><!--- end column 2/Sidebar --->
        </div><!--- end row --->
    </div><!-- end container -->

   <?php include 'inc-footer.php'; ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>