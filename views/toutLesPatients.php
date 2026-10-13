<link rel="stylesheet" href="views/css/toutLesPatients.css" />
<link rel="stylesheet" href="views/css/style.css" />

    <main class="page">
      <div class="conteneur">
        <section class="contenu">
          <h1 class="titre">Tous les patients</h1>

          <div class="bloc">
            <div class="cartes">
              <!-- la fonction php foreach permet de parcourir la liste des patients -->
              <?php foreach ($listPatients as $patient): ?>
              <a class="carte"
                ><h2>👤 <?= $patient['nom'] . ' ' . $patient['prenom']; ?></h2>
                <p>Fiche patient</p>
              </a> 
              <?php endforeach; ?>
              
              
            </div>
          </div>
     
          <div class="actions">
            <a href="index.php?action=praticien" class="bouton">Retour au tableau de bord</a>
          </div>
        </section>
        <aside class="profil">
          <img
            class="photo-profil"
              src="views/images/profil.jpg"
            alt="Photo de profil"/>
      
          <p class="nom">Philippe Février</p>
          <a href="index.php?action=praticien" class="bouton">Mon espace</a>
        </aside>
      </div>
    </main>

