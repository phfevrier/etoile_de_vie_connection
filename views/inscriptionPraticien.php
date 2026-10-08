<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>inscriptionPraticien</title>
    <link rel="stylesheet" href="../css/inscriptionPraticien.css" />
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
        <h1>Inscription praticien</h1>
        <form class="formulaire" data-demo>
          <label class="champ"
            >Nom<input type="text" name="nom" required /></label
          ><label class="champ"
            >Prénom<input type="text" name="prenom" required /></label
          ><label class="champ"
            >Email<input type="email" name="email" required /></label
          ><label class="champ"
            >Mot de passe<input type="password" name="mot_de_passe" required
          /></label>
          <div class="actions"><button class="bouton">S’inscrire</button></div>
        </form>
        <p class="note" data-message role="status">
          Maquette : la création de comptes praticiens reste à développer.
        </p>
        <a class="lien-compte">J’ai déjà un compte : me connecter</a>
      </section>
    </main>
    <footer class="pied">
      <p>À propos</p>
      <p>RGPD</p>
      <p>© 2026</p>
    </footer>
    <script src="../js/inscriptionPraticien.js" defer></script>
  </body>
</html>
