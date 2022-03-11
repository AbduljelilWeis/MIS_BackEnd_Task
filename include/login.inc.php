<?php

$user = $_COOKIE['username'];
$email = $_COOKIE['email'];
$pass = $_COOKIE['password'];


if (($_POST['name'] != $user && $_POST['name'] != $email) || $_POST['pwd'] != $pass) {

    header("Location: /abduljelilsTask/login/index.php?msg=doesnt_match");
    exit();
}


if (($_POST['name'] == $user || $_POST['name'] == $email) && $_POST['pwd'] == $pass) {

    header("Location: /abduljelilsTask/index.php?msg=success");
    exit();
}
