<?php
$_GET['title'] = "Sign Up Page";
include('../header.php');

$msg = $_GET['msg'];
?>

<?php if ($_GET['msg'] == "success") {
  echo '<h1 class="signupsuccess"> A New User Signed up Successfully</h1>';
}       ?>
<?php if ($_GET['msg'] == "no_user_name") {
  echo '<h1 class="signuperror">User Name Couldn\'t Be Null</h1>';
}       ?>
<?php if ($_GET['msg'] == "no_email") {
  echo '<h1 class="signuperror">Email Couldn\'t Be Null</h1>';
}       ?>
<?php if ($_GET['msg'] == "password_doesn\'t_match") {
  echo '<h1 class="signuperror">Password Doesn\'t Match</h1>';
}       ?>
<main>
  <div class="wrapper-main">
    <section class="section-default">
      <h1>Signup</h1>

      <form class="form-signup" action="/abduljelilsTask/include/signup.inc.php" method="post">
        <input type="text" name="uid" placeholder="Username">
        <input type="text" name="mail" placeholder="E-mail">
        <input type="password" name="pwd" placeholder="Password">
        <input type="password" name="pwd_repeat" placeholder="Repeat password">
        <button type="submit" name="signup-submit">Signup</button>
      </form>
    </section>
  </div>
</main>

<?php
require "../footer.php";


?>