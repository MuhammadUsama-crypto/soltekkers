<?php
    include 'config.php';

    $sql = "SELECT * FROM `instructor`";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {

        $row['name'];
    }
?>