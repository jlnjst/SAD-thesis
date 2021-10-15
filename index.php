<?php

/*This is for admin and test - copy
eto na gagamitin dzai*/

include_once("connection/connection.php");
$con = connection();

/*TEST 1: cif the database is connected. RESULTS: true
if($con->connect_error){
    echo $con->connect_error;
}
else{
    echo "Connected";
}*/

$sql = "SELECT * FROM student_list ORDER BY id ASC";
$students = $con ->query($sql) or die($con->error);
$row = $students->fetch_assoc();

/* TEST 2: IF THE DATABASE ARE DISPLAYING RESULTS: TRUEdo{
    
    echo $row['first_name'];
}while($row = $students->fetch_assoc()); 
*/

if(isset($_POST['submit'])){

   $fname = $_POST['firstname'];
   $mail =  $_POST['email'];

   $sql = "INSERT INTO `student_list`(`first_name`, `email`) VALUES ('$fname','$mail')";
   $con->query($sql) or die ($con->error);

   echo header("Location:index.php");
}
?>
<!--start of html-->
<!DOCTYPE htmL>
<html lang ="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DFCAMCLP-IT</title>
        <link rel ="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/0c9ae9856a.js" crossorigin="anonymous"></script>
        <!--CSS and JS links -->
        <link rel= "stylesheet" href = "css/style.css">
        
    </head>
    <body>

        <!--inquirers-->
        <div class="login">
            <input type="checkbox" id="show">
                <label for="show" class="show-btn fas fa-comment-alt">
                </label>
            <div class="container">
                <div class="header">
                    <h3>DFCAMCLP-IT CHATBOT
                        <label for="show" class="minimize-btn">
                            <i class="fas fa-times"></i>
                        </label>
                    </h3>
                </div>
                <form id="form1" action="" method="post">
                    <p>Before anything else... Can we get your information so we may email the answers in case we are not able to respond immediately? By filling out this form, you are agreeing to Edukasyon's
                        <a href="#">Terms of Service</a>
                         and 
                         <a href="#">Privacy Policy</a>
                         .
                    </p>
                    <label for ="firstname">First Name</label>
                    <input type="textarea" name ="firstname"id="firstname">

                    <label for ="email">email</label>
                    <input type="email" name ="email" id="email">
                    <input type="button" id="intoStudentForm" value="I am a student of DFCAMCLP-IT">
                    <div id="btn-submit">
                        <input class="button" type="submit" name ="submit" value="I accept and start chat">
                    </div>
                </form>
                <!--students-->
                <form id ="form2" action="" method="post">
                    <p>Before anything else... Can we get your information so we may email the answers in case we are not able to respond immediately? By filling out this form, you are agreeing to Edukasyon's
                        <a href="#">Terms of Service</a>
                         and 
                         <a href="#">Privacy Policy</a>
                         .
                    </p>
                    <label for ="studentid">Student ID</label>
                    <input type="textarea" name ="studentid"id="studentid">
                    <div id="btn-submit2">
                        <input class="button" type="submit" name ="submit" value="I accept and start chat">
                    </div>
                </form>
            </div>
        </div>
            <script type="text/javascript">
                var Form1 = document.getElementById("form1");
                var Form2 = document.getElementById("form2");

                var studentBtn = document.getElementById("intoStudentForm");

                studentBtn.onclick = function(){
                    Form1.style.left="-450px";
                    Form2.style.left="20px";
                }
        </script>

        <!--BOTCHAT
        <div class="wrapper">
            <div class="header-title">DFCAMCLP-IT ChatBot</div>
                <div class ="form">
                    <div class="bot-inbox inbox">   
                        <div class="icon">
                            <i class ="user"></i>
                        </div>
                        <div class = "msg-header">
                            <p>Thanks for visiting DFCAMCLP-IT! Please feel free to leave us a message and let our chatbot help your inquiries with suggested answers.</p>
                        </div>
                    </div>

                    <div class="user-inbox inbox">
                        <div class = "msg-header">
                            <p>Hi, I am a sender</p>
                        </div>
                    </div>

                    <div class="bot-inbox inbox">   
                        <div class="icon">
                            <i class ="user"></i>
                        </div>
                        <div class = "msg-header">
                            <p>Hi! How can we help?</p>
                        </div>
                    </div>

                    <div class="user-inbox inbox">
                        <div class = "msg-header">
                            <p>Hi, I am a sender</p>
                        </div>
                    </div>
                </div>
                <div class="type-field">
                    <input type="text" placeholder="Reply here..." required>
                    <button>Send</button>
                </div>
        </div>
            -->
    </body>
</html>


