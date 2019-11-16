<?php 

function draw_header() { ?>
    <!DOCTYPE html>

    <html>

    <head>
        <title>HOME.LY</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/mainpagestyle.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="../js/main.js" defer></script>
    </head>

    <body>

    <header>
        <nav id="navbar" class="navbar">
            <a href="#"><img id="logo" src="../images/homesly.png" alt="logo"></img></a>
            <ul>
                <li><a href="#">Book</a></li>
                <li><a href="#">Host</a></li>
                <li><a href="#">Signup</a></li>
                <li><a href="#">Login</a></li>

                <a class="icon">
                    <i class="fa fa-bars"></i>
                </a>
            </ul>
        </nav>
    </header>

    <?php }

function draw_footer() { ?>
    <footer>
        <ul>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Use Terms</a></li>
            <li><a href="#">Cookies</a></li>
        </ul>
        <ul>
            <li><img src="../images/facebook.png" alt="facebook link"></li>
            <li><img src="../images/instagram.png" alt="instagram link"></li>
            <li><img src="../images/youtube.png" alt="youtube link"></li>
        </ul>
    </footer>
    </body>
    </html>
<?php }
?>