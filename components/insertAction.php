<?php

include 'config.php';

if(isset($_REQUEST["serviceOrder"])){
    $service = $_POST['service'];
    $name= $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $query = $_POST['query'];

    $sql = "INSERT INTO `orders` (`name`, `phone`, `email`, `service`, `query`) VALUES ('$name', '$phone', '$email', '$service', '$query')";
    mysqli_query($conn, $sql);
    header("location: ../Thankyou.php");
    
}   


if(isset($_REQUEST["serviceBookingForm"])){
    $service = $_POST['service'];
    $name= $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $query = $_POST['query'];

    $sql = "INSERT INTO `orders` (`name`, `phone`, `email`, `service`, `query`) VALUES ('$name', '$phone', '$email', '$service', '$query')";
    mysqli_query($conn, $sql);
    header("location: ../Thankyou.php");
    
}   


if(isset($_REQUEST["addmission-button"])){
    $course = $_POST['course'];
    $name= $_POST['name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gname = $_POST['gname'];
    $gnumber = $_POST['gnumber'];
    $address = $_POST['address'];
    $cnic = $_POST['cnic'];
    $lastDegree = $_POST['lastDegree'];
    $pic_name = $_FILES['picture']['name'];
        $temp_name = $_FILES['picture']['tmp_name'];
        $folder = "../assets/img/uploadedImages/" . $pic_name;
        move_uploaded_file($temp_name,$folder);
    $sql = "INSERT INTO `enquiries` (`course`, `name`, `dob`, `gender`, `email`, `phone`, `gname`, `gnumber`, `address`, `image`, `cnic`, `lastDegree`) VALUES ('$course', '$name', '$dob', '$gender', '$email', '$phone', '$gname', '$gnumber', '$address', '$pic_name', '$cnic', '$lastDegree')";
    mysqli_query($conn, $sql);
    header("location: ../Thankyou.php");
    
}   

?>