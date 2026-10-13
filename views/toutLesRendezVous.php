<link rel="stylesheet" href="views/css/toutLesRendezVous.css" />
<link rel="stylesheet" href="views/css/style.css" />

    <main class="page">
      <div class="conteneur">
        <section class="contenu">
          <h1 class="titre">Tous les rendez-vous</h1>

          <div class="bloc">
            <div class="cartes">

              <?php foreach ($listrdv as $rdv): ?>
              <article class="carte">
                <h2>👤 <?= $rdv['nom'] . ' ' . $rdv['prenom']; ?></h2>
                <p>📅 <?= $rdv['date_heure'] ?> - <?= $rdv['nom_soins'] ?></p>
              </article>
              <?php endforeach; ?>
            </div>
          </div>
      
          <div class="actions"><a href="index.php?action=creerUnRendezVous" class="bouton">Créer un rendez-vous</a></div>
          <div class="actions">
            <a href="index.php?action=praticien" class="bouton">Retour au tableau de bord</a>
          </div>
        </section>
        <aside class="profil">
          <img
            class="photo-profil"
            src="views/images/profil.jpg"
            alt="Photo de profil"
          />
          <p class="nom">Philippe Février</p>
          <a href="index.php?action=praticien" class="bouton">Mon espace</a>
        </aside>
      </div>
    </main>

