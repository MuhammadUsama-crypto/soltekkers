<?php
    include 'config.php';
    $id = $_GET['id'];

    $sql = "DELETE FROM `services` WHERE `id` = $id";
    mysqli_query($conn,$sql );
    header("location: service.php");
?>