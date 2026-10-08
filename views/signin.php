<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>login</title>
    <link rel="stylesheet" href="../css/login.css" />
  </head>
  <body>
    <header class="entete">
      <nav class="menu">
        <a>Accueil</a><a>Rendez-vous</a><a>Patients</a><a>Catalogue des soins</a
        ><a>Suivi</a><a>Messages</a>
      </nav>
      <a class="connexion">Connexion</a>
    </header>
    <main class="page page-connexion">
      <section class="carte-connexion">
        <h1>Connexion</h1>
        <p class="note" data-message role="status"></p>
        <form class="formulaire" data-demo>
          <label class="champ"
            >Email<input type="email" name="email" required /></label
          ><label class="champ"
            >Mot de passe<input
              type="password"
              name="mot_de_passe"
              required /></label
          ><input type="hidden" name="csrf" value="" />
          <div class="actions">
            <button class="bouton">Se connecter</button>
          </div>
        </form>
        <a class="lien-compte">Connexion praticien</a
        ><a class="lien-compte">Créer un compte patient</a
        ><a class="lien-compte">Créer un compte praticien</a>
      </section>
    </main>
    <footer class="pied">
      <p>À propos</p>
      <p>RGPD</p>
      <p>© 2026</p>
    </footer>
    <script src="../js/login.js" defer></script>
  </body>
</html>
