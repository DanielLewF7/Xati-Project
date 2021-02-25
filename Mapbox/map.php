<!DOCTYPE html>
<html>
<head>
    <title>a Map</title>
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet' />
    <link href="map.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="../Typographie/fonts.css" rel="stylesheet">
    <link href="../Footer/footer.css" rel="stylesheet">
    <link href="../Navigation/Navigation.css" rel="stylesheet">
    <link href="../Spacing/spacing.css" rel="stylesheet">
    <link href="../node_modules/bootstrap/dist/css/bootstrap-grid.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/93cce96e7d.js" crossorigin="anonymous"></script>
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

</head>
<body>
<div class="Navigation">
    <?php
    if (isset($_SESSION['userUid'])) {
        echo '<ul class="menu">
            <li><a href="Index.html">Home</a></li>
            <li><a href="../Gallery/gallery.php">Gallery</a></li>
            <li><a href="/map.php">Map</a></li>
            </ul>';
    } else {
        echo '  <ul class="menu">
            <li><a href="../Index.php">Home</a></li>
            <li><a href="../Gallery/gallery.php">Gallery</a></li>
             </ul>';
        //echo '<p class="loginText">You are logged out!</p>';
    }
    ?>
    <?php
    if (isset($_SESSION['userUid'])) {
        echo ' <form class="XatiForm" action="Login/logout.inc.php" method="post">
                <div class="col-1">
                    <button type="submit" name="logout-sub" class="btn logout">Logout</button>
                </div>
            </form>';
        echo '<div class="col-11">
                <p class="loginText">You are logged in!</p>
                </div>';
    }
    ?>
</div>
<div class="topnav">
    <a href="#home" class="active">
        <i class="fas fa-align-justify off"></i>
    </a>
    <div id="topLinks">
        <a href="index.html">Home</a>
        <a href="Register/register.php">Register</a>
        <a href="Login/login.php">Login</a>
        <button class="btn-small text-center">Close Me</button>
    </div>
</div>

<div id='map'></div>
<div class="container">
    <div class="content spacing-t-small">
        <h1 class="text-center">Welcome to my Map</h1>
        <span class="MapPulse"></span>
        <p class="text-center">this map is still work in Progress, so please be patient here. For a little example, i set a marker in Hamburg
            just to show you my home city.</p>
    </div>
</div>
<div id="instructions"></div>
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
<script>

</script>
<script src="map.js"></script>
</body>
</html>