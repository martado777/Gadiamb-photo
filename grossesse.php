<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="stylesgg.css">
  <title>Galerie Grossesse</title>
  
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
</head>
<body>
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
    /* Ajoute un peu de style au bouton */
    #monBouton {
      padding: 30px 40px;
      font-size: 16px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <h1>Je m'appelle Stéphane, papa de deux garçons.
     C’est pour cela que je sais à quel point garder une trace de tous ces souvenirs est important et que je met autant de cœur à créer les votre à travers mon appareil photo.</h1>
  <button id="<link>monBouton</link>">voir les tarifs</button>

  <script>
    document.getElementById('<link>monBouton</link>').addEventListener('click', function() {
      window.scrollTo(0, document.body.scrollHeight);
    });
  </script>

<div class="image-grid">
      <img src="image1G.jpg" alt="Image 1">
      <img src="image2G.jpg" alt="Image 2">
      <img src="image3G.jpg" alt="Image 3">
      <img src="image4G.jpg" alt="Image 4">
      <img src="image5G.jpg" alt="Image 5">
      <img src="image6G.jpg" alt="Image 6">
      <img src="image7G.jpg" alt="Image 7">
      <img src="image8G.jpg" alt="Image 8">
      <img src="image9G.jpg" alt="Image 9">
      <img src="image10G.jpg" alt="Image 10">
      <img src="image11G.jpg" alt="Image 11">
      <img src="image12G.jpg" alt="Image 12">
      <img src="image13G.jpg" alt="Image 13">
      <img src="image14G.jpg" alt="Image 14">
      <img src="image15G.jpg" alt="Image 15">
      
    </div>
    <div class="cadre">
    <p>Texte à l'intérieur du cadre</p>
  </div>
</body>
</html>