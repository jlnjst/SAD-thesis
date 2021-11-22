<!DOCTYPE html>
<html lang ="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DFCAMCLP-IT</title>
        <link rel ="stylesheet" href="css/style.css">
        <link rel ="stylesheet" href="css/skin.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
       <!-- <script src="https://kit.fontawesome.com/0c9ae9856a.js" crossorigin="anonymous"></script>-->
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <div class="header__wrap">
            <div class="header">
                <div class="logo">
                    <a href="/">
                        <img src = "favicon.ico" title="Dr. Filemon C. Aguilar Memorial College Las Pinas">
                    </a>
                </div>
                <!--Main Menu-->
                <div class="menuWrap">
                    <div class="mainMenu">
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
                                        <li class="no__childs">
                                            <a href="">
                                                <span class="title">Organizations</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="title">Contact Us</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--<<div class="search">
                    <div class="search__icon">
                        <span class="fa fa-search"></span>
                    </div>
                </div>
                <div class="socmed__link__wrap">
                    <div class="socmed__links">
                        <div class="socmed__links_centered">
                            <a href="#" class= "fa fa-facebook small" target="_blank"></a>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
    
        <div id="login">
            <input type="checkbox" id="show__loginForm">
            <label for="show__loginForm" class="btn__icon fas fa-comment-alt">
            </label>
            <div class="container">
                <div class="header">
                    <h3>DFCAMCLP-IT CHATBOT
                        <label for="show__loginForm" class="minimize__btn" id="minimize__btn">
                            <i class="fas fa-times"></i>
                        </label>
                    </h3>
                </div>
                <!--inquirers--->
                <form action="connection/inquirer-connection.php" class= "form" id="inquirer" method="POST" onsubmit="return inquirerFormSubmit();">
                    
                    <p class ="introduction">Before anything else... Can we get your information so we may email the answers in case we are not able to respond immediately? By filling out this form, you are agreeing to DFCAMCLP-IT's
                        <a href="#">Terms of Service</a>
                         and 
                         <a href="#">Privacy Policy</a>
                         .
                    </p>
                    <div class="form__input-group">
                        <label for ="firstname">First Name</label>
                        <input id="firstname" type="textarea" name ="firstname" class="form__input">
                    </div>

                    <div class="form__input-group">
                        <label for ="email">Email</label>
                        <input id="email" type="email" name ="email" >
                    </div>

                    <p class="form__text">
                        <a href="./bot.php" class="form__link" id="linkStudent">I am a student of DFCAMCLP-IT"</a>
                    </p>
                    
                    <button class="form__button" type="submit" name="submit" id="continueChat">I accept and start chat</button>
                </form>
            
                <!--students--> 
                <form class= "form form__hidden"id ="student" action="connection/student-connection.php" method="POST" onsubmit="return studentFormSubmit();">
                    <p class ="introduction">Before anything else... Can we get your information so we may email the answers in case we are not able to respond immediately? By filling out this form, you are agreeing to DFCAMCLP-IT's
                        <a href="#">Terms of Service</a>
                         and 
                         <a href="#">Privacy Policy</a>
                         .
                    </p>
                    <div class="form__message form__message__error"></div>
                
                    <div class="form__input-group">
                        <label for ="student_id">Student ID</label>
                        <input type="textarea" name ="student_id"id="student_id">
                    </div>

                    <button class="form__button continueChat" type="submit" name="submit">I accept and start chat</button>

                    <p class="form__text">
                        <button class="form__link">Forgot your Student ID?</button>
                    </p>
                    <p class="form__text">
                        <a href="./bot.php" class="form__link" id="linkInquirer">I am an inquirer/enrollee</a>
                    </p>
                </form>
                
            </div>

        </div>

            <div class="chatBot">
                <input type="checkbox" id="show__chatBot">
                <div class="wrapper form__hidden" id="wrapper">
                    <div class="title">DFCAMCLP-IT CHATBOT
                        <label for="show__chatBot" class="minimize__btn">
                            <i class="fas fa-times"></i>
                        </label>
                    </div>
                    <div class="form form-Chat__Wrap">
                        <div class="bot-inbox inbox">
                            <div class="msg-header">
                                <p>Hello there, how can I help you?</p>
                            </div>
                        </div>
                    </div>
                    <div class="typing-field">
                        <div class="input-data">
                            <input id="data" type="text" placeholder="Type something here.." required>
                            <button id="send-btn">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        
        <script src="./main.js"></script>
        <script>
            $(document).ready(function(){
                $("#send-btn").on("click", function(){
                    $value = $("#data").val();
                    $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                    $(".form-Chat__Wrap").append($msg);
                    $("#data").val('');
                
                    // start ajax code
                    $.ajax({
                        url: 'message.php',
                        type: 'POST',
                        data: 'text='+$value,
                        success: function(result){
                            $replay = '<div class="bot-inbox inbox"><div class="msg-header"><p>'+ result +'</p></div></div>';
                            $(".form-Chat__Wrap").append($replay);
                            // when chat goes down the scroll bar automatically comes to the bottom
                            $(".form").scrollTop($(".form")[0].scrollHeight);
                        }
                    });
                    var chatBotForm=document.getElementById('inquirer').reset();
                });
            });
            
            
            function inquirerFormSubmit(){
                $.ajax({
                    url: 'connection/inquirer-connection.php',
                    type: 'POST',
                    data: $('#inquirer').serialize(),
                    success:function(response){
                       //$('#linkStudent').html(response);
                        $('#wrapper').show();
                       //$('#container').hide();
                    }
                });
                var loginInquirerForm=document.getElementById('inquirer').reset();
                $('#container').hide();
                return false;
            }

            function studentFormSubmit(){
                $.ajax({
                    url: 'connection/student-connection.php',
                    type: 'POST',
                    data: $('#student').serialize(),
                    success:function(response){
                       //$('#linkStudent').html(response);
                        $('#wrapper').show();
                       //$('#container').hide();
                    }
                });
                var loginStudentForm=document.getElementById('student').reset();
                $('#container').hide();
                return false;
            }

        </script>
    
    </body>
</html>