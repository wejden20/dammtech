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
            width: 1200px;
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
            width: 95%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .gender {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .gender label {
            margin-right: 500px;
            font-weight: normal;
        }

        .buttons {
            text-align: center;
        }

        .buttons button {
            padding: 15px 30px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            margin: 10px;
        }

        .buttons button:hover {
            background-color: #45a049;
        }

        .secondary-button {
            background-color: #ddd;
            color: #333;
        }

        .secondary-button:hover {
            background-color: #ccc;
        }
    </style>
    <script>
        function validateForm() {
            const password = document.getElementById("password").value;
            const confirmPassword = document.getElementById("confirm-password").value;
            if (password !== confirmPassword) {
                alert("Les mots de passe ne correspondent pas.");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <div class="container">
        <h2>Créer un compte</h2>
        <form action="insertutilisat.php" method="POST" onsubmit="return validateForm()">
            <label for="first-name">Prénom</label>
            <input type="text" id="first-name" name="first-name" required>

            <label for="last-name">Nom</label>
            <input type="text" id="last-name" name="last-name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

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

            <div class="buttons">
                <button type="submit">S'inscrire</button>
                <button type="button" class="secondary-button" onclick="window.location.href='login.php'">Vous avez déjà un compte ?</button>
            </div>
        </form>
    </div>
</body>
</html>
