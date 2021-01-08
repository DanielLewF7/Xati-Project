<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="node_modules/bootstrap/dist/css/bootstrap-grid.css" rel="stylesheet">
    <link href="../style.css" rel="stylesheet">
    <link href="../Typographie/fonts.css" rel="stylesheet">
    <link href="../Footer/footer.css" rel="stylesheet">
    <link href="../Navigation/Navigation.css" rel="stylesheet">
    <link href="../Spacing/spacing.css" rel="stylesheet">
    <link href="register.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/93cce96e7d.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../script.js"></script>
    <title>a new page</title>
</head>
<body>
<div class="Navigation">
    <ul class="menu">
        <li><a href="../Index.php">Home</a></li>
    </ul>
</div>
<div class="topnav">
    <a href="#home" class="active">
        <i class="fas fa-align-justify off"></i>
    </a>
    <div id="topLinks">
        <a href="../index.php">Home</a>
        <button class="btn-small text-center">Close Me</button>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="content spacing-b-medium spacing-t-medium">
            <div class="register spacing-b-small">
                <form>
                    <p>Please type a valid Email</p>
                    <input type="text" placeholder="Email">
                    <p>Please type a Username</p>
                    <input type="text" placeholder="Username">
                    <p>Please type a save password</p>
                    <input type="password" placeholder="Password">
                    <p>Repeat your password</p>
                    <input type="password" placeholder="Repeat password">
                    <button class="regbtn spacing-t-small">Register</button>
                </form>
            </div>
        </div>
    </div>
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
</div>
</body>
</html>