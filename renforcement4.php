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
            <div class="card d-flex align-items-center rounded mb-5" style="width: 20rem; height: 30rem; border-radius: 25px !important; background-color: grey;">
                <h3 class="pt-2">Exercice 5 / Jour 9</h3>
                <p>Tractions/2 Séries de 25</p>
                <div class="card-body d-flex align-items-center p-1" style="width: 267px;">
                    <div style="width:74px; height:68px;" class="d-flex justify-content-center align-items-center">
                        <img src="assets/images/flame.png" alt="">
                    </div>
                    
                    <div>
                        <p class="mb-0 ml-5">Calories brulées</p>
                        <p class="mb-0 ml-5">240 calories</p>
                    </div>
                </div>
                <div class="card-body d-flex align-items-center p-1" style="width: 267px;">
                    <div style="width:74px; height:68px;" class="d-flex justify-content-center align-items-center">
                        <img src="assets/images/chrono_cal.png" alt="">
                    </div>
                    
                    <div>
                        <p class="mb-0 ml-5">Temps</p>
                        <p class="mb-0 ml-5">12 minutes</p>
                    </div>
                </div>
                <div class="card-body d-flex align-items-center p-1" style="width: 267px;">
                    <img src="assets/images/graph.png" alt="">
                    <div>
                        <p class="mb-0 ml-5">Niveau de difficulté</p>
                        <p class="mb-0 ml-5">Moyen</p>
                    </div>
                </div>
                <div class="container pb-4">
                    <div class="d-flex flex-column align-items-center color-white">
                        <h1>8:36:20</h1>
                        <button type="button" class="btn btn-primary" style="border-radius: 25px !important; background-color: #BA0043; border: none; padding: 5px 40px 5px 40px;" data-toggle="modal" data-target="#exampleModalCenter"><img src="img/valid" alt="">Terminer la séance</button>
                    </div>
                    
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-body d-flex align-items-center">
                            <img src="assets/images/valid.png" alt="">
                            <p class="text-dark">Entrainement terminé</p>
                        </div>
                        <div class="modal-footer">
                            <a class="btn btn-large btn-info" href="index.php">Ok</a>
                        </div>
                        </div>
                    </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once('footer.php'); ?>
</body>
