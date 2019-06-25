<?php require_once ('tools/common.php');?>
<!DOCTYPE html>
<html>
 <head>
	<title></title>
    <?php require_once('./vendor/partials/head-assets.php');  ?> </head>
</html>

<body>
    <div class="container-fluid background-sports">
        <div class="row justify-content-center align-items-center sport-card">
            <div class="card d-flex align-items-center rounded mb-5" style="width: 20rem; height: 30rem; border-radius: 25px !important; background-color: grey">
                <h3 class="pt-2">Renforcément</h3>
                <img class="card-img-top" src="assets/images/fit-5.jpg" alt="Card image cap">
                <div class="card-body d-flex align-items-center flex-column p-1">
                    <h5 class="card-text">POMPES</h5>
                </div>
                <div class="container">
                    <div class="d-flex flex-column align-items-center color-white">
                        <h1>8:36:20</h1>
                        <img src="assets/images/Groupe49" alt="">
                    </div>
                </div>
                <div class="d-flex justify-content-center pb-4 pt-2">
                <button type="button" class="btn btn-primary mb-3" style="border-radius: 25px !important; background-color: #BA0043; border: none; padding: 5px 40px 5px 40px;"><a href="renforcement4.php"><p class="mb-0">Suivant</p></a></button>
                </div>
            </div>
        </div>
    </div>
    <?php require_once('footer.php'); ?>
</body>
