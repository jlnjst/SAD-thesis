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
        <div class="headerWrap">
            <div class="header">
                <div class="logo">
                    <a href="/">
                        <img src = "" title="Dr. Filemon C. Aguilar Memorial College Las Pinas">
                    </a>
                </div>
                <!--Main Menu-->
                <div class="menuWrap">
                    <div class="mainMenu">
                        <div class="PageBlock__Menu">
                            <ul>
                                <li>
                                    <a>
                                        <span class="title">About</span>
                                    </a>
                                    <ul>
                                        <li class="no__childs">
                                            <a href="">
                                                <span class="title">Mission & History</span>
                                            </a>
                                        </li>
                                        <li class="no__childs">
                                            <a href="">
                                                <span class="title">Head of School</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a>
                                        <span class="title">Academics</span>
                                    </a>
                                    <ul>
                                        <li class="no__childs">
                                            <a href="">
                                                <span class="title">Information Systems</span>
                                            </a>
                                        </li>
                                        <li class="no__childs">
                                            <a href="">
                                                <span class="title">Computer Engineering</span>
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                <form id="form1" action="connection/connection.php" method="POST">
                    <p>Before anything else... Can we get your information so we may email the answers in case we are not able to respond immediately? By filling out this form, you are agreeing to DFCAMCLP-IT's
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
                        <input class="button" id="submit2" type="submit" name ="submit" value="I accept and start chat">
                    </div>
                </form>
                <!--students-->
                <form id ="form2" action="" method="post">
                    <p>Before anything else... Can we get your information so we may email the answers in case we are not able to respond immediately? By filling out this form, you are agreeing to DFCAMCLP-IT's
                        <a href="#">Terms of Service</a>
                         and 
                         <a href="#">Privacy Policy</a>
                         .
                    </p>
                    <label for ="studentid">Student ID</label>
                    <input type="textarea" name ="studentid"id="studentid">
                    <div id="btn-submit2">
                        <input class="button"  id="submit2" onclick="hideShowDiv()" type="submit" name ="submit2" value="I accept and start chat">
                    </div>
                </form>
            </div>

        </div>
            

        <!--BOTCHAT-->
        <div class="wrapper"id="botWrapper">
            <div class="header">
                <h3>DFCAMCLP-IT CHATBOT
                    <label for="show" class="minimize-btn">
                        <i class="fas fa-times"></i>
                    </label>
                </h3>
            </div>
            
            
        </div>
        
        <script src="js/index.js"></script>
    </body>
</html>


