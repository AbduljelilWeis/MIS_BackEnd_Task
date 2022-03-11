<?php
$_GET['title'] = "Login Page";
include('../header.php');


?>
<?php if ($_GET['msg'] == "doesnt_match") {
    echo '<h1 class="signuperror">Password Or Username Doesn\'t Match </h1>';
}       ?>

<section class="form-sec">
    <h2>Log In</h2>
    <div class="signup-form">
        <form action="/abduljelilsTask/include/login.inc.php" method="POST" class="form">
            <input type="text" name="name" placeholder="Username/Email ...." class="form-control">
            <input type="password" name="pwd" placeholder="Password ...." class="form-control">
            <button type="submit" class="btn btn-primary">Log In</button>
        </form>
    </div>
</section>
<?php
require "../footer.php";

?>