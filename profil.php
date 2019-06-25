<?php require_once ('tools/common.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style_pro.css">
    <link rel="stylesheet" href="./assets/css/style.css">


    <title> FIT LIFE | Profil</title>
</head>

<body>


<div class="container contain p-0">

    <div id="bckGround" class="backgroundImg">
        <img class="logo ml-3" src="assets/images/Groupe%207.png">
        <div class="container flour ml-5">
            <div id="portrait" class="zIndex d-block ml-auto mr-auto rounded-circle rounded-sm" >
                <img src="assets/images/profil.jpg" >

            </div>
            <div class="row px-3 d-flex justify-content-center"></div>
            <h6 class="row d-flex pt-4">Informations personnelles</h6>
            <div class=" row d-flex justify-content-around pt-5 mt-5" id="ident">
                <p class="zIndex" >Femme</p>
                <p class="zIndex">23 ans</p>
            </div>
            <div class=" row mt-sm-n5 d-flex justify-content-around" id="infos">
                <p class="zIndex">165cm</p>
                <p class="zIndex">60kg</p>
            </div>
        </div>



    </div>
    <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 25%; background-color:#BA0043; border-radius: 15px; " aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">25%</div>
    </div>
    <div class="graphi">
        <canvas id="myChart"></canvas>
        <div class="graph row d-flex justify-content-center">
            <button type="button" class="btn btn-info graph">Jours</button>
            <button type="button" class="btn btn-info graph">Semaine</button>
            <button type="button" class="btn btn-info graph">Mois</button>
        </div>
    </div>

    <?php require_once('footer.php'); ?>


</body>
</html>
<script>
let ctx = document.getElementById("myChart").getContext('2d');
let myChart = new Chart(ctx, {
type: 'bar',
data: {
labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
datasets: [{
label: ['# of Votes'],
data: [12, 19, 3, 5, 2, 3],
backgroundColor: [
'rgba(255, 99, 132, 0.2)',
'rgba(54, 162, 235, 0.2)',
'rgba(255, 206, 86, 0.2)',
'rgba(75, 192, 192, 0.2)',
'rgba(153, 102, 255, 0.2)',
'rgba(255, 159, 64, 0.2)'
],
borderColor: [
'rgba(255,99,132,1)',
'rgba(54, 162, 235, 1)',
'rgba(255, 206, 86, 1)',
'rgba(75, 192, 192, 1)',
'rgba(153, 102, 255, 1)',
'rgba(255, 159, 64, 1)'
],
borderWidth: 1
}]
},
options: {
scales: {
yAxes: [{
ticks: {
beginAtZero: true
}
}]
}
}
});

</script>
