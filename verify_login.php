<?php
// Connexion à la base de données
$connexion = new mysqli('mysql-gadiamb-photo.alwaysdata.net', '350888', 'Abcd_1234', 'gadiamb-photo_data');

// Vérification de la connexion
if ($connexion->connect_error) {
    die("La connexion à la base de données a échoué : " . $connexion->connect_error);
}

// Récupération des données du formulaire de connexion
$nomUtilisateur = $_POST['username'];
$motDePasse = $_POST['password'];

// Requête pour récupérer le mot de passe crypté associé à l'utilisateur spécifié
$requete = "SELECT password FROM connexion WHERE username = '$nomUtilisateur'";
$resultat = $connexion->query($requete);

if ($resultat->num_rows > 0) {
    // Récupération du mot de passe crypté depuis le résultat de la requête
    $ligne = $resultat->fetch_assoc();
    $motDePasseCrypte = $ligne['password'];

    // Vérification du mot de passe saisi avec le mot de passe crypté
    if (password_verify($motDePasse, $motDePasseCrypte)) {
        // Authentification réussie
        header('Location: liste.php');
    } else {
        // Mauvais mot de passe
        echo "Mot de passe incorrect. Veuillez réessayer.";
    }
} else {
    // Utilisateur non trouvé
    echo "Nom d'utilisateur incorrect. Veuillez réessayer.";
}

// Fermeture de la connexion à la base de données
$connexion->close();
?>