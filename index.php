<?php
$_GET['title'] = "Home Page";
include('header.php');


?>


<section id="content">
    <div id="loop">
        <?php if (isset($_GET['msg'])) {
            echo '<h1 style="color: greenyellow;"> You Are Loggedin </h1>';
        } ?>
        <h1>Home Page</h1>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis amet dicta perspiciatis at, vel ullam
        odit facere. Repudiandae, dicta delectus facere eos placeat ad, suscipit animi incidunt esse illum
        voluptates nulla laboriosam odio reprehenderit atque tenetur alias porro tempora recusandae blanditiis
        maiores corrupti vitae aliquam. Dolor dolorem unde veniam inventore?
    </div>
    <div id="sidebar">
        <h1>SideBar</h1>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae dolorem animi ullam! Vel cupiditate, quod,
        expedita aut inventore accusantium eum qui provident sit facilis consequuntur!
    </div>
</section>
<?php
require "footer.php";

?>