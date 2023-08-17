<?php
session_start();
// Inclure le fichier contenant la classe Utilisateur
require_once './models/utilisateur/Utilisateur.php';


// Initialisez la session (si ce n'est pas déjà fait)


// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les valeurs du formulaire
    $email = $_POST['email'];
    $motdepasse = $_POST['motdepasse'];

    // Ici, vous devriez avoir une méthode pour vérifier les informations de connexion
    // par exemple, vérifier si l'email et le mot de passe correspondent à un utilisateur dans votre base de données

    // Remplacez cette vérification factice par votre propre logique d'authentification
    $utilisateur = new Utilisateur(1, true, 'John', 'Doe', 'john@example.com', 'password');

    if ($email === $utilisateur->getEmailutilisateur() && $motdepasse === $utilisateur->getMotdepasse()) {
        // Authentification réussie
        $_SESSION['utilisateur'] = $utilisateur; // Stockez l'utilisateur dans la session par exemple
        header('Location: index.php'); // Redirigez vers la page d'accueil après connexion
        exit();
    } else {
        $erreur = "Identifiants incorrects. Veuillez réessayer.";
    }
}
?>



<body>

<h2>Connexion</h2>

<?php if (isset($erreur)) { ?>
    <p style="color: red;"><?php echo $erreur; ?></p>
<?php } ?>

<form method="post" action="">
    <label for="email">Email :</label>
    <input type="email" id="email" name="email" required><br>

    <label for="motdepasse">Mot de passe :</label>
    <input type="password" id="motdepasse" name="motdepasse" required><br>

    <input type="submit" value="Se Connecter">
</form>

</body>

<?php
$content = ob_get_clean();
require 'template.php';
?>