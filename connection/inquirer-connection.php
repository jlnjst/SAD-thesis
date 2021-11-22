<?php
    //login php
    
    include_once("connection/connection.php");
    $inquirercon=connection();
    
    if(!$inquirercon){
        die("can't reconnect".mysqli_connect_error());
    }
    else{
        $fname=test_input($_POST['firstname']);
        $email=test_input($_POST['email']);

        $sql= "INSERT INTO inquirer_list(firstname,email)VALUES('$fname','$email')";

        
        if(mysqli_query($inquirercon,$sql)){
            echo "show";
        }
        else{
            echo "fail to insert";
        }
        mysqli_close($inquirercon);
        
    }

    function test_input($logindata){
        $logindata=trim($logindata);
        $logindata=stripslashes($logindata);
        $logindata=htmlspecialchars($logindata);
        return $logindata;
    }
    
?>