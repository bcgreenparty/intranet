<?php include 'inc-redirect.php'; ?>
<?php require_once('inc-connect.php'); ?> 
<?php 
    $query = $_GET["query"]; 
    $tagType = $_GET["selectedTagType"];
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
      <div class="row align-items-end home banner">
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
                <h2>Search results</h2>
                <?php echo "<h4>Searching for: " . $query . "</h4>"; ?>
                <hr style="margin: 20px 0;" />

                <div class="row"><!-- Start column headers -->
                    <div class="col-md-4">Tag</div>
                    <div class="col-md-6">Function</div>
                    <div class="col-md-1">Remove</div>
                </div><!--- end column headers --->

                <?php
                    $sql = "SELECT * FROM tags WHERE (tag LIKE '%{$query}%') OR (function LIKE '%{$query}%') OR (type LIKE '%{$query}%')";
                    $result = $conn->query($sql);
                ?>

                <?php
                    while($row = mysqli_fetch_array($result)){
                        echo '<div class="row">';
                        echo '<div class="col-md-4"><a href="wiki-edit.php?id='.$row['id'].'">'.$row['tag'].'</a></div>';
                        echo '<div class="col-md-6">'.$row['function'].'</div>';
                        echo '<div class="col-md-1"><a href="wiki-delete.php?id='.$row['id'].'">Remove</a></div>';
                        echo '</div>';
                    }
                ?>

            <?php mysqli_close($conn); ?>

            <hr style="margin: 20px 0;" />
            </div><!-- close col-md-8 -->    
            <div class="col-md-4">
                <?php include 'inc-sidebar.php'; ?>
          </div><!-- close sidebar -->
        </div><!-- close row -->
    </div><!-- end container -->

    <?php include 'inc-footer.php'; ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
</body>
</html>