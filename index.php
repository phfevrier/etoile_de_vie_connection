<?php


session_start();
//création de session 


require_once 'config.php';
require_once PATH_ROOT.'/controllers/home.php';
require_once PATH_ROOT.'/controllers/toutLesRendezVous.php';
require_once PATH_ROOT.'/controllers/patientSuivi.php';
require_once PATH_ROOT.'/controllers/catalogueDeSoins.php';
require_once PATH_ROOT.'/controllers/messages.php';
require_once PATH_ROOT.'/controllers/toutLesPatients.php';
require_once PATH_ROOT.'/controllers/praticien.php';
require_once PATH_ROOT.'/controllers/creerUnRendezVous.php';
require_once PATH_ROOT.'/controllers/soinGuérisseurDeLumière.php';
require_once PATH_ROOT.'/controllers/soinReiki.php';
// require_once PATH_ROOT.'/controllers/users.php';
require_once PATH_ROOT.'/controllers/login.php';
require_once PATH_ROOT.'/controllers/signin.php';
require_once PATH_ROOT.'/controllers/logout.php';
require_once PATH_ROOT.'/controllers/profile.php';

function isLogged() {
    return isset($_SESSION['user_id']);
}

function redirectionLogin() {
    if (!isLogged()) {
        header('Location: '. URL . '/?action=login');
        exit();
    }
}


$_SESSION['navbar'] = isLogged() ? 'navbarProfile.php' : 'navbarLogin.php';

$action = $_GET['action'] ?? 'home';
// routeur

if ($action === 'home') {
    homeAction();
} else if ($action === "login"){
    loginAction();
} else if ($action === "rdv"){
    toutLesRendezVousAction();
} else if ($action === "patientSuivi"){
    patientSuiviAction();
} else if ($action === "toutLesPatients"){
    toutLesPatientsAction();
} else if ($action === "catalogueDeSoins"){
    catalogueDeSoinsAction();
} else if ($action === "praticien"){
    praticienAction();
} else if ($action === "creerUnRendezVous"){
    creerUnRendezVousAction();
} else if ($action === "soinGuérisseurDeLumière"){
    soinGuérisseurDeLumièreAction();
} else if ($action === "soinReiki"){
    soinReikiAction();
// } else if ($action === "users"){
//     usersAction();  
} else if ($action === "signin"){
    signinAction();
} else if ($action === "logout"){
    logoutAction();
} else if ($action === "profile"){
    profileAction();
} else if ($action === "messages"){
    messagesAction();
}
 
 



