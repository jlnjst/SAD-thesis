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
        <link rel= "stylesheet" href = "css/skin.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        
    </head>
    <body>

        <!--inquirers-->
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
                <form action="connection/connection.php" class= "form" id="inquirer" method="POST" onsubmit="return inquirerFormSubmit();">
                    
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
                        <a href="./index.php" class="form__link" id="linkStudent">I am a student of DFCAMCLP-IT"</a>
                    </p>
                    
                    <button class="form__button" type="submit" name="submit" id="continueChat">I accept and start chat</button>
                </form>
                <!--students-->
                <form class= "form form__hidden"id ="student" action="connection/connection.php" method="POST" onsubmit="return studentFormSubmit();">
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
                        <a href="./index.php" class="form__link" id="linkInquirer">I am an inquirer/enrollee</a>
                    </p>
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
        
        <script src="./main.js"></script>
        <script>
            function inquirerFormSubmit(){
                $.ajax({
                    url: 'connection/connection.php',
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
        </script>
    </body>
</html>


