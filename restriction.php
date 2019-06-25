<?php require_once ('tools/common.php');?>
<!doctype html>
<html lang="fr">
<head>
    <title>Restriction Alimentaire</title>
    <?php require_once('./vendor/partials/head-assets.php');  ?>
</head>
<body>

<div id="barba-wrapper nutrition">
    <div id="pp" class="barba-container">
        <div  class="container-fluid">
            <div class="row d-flex flex-column justify-content-center pb-3" id="blackFilter">
                <h2 class="text-center mt-3">Restriction</h1>
                <h2 class="text-center mt-3">Alimentaire</h1>
            </div>
        </div>
        <div class="container-fluide">
            <div class="container mt-1">
                <div class="row">
                    <div class="col-3 d-flex align-items-center">
                        <img src="assets/images/1.jpg" alt="..." class="rounded-circle nutritionImg">
                    </div>
                    <div class="col-7 d-flex flex-column align-content-center justify-content-center ">
                    <a href="./fastfood.php"><h6>Fast Food</h6></a>
                    </div>
                    <div class="d-flex justify-content-center align-items-center arrow"><a href="fastfood.php"><p>&#62;</p></a></div>
                </div>
            </div>
        </div>
        <div class="container-fluide">
            <div class="container">
                <div class="row">
                    <div class="col-3 d-flex align-items-center">
                        <img src="assets/images/777459.jpg" alt="..." class="rounded-circle nutritionImg">
                    </div>
                    <div class="col-7 d-flex flex-column align-content-center justify-content-center ">
                        <a href="./confiserie.php"><h6>Confiseries Pâtisserie</h6></a>
                    </div>
                    <a href="./confiserie.php"><div class="col-2 d-flex justify-content-center align-items-center arrow"><p>&#62;</p></div></a>
                </div>
            </div>
        </div>
        <div class="container-fluide">
            <div class="container">
                <div class="row">
                    <div class="col-3 d-flex align-items-center">
                        <img src="assets/images/images.jpg" alt="..." class="rounded-circle nutritionImg">
                    </div>
                    <div class="col-7 d-flex flex-column align-content-center justify-content-center ">
                        <a href="./viandesrouges.php"><h6>Viandes rouges</h6></a>
                    </div>
                    <a href="./viandesrouges.php"><div class="col-2 d-flex justify-content-center align-items-center arrow"><p>&#62;</p></div></a>
                </div>
            </div>
        </div>
        <div class="container-fluide">
            <div class="container">
                <div class="row">
                    <div class="col-3 d-flex align-items-center">
                        <img src="assets/images/1120345.image" alt="..." class="rounded-circle nutritionImg">
                    </div>
                    <div class="col-7 d-flex flex-column align-content-center justify-content-center ">
                        <a href="./fromages.php"><h6>Les fromages</h6></a>
                    </div>
                    <a href="fromages.php"><div class="col-2 d-flex justify-content-center align-items-center arrow"><p>&#62;</p></div></a>
                </div>
            </div>
        </div>
        <div class="container-fluide">
            <div class="container">
                <div class="row">
                    <div class="col-3 d-flex align-items-center">
                        <img src="assets/images/7780583018_achieving-balance.png" alt="..." class="rounded-circle nutritionImg">
                    </div>
                    <div class="col-7 d-flex flex-column align-content-center justify-content-center ">
                        <a href="./allergie.php"><h6>Allergies</h6></a>
                    </div>
                    <a href="./allergie.php"><div class="col-2 d-flex justify-content-center align-items-center arrow"><p>&#62;</p></div></a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require_once('footer.php'); ?>

</body>
</html>