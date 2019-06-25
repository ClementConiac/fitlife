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
            <div class="card d-flex align-items-center mb-5" style="width: 20rem; height: 30rem; border-radius: 25px !important; background-color: grey">
                <h3 class="pt-2">Renforcément</h3>
                <img class="card-img-top" src="assets/images/fit-5.jpg" alt="Card image cap">
                <div class="card-body d-flex align-items-center flex-column p-1">
                    <h5 class="card-text pb-2">POMPES</h5>
                    <img src="assets/images/chrono" alt="">
                </div>
                <div class="container pb-4">
                    <div class="d-flex flex-row">
                        <div class="col-5 d-flex flex-column align-items-end justify-content-center">
                            <h4>3</h4>
                            <p>SETS</p>
                        </div>
                        <div class="col-2 d-flex justify-content-center align-items-center">
                            <img src="assets/images/trace" alt="">
                        </div>
                        <div class="col-5 d-flex flex-column align-items-start justify-content-center">
                            <h3>10</h3>
                            <p>REPS</p>
                        </div>
                       
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <button type="button" class="btn btn-primary mb-3" style="border-radius: 25px !important; background-color: #BA0043; border: none; padding: 5px 40px 5px 40px;"><a href="renforcement3.php"><p class="mb-0">Suivant</p></a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php require_once('footer.php'); ?>
</body>