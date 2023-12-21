<?php 

    include 'config.php';
    


    $id = $_GET['id'];
    $sql = "DELETE FROM `enquiries` WHERE `id` = $id";
    mysqli_query($conn,$sql );
    header("location: enquiries.php");

?>