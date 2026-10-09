         <header class="entete">
            <!-- En-tête du site --> 

            <nav class="menu">
                <!-- Menu de navigation -->

                <a href="#">Accueil</a>
                <!-- Lien vers la section Accueil -->

                <a href="#">Rendez-vous</a>
                <!-- Lien vers la section rendez-vous -->

                <a href="#">Patients</a>
                <!-- Lien vers la section soins -->

                <a href="#">Catalogue des soins</a>
                <!-- Lien vers les messages -->

                    <a href="#">Suivi</a>
                <!-- Lien vers la section suivi-->

                <a href="#">Messages</a>
                <!-- Lien vers le catalogue -->
            </nav>

                <?php
                if (isLogged()) {
                    echo '<a class="deconnexion" href="?action=logout">déconnexion</a>';
                } else {
                    echo '<a class="connexion" href="?action=login">connexion</a>';
                }
                ?>
            
            <!-- Bouton pour se déconnecter -->
        </header>