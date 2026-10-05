        <header>
            <!-- En-tête du site --> 

            <nav class="menu">
                <!-- Menu de navigation -->

                <a href="#">Accueil</a>
                <!-- Lien vers la section Accueil -->

                <a href="#">Rendez-vous</a>
                <!-- Lien vers la section rendez-vous -->

                <a href="#">Soins</a>
                <!-- Lien vers la section soins -->

                <a href="#">Messages</a>
                <!-- Lien vers les messages -->

                <a href="#">Catalogue des soins</a>
                <!-- Lien vers le catalogue -->
            </nav>

            <a class="connexion" href="/?action=login">
                <?php
                if (isLogged()) {
                    echo 'deconnection';
                } else {
                    echo 'connection';
                };
                ?>
            </a>
            <!-- Bouton pour se déconnecter -->
        </header>