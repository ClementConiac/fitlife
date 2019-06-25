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
    <title>receipt</title>
</head>
<body>
<div id="barba-wrapper">
    <div class="background"></div>
    <div id="pp" class="barba-container zIndex d-flex align-items-center justify-content-center">
        <div class="container d-flex justify-content-start mb-5">
            <a href="index.php">&#8592;</a>
        </div>
        <div class="container flour">
            <div class="row px-3 d-flex justify-content-center mt-4 "><h2 class="zIndex white">Céréales à la banane</h2>
            </div>
            <hr class="zIndex">
            <div class="row d-flex justify-content-around">
                <p class="zIndex white">Céréales 150G</p>
                <p class="zIndex white">Chocolat 40G</p>
            </div>
            <div class="row d-flex justify-content-around">
                <p class="zIndex white">Banames 200G</p>
                <p class="zIndex white">Raisins 50G</p>
            </div>
            <div class="row px-3"><p class="zIndex text-white">Your bones don’t break, mine do. That’s clear. Your cells
                    react to bacteria and viruses differently than mine. You don’t get sick, I do. That’s also clear.
                    But for some reason, you and I react the exact same way to water. We swallow it too fast, we
                    choke. </p></div>

            <div class="row d-flex justify-content-around">
                <div class="col-3 border border-secondary zIndex"><p class="zIndex text-white">30 % Lipides</p></div>
                <div class="col-3 border border-secondary zIndex"><p class="zIndex text-white"> 20 % Glucides</p></div>
                <div class="col-3 border border-secondary zIndex"><p class="zIndex text-white">180 + Calories</p></div>
            </div>
        </div>
    </div>
</div>
<?php require_once('footer.php'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/barba.js/1.0.0/barba.min.js"></script>
<script src="assets/js/barba.js"></script>
</body>
</html>
