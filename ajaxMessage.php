<?php
header("Access-Control-Allow-Origin: *");

try{
    $db = new PDO('mysql:host=Localhost;dbname=fitlife;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $exception)
{
    die( 'Erreur : ' . $exception->getMessage() );
}

session_start();

$response = new \stdClass();
if (!empty($_POST['height']) && !empty($_POST['weight']) && !empty($_POST['morphology'])) {
    $query = $db->prepare('UPDATE user SET morphology = :morphology ,weight = :weight ,height = :height ,is_confirmed = :isConfirmed WHERE id = :id');
    $infosUser = $query->execute([
        'height' => $_POST['height'],
        'weight' => $_POST['weight'],
        'morphology' => $_POST['morphology'],
        'isConfirmed' => 1,
        'id' => $_SESSION['user']['id']
    ]);

    if ($infosUser) {
        $query = $db->prepare('SELECT is_confirmed FROM user WHERE id = ?');
        $query->execute(array($_SESSION['user']['id']));
        $user = $query->fetch();
        $_SESSION['user']['is_confirmed'] = $user['is_confirmed'];
        if ($user) {
            $response->type = 1;
            $response->msg = 'Enregistrement des informations avec succès';
            echo json_encode($response);
        }
    }
    else {
        $response->type = 0;
        $response->msg = 'Une erreur est survenue lors de l\'enregistrement de vos informations';
        echo json_encode($response);
    }
}
else{
    $response->type = 0;
    $response->msg = 'Merci de remplir tous les champs';
    echo json_encode($response);
}