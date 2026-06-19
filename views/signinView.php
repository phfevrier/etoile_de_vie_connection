



<h1>Créer un compte</h1>
<p> <?= $msg ?> </p>

<form method="POST">

        <label>Nom :</label><br>
        <input type="text" name="nom" required><br><br>

        <label>Prenom :</label><br>
        <input type="text" name="prenom" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Mot de passe :</label><br>
        <input type="password" name="mot_de_passe" required><br><br>
    
        <label>Date de naissance :</label><br>
        <input type="date" name="date_naissance" required><br><br>
    
        <input type="submit" value= "s'inscrire">
    </form>
    <br>
    <a href="?action=login">J'ai déja un compte</a>


