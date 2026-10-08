 <?php
 require_once PATH_ROOT.'/models/sql_connection.php';


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
