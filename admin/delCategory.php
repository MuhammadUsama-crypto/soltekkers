<?php
    include 'config.php';
    $id = $_GET['id'];

    $sql = "DELETE FROM `coursecategory` WHERE `id` = $id";
    mysqli_query($conn,$sql );
    header("location: addCategory.php");
?>