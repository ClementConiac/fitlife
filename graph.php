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

    <title>Document</title>
</head>
<body>
    <div class="container">
        <canvas id="myChart"></canvas>
        <div class="row">
            <button type="button" class="btn btn-info">Jours</button>
            <button type="button" class="btn btn-info">Semaine</button>
            <button type="button" class="btn btn-info">Mois</button>
        </div>
    </div>

    <?php require_once('footer.php'); ?>


</body>
</html>

<script>

/*var ctx = document.getElementById('graph1').getContext('2d')
var data = {
    labels: ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'],
    datasets: [{
        label: '# voting'
        data: [10, 30, 20, 50, 15, 90, 30],
        backgroundColor: [
            'rgba(255, 99, 132, 0.2)'
            'rgba(54, 162, 235, 0.2)'
            'rgba(255, 206, 86, 0.2)'
            'rgba(75, 192, 192, 0.2)'
            'rgba(153, 102, 255, 0.2)'
            'rgba(255, 64, 159, 0.2)'
        ],
        borderColor: [
            'rgba(255, 99, 132, 1)'
            'rgba(54, 162, 235, 1)'
            'rgba(255, 206, 86, 1)'
            'rgba(75, 192, 192, 1)'
            'rgba(153, 102, 255, 1)'
            'rgba(255, 64, 159, 1)'
        ],
        borderWidth: 1
    }]
},

var options = {
    responsive: true,
    tooltips: {
        mode: 'nearest'
    }
}

var config = {
    type: 'bar' ,
    data: data,
    options: options
}
var graph1 = new Chart(ctx, config)*/
