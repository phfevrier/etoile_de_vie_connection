<?php

session_start();
// création de session 

require_once 'config.php';
require_once PATH_ROOT.'/controllers/home.php';
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
    loginAction(false);
} else if ($action === "loginAdmin"){
    loginAction(true);
} else if ($action === "signin"){
    signinAction();
} else if ($action === "logout"){
    logoutAction();
} else if ($action === "profile"){
    profileAction();
} else if ($action === "conversations"){
    conversationsAction();
} else if ($action === "messagerie"){
    messagerieAction();
}
 
 

