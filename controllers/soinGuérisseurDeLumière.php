<?php
function soinGuérisseurDeLumièreAction() {
    session_start();
    redirectionLogin();

    $content_view = PATH_ROOT.'/views/creerUnRendezVous.php';
    require_once PATH_ROOT.'/views/layout.php';
}

?>