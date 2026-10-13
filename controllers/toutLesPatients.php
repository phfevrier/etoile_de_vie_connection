<?php

require_once PATH_ROOT.'/models/users.php';


function toutLesPatientsAction() {

    $listPatients = get_all_patients();
 

    $content_view = PATH_ROOT.'/views/toutLesPatients.php';
    require_once PATH_ROOT.'/views/layout.php';
}



