<?php 
    // Build the SQL Query for pagination
    $sql = "SELECT DISTINCT * FROM tags WHERE type = '$tagType' AND tag LIKE '$tagLetter%' ORDER BY tag ASC";
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

<?php mysqli_close($conn); ?>