<?php require_once ('tools/common.php');?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="vendor/bootstrap-4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>programme nutrition</title>
</head>
<body>
<div id="barba-wrapper">
    <div class="background"></div>
    <div id="pp" class="barba-container zIndex d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row d-flex flex-column justify-content-center darken">
                <h2 class="text-center white">Nutrition</h2>
                <h5 class="text-center white">28 - 29 juin</h5>
                <h5 class="text-center white">Semaine 1</h5>
                <div class="row d-flex justify-content-around">
                    <a href="index.php"><button class="btn border rounded zIndex text-white">Entretien</button></a>
                    <a href="nutritionMasse.php"><button class="btn border rounded zIndex text-white">Prise de masse</button></a>
                    <a href="nutritionSèche.php"><button class="btn border rounded zIndex text-white">Sèche</button></a>
                </div>
            </div>
        </div>

        <div class="container-fluide">
            <div class="container">
                <div class="row">
                    <div class="col-3 d-flex align-items-center">
                        <img src="assets/images/monika.jpg" alt="..."
                             class="rounded-circle nutritionImg">
                    </div>
                    <div class="col-7 d-flex flex-column align-content-center justify-content-center ">
                        <h6 class="text-white">Petit-déjeuner</h6>
                        <h6 class="text-white">céréales à la banane</h6>
                    </div>
                    <div class="col-2 d-flex justify-content-center align-items-center arrow"><a href="receipt.php"><p>
                                &#62;</p></a></div>
                </div>
            </div>
        </div>
        <div class="container-fluide">
            <div class="container">
                <div class="row">
                    <div class="col-3 d-flex align-items-center">
                        <img src="assets/images/joseph.jpg" alt="..." class="rounded-circle nutritionImg">
                    </div>
                    <div class="col-7 d-flex flex-column align-content-center justify-content-center ">
                        <h6 class="text-white">En-cas du matin</h6>
                        <h6 class="text-white">céréales à la banane</h6>
                    </div>
                    <div class="col-2 d-flex justify-content-center align-items-center arrow"><a href="receipt.php"><p>
                                &#62;</p></a></div>
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
                        <h6 class="text-white">Déjeuner</h6>
                        <h6 class="text-white">céréales à la banane</h6>
                    </div>
                    <div class="col-2 d-flex justify-content-center align-items-center arrow"><a href="receipt.php"><p>
                                &#62;</p></a></div>
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
                        <h6 class="text-white">En-cas de l'après-midi</h6>
                        <h6 class="text-white">céréales à la banane</h6>
                    </div>
                    <div class="col-2 d-flex justify-content-center align-items-center arrow"><a href="receipt.php"><p>
                                &#62;</p></a></div>
                </div>
            </div>
        </div>
        <div class="container-fluide">
            <div class="container">
                <div class="row">
                    <div class="col-3 d-flex align-items-center">
                        <img src="assets/images/brooke-lark-158019-unsplash.png" alt="..." class="rounded-circle nutritionImg">
                    </div>
                    <div class="col-7 d-flex flex-column align-content-center justify-content-center ">
                        <h6 class="text-white">Diner</h6>
                        <h6 class="text-white">céréales à la banane</h6>
                    </div>
                    <div class="col-2 d-flex justify-content-center align-items-center arrow"><a href="receipt.php"><p>
                                &#62;</p></a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="vendor/bootstrap-4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/barba.js/1.0.0/barba.min.js"></script>
<script src="assets/js/barba.js"></script>
</body>
</html>
