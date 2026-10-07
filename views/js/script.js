// Indique la page actuelle dans le menu.
document.querySelectorAll('.menu a').forEach(lien => {
 if (lien.getAttribute('href') === window.location.search) lien.setAttribute('aria-current', 'page');
});
// Selection du jour dans le formulaire de rendez-vous.
document.querySelectorAll('[data-jour]').forEach(bouton => {
 bouton.addEventListener('click', () => {
  document.querySelectorAll('[data-jour]').forEach(jour => { jour.classList.remove('actif'); jour.setAttribute('aria-pressed', 'false'); });
  bouton.classList.add('actif'); bouton.setAttribute('aria-pressed', 'true');
  const date = document.querySelector('input[name="date"]');
  if (date) { const prochain = new Date(); const cible = (Number(bouton.dataset.jour) + 1) % 7; prochain.setDate(prochain.getDate() + (cible - prochain.getDay() + 7) % 7); date.value = prochain.getFullYear() + '-' + String(prochain.getMonth() + 1).padStart(2, '0') + '-' + String(prochain.getDate()).padStart(2, '0'); }
 });
});
const rendezvous = document.querySelector('[data-rendezvous]');
if (rendezvous) rendezvous.addEventListener('submit', evenement => {
 evenement.preventDefault();
 const champs = new FormData(rendezvous);
 document.querySelector('[data-resume]').textContent = 'Récapitulatif : ' + champs.get('patient') + ', ' + champs.get('soin') + ', le ' + champs.get('date') + ' à ' + champs.get('heure') + '. Démonstration : aucun enregistrement.';
});
// Les formulaires de maquette ne sont pas envoyes au serveur.
document.querySelectorAll('[data-demo]').forEach(formulaire => {
 formulaire.addEventListener('submit', evenement => {
  evenement.preventDefault();
  formulaire.parentElement.querySelector('[data-message]').textContent = 'Cette interface est une démonstration. L’enregistrement ou l’envoi reste à développer.';
 });
});
