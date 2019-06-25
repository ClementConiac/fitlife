<?php require_once ('tools/common.php');?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container-fluid background-sports">
    <div class="row justify-content-center align-items-center sport-card">
        <div class="card d-flex align-items-center mb-5" style="width: 20rem; height: 30rem; border-radius: 25px !important; background-color: grey">
            <h4 class="pt-2 text-white text-center mt-5 mb-3">Pourquoi n'avez vous
                pas terminé l'exercice ?</h4>
            <div class="container pb-4">
                <div class="d-flex flex-column mb-0">
                    <button type="button" class="btn btn-primary mb-3" style="border-radius: 25px !important; background-color: #BA0043; border: none; padding: 5px 40px 5px 40px;"><h4>Trop difficile</h4></button>
                    <button type="button" class="btn btn-primary mb-3" style="border-radius: 25px !important; background-color: #BA0043; border: none; padding: 5px 40px 5px 40px;"><h4>Je n'aime pas</h4></button>
                    <button type="button" class="btn btn-primary mb-3" style="border-radius: 25px !important; background-color: #BA0043; border: none; padding: 5px 40px 5px 40px;"><h4>Trop facile</h4></button>
                    <button type="button" class="btn btn-primary mb-3" style="border-radius: 25px !important; background-color: #BA0043; border: none; padding: 5px 40px 5px 40px;"><h4>J'explore l'appli</h4></button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>