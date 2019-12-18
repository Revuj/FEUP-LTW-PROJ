<?php 
include_once('tpl_authentication.php');
session_start();
function draw_header() { ?>
    <!DOCTYPE html>

    <html>

    <head>
        <title>HOMES.LY</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/mainpagestyle.css">
        <link rel="stylesheet" type="text/css" href="../css/placesliststyle.css">
        <link rel="stylesheet" type="text/css" href="../css/detailviewstyle.css">
        <link rel="stylesheet" type="text/css" href="../css/profilestyle.css">
        <link rel="stylesheet" type="text/css" href="../css/hostplacestyle.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Dosis&display=swap" rel="stylesheet">
        <script src="../js/main.js" defer></script>
        <script src="../js/pageDetail.js" defer></script>
        <script src="../js/booking.js" defer></script>
        <script src="../js/profile.js" defer></script>

    </head>

    <body>

    <header>
        <nav id="navbar" class="navbar">
            <a href="../pages/homepage.php"><img id="logo" src="../images/homesly.png" alt="logo"></img></a>
            <ul>
                <li><a href="../pages/placeslist.php">Book</a></li>
                <li><a href=../pages/hostplace.php>Host</a></li>
                <?php if (isset($_SESSION['loggedin'])) { ?>
                    <li><a id="logout_button" href="../actions/action_logout.php">Logout</a></li>
                    <li><a id="username_button" href="../pages/profile.php"><i class="far fa-user-circle"></i></a></li>
                <?php }
                else { ?>
                    <li><a id="signup_button" href="#">Signup</a></li>
                    <li><a id="login_button" href="#">Login</a></li>
                <?php }
                ?>

                <a class="searchMenu"><i class="fas fa-search-location"></i></a>
                <a class="hamburguerMenu"><i class="fa fa-bars"></i></a>
            </ul>
        </nav>
    </header>

    <?php draw_login();
    draw_signup(); ?>
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

// draws a search bar 
function draw_search_bar() { ?>

<?php }

// draws a form that allows an user to add a new place if logged in
function draw_input_place() { ?>
    <section id="host_place">
        <div class="form-3">
            <h2>Host your Place!</h2>
            <form method="post" action="../actions/action_host_place.php" enctype="multipart/form-data">
            <?php if(isset($_SESSION['csrf']))
                  echo '<input type="hidden" name="csrf" value="' . $_SESSION['csrf'] . '" />'; 
            ?>
            <label>Title<input type="text" name="title" placeholder="title" required></label>
            <label>Description<input type="text" name="description" placeholder="about" required></label>
            <label>Location<input id="address" type="text" name="location" placeholder="where" onfocusout="codeAddress()" required></label>
            <label>Price/Day<input type="number" name="price_per_day" placeholder="price/day" min="1" required></label>
            <label>Showers<input type="number" name="showers" placeholder="number of showers" min="1" required></label>
            <label>Bedrooms<input type="number" name="bedrooms" placeholder="number of beds" min="1" required></label>

            <div class="host_radio">
            <i class="fas fa-thermometer-full"></i> <b> Heating:</b>
                <div class="inputGroup">
                    <input id="heating_yes" type="radio" name="heating" value="1">
                    <label for="heating_yes">Yes</label>
                </div>
                <div class="inputGroup">
                    <input id="heating_no" type="radio" name="heating" value="0" checked>
                    <label for="heating_no">No</label>
                </div>
            </div>

            <div class="host_radio">
            <i class="fas fa-binoculars"></i> <b>Good View:</b>
                <div class="inputGroup">
                    <input id="view_yes" type="radio" name="view" value="1">
                    <label for="view_yes">Yes</label>
                </div>
                <div class="inputGroup">
                    <input id="view_no" type="radio" name="view" value="0" checked>
                    <label for="view_no">No</label>
                </div>
            </div>

            <div class="host_radio">
            <i class="fas fa-wifi"></i> <b>Wifi:</b>
                <div class="inputGroup">
                    <input id="wifi_yes" type="radio" name="wifi" value="1">
                    <label for="wifi_yes">Yes</label>
                </div>
                <div class="inputGroup">
                    <input id="wifi_no" type="radio" name="wifi" value="0" checked>
                    <label for="wifi_no">No</label>
                </div>
            </div>

            <div class="host_radio">
            <i class="fas fa-parking"></i> <b>Free Parking:</b>
                <div class="inputGroup">
                    <input id="parking_yes" type="radio" name="parking" value="1">
                    <label for="parking_yes">Yes</label>
                </div>
                <div class="inputGroup">
                    <input id="parking_no" type="radio" name="parking" value="0" checked>
                    <label for="parking_no">No</label>
                </div>
            </div>


            <label> Select image to upload:
            <h6>At least 3 images with minimum dimensions of 1500x1000 and maximum size of 10MB</h6>
            <input type="file" name="files[]" multiple >
            </label>            
            <div id="map"></div>
            <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcrc5QbwSQOgtiw2PwSNcU2bLjyoyx96E&callback=initializeMapHost">
            </script>
            <button type="submit">Host Place</button>
            </form>
        </div>
        <img src="../images/host_place.png"/>
    </section>
<?php }

?>