        <header>
            <!-- En-tête du site -->

            <nav class="menu">
                <!-- Menu de navigation -->

                <a href="?action=home">Accueil</a>
                <!-- Lien vers la section Accueil -->

                <a href="#">Rendez-vous</a>
                <!-- Lien vers la section rendez-vous -->

                <a href="#">Soins</a>
                <!-- Lien vers la section soins -->

                <a href="#">Messages</a>
                <!-- Lien vers les messages -->

                <a href="#">Patients</a>
                <!-- Lien vers les Patients -->

                <a href="#">Suivi</a>

                <a href="#">Catalogue des soins</a>
                <!-- Lien vers le catalogue -->
            </nav>


            <?php
            if (isLogged()) {
                echo '<a class="connexion" href="?action=logout">Déconnectez-vous</a>';
            } else {
                echo '<a class="connexion" href="?action=login">Connectez-vous</a>';
            };
            ?>

            <!-- Bouton pour se déconnecter -->
        </header>

