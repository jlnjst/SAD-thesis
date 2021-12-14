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
            </div>
        </div>

        <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

<!-- Your Chat Plugin code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "101834847827464");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v12.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
    </body>
</html>