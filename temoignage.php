<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <title>Témoignage</title>
  <style>
    .menu img {
      display: block;
      margin: 10px;
      width: 100px;
      height: 50px;
    }

    .logo {
      float: left;
      margin-right: 10px;
    }
  </style>
  <div class="menu">
    <img src="logo.png" alt="Votre Logo" class="logo">
    <ul>
      <li><a href="index.php">Accueil</a></li>
      <li><a href="propos.php">À propos</a></li>
      <li><a href="galerie.php">Galerie/tarif</a></li>
      <li><a href="temoignage.php" style="color: yellow;">Témoignage</a></li>
      <li><a href="contact.php">Contact</a></li>
    
    
    </ul>
  </div>
</head>
<body>
<?php
  $videos = array("video1.mp4", "video2.mp4", "video3.mp4", "video4.mp4", "video5.mp4", "video6.mp4", "video7.mp4", "video8.mp4", "video9.mp4", "video10.mp4", "video11.mp4", "video12.mp4", "video13.mp4");

  echo "<div style='display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); grid-gap: 20px;'>";

  foreach($videos as $video) {
    echo "<div>";
    echo "<video width='360' height='300' controls>";
    echo "<source src='$video' type='video/mp4'>";
    echo "Votre navigateur ne supporte pas la lecture de vidéos au format MP4.";
    echo "</video>";
    echo "</div>";
  }

  echo "</div>";
?>
</video>
</body>
<footer>
        <ul>
            <li><a href="mention.php">Mentions légales</a></li>
            <li><a href="politique_confidentialite.php">Politique de confidentialité</a></li>
            <li><a href="conditions_ventes.php">Conditions de vente</a></li>
            <li><a href="connexion.php">Connexion</a></li>
            <p>Tous droits réservés.</p>
        </ul>
<footer>
</html>