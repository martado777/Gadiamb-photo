<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="stylescontact.css">
  <title>Contact</title>
  <div class="menu">
    <img src="logo.png" alt="Votre Logo" class="logo">
    <ul>
      <li><a href="index.php">Accueil</a></li>
      <li><a href="propos.php">À propos</a></li>
      <li><a href="galerie.php">Galerie / Tarif</a></li>
      <li><a href="temoignage.php">Témoignage</a></li>
      <li><a href="contact.php" style="color: yellow;">Contact</a></li>
    </ul>
  </div>
</head>
<body>
  <style>
    /* CSS pour changer la couleur du bouton en jaune */
    .bouton-enregistrer {
      background-color: yellow;
      border: none;
      color: black;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
    }
    .menu img {
    display: block;
    margin: 10px;
    width: 100px;
    height: 50px;
    }


  </style>
<div class="container">
  <div class="left-column">
    <p>N’hésitez pas à me contacter pour que je puisse répondre à vos questions et que nous organisions ensemble un shooting photo.(Veuillez donner toutes vos informations s'il vous plaît.)</p>
  </div>
  <div class="right-column">
    <form action="enregistrer.php" method="post">
  <input type="text" name="Nom" placeholder="Nom">
  <input type="text" name="Prénom" placeholder="Prénom">
  <input type="text" name="num" placeholder="Numéro de téléphone">
  <input type="text" name="mail" placeholder="adresse email">
  <select name="ma_liste">
    <option value="choix">Quel type de shooting vous intéresse ?</option>
    <option value="Solo">Solo</option>
    <option value="Evénement">Evénement</option>
    <option value="Grossesse">Grossesse</option>
    <option value="Couple/famille">Couple / famille</option>
  </select>
  <button type="submit" class="bouton-enregistrer">Enregistrer</button>
</form>
  </div>
</div>
<div class="container2">
  <div class="texteGauche">
    <p class="agrandi">Ou alors contacter moi sur les réseaux sociaux.</p>
  </div>
  <div class="liensDroite">
    <a href="https://www.instagram.com/gadiambphoto_974/?hl=fr"><img src="logoinsta.png" alt="Image 1" width="80" height="80"></a>
    <a href="https://www.facebook.com/gadiambphoto974"><img src="logofb.png" alt="Image 2" width="80" height="80"></a>
  </div>
</div>
</body>
</style>
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