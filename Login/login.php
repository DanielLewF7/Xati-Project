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
    <link href="login.css" rel="stylesheet">
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
            <?php
            if (isset($_GET['error'])) {
                if ($_GET['error'] == "emptyfields") {
                    echo '<p class="signuperror">Fill in all fields</p>';
                }
                else if ($_GET['error'] == "invaliduidmail=") {
                    echo '<p class="signuperror">Invalid username or email</p>';
                }
                else if ($_GET['error'] == "Wrongpassword") {
                    echo '<p class="signuperror">wrong Password</p>';
                }
                else if ($_GET['error'] == "wrongPassword") {
                    echo '<p class="signuperror">Invalid Password</p>';
                }
                else if ($_GET['error'] == "sqlerror") {
                    echo '<p class="signuperror">a database error occurred</p>';
                }
            }
            else if (isset($_GET['login'])) {
                if ($_GET['login'] == "success") {
                    echo '<p class="succ">Success</p>';
                }
            }
            ?>
            <div class="login spacing-b-small">
                <div class="row">
                    <form action="login.inc.php" method="post" class="signupForm spacing-b-small">
                        <div class="col-4">
                            <p>Please type your login username or login email</p>
                            <input name="mailuid" type="text" placeholder="Username" class="XatiInput">
                        </div>
                        <div class="col-4">
                            <p>Please type your login password</p>
                            <input name="pwd" type="password" placeholder="Password" class="XatiInput">
                        </div>
                        <div class="col-4">
                            <button name="login-sub" class="logbtn spacing-t-small">Login</button>
                        </div>
                    </form>
                    <a href="../Register/register.php">You don't have a Account ? Click Me!</a>
                </div>
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