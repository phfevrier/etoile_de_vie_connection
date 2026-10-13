// Selection du jour dans le formulaire de rendez-vous.


// Les formulaires de maquette ne sont pas envoyes au serveur.
document.querySelectorAll("[data-jour]").forEach((bouton) => {
  bouton.addEventListener("click", () => {
    document.querySelectorAll("[data-jour]").forEach((jour) => {
      jour.classList.remove("actif");
      jour.setAttribute("aria-pressed", "false");
    });
    bouton.classList.add("actif");
    bouton.setAttribute("aria-pressed", "true");
    // Mise à jour du champ date en fonction du jour sélectionné
    const date = document.querySelector('input[name="date"]');
    if (date) {
      const prochain = new Date();
      const cible = (Number(bouton.dataset.jour) + 1) % 7;
      prochain.setDate(
        prochain.getDate() + ((cible - prochain.getDay() + 7) % 7),
      );
      date.value =
        prochain.getFullYear() +
        "-" +
        String(prochain.getMonth() + 1).padStart(2, "0") +
        "-" +
        String(prochain.getDate()).padStart(2, "0");
    }
  });
});

// recapitulatif du rendez-vous
const rendezvous = document.querySelector("[data-rendezvous]");
if (rendezvous)
  rendezvous.addEventListener("submit", (evenement) => {
    evenement.preventDefault();
    const champs = new FormData(rendezvous);
    document.querySelector("[data-resume]").textContent =
      "Récapitulatif : " +
      champs.get("patient") +
      ", " +
      champs.get("soin") +
      ", le " +
      champs.get("date") +
      " à " +
      champs.get("heure") +
      ". aucun enregistrement.";
  });
