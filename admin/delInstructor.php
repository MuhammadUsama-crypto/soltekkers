<?php
    include 'config.php';
    $id = $_GET['id'];

    $sql = "DELETE FROM `instructor` WHERE `instructor`.`id` = $id";
    mysqli_query($conn,$sql );
    header("location: addInstructor.php");
?>