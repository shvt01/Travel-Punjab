<?php
    include 'config.php';
    $id = $_GET['id'];
    //echo $id;
    $q = "delete from `city` where id='$id'";
    $result = mysqli_query($conn,$q);
    if($result > 0){
        echo "<script>window.location.assign('show_city.php?msg= Record Deleted');</script>";
    }else{
        echo "<script>window.location.assign('show_city.php?msg=Try Again.');</script>";
    }
?>