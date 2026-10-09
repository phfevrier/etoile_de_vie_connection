<?php

require_once PATH_ROOT.'/models/users.php';


function signinAction() {

    $nom = "";
    $prenom = "";
    $email = "";
    $hash = "";
    $date_naissance = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Vérification de la soumission du formulaire
        if (isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['mot_de_passe']) && isset($_POST['prenom']) && isset($_POST['date_naissance'])) {

            $nom = trim(htmlspecialchars($_POST['nom']));
            $prenom = trim(htmlspecialchars($_POST['prenom']));
            $email = trim(htmlspecialchars($_POST['email']));
            $date_naissance = trim(htmlspecialchars($_POST['date_naissance']));


            if (empty($nom ) || empty($email) || empty($_POST['mot_de_passe']) || empty($prenom) || empty($date_naissance)) {
                $msg = "Tous les champs sont obligatoires.";
            } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $msg = "L'adresse email n'est pas valide.";
        
            }  else if (! strtotime($date_naissance)) {
                $msg = "La date n'est pas valide.";
        
            } else {

                // Hachage sécurisé du mot de passe
                $hash = password_hash($_POST['mot_de_passe'], PASSWORD_DEFAULT);
                $result = set_user($nom, $prenom, $email, $hash, $date_naissance);

                if ($result) {
                    $msg = "Inscription réussie ! <a href='?action=login'>Connectez-vous</a>";
                } else {
                    $msg = "Erreur SQL";
                }
            }
        }
    }

    $content_view = PATH_ROOT.'/views/signin.php';
    require_once PATH_ROOT.'/views/layout.php';

}




