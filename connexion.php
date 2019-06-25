<?php
require_once ('tools/common.php');
if (isset($_POST['connexion'])) {
    if (!empty($_POST['pseudo']) AND !empty($_POST['password'])) {
        if (filter_input(INPUT_POST, 'pseudo', FILTER_VALIDATE_EMAIL)) {
            $query = $db->prepare('SELECT *
                                  FROM user
                                  WHERE email = ? AND password = ?');
            $query->execute(array($_POST['pseudo'], md5($_POST['password'])));
            $user = $query->fetch();

            if ($user) {
                $_SESSION['user']['firstname'] = $user['firstname'];
                $_SESSION['user']['id'] = $user['id'];
                $_SESSION['user']['is_confirmed'] = $user['is_confirmed'];

                header('location:formulaire.php');
                exit;
            }
            else {
                 $loginError = "Mauvais identifiants";
            }
        }
        else {
            $loginError = "L'adresse fournis n'est pas un mail";
        }
    }
    else {
        $loginError = "Merci de remplir tous les champs";
    }
}
