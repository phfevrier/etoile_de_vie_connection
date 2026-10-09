<link rel="stylesheet" href="views/css/login.css" />
<link rel="stylesheet" href="views/css/style.css" />

    <main class="page page-connexion">
      <section class="carte-connexion">
        <h1>Inscription patient</h1>
        <p class="note" data-message role="status"></p>
        <form class="formulaire" data-demo method="POST">
          <label class="champ"
            >Nom<input type="text" name="nom" required /></label
          ><label class="champ"
            >Prénom<input type="text" name="prenom" required /></label
          ><label class="champ"
            >Email<input type="email" name="email" required /></label
          ><label class="champ"
            >Mot de passe<input
              type="password"
              name="mot_de_passe"
              required /></label
          ><label class="champ"
            >Date de naissance<input
              type="date"
              name="date_naissance"
              required /></label
          ><input type="hidden" name="csrf" value="" />
          <div class="actions"><button class="bouton">S’inscrire</button></div>
        </form>
        <a class="lien-compte" href="?action=login">J’ai déjà un compte : me connecter</a>
      </section>
    </main>
  