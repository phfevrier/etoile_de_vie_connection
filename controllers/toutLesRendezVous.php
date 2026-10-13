<?php

require_once PATH_ROOT.'/models/rdv.php';

function toutLesRendezVousAction() {

    $listrdv = get_all_rdv();


    $content_view = PATH_ROOT.'/views/toutLesRendezVous.php';
    require_once PATH_ROOT.'/views/layout.php';
}

?>