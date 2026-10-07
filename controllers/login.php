<?php

require_once PATH_ROOT.'/models/users.php';


function open_session($user, $isAdmin)  {
    // Démarrage de la session

    // Stockage des informations utiles en session
    if ($isAdmin) {
        $_SESSION['user_id'] = $user['id_praticien'];
    } else {
        $_SESSION['user_id'] = $user['id_patient'];
    }
    $_SESSION['nom'] = $user['nom'];
    $_SESSION['prenom'] = $user['prenom'];
    $_SESSION['isAdmin'] = $isAdmin;
    // Redirection vers la page d'accueil
    header('Location:' . URL);
    exit();

}

function loginAction($isAdmin) {


    $email = "";
    $error_msg = "";

//    session_start();
    if (isLogged()) {
        // connecté -> redirection vers la page d'accueil
        header('Location:'.URL);
        exit();

    }    
    

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Vérification de la soumission du formulaire
        if (isset($_POST['email']) && isset($_POST['mot_de_passe'])) {


            $email = trim(htmlspecialchars($_POST['email']));
            $mot_de_passe = trim(htmlspecialchars($_POST['mot_de_passe']));

            if (empty($email) || empty($mot_de_passe) ) {

                $error_msg = "Tous les champs sont obligatoires";
            } else {

                if ($isAdmin) {
                    $user = get_admin_by_email($email);

                } else {

                    $user = get_user_by_email($email);

                }

                if (!$user) {
                    $error_msg =  "Compte inconnu.";
                } else if (! password_verify($mot_de_passe, $user['mot_de_passe'])) {

                    $error_msg =  "Mot de passe incorrect.";
                } else {
                    echo $user;
                    open_session($user, $isAdmin);
                }
            }
        }
    }

    $connection_title = $isAdmin ? "Connection praticien" : "Connection"; 
    $content_view = PATH_ROOT.'/views/loginView.php';
    require_once PATH_ROOT.'/views/layout.php';

}
