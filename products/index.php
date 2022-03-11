<?php
$_GET['title'] = "Products Page";
include('../header.php');

?>


<section class="table-sec">
    <h2>Our Products</h2>
    <div class="table-responsive">
        <table class="table align-middle">
            <thead>
                <tr>
                    <td colspan="2" class="header-desc">Some description For This Category</td>
                </tr>
            </thead>
            <tbody id="table">
                <tr>
                    <td class="rounded "><img src="../img/img1.jpg" class="mx-auto d-block" data-id="1" width="300" height="300"><span class="img-desc">Some description For Product1</span></td>
                    <td class="rounded "><img src="../img/img2.jpg" class="mx-auto d-block" data-id="2" width="300" height="300"><span class="img-desc">Some description For Product2</span></td>
                </tr>
                <tr>
                    <td class="rounded "><img src="../img/img3.jpg" class="mx-auto d-block" data-id="3" width="300" height="300"><span class="img-desc">Some description For Product3</span></td>
                    <td class="rounded "><img src="../img/img4.jpg" class="mx-auto d-block" data-id="4" width="300" height="300"><span class="img-desc">Some description For Product4</span></td>
                </tr>
                <tr>
                    <td class="rounded "><img src="../img/img5.jpg" class="mx-auto d-block" data-id="5" width="300" height="300"><span class="img-desc">Some description For Product5</span></td>
                    <td class="rounded "><img src="../img/img6.jpg" class="mx-auto d-block" data-id="6" width="300" height="300"><span class="img-desc">Some description For Product6</span></td>
                </tr>
            </tbody>
        </table>
    </div>

</section>
<div class="separator"></div>
<?php
require "../footer.php";


?>