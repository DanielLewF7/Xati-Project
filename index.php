<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="node_modules/bootstrap/dist/css/bootstrap-grid.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="Typographie/fonts.css" rel="stylesheet">
    <link href="Footer/footer.css" rel="stylesheet">
    <link href="Navigation/Navigation.css" rel="stylesheet">
    <link href="Spacing/spacing.css" rel="stylesheet">
    <link href="Tab/tab.css" rel="stylesheet">
    <link href="Slider/slider.css" rel="stylesheet">
    <link href="Teaser/teaser.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/93cce96e7d.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="script.js"></script>
    <script src="Slider/slider.js"></script>
    <script src="Teaser/teaser.js"></script>
    <script src="Tab/tab.js"></script>
    <title>a new page</title>
</head>
<body>
<div class="Navigation">
    <ul class="menu">
        <li><a href="Index.html">Home</a></li>
        <?php
        if (isset($_SESSION['userUid'])) {
            echo '<li><a href="Gallery/gallery.php">Gallery</a></li>';
            }else {
            echo ' <a href="Register/register.php">Register</a>
            <span class="pipe">|</span>
            <a href="Login/login.php">Login</a>';
            //echo '<p class="loginText">You are logged out!</p>';

        }
        ?>
        <?php
        if (isset($_SESSION['userUid'])) {
            echo ' <form class="XatiForm" action="Login/logout.inc.php" method="post">
                <button type="submit" name="logout-sub" class="btn logout">Logout</button>
            </form>';
            echo '<p class="loginText">You are logged in!</p>';
        }
        ?>
    </ul>
</div>
<div class="topnav">
    <a href="#home" class="active">
        <i class="fas fa-align-justify off"></i>
    </a>
    <div id="topLinks">
        <a href="index.html">Home</a>
        <a href="Register/register.php">Register</a>
        <a href="Login/login.php">Login</a>
        <a href="Gallery/gallery.php">Login</a>
        <button class="btn-small text-center">Close Me</button>
    </div>
</div>
<div class="container">
    <div class="content spacing-t-small">
        <h2 class="text-center h2-anim">About me (Click to expand the text)</h2>
        <p class="text-center text-spacing AnimationText"> Hey there, my name is Daniel and I'm a young Frontend Developer living in Hamburg Germany.
            My dream is to become a good Fullstack Developer in the future, so i started to code a little bit with PHP. My focus is still on JavaScript
            and HTML/CSS and I'm still improving my skills there. Right now i'm doing my Work expierence at a IT company which specifies on the web Development.
            If you want a good web page you can contact me. I can offer you my HTML/CSS, JS and CMS skills (TYPO3 / Wordpress) and maybe in the future some Backend PHP coding.
            Email: d.lewandowski2803@gmail.com
        </p>
    </div>
</div>
    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 spacing-t-medium text-center">
            <div class="Tabs">
                <button class="btn-tabs btn-tabs-1">My gym experience</button>
                <button class="btn-tabs btn-tabs-2">Some Text</button>
                <button class="btn-tabs btn-tabs-3">Some Text</button>
                <button class="btn-tabs btn-tabs-4">Secret Tab</button>
            </div>
        </div>
    </div>
    <div class="col-10 wrap">
            <div class="tab-text text-center">
                <p class="font-padding tab-text-1">
                    I did many exercises in the past but since we have the corona virus in our Country and in Europe in general,
                    i'm not doing sport so often right now. I was very proud of my results and looking straight foward my body changes was something
                    what made me happy. I did on the legpress almost 300KG and 100KG bench press. I had no hard dopping suppliments or something else.
                    Many people would thing i'm a cliché guy with many muscles and i'm doing a bodyguard job or something. But its not true actually.
                    I'm a normal young frontend web-developer who is doing his first work experience. I can't wait till the gyms are open again!
                </p>
            </div>
        <div class="tab-text text-center">
            <p class="font-padding tab-text-2">asjd</p>
        </div>
        <div class="tab-text text-center">
            <p class="font-padding tab-text-3">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                At vero eos et accusam et justo duo dolores et ea rebum.
                Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            </p>
        </div>
        <div class="tab-text text-center">
            <div class="interface-1">
                <p class="font-padding tab-text-4">
                    This Tab has nothing special actually, but there is a little secret over there which one person can only access
                    it with his/her right name
                </p>
                <input type="password" placeholder="type the right name" class="x-mas">
                <button class="confirm"> click the button to access.</button>
            </div>
            <div class="interface-2">
                <h3>
                   xd ?
                </h3>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-sm-12">
            <div class="teaserbox spacing-t-medium spacing-b-medium">
                <div class="teaserImgBox firstimg">
                </div>
                <div class="textbox text-center">
                    <p class="font-padding">
                        Wordpress is a simple and good CMS and I really prefer working with it.
                        For small projects, which are requiring a CMS, Wordpress is the right choice, in my opinion.
                        TYPO3 is more relevant for bigger projects and also a great CMS for a website.
                        Both CMS have their cons and pros and it´s upon you to decide which one you choose.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div class="teaserbox spacing-t-medium spacing-b-medium">
                <div class="teaserImgBox secondimg">
                </div>
                <div class="textbox text-center">
                    <p class="font-padding">I'm basically using HTML & CSS as a script language, as well as
                        javacript for some frontend coding. I'm also using the Jquery Framework here to
                        skip some code writing, so that it remains the same. In addition, I´m also using
                        bootstrap on this page.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div class="teaserbox spacing-t-medium spacing-b-medium">
                <div class="teaserImgBox thirdimg">
                </div>
                <div class="textbox text-center">
                    <p class="font-padding">In the future I´m going to try to code with PHP and use a MYSQL databank
                        where the user login information is gonna be saved. I'm still in the learning progress there
                        and not the best coder in general, so be considerate, please.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="slideshow-container spacing-b-medium">
        <div class="row">
            <div class="mySlides slidein col-lg-12 col-md-12 col-sm-12">
                <div class="slideNumber">1 / 3</div>
                <img src="Images/jpg.jpg" alt="pic of a puppy">
                <div class="captionText">Caption One</div>
            </div>
            <div class="mySlides slidein col-lg-12 col-md-12 col-sm-12">
                <div class="slideNumber">2 / 3</div>
                <img src="Images/hills.jpg" alt="pic of a puppy">
                <div class="captionText">Caption two</div>
            </div>
            <div class="mySlides slidein col-lg-12 col-md-12 col-sm-12">
                <div class="slideNumber">3 / 3</div>
                <img src="Images/desert.jpg" alt="pic of a puppy">
                <div class="captionText">Caption three</div>
            </div>
        </div>
    </div>
        <br>
</div>
<div class="footer">
    <div class="imgbox">
        <h3>Website by Daniel Lewandowski</h3>
    </div>
    <div class="flinks">
        <a href="google.com">Datenschutz</a>
        <span class="pipe">|</span>
        <a href="google.com">Impressum</a>
    </div>
    <button class="btop"><i class="fas fa-arrow-up"></i></button>
</div>
<?php
require "register/dbh.inc.php";

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, username, email, pwd FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        //echo "idUsers: " . $row["idUsers"]. " - Name: " . $row["uidUsers"]. " " . $row["emailUsers"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>