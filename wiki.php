<?php include 'inc-redirect.php'; ?>
<?php require_once('inc-connect.php'); ?>
<?php 
    if ($_GET["tagType"]) {
        $tagType = $_GET["tagType"];
    } else {
        $tagType = "Page";
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

    <!-- <div class="container-fluid">
      <div class="row align-items-end wiki banner">
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

    <a name="tagList"></a>

    <div class="container content">
      <div class="row">
          <div class="col-md-8">
            <h1>NationBuilder Tag Wiki</h1>
            <br />
            <!-- <p>This is a list of the tags currently used by the BC Green Party Nation Builder platform. You can scroll down to the desired tag, or you can use the "Tag Finder" below. To use the Tag Finder, enter your keywords into the search box and click 'Search tags'. Search terms may include tag name or keywords such as "social".</p>
            <p>If you click on the Page tag name (ie. page_container) you will be directed to a list of Nationbuilder pages which use that particular tag. If you click on a Person tag, you will be taken to a list of people using that tag.</p>
            <p>By default the list shows page-related tags. To view People tags, select the People checkbox and click Choose Type.</p> -->

            <div class="row">
                <div class="col-lg-6">
                    <form action = 'wiki-search.php' method = 'GET' >
                    <label for="exampleFormControlSelect1">Search by keywords</label><br />
                        <input type = 'text' size='30' name = 'query' />
                        <input type="hidden" name="selectedTagType" value="<?php echo $tagType; ?>" />
                        <input type = 'submit' name = 'submit' value = 'Search tags' />
                    </form >
                </div>
                <div class="col-lg-6">
                    <form action = 'wiki.php' id="tType" method = 'GET' >
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Search by type: <?php echo $tagType; ?></label><br />
                            <select class="form-control" id="exampleFormControlSelect1" name="tagType">
                                <option>Page</option>
                                <option>Design</option>
                                <option>People</option>
                                <option>Structure</option>
                            </select>
                            <input type = 'submit' name = 'submit2' id="chooseType" value = 'Choose Type' >
                        </div>
                    </form>
                </div>
                 <div class="col-lg-5">
                    <form action = 'wiki.php' id="tType" method = 'GET' >
                            <div class="form-group">
                                <label for="tagLetter">Narrow your search: starting with <?php echo $tagLetter; ?></label><br />
                                <select class="form-control" id="tagLetter" name="tagLetter">
                                    <option selected>A</option>
                                    <option>B</option>
                                    <option>C</option>
                                    <option>D</option>
                                    <option>E</option>
                                    <option>F</option>
                                    <option>G</option>
                                    <option>H</option>
                                    <option>I</option>
                                    <option>J</option>
                                    <option>L</option>
                                    <option>M</option>
                                    <option>N</option>
                                    <option>O</option>
                                    <option>P</option>
                                    <option>Q</option>
                                    <option>R</option>
                                    <option>S</option>
                                    <option>T</option>
                                    <option>U</option>
                                    <option>V</option>
                                    <option>W</option>
                                    <option>X</option>
                                    <option>Y</option>
                                    <option>Z</option>
                                    <option value="%">All</option>
                                </select>
                                <input type = 'submit' name = 'submit' id="chooseOrder" value = 'Narrow your search' >
                            </div>
                        </form>
                </div>
            </div><!-- end control panel row --->

             <hr style="margin: 20px 0;" />

            <div class="row hideOnMobile"><!-- Start column headers -->
                <div class="col-md-4 hidden-md">Tag</div>
                <div class="col-md-6 hidden-md">Function</div>
                <div class="col-md-1 hidden-md">Remove</div>
            </div><!--- end column headers --->

            <hr style="margin: 20px 0;" />
            
            <?php include 'wiki-pagination2.php'; ?>

            <hr style="clear:both; margin-top: 10px;" />

            <a href="#tagList">Back to top</a>

            <!-- <div class="paginationBox">
                <ul class="pagination">
                    <li>
                        <a class="btn btn-outline-primary" role="button" href="?pageno=1&tagType=<?php echo $tagType; ?>">First</a>
                    </li>
                    <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
                        <a class="btn btn-outline-primary" role="button" href="<?php if($pageno <= 1){ echo '#'; } else { echo "?tagType=".$tagType."&pageno=".($pageno - 1); } ?>">Prev</a>
                    </li>
                    <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                        <a class="btn btn-outline-primary" role="button" href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?tagType=".$tagType."&pageno=".($pageno + 1); } ?>">Next</a>
                    </li>
                    <li>
                        <a class="btn btn-outline-primary" role="button" href="?pageno=<?php echo $total_pages; ?>&tagType=<?php echo $tagType; ?>">Last</a>
                    </li>
                </ul>
            </div> -->

          </div><!-- end column 1 --->
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