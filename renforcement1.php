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
            <div class="card d-flex align-items-center rounded mb-5" style="width: 20rem; height: 30rem; border-radius: 25px !important; background-color: grey; opacity: 0.9;">
                <h1 class="pt-2 pb-4">Jour 1</h3>
                <div class="card-body p-1 pr-5 mr-5">
                    <h2 class="card-text">Jambes</h2>
                    <h5 class="card-text">Jumping squats</p>
                    <div class="d-flex row">
                        <img src="assets/images/small_chrono.png" class="mr-2" alt="">
                        <h5 class="card-text">20 min</h5>
                    </div>
                </div>
                <div class="container">
                    <div class="d-flex flex-column align-items-center color-white">
                        <button type="button" class="btn btn-primary mb-3" style="border-radius: 25px !important; background-color: #BA0043; border: none; padding: 5px 40px 5px 40px;"><a href="renforcement2.php"><h5>Commencer</h5></a></button>
                        <a href=""><h5 class="mb-3">Cette semaine ></h5></a>
                        <div class="d-flex mb-5">
                            <div class=" mr-5">
                                <h4>Temps</h4>
                                <h1>8:36</h1>
                            </div>
                            <div class="ml-5">
                                <h4>Classement</h4>
                                <h1 class="text-center">21</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once('footer.php'); ?>
</body>