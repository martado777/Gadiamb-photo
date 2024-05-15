<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesconnexion.css">
    <title>Page de connexion</title>
</head>
<body>
<h2>Connexion</h2>

<form action="verify_login.php" method="post">
    <div>
        <label for="nom_utilisateur">Nom d'utilisateur :</label>
        <input type="text" id="username" name="username" required>
    </div>
    <div>
        <label for="mot_de_passe">Mot de passe :</label>
        <input type="password" id="password" name="password" required>
    </div>
    <div>
        <input type="submit" value="Se connecter">
    </div>
</form>

</body>
</html>
