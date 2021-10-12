<?php
    function connection(){
    $host = "localhost";
    $username ="root";
    $password = "_group7";
    $database = "student_info";

    $con = new mysqli($host,$username,$password, $database);

    if($con->connect_error){
        echo $con->connect_error;
    }
    else{
        return $con;
    }
    }
?>