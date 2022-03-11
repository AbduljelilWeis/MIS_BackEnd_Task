<?php


$user = $_POST["uid"];
$mail = $_POST["mail"];
$pass = $_POST["pwd"];
$pwd_repeat = $_POST["pwd_repeat"];

setcookie('username', $user, time() + (86400 * 2), "/");
setcookie('email', $mail, time() + (86400 * 2), "/");
setcookie('password', $pass, time() + (86400 * 2), "/");

if (empty($_POST["uid"])) {
    header("Location: /abduljelilsTask/signUp/index.php?msg=no_user_name");
    exit();
}
if (empty($_POST["mail"])) {
    header("Location: /abduljelilsTask/signUp/index.php?msg=no_email");
    exit();
}
if (empty($_POST["pwd"]) || empty($_POST["pwd_repeat"])) {
    header("Location: /abduljelilsTask/signUp/index.php?msg=password_doesn\'t_match");
    exit();
}
if ($pass !== $pwd_repeat) {
    header("Location: /abduljelilsTask/signUp/index.php?msg=password_doesn\'t_match");
    exit();
}

if (!empty($_POST["uid"]) && !empty($_POST["mail"]) && !empty($_POST["pwd"])) {

    header("Location: /abduljelilsTask/signUp/index.php?msg=success");
    // echo !empty($_POST["uid"]) . "<br>";
    // echo !empty($_POST["mail"]) . "<br>";
    // echo !empty($_POST["pwd"]) . "<br>";
    exit();
}
