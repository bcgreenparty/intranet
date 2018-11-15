<?php include 'inc-redirect.php'; ?>
<?php require_once('inc-connect.php'); ?>
<?php
if ($_GET["id"]) {
    $id = $_GET["id"];
    $sql = "SELECT DISTINCT * FROM tags WHERE id = '$id'";
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

    <!-- <div class="container-fluid">
      <div class="row align-items-end banner wiki-edit">
        <div class="col">
        </div>
        <div class="col">
        </div>
        <div class="col">
          <h1 style="color: white">GREEN PARTY INTRANET</h1>
        </div>
      </div>
    </div> -->
      
    <?php include 'inc-nav.php'; ?>

    <div class="container content">
      <div class="row">
          <div class="col-md-8">
            <h1>Tag Edit</h1>
            <?php

                if ($result->num_rows > 0) {    
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo '<form action="wiki-update.php" method="get" class="">';
                        echo '<input type="hidden" name="id" value="' . $row['id'] . '" />';
                        echo "<p>Please update the desired the texts fields.</p>";
                        echo '<div class="form-group">';
                        echo '<label for="tagName">Tag name </label><br /><input id="tagName" name="tag" value="' . $row['tag'] . '" />';
                        echo '</div>';
                        echo '<div class="form-group">';
                        echo '<label for="tagType">Tag type: </label><br /><input name="type" id="tagType" value="' . $row['type'] . '" />';
                        echo '</div>';
                        echo '<div class="form-group">';
                        echo '<label for="tagFunction">Tag function: <br /><textarea name="function" id="tagFunction">' . $row['function'] . '</textarea>';
                        echo '</div>';
                        echo '<div class="form-group">';
                        echo '<input type="submit" name="submit" value="Update" />';
                        echo '</div>';
                        echo '</form>';
                    }
                    } else {
                        echo "0 results";
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