 <?php
 require_once PATH_ROOT.'/models/sql_connection.php';

// la fonction set_user permet d'ajouter un utilisateur patient dans la base de données. Elle prend en paramètre le nom, le prénom, l'email, le mot de passe hashé et la date de naissance de l'utilisateur. Elle ouvre une connexion à la base de données, prépare une requête SQL pour insérer les informations de l'utilisateur dans la table Patients_utilisateurs, exécute la requête et ferme la connexion. Elle retourne true si l'insertion a réussi, false sinon.
function set_user($nom, $prenom, $email, $hash, $date_naissance) {

    open_connection();

    $sql = "INSERT INTO Patients_utilisateurs (nom, prenom, email, mot_de_passe, date_naissance) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($GLOBALS['connection'], $sql);

    // "ssss" signifie quatre paramètres de type string
    mysqli_stmt_bind_param($stmt, "sssss", $nom, $prenom, $email, $hash, $date_naissance);

    $result = mysqli_stmt_execute($stmt);
    close_connection();
    return $result;
}
// la fonction set_user_admin permet d'ajouter un utilisateur administrateur dans la base de données. Elle prend en paramètre le nom, le prénom, l'email et le mot de passe hashé de l'utilisateur. Elle ouvre une connexion à la base de données, prépare une requête SQL pour insérer les informations de l'utilisateur dans la table Praticiens_administrateurs, exécute la requête et ferme la connexion. Elle retourne true si l'insertion a réussi, false sinon.
function set_user_admin($nom, $prenom, $email, $hash) {

    open_connection();

    $sql = "INSERT INTO Praticiens_administrateurs (nom, prenom, email, mot_de_passe) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($GLOBALS['connection'], $sql);

    // "ssss" signifie quatre paramètres de type string
    mysqli_stmt_bind_param($stmt, "ssss", $nom, $prenom, $email, $hash);

    $result = mysqli_stmt_execute($stmt);
    close_connection();
    return $result;
}

// la fonction get_user_by_email permet de récupérer les informations d'un utilisateur à partir de son email. Elle prend en paramètre l'email de l'utilisateur, ouvre une connexion à la base de données, prépare une requête SQL pour sélectionner l'id, l'email et le mot de passe hashé de l'utilisateur dans la table Patients_utilisateurs, exécute la requête et récupère le résultat. Si un utilisateur est trouvé, elle retourne un tableau associatif contenant les informations de l'utilisateur, sinon elle retourne null.   
function get_user_by_email($email) {
    $user = null;
    open_connection();

    $sql = "SELECT id_patient, email, mot_de_passe FROM Patients_utilisateurs WHERE email = ?";

    $stmt = mysqli_prepare($GLOBALS['connection'] , $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if ( mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
    }

    close_connection();

    return $user;
}

// la fonction get_all_patients permet de récupérer tous les patients de la base de données. Elle ouvre une connexion à la base de données, prépare une requête SQL pour sélectionner le nom, le prénom et l'email de tous les patients dans la table Patients_utilisateurs, exécute la requête et récupère le résultat. Elle parcourt ensuite les résultats et les stocke dans un tableau associatif. Enfin, elle ferme la connexion et retourne le tableau contenant tous les patients.
function get_all_patients() {
    $users = null;
    open_connection();

    $sql = "SELECT nom, prenom, email FROM Patients_utilisateurs";

    $stmt = mysqli_prepare($GLOBALS['connection'] , $sql);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    $user = null;
    
    while($user = mysqli_fetch_assoc($result)) {
        $users[]= $user;
    }

    close_connection();

    return $users;
}

// la fonction get_admin_by_email permet de récupérer les informations d'un utilisateur administrateur à partir de son email. Elle prend en paramètre l'email de l'utilisateur, ouvre une connexion à la base de données, prépare une requête SQL pour sélectionner l'id, l'email et le mot de passe hashé de l'utilisateur dans la table Praticiens_administrateurs, exécute la requête et récupère le résultat. Si un utilisateur est trouvé, elle retourne un tableau associatif contenant les informations de l'utilisateur, sinon elle retourne null.
function get_admin_by_email($email) {
    $user = null;
    open_connection();

    $sql = "SELECT id_praticien, email, mot_de_passe FROM Praticiens_administrateurs WHERE email = ?";

    $stmt = mysqli_prepare($GLOBALS['connection'] , $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if ( mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
    }

    close_connection();

    return $user;
}
