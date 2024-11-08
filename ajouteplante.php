<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une plante</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 20px;
        }

        .container {
            width:1200px;
            margin: auto;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        h2 {
            color: #4CAF50;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"], input[type="number"], input[type="date"], textarea {
            width: 95%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            width: 20%;
            padding: 10px;
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
        select {
            width: 95%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Ajouter plante</h2>
        <form action="#" method="POST">
            <label for="nom-produit">id_plante :</label>
            <input type="text" id="image" name="image" placeholder="Entrez l'ID_plante" required />
            

            <label for="image">nom :</label>
            <input type="text" id="nom-produit" name="nom-produit" required />

            <label for="description">type :</label>
           <select name="type" id="type">
           <option value="">select type</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
           </select>

            <label for="prix">discription :</label>
            <textarea id="description" name="description" rows="5" required></textarea>

            <label for="taille">prix :</label>
            <input type="text" id="taille" name="taille" required />

            <label for="stock">quantité:</label>
            <input type="text" id="stock" name="stock" required />

            <label for="conseils-entretien">date ajout :</label>
            <input type="date" >


            <button type="submit">Ajouter la plante</button>
        </form>
    </div>
</body>
</html>