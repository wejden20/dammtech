<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un compte</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e4fecf;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 600px;
            margin: 50px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #4CAF50;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .gender {
            margin-bottom: 15px;
        }

        .gender input[type="radio"] {
            margin-right: 8px;
        }

        button {
            width: 100%;
            padding: 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Créer un compte</h2>
        <form action="register.php" method="POST">
            <label for="first-name">Prénom</label>
            <input type="text" id="first-name" name="first-name" required>

            <label for="last-name">Nom</label>
            <input type="text" id="last-name" name="last-name" required>

            <label for="address">Adresse</label>
            <input type="text" id="address" name="address" required>

            <label for="phone">Numéro de téléphone</label>
            <input type="tel" id="phone" name="phone" required>

            <label>Sexe</label>
            <div class="gender">
                <input type="radio" id="male" name="gender" value="homme" required>
                <label for="male">Homme</label>
                
                <input type="radio" id="female" name="gender" value="femme" required>
                <label for="female">Femme</label>
            </div>

            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm-password">Vérifier le mot de passe</label>
            <input type="password" id="confirm-password" name="confirm-password" required>

            <!-- Category Selection from Database -->
            <label for="category">Catégorie</label>
            <select id="category" name="category" required>
                <?php
                    include("connexion.php");

                    $Req = "SELECT * FROM categorie";
                    $Res = mysqli_query($conn, $Req);

                    if ($Res) {
                        while ($Row = mysqli_fetch_array($Res)) {
                            echo "<option value='{$Row[0]}'>{$Row[1]}</option>";
                        }
                    } else {
                        echo "<option disabled>Erreur de chargement des catégories</option>";
                    }
                ?>
            </select>

            <button type="submit">S'inscrire</button>
        </form>
    </div>
</body>
</html>