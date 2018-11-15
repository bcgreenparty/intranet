<?php
               // Get the current page number
                if (isset($_GET['pageno'])) {
                    $pageno = $_GET['pageno'];
                } else {
                    $pageno = 1;
                }

                // Formula for php pagination
                $no_of_records_per_page = 20;
                $offset = ($pageno-1) * $no_of_records_per_page; 

                // get the number of pages
                $total_pages_sql = "SELECT COUNT(*) FROM tags";
                $result = mysqli_query($conn,$total_pages_sql);
                $total_rows = mysqli_fetch_array($result)[0];
                $total_pages = ceil($total_rows / $no_of_records_per_page);

                // Build the SQL Query for pagination
                $sql = "SELECT DISTINCT * FROM tags WHERE type = '$tagType' ORDER BY tag ASC LIMIT $offset, $no_of_records_per_page";
                $res_data = mysqli_query($conn,$sql);
            ?>

            <?php
                while($row = mysqli_fetch_array($res_data)){
                    echo '<div class="row">';
                    echo '<div class="col-md-4"><a href="wiki-edit.php?id='.$row['id'].'">'.$row['tag'].'</a></div>';
                    echo '<div class="col-md-6">'.$row['function'].'</div>';
                    echo '<div class="col-md-1"><a href="wiki-delete.php?id='.$row['id'].'">Remove</a></div>';
                    echo '</div>';
                }
            ?>

            <a name="tagList"></a>

            <?php mysqli_close($conn); ?>