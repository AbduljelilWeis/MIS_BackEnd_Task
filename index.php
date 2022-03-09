<?php
include('header.php');


?>


<section id="content">
    <div id="loop">
        <h1><?php if (isset($_GET['msg'])) {
                echo $_GET['msg'] . "You Are Loggedin";
            }       ?></h1>
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
<footer id="footer">
    FOOTER
</footer>

</body>

</html>