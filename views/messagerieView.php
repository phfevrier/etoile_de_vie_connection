<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>messagerie</title>
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
          <h1 class="titre">Messages</h1>
          <section class="bloc">
            <form class="formulaire" data-demo>
              <label class="champ"
                >Votre message<textarea
                  name="message"
                  required
                ></textarea></label
              ><button class="bouton">Envoyer</button>
            </form>
            <p class="note" data-message role="status">
              Maquette de messagerie : l’envoi reste à développer.
            </p>
          </section>
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
