<?php include 'inc-redirect.php'; ?>
<?php require_once('inc-connect.php'); ?>
<?php
if ($_GET["tag"]) {
    $type = $_GET["type"];
    $tag = $_GET["tag"];
    $function = $_GET["function"];
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
      <div class="row align-items-end wiki-add banner">
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
            <h1>Tag Wiki</h1>
            <p>Thank you contributing to the great BC Green Party tag repository.</p>
        <form action="wiki-add.php" method="GET" id="addTag" class="smart-green">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="tagType">Tag type</label>
                <select class="form-control" id="tagType" name="type">
                    <option>Design</option>
                    <option selected>Page</option>
                    <option>People</option>
                    <option>Structure</option>
                </select>
                <!-- <input type="text" class="form-control" id="tagType" name="type" aria-describedby="tagType" placeholder="Enter tag type"> -->
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Tag slug (ie. page_bg_green)</label>
                <input type="text" class="form-control" id="tagSlug" name="tag" aria-describedby="tagType" placeholder="Enter tag name">
            </div>
        </div>
        <div class="form-group">
            <label for="tagType">Tag function</label>
            <textarea class="form-control" id="tagFunction" name="function" rows="3"></textarea>
        </div>
        <div class="form-group">
                <input type="submit" name="submit" value="Add Tag" />
            </div>
        </form>
        <?php
            $sql = "INSERT INTO tags (type,tag,function) VALUES ('$type','$tag','$function')";
            if ($conn->query($sql) === true) {
                echo '<div class="alert alert-primary" role="alert">New tag added successfully</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Error: ' . $sql . '<br />' . $conn->error . '</div>';
            }
        ?>
         <p>Back to the <a href="wiki.php">Tag Wiki</a>.</p>
          </div>
          <div class="col-md-4">
            <?php include 'inc-sidebar.php'; ?>
          </div>
        </div>
    </div><!-- end container -->

    <!-- Footer -->
    <?php include 'inc-footer.php'; ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>