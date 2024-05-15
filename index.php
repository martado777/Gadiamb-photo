<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <title>Accueil</title>
  <style>
  .bouton-images img {
            width: 450px; /* Ajustez la taille des images */
            height: 550px; /* Ajustez la taille des images */
            margin: 0 2px;
            cursor: pointer;
        }
        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            background-color: green;
            padding: 10px;
            text-align: center; 
            margin-top: -50px; /* Hauteur de la barre en négatif pour compenser */
        }
        .footer ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .footer ul li {
            display: inline;
            margin-right: 20px;
        }
    </style>
</head>

<body>
    <div class="menu">
        <img src="logo.png" alt="Votre Logo" class="logo">
        <ul>
            <li><a href="#" style="color: yellow;">Accueil</a></li>
            <li><a href="propos.php">À propos</a></li>
            <li><a href="galerie.php">Galerie/tarif</a></li>
            <li><a href="temoignage.php">Témoignage</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </div>
    <img src="photoentré.jpg" alt="photo d'Accueil" width="100%" height="100%">
    <div class="bouton-images">
        <a href="propos.php"><img src="solo.jpg" alt="Bouton 1"></a>
        <a href="galerie.php"><img src="couple.jpg" alt="Bouton 2"></a>
        <a href="témoignage.php"><img src="grossesse.jpg" alt="Bouton 3"></a>
        <a href="contact.php"><img src="événement.jpg" alt="Bouton 4"></a>
    </div>
    
</body>
<footer>
        <ul>
            <li><a href="mention.php">Mentions légales</a></li>
            <li><a href="politique_confidentialite.php">Politique de confidentialité</a></li>
            <li><a href="connexion.php">Connexion</a></li>
            <p>Tous droits réservés.</p>
        </ul>
<footer>
</html>