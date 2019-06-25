<?php require_once ('tools/common.php');
$query = $db->query('SELECT * FROM morphology');
$morpho = $query->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="vendor/bootstrap-4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">    <title>Menu principale</title>
</head>
<body>

<div class="container-fluid formulaire-bg">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            <img src="assets/images/Groupe%207.png" alt="">
            </div>
            <div class="col-sm-12 text-center font-weight-bold">
                <p class="text-white">Dites-nous en un peu plus</p>
            </div>
            <div class="col-sm-12 infos">
                <?php if ($_SESSION['user']['is_confirmed'] == 0): ?>
                    <form id="infosUser">
                        <div class="form-group">
                            <label for="height" class="text-white font-weight-bold">Quel est votre taille</label>
                            <input type="number" class="form-control" id="height" name="height" placeholder="Entrez votre taille">
                        </div>
                        <div class="form-group">
                            <label for="weight" class="text-white font-weight-bold">Quel est votre poids</label>
                            <input type="number" class="form-control" id="weight" name="weight" placeholder="Entrez votre poids">
                        </div>

                        <div class="form-group">
                            <label for="morphology" class="text-white font-weight-bold">Selectionner votre morphologie</label>
                            <select class="form-control" id="morphology" name="morphology">
                                <?php foreach ($morpho as $morph): ?>
                                    <option value="<?= $morph['id'] ;?>" ><?= $morph['type'];?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" class="butt btn btn-primary w-100 mt-5" style="background-color:#BA0043; border-radius: 25px; border: none">Enregistrer</button>
                    </form>
                <?php endif;?>

                <?php if ($_SESSION['user']['is_confirmed'] == 1): ?>
                    <button id="profil" class=" btn btn-primary w-100 mt-5 text-white" style="background-color:#BA0043; border-radius: 25px; border: none">
                        <a href="nutrition.php">Mon régime</a>
                    </button>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<script>
    let registerForm = document.querySelector('#infosUser');
    let button = document.querySelector('.butt');

    let form = function () {

        fetch('ajaxMessage.php', {
            method: 'POST',
            headers: new Headers(),
            body: new FormData(registerForm)
        }).then((res) => res.json())
            .then((data) => {
                let message = document.querySelector('#infosUser')
                let formulaire = document.querySelector('#infosUser')

                if (document.querySelector('#color')){
                    message.removeChild(document.querySelector('#color'))
                }

                if (data.type === 1){
                    createdMessage(data)
                    document.querySelector('#color').style.color ='white'
                    document.querySelector('#color').style.paddingTop = '10px'
                    formulaire.style.display ='none'
                }
                else{
                    createdMessage(data)
                    document.querySelector('#color').style.color ='white'
                    document.querySelector('#color').style.paddingTop = '10px'
                    formulaire.style.display ='block'
                }
            })
    };
    if (button) {
        registerForm.addEventListener('submit', function (e) {
            e.preventDefault();
            form();
        })
    }

    function createMessage(data) {
        let divMessage = document.createElement('div')
        divMessage.setAttribute('id','color')
        let message = document.createElement('span')
        message.innerHTML = `${data.msg}`

        divMessage.appendChild(message)
        return divMessage
    }

    function createdMessage(data) {
        let notif = createMessage(data)
        document.querySelector('.infos').appendChild(notif)
    }
</script>
</body>
</html>