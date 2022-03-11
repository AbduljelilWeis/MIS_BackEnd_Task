<?php
$_GET['title'] = "Products Page";
include('../header.php');

?>



<h2>Product Name<?php echo $_GET['id']; ?></h2>

<div class="row">
    <div class="cell-1"></div>
    <div class="cell-5 row">
        <img src="../img/img<?php echo $_GET['id']; ?>.jpg" class="cell-12" width="300" height="600">
    </div>
    <div class="cell-1"></div>
    <div class="cell-4">
        <span class="img-desc2 cell-12">Some description For Product Name<?php echo $_GET['id']; ?></span>
        <span class="img-desc2 cell-12"></span>
        <span class=" cell-12">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae modi ratione ipsa
            neque quas laborum suscipit, ipsam ex veniam maxime et assumenda ab repellendus
            molestias minus recusandae voluptas quia veritatis?
        </span>
        <span class=" cell-12">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae modi ratione ipsa
            neque quas laborum suscipit, ipsam ex veniam maxime et assumenda ab repellendus
            molestias minus recusandae voluptas quia veritatis?
        </span>
    </div>
    <div class="cell-1"></div>
</div>

<div class="separator"></div>
<?php
require "../footer.php";
?>