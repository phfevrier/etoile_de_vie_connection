


<h1><?= $connection_title ?></h1>
<p> <?= htmlspecialchars($error_msg) ?> </p>

<form method="POST">

    <label>Email :</label><br>
    <input type="email" name="email" required><br><br>

    <label>Mot de passe :</label><br>
    <input type="password" name="mot_de_passe" required><br><br>
    
    <input type="submit" value= "se connecter">
</form>
<br>
<a href="?action=signin">Créer un compte</a>
