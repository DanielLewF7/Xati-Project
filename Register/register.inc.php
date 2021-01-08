<?php
if (isset($_POST["signup-sub"]))
    require "dbh.inc.php";

$username = $_POST["uid"];
$email = $_POST["mail"];
$password = $_POST["pwd"];
$passwordRepeat = $_POST["pwd-repeat"];

if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
    header("Location: register.php?error=emptyfields&uid=".$username."&mail".$email);
    exit();
}
else if (!preg_match("/^[a-zA-Z0-9]*$/", $username) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: register.php?error=invaliduidmail=");
    exit();
}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: register.php?error=invalidemail&uid=".$username);
    exit();
}
else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("Location: register.php?error=invaliduid&uid=" . $email);
    exit();
}
else if ($password !== $passwordRepeat) {
    header("Location: register.php?error=passwordcheck=".$username."&mail=".$email);
    exit();
}
//else {
    //$sql = "SELECT uidUsers FROM users WHERE uidUsers='?'";
    //$stmt = mysqli_stmt_init($conn);
//}
