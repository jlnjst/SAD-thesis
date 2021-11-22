

<?php
//Get Heroku ClearDB connection information
function connection(){
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$con = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

if(!$con){
    die("can't reconnect".mysqli_connect_error());
}
else{
    $fname=test_input($_POST['firstname']);
    $email=test_input($_POST['email']);

        $sql= "INSERT INTO inquirer_list(firstname,email)VALUES('$fname','$email')";

        
        if(mysqli_query($con,$sql)){
            echo "show";
        }
        else{
            echo "fail to insert";
        }
        mysqli_close($con);
}
}
function test_input($logindata){
    $logindata=trim($logindata);
    $logindata=stripslashes($logindata);
    $logindata=htmlspecialchars($logindata);
    return $logindata;
}

?>