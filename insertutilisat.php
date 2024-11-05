<?php

require_once('connection.php'); 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $nom = mysqli_real_escape_string($conn, htmlspecialchars($_POST['last-name']));
    $prenom = mysqli_real_escape_string($conn, htmlspecialchars($_POST['first-name']));
    $email = mysqli_real_escape_string($conn, htmlspecialchars($_POST['email']));
    $mot_de_passe = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hachage du mot de passe
    $num_tel = mysqli_real_escape_string($conn, htmlspecialchars($_POST['phone']));
    $role = "utilisateur"; // Exemple de rôle par défaut
    $date_inscription = date("Y-m-d"); // Date actuelle

    
    $sql = "INSERT INTO utilisateur (nom, prenom, email, mot_de_passe, num_tel, role, date_inscription)
            VALUES ('$nom', '$prenom', '$email', '$mot_de_passe', '$num_tel', '$role', '$date_inscription')";

    if (mysqli_query($conn, $sql)) {
        echo "Inscription réussie !";
    } else {
        echo "Erreur: " . $sql . "<br>" . mysqli_error($conn);
    }
}


mysqli_close($conn);
?>
