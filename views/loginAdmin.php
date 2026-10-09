<link rel="stylesheet" href="views/css/loginAdmin.css" />
<link rel="stylesheet" href="views/css/style.css" />

   
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
        <a class="lien-compte">Connexion praticien</a>
        <a class="lien-compte">Créer un compte patient</a>
        <a class="lien-compte">Créer un compte praticien</a>
      </section>
    </main>
