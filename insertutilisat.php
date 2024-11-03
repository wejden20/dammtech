<?php
// Inclure le fichier de connexion à la base de données
require_once('connection.php'); // Assurez-vous que ce fichier contient votre code de connexion

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer et sécuriser les données du formulaire
    $nom = mysqli_real_escape_string($conn, htmlspecialchars($_POST['last-name']));
    $prenom = mysqli_real_escape_string($conn, htmlspecialchars($_POST['first-name']));
    $email = mysqli_real_escape_string($conn, htmlspecialchars($_POST['email']));
    $mot_de_passe = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hachage du mot de passe
    $num_tel = mysqli_real_escape_string($conn, htmlspecialchars($_POST['phone']));
    $role = "utilisateur"; // Exemple de rôle par défaut
    $date_inscription = date("Y-m-d"); // Date actuelle

    // Préparer et exécuter la requête d'insertion
    $sql = "INSERT INTO utilisateur (nom, prenom, email, mot_de_passe, num_tel, role, date_inscription)
            VALUES ('$nom', '$prenom', '$email', '$mot_de_passe', '$num_tel', '$role', '$date_inscription')";

    if (mysqli_query($conn, $sql)) {
        echo "Inscription réussie !";
    } else {
        echo "Erreur: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Fermer la connexion
mysqli_close($conn);
?>
