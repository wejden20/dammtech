<?php
// Define constants for database connection
define("SERVEUR", "localhost");
define("BASE", "verterre");  // Changed database name to 'verterre'
define("USER", "root");
define("MDP", "");

// Attempt to establish the database connection
$conn = mysqli_connect(SERVEUR, USER, MDP, BASE);

// Check for connection success
if (!$conn) {
    die("Erreur de connexion: " . mysqli_connect_error());
}

// If the connection is successful, you can proceed with your database operations here.
?>
