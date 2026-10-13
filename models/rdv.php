 <?php
 require_once PATH_ROOT.'/models/sql_connection.php';


function get_all_rdv() {
    $rdvs = null;
    open_connection();

// je sélectionne les rendez-vous avec le nom et prénom du patient, la date et l'heure du rendez-vous, 
// ainsi que le nom du soin
    $sql = "SELECT p.nom, p.prenom, r.date_heure, c.nom_soins 
    
-- je part de la table Rendez_vous_patients, je fais une jointure avec la table categorie_soins pour récupérer le nom du soin,
-- et une jointure avec la table Patients_utilisateurs pour récupérer le nom et prénom du patient
            FROM Rendez_vous_patients r
            INNER JOIN categorie_soins c
            ON r.id_categorie = c.id_categorie
            INNER JOIN Patients_utilisateurs p
            ON r.id_patients = p.id_patient
        ;";

    $stmt = mysqli_prepare($GLOBALS['connection'] , $sql);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    $rdv = null;
    
    while($rdv = mysqli_fetch_assoc($result)) {
        $rdvs[]= $rdv;
    }

    close_connection();

    return $rdvs;
}
