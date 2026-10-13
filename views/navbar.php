         <header class="entete">
            <!-- En-tête du site --> 

            <nav class="menu">
                <!-- Menu de navigation -->

                <a href="?action=home">Accueil</a>
                <!-- Lien vers la section Accueil -->

                <a href="?action=rdv">Rendez-vous</a>
                <!-- Lien vers la section rendez-vous -->

                   <a href="?action=toutLesPatients">Patients</a>
                <!-- Lien vers la section rendez-vous -->

                <a href="?action=catalogueDeSoins">Catalogue des soins</a>
                <!-- Lien vers le catalogue -->

                <a href="?action=patientSuivi">patients suivis</a>
                <!-- Lien vers la section suivi-->

                <a href="?action=messages">Messages</a>
                <!-- Lien vers les messages -->
            </nav>

          <!--   la fonction isLogged() vérifie si l'utilisateur est connecté en vérifiant si la variable de session 'user_id' est définie.
            Si elle est définie, cela signifie que l'utilisateur est connecté et la fonction retourne true, sinon elle retourne false. -->
                <?php
                if (isLogged()) {
                    echo '<a class="connexion" href="?action=logout">déconnexion</a>';
                } else {
                    echo '<a class="connexion" href="?action=login">connexion</a>';
                }
                ?>
            
            <!-- Bouton pour se déconnecter -->
        </header>