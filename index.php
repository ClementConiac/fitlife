<?php require_once ('connexion.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="vendor/bootstrap-4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">

    <title>Menu principale</title>
</head>
<body>
<div class="card bg-dark text-white">
    <img src="login-page/photo-log-page.jpg" class="card-img" alt="...">
    <div class="card-img-overlay pt-5">
        <div class="container d-flex align-items-center mt-5">
        <img src="login-page/Groupe%207.png" class="img-fluid" alt="Responsive image">
        </div>
        <div class="container">
            <div class="container mb-5 m-0 pb-5 row d-flex justify-content-center">
                <form action="index.php" method="post">
                    <div class="form-group">
                        <input type="email" class="form-control input" id="email" placeholder="Email" name="pseudo">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control input" id="exampleInputPassword1" placeholder="Mot de passe" name="password">
                    </div>
                    <div class="container mt-5 text-center">
                        <button type="submit" class="btn button-con" name="connexion">Se connecter</button>
                    </div>

                    <?php if(isset($loginError)):?>
                        <div class="container mt-2 text-center">
                            <?= $loginError; ?>
                        </div>
                    <?php endif; ?>
                </form>
            </div>
        </div>
        <div class="container mt-4 pt-4">
            <p class="pt-3 m-0" id="foot">En créant un compte, j'accepte les conditions d'utilisations, et la politique de
                confidentialité de fit life.
            </p>
        </div>
    </div>
</div>

<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/tooltip.js"></script>
<script src="vendor/bootstrap-4.3.1/js/bootstrap.min.js"></script>
</body>
</html>