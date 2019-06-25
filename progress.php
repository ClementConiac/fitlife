<?php require_once ('tools/common.php');?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="progress.css">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-sm-8">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 25%; background-color:#ff00bd; border-radius: 15px; " aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                </div>
                <br>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 75%; background-color:#ff00bd; border-radius: 15px; " aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                </div>
                <br>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 55%; background-color:#ff00bd; border-radius: 15px; " aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once('footer.php'); ?>

</body>
</html>