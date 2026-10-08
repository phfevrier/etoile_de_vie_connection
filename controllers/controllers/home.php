
<?php

function homeAction() {
    session_start();

    

    redirectionLogin();
    
    $greet_msg = "Bienvenue" . $_SESSION['nom'] . " !";


    $content_view = PATH_ROOT.'/views/homeView.php';
    require_once PATH_ROOT.'/views/layout.php';

}
    