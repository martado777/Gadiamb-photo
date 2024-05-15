<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="stylescontact.css">
  <title>Contact</title>
  <div class="menu">
    <ul>
      <li><a href="index.php">Accueil</a></li>
      <li><a href="propos.php">À propos</a></li>
      <li><a href="galerie.php">Galerie / Tarif</a></li>
      <li><a href="temoignage.php">Témoignage</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
  </div>
</head>
<body>
<?php
// Se connecter à la base de données (remplacez les valeurs par les vôtres)
$serveur = "mysql-gadiamb-photo.alwaysdata.net";
$utilisateur = "350888";
$mot_de_passe = "Abcd_1234";
$base_de_donnees = "gadiamb-photo_data";

$connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

// Vérifier la connexion
if ($connexion->connect_error) {
    die("La connexion à la base de données a échoué : " . $connexion->connect_error);
}

// Récupérer les données du formulaire
$Nom = $_POST['Nom'];
$Prénom = $_POST['Prénom'];
$num = $_POST['num'];
$mail = $_POST['mail'];
$maListe = $_POST['ma_liste'];

// Préparer la requête d'insertion
$requete = $connexion->prepare("INSERT INTO clients (Nom, Prénom, num, mail, ma_liste) VALUES (?, ?, ?, ?, ?)");
$requete->bind_param("sssss", $Nom, $Prénom, $num, $mail, $maListe);

// Exécuter la requête
if ($requete->execute()) {
    echo "Les données ont été enregistrées avec succès.";
} else {
    echo "Erreur lors de l'enregistrement des données : " . $requete->error;
}

// Fermer la connexion à la base de données
$connexion->close();
?>
</body>
</html>