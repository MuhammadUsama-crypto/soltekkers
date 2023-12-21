<?php
    include 'config.php';
    $id = $_GET['id'];

    $sql = "DELETE FROM `course` WHERE `id` = $id";
    mysqli_query($conn,$sql );
    header("location: course.php");
?>