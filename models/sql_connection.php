
<?php

$GLOBALS['connection'] = null;

// la fonction open_connection permet d'ouvrir une connexion à la base de données. Elle vérifie si la connexion est déjà ouverte, sinon elle crée une nouvelle connexion en utilisant les informations de connexion (nom du serveur, nom d'utilisateur, mot de passe et nom de la base de données). Si la connexion échoue, elle affiche un message d'erreur et arrête l'exécution du script. La fonction close_connection permet de fermer la connexion à la base de données si elle est ouverte.
function open_connection() {
    if (! $GLOBALS['connection']  ) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "Etoile_de_vie";
        //mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $GLOBALS['connection']  = mysqli_connect($servername, $username, $password, $dbname);
        if (!$GLOBALS['connection'] ) {
            exit("Connexion failed: " . mysqli_connect_error());
        }
    }
}

function close_connection() {
    if ($GLOBALS['connection'] ) {
        mysqli_close($GLOBALS['connection'] );
    }
    $GLOBALS['connection']  = null;
}
