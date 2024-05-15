<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <title>Galerie/tarif</title>
  <style>
    @media only screen and (max-width: 375px) {
  .bouton-images img {
    width: 225px; /* Réduisez la largeur de moitié pour les écrans de taille téléphone */
    height: 275px; /* Réduisez la hauteur de moitié pour les écrans de taille téléphone */
  }
  .menu img {
    width: 50px; /* Réduisez la largeur de moitié pour les écrans de taille téléphone */
    height: 25px; /* Réduisez la hauteur de moitié pour les écrans de taille téléphone */
  }
}
    .menu {
      text-align: right;
    }
    .texte-au-milieu {
      text-align: center;
      font-size: 24px;
    }
    .bouton-images {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 20px;
    }
    .bouton-images img {
      width: 450px; /* Ajustez la taille des images */
      height: 550px; /* Ajustez la taille des images */
      margin: 0 10px;
      cursor: pointer;
    }
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
</head>
<body>
  <div class="menu">
    <img src="logo.png" alt="Votre Logo" class="logo">
    <ul>
      <li><a href="index.php">Accueil</a></li>
      <li><a href="propos.php">À propos</a></li>
      <li><a href="galerie.php" style="color: yellow;">Galerie/tarif</a></li>
      <li><a href="temoignage.php">Témoignage</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
  </div>
  <div class="texte-au-milieu">
    <p>Quelle galerie voullez vous voir?</p>
    </div>
  <div class="bouton-images">
    <a href="solo.php"><img src="solo.jpg" alt="Bouton 1"></a>
    <a href="couple.php"><img src="couple.jpg" alt="Bouton 2"></a>
    <a href="grossesse.php"><img src="grossesse.jpg" alt="Bouton 3"></a>
    <a href="événement.php"><img src="événement.jpg" alt="Bouton 4"></a>
  </div>
</body>
</html>