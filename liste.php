<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Réservation</title>
</head>
<style>
    table, th, td {
    border: 1px solid;
  }
    </style>
<body>
  <h1>Réservation :</h1>
  <table>
    <tr>
      <th>Nom</th>
      <th>Prénom</th>
      <th>Numéro de téléphone</th>
      <th>Email</th>
      <th>Type de shooting</th>
    </tr>
    <?php
    // Connexion à la base de données Adminer
    $serveur = "mysql-gadiamb-photo.alwaysdata.net";
    $utilisateur = "350888";
    $mot_de_passe = "Abcd_1234";
    $base_de_donnees = "gadiamb-photo_data";
    $connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

    // Vérifier la connexion
    if ($connexion->connect_error) {
        die('La connexion à la base de données a échoué : ' . $connexion->connect_error);
    }

    // Récupérer les données de la base de données
    $resultat = $connexion->query("SELECT Nom, Prénom, num, mail, ma_liste FROM clients");
    if ($resultat->num_rows > 0) {
        // Afficher les données dans un tableau
        while($row = $resultat->fetch_assoc()) {
            echo "<tr><td>" . $row["Nom"] . "</td><td>" . $row["Prénom"] . "</td><td>" . $row["num"] . "</td><td>" . $row["mail"] . "</td><td>" . $row["ma_liste"] . "</td></tr>" ;
        }
    } else {
        echo "0 résultats";
    }
    $connexion->close();
    ?>
  </table>
</body>
</html