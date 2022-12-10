<!DOCTYPE html>
<html dir="ltr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>shahid</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <script src="js/validate_contact.js"></script>
</head>
<body>
        
    <header>
            <nav >
    <label for="toggle" class="menu">&#9776</label>
    <input type="checkbox" id="toggle">
    <ul>
        <li> <a href="home.php" >home</a></li>
        <li> <a href="register.php" >sign up</a></li>
    </ul>
<form class="search" action="index.php" method="post">
        <input type="text" placeholder="Search">
        <button><img src="icon/search_icon.png" class="search-icon"></button>
    </form>
    <label>onlin shop</label>
    
</header>
</nav>
<div class="contact-us">
        <form method="POST" name="contact" onsubmit="return(validation())">
            <h4>leave your message right here !</h4>
            <label>full name</label>
            <input type="text" placeholder="enter your full name" name="name">
            <label>email address</label>
            <input type="text" placeholder="enter your email address" name="email">
            <label>message</label>
            <textarea placeholder="message" name="message"></textarea>
                <button type="submit" class="send-button">send</button>
                <button type="reset" class="reset-button">reset</button>
        
        </form>
        </div>
<footer>
    <div class="footer-top">
    <div class="container">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 one">
                <div class="for-box">
                <h3 class="contact"> find us at </h3>
                <ul>
                        <li><img src="icon/fb.png" alt="icon" class="contact_icon"/></li>
                        <li><img src="icon/tw.png" alt="icon" class="contact_icon"/></li>
                        <li><img src="icon/lin.png" alt="icon" class="contact_icon"/></li>
                        <li><img src="icon/instagram.png" alt="icon" class="contact_icon"/></li>
                    </ul>
                    </div>
            </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 two">
                <div class="for-box">
                <h3 class="contact">contact us</h3>
                
                <ul>
                    <li><img src="icon/1.png" alt="icon" />khartoum , Sudan</li>
                    <li><img src="icon/2.png" alt="icon" />Phone : ( +249110708207)</li>
                    <li><img src="icon/3.png" alt="icon" />Email : sarahejjai12345@gimal.com</li>

                </ul>
            </div>
            </div>
        </div>
    </div>
</div>
<div class="copyright">
        <p> &copy 2020 all rights reserved <a href="index.php"></a>onlin shop</a></p>
    </div>
</footer>
</body>
</html>