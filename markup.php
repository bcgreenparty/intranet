<?php
if(!isset($_COOKIE[username])) {
  header( "Location: index.php" );
}
?>
<?php require_once('inc-connect.php'); ?>
<?php 
    if ($_GET["platformType"]) {
        $platformType = $_GET["platformType"];
    } else {
        $platformType = "Desktop span layout";
    }

    if ($_GET["tagLetter"]) {
        $tagLetter = $_GET["tagLetter"];
    } else {
        $tagLetter = "C";
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>BCGP INTRANET</title>
  </head>

  <body>
      
    <?php include 'inc-nav.php'; ?>

    <a name="tagList"></a>

    <div class="container content">
      <div class="row">
          <div class="col-md-12">
            <h1>CSS Classes</h1>
            <br />
            <!-- <p>This is a list of the tags currently used by the BC Green Party Nation Builder platform. You can scroll down to the desired tag, or you can use the "Tag Finder" below. To use the Tag Finder, enter your keywords into the search box and click 'Search tags'. Search terms may include tag name or keywords such as "social".</p>
            <p>If you click on the Page tag name (ie. page_container) you will be directed to a list of Nationbuilder pages which use that particular tag. If you click on a Person tag, you will be taken to a list of people using that tag.</p>
            <p>By default the list shows page-related tags. To view People tags, select the People checkbox and click Choose Type.</p> -->

            <div class="row" style="margin-bottom: 15px">
                <form action = 'markup.php' id="tType" method = 'GET' >
                    <div class="row">
                        <div class="col">
                            <label for="exampleFormControlSelect1">Search by type: <?php echo $platformType; ?></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <select class="form-control" id="exampleFormControlSelect1" name="platformType">
                                <option>Desktop span layout</option>
                                <option>Desktop grid layout </option>
                                <option>Mobile span layout</option>
                                <option>Grid Markup</option>
                                <option>Design</option>
                            </select>
                        </div>
                        <div class="col">
                            <input type = 'submit' name = 'submit2' id="chooseType" value = 'Choose Type' >
                        </div>
                    </div>
                </form>
            </div>
                
            </div><!-- end control panel row --->

            <table class="table table-striped table-light table-hover ">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Class</th>
                <th scope="col">Rules</th>
                <th scope="col">File</th>
                <th scope="col">Notes</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT DISTINCT * FROM markup WHERE platform = '$platformType' ORDER BY class ASC";
                $result_mla = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_array($result_mla)){
                        echo '<tr>';
                        echo '<th scope="row">'.$row['class'].'</th>';
                        echo '<td>'.$row['rules'].'</td>';
                        echo '<td>'.$row['file'].'</td>';
                        echo '<td>'.$row['notes'].'</td>';
                        echo '</tr>';
                    }
                ?>
               
            </tbody>
            </table>
            
            <?php 
            // Build the SQL Query for pagination
           // $sql = "SELECT DISTINCT * FROM markup WHERE platform = '$platformType' ORDER BY class ASC";
            // $res_data = mysqli_query($conn,$sql);
        ?>



<?php mysqli_close($conn); ?>

          </div><!-- end column 1 --->
          <!-- <div class="col-md-4">
            <?php //include 'inc-sidebar.php'; ?>
          </div>- end column 2/Sidebar - -->
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