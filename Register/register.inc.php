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
    header("Location: register.php?error=passwordcheck&uid=".$username."&mail=".$email);
    exit();
}
else {
    $sql = "SELECT username FROM users WHERE username='?'";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: register.php?error=sqlerror");
        exit();
    } else {
        mysqli_stmt_bind_param($stmt,"s", $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);
        if ($resultCheck > 0) {
            header("Location: register.php?error=usertaken&mail=".$email);
            exit();
        }
        else {
            $sql = "INSERT INTO users (username, email, pwd) VALUES (?, ? , ?)";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: register.php?error=sqlerror");
                exit();
            }
            else {
                $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                mysqli_stmt_bind_param($stmt,"sss", $username,$email, $hashedPwd);
                mysqli_stmt_execute($stmt);
                header("Location: ../index.php?signup=success");
                exit();
            }
        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    header("Location: register.php");
    exit();

}

