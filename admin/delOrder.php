<?php 

    include 'config.php';
    


    $id = $_GET['id'];
    $sql = "DELETE FROM `orders` WHERE `id` = $id";
    mysqli_query($conn,$sql );
    header("location: orders.php");

?>