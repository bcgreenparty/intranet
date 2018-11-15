<?php include 'inc-redirect.php'; ?>
<?php require_once('inc-connect.php'); ?>

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
      
    <?php include 'inc-nav.php'; ?>

    <div class="container content">
      <div class="row">
          <div class="col-md-8 table-responsive">
            <h1>GPBC Staff Directory</h1>
            <p>Office phone number: 1.888.473.3686</p>
            <table class="table table-striped table-light table-hover ">
            <thead class="thead-dark">
                <tr>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Phone Ext</th>
                <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT DISTINCT * FROM staff WHERE type='Office' ORDER BY firstname ASC";
                    $result_office = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_array($result_office)){
                        echo '<tr>';
                        echo '<th scope="row">'.$row['firstname'].'</th>';
                        echo '<td>'.$row['lastname'].'</td>';
                        echo '<td>'.$row['phone'].'</td>';
                        echo '<td><a href="mailto:'.$row['email'].'@greenparty.bc.ca">'.$row['email'].'@</a></td>';
                        echo '</tr>';
                    }
                ?>
               
            </tbody>
            </table>

            <hr />

            <h1>GPBC MLA Directory</h1>
            <table class="table table-striped table-light table-hover ">
            <thead class="thead-dark">
                <tr>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Phone Ext</th>
                <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT DISTINCT * FROM staff WHERE type='MLA' ORDER BY firstname ASC";
                $result_mla = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_array($result_mla)){
                        echo '<tr>';
                        echo '<th scope="row">'.$row['firstname'].'</th>';
                        echo '<td>'.$row['lastname'].'</td>';
                        echo '<td>'.$row['phone'].'</td>';
                        echo '<td><a href="mailto:'.$row['email'].'@greenparty.bc.ca">'.$row['email'].'</a></td>';
                        echo '</tr>';
                    }
                ?>
               
            </tbody>
            </table>

            <?php mysqli_close($conn); ?>

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