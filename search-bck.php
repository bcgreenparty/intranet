<?php require_once('connect.php'); ?> 
<?php 
    $query = $_GET["query"]; 
    $tagType = $_GET["selectedTagType"];
?>
<html>
    <head>
        <title>Search Results</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="css/styles.css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="js/action.js"></script>
    </head>

    <body>

        <div class="wrapper">
        <?php include './nav.php'; ?>
        <?php echo "<h4>Searching for: " . $query . "</h4>"; ?>

        <table width="90%">
        <tr><td>TAG</td><td>FUNCTION</td><td>TYPE</td></tr>
    <?php

    $sql = "SELECT * FROM tags WHERE (tag LIKE '%{$query}%') OR (function LIKE '%{$query}%') OR (type LIKE '%{$query}%')";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td width="33%">'.$row['tag'].'</td>';
                echo '<td width="33%">'.$row['function'].'</td>';
                echo '<td width="33%">'.$row['type'].'</td>';
                echo '</tr>';
        }
    } else {
        echo "0 results";
    }
    ?>
        </table>

    <p>Back to the <a href="index.php">Tag Wiki</a>.</p>

    <?php
        //Close connection
        $conn->close(); 
    ?>
    </div>
</body>
</html>