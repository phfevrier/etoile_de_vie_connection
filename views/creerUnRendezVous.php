<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>creerUnRendezVous</title>
    <link rel="stylesheet" href="../css/creerUnRendezVous.css" />
  </head>
  <body>
    <header class="entete">
      <nav class="menu">
        <a>Accueil</a><a>Rendez-vous</a><a>Patients</a><a>Catalogue des soins</a
        ><a>Suivi</a><a>Messages</a>
      </nav>
      <a class="connexion">Connexion</a>
    </header>
    <main class="page">
      <div class="conteneur">
        <section class="contenu">
          <h1 class="titre">Créer un rendez-vous</h1>
          <section class="bloc">
            <div class="jours">
              <button class="jour" type="button" data-jour="0">Lundi</button
              ><button class="jour" type="button" data-jour="1">Mardi</button
              ><button class="jour" type="button" data-jour="2">Mercredi</button
              ><button class="jour" type="button" data-jour="3">Jeudi</button
              ><button class="jour" type="button" data-jour="4">Vendredi</button
              ><button class="jour" type="button" data-jour="5">Samedi</button
              ><button class="jour" type="button" data-jour="6">
                Dimanche
              </button>
            </div>
            <form class="formulaire formulaire-rendezvous" data-rendezvous>
              <label class="champ"
                >Date<input type="date" name="date" required /></label
              ><label class="champ"
                >Patient<select name="patient" required>
                  <option value="">Choisir un patient</option>
                  <option>Nathalie Dulon</option>
                  <option>Pierre Blanc</option>
                  <option>Sophie Roland</option>
                  <option>Henri Vincent</option>
                  <option>Flora Rose</option>
                  <option>Jean Julien</option>
                  <option>Louis Bernard</option>
                  <option>André Pagel</option>
                  <option>Charles Moreau</option>
                  <option>Thomas Dubois</option>
                  <option>Bernard Belin</option>
                  <option>Franck Roger</option>
                </select></label
              ><label class="champ"
                >Soin<select name="soin" required>
                  <option value="">Choisir un soin</option>
                  <option>Reiki</option>
                  <option>Guérisseur de lumière</option>
                </select></label
              ><label class="champ"
                >Heure<input type="time" name="heure" required /></label
              ><button class="bouton">Vérifier le rendez-vous</button>
            </form>
            <p class="resume" data-resume role="status">
              Choisissez une date, un patient et un soin.
            </p>
            <p class="note">
              Démonstration du formulaire : le rendez-vous n’est pas enregistré
              dans la base.
            </p>
          </section>
          <div class="actions">
            <a class="bouton">Retour aux rendez-vous</a>
          </div>
        </section>
        <aside class="profil">
          <img
            class="photo-profil"
            src="../images/profil.jpg"
            alt="Photo de profil"
          />
          <p class="nom">Philippe Février</p>
          <a class="bouton">Mon espace</a>
        </aside>
      </div>
    </main>
    <footer class="pied">
      <p>À propos</p>
      <p>RGPD</p>
      <p>© 2026</p>
    </footer>
    <script src="../js/creerUnRendezVous.js" defer></script>
  </body>
</html>
