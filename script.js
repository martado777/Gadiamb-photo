function submitForm() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    // Ici, vous pouvez ajouter la logique pour envoyer les informations de connexion au serveur pour vérification.
    // Vous devrez également gérer la réponse du serveur pour afficher un message d'erreur en cas d'échec de connexion.

    // Exemple de validation côté client (ne pas utiliser en production) :
    if (username === 'utilisateur' && password === 'motdepasse') {
        alert('Connexion réussie !');
        window.location.href = "liste.php";
        // Redirection vers la page sécurisée ou création de session ici
    } else {
        alert('Nom d\'utilisateur ou mot de passe incorrect');
    }
}
