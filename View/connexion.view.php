<div id="containerConnexion">
    <form action="../assets/php/inscription.php" method="POST">
        <label>Inscription</label>
        <input type="text" name="name" placeholder="Pseudo">
        <input type="password" name="password" id="pass" placeholder="Mot de passe">
        <input type="submit" value="S'inscrire">
    </form>
    <form action="../assets/php/connexion.php" method="GET">
        <label>Connexion</label>
        <input type="text" name="name" placeholder="Pseudo">
        <input type="password" name="password" id="password" placeholder="Mot de passe">
        <input type="submit" value="Se connecter">
    </form>
</div>