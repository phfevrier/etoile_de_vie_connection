<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>users</title>
    <link rel="stylesheet" href="../css/commun.css" />
    <link rel="stylesheet" href="../css/accueil.css" />
    <link rel="stylesheet" href="../css/connexion.css" />
    <link rel="stylesheet" href="../css/soins.css" />
    <link rel="stylesheet" href="../css/rendezvous.css" />
  </head>
  <body>
    <header class="entete">
      <nav class="menu">
        <a href="accueil.html">Accueil</a
        ><a href="toutLesRendezVous.html">Rendez-vous</a
        ><a href="toutLesPatients.html">Patients</a
        ><a href="catalogueDeSoins.html">Catalogue des soins</a
        ><a href="patientSuivi.html">Suivi</a
        ><a href="messagerie.html">Messages</a>
      </nav>
      <a class="connexion" href="login.html">Connexion</a>
    </header>
    <main class="page">
      <div class="conteneur">
        <section class="contenu">
          <h1 class="titre">Mon espace patient</h1>
          <div class="bloc">
            <h2>Rendez-vous</h2>
            <div class="cartes">
              <article class="carte">
                <h3>Rendez-vous</h3>
                <p>👤 Nathalie Dulon</p>
                <p>📅 01/11/2026 à 10h00</p>
              </article>
              <article class="carte">
                <h3>Rendez-vous</h3>
                <p>👤 Pierre Blanc</p>
                <p>📅 02/11/2026 à 10h00</p>
              </article>
              <article class="carte">
                <h3>Rendez-vous</h3>
                <p>👤 Sophie Roland</p>
                <p>📅 03/11/2026 à 10h00</p>
              </article>
            </div>
          </div>
          <div class="actions">
            <a class="bouton" href="toutLesRendezVous.html"
              >Tous les rendez-vous</a
            >
          </div>
          <div class="bloc">
            <h2>Soins en cours</h2>
            <div class="cartes">
              <article class="carte">
                <h3>Guérisseur de lumière</h3>
                <p>Consulter le détail du soin.</p>
              </article>
              <article class="carte">
                <h3>Reiki</h3>
                <p>Consulter le détail du soin.</p>
              </article>
            </div>
          </div>
          <div class="actions">
            <a class="bouton" href="patientSuivi.html">Suivi des soins</a>
          </div>
          <p class="note">
            Exemples de la maquette : ces informations ne sont pas encore
            reliées à la base de données.
          </p>
        </section>
        <aside class="profil">
          <img
            class="photo-profil"
            src="../images/profil.jpg"
            alt="Photo de profil"
          />
          <p class="nom">Philippe Février</p>
          <a class="bouton" href="praticien.html">Mon espace</a>
        </aside>
      </div>
    </main>
    <footer class="pied">
      <p>À propos</p>
      <p>RGPD</p>
      <p>© 2026</p>
    </footer>
    <script src="../js/script.js" defer></script>
  </body>
</html>
