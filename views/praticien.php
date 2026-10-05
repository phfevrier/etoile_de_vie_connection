


            <main class="dashboard">
            <!-- Contenu principal du tableau de bord -->
           

            <section class="contenu">
                <!-- Zone principale du contenu -->

                <h1>Espace praticien</h1>
                <!-- Titre principal -->

                <section class="cartes">
                    <!-- Conteneur des cartes -->

                    <article class="bloc">
                        <!-- Bloc des rendez-vous -->

                        <h2>Rendez-vous à venir</h2>
                        <!-- Titre du bloc -->

                        <article class="card nouveauMessage">
                            <!-- Carte de rendez-vous (nouveau message = mise en avant) -->

                            <h3>Rendez-vous</h3>
                            <!-- Titre de la carte -->

                            <p><span>🧒</span> Jean Dupuis</p>
                            <!-- Nom du patient avec icône -->

                            <p><span>📅</span> <time>05/01/26 à 16h30</time></p>
                            <!-- Date et heure du rendez-vous -->
                        </article>

                        <article class="card">
                            <!-- Rendez-vous important -->

                            <h3>Rendez-vous</h3>
                            <p><span>👦</span> Pierre Dupont</p>
                            <p><span>📅</span> <time>12/02/26 à 10h25</time></p>
                        </article>

                        <article class="card nouveauMessage">
                            <!-- Autre rendez vous -->

                            <h3>Rendez-vous</h3>
                            <p><span>👧</span> Sophie Blanc</p>
                            <p><span>📅</span> <time>09/03/26 à 09h15</time></p>
                        </article>

                        <a class="bouton" href="#">
                            <!-- Bouton lien -->

                            Tous les rendez-vous
                        </a>
                    </article>

                    <article class="bloc">
                        <!-- Bloc des messages -->

                        <h2>Messages en attente</h2>
                        <!-- Titre du bloc -->

                        <article class="card nouveauMessage">
                            <!-- Message non lu -->

                            <h3>Nouveau message</h3>
                            <p><span>👩</span> Nathalie Dulon</p>
                            <p><span>📅</span> <time>16/05/26 à 17h00</time></p>
                        </article>

                        <article class="card">
                            <!-- Message normal -->

                            <h3>Nouveau message</h3>
                            <p><span>🧔</span> Henri Durand</p>
                            <p><span>📅</span> <time>16/05/26 à 14h20</time></p>
                        </article>

                        <article class="card nouveauMessage">
                            <!-- Message important -->

                            <h3>Nouveau message</h3>
                            <p><span>👩‍🦰</span> Karine Steph</p>
                            <p><span>📅</span> <time>22/05/26 à 08h30</time></p>
                        </article>

                        <a class="bouton" href="#">
                            <!-- Bouton vers tous les messages -->

                            Tous les messages
                        </a>
                    </article>
                </section>
            </section>

            <aside>
                <!-- Barre latérale (profil utilisateur) -->

                <img src="./images/profil.jpg" alt="Photo de profil" />
                <!-- Photo de profil -->

                <p class="nom">
                    <!-- Nom du praticien -->

                    Philippe Février
                    <span>✏️</span>
                    <!-- Icône pour modifier -->
                </p>

                <button>Définir un rendez-vous</button>
                <!-- Bouton pour créer un rendez-vous -->
            </aside>
        </main>

    
        <script src="js/script.js"></script>
        <!-- Lien vers le fichier JavaScript -->
    </body>
</html