<?php
// To make sure we don't need to create the header section of the website on multiple pages, we instead create the header HTML markup in a separate file which we then attach to the top of every HTML page on our website. In this way if we need to make a small change to our header we just need to do it in one place. This is a VERY cool feature in PHP!
$user = "user";
$pass = "0000";


if ($_GET['name'] == $user && $_GET['pwd'] == $pass) {

    header("Location: /abduljelilsTask/index.php?msg=success");
}
