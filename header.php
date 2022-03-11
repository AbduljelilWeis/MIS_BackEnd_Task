<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Abduljelil's <?php echo $_GET["title"]; ?></title>
</head>

<body>
    <nav id="nav" class="">
        <div class="wrapper ">
            <div id="logo">
                <a href="/abduljelilsTask">
                    <img src="/abduljelilsTask/img/Logo150px.png" alt="Logo" id="logo-img">
                </a>
            </div>
            <div id="nav-elem">
                <ul id="nav-list">
                    <li onclick="location.href='/abduljelilsTask'"><a href="/abduljelilsTask">Home</a></li>
                    <li onclick="location.href='/abduljelilsTask/about.php'"><a href="/abduljelilsTask/about.php">About Us</a></li>
                    <li onclick="location.href='/abduljelilsTask/products'"><a href="/abduljelilsTask/products">All Products</a></li>
                    <li onclick="location.href='/abduljelilsTask/login'"><a href="/abduljelilsTask/login">Login</a></li>
                    <li onclick="location.href='/abduljelilsTask/signUp'"><a href="/abduljelilsTask/signUp">SignUp</a></li>
                </ul>
            </div>
        </div>
    </nav>