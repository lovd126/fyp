<?php
    $hostname = "localhost";
    $username = "root";
    $pwd = "";
    $db="fyp_202010";

    $conn = mysqli_connect($hostname,$username,$pwd,$db)
    or die(mysqli_connect_error());

    mysqli_set_charset($conn,"utf8");
    
?>