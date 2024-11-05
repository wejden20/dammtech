<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panier</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
      background-color: #f9f9f9;
    }

    .cart-container {
      display: flex;
      gap: 20px;
      max-width: 900px;
      width: 100%;
    }

    .cart-details {
      flex: 2;
      background-color: #fff;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      position: relative;
    }

    .cart-empty-message {
      display: none; /* Caché par défaut */
      text-align: center;
      font-size: 18px;
      color: #888;
      margin-top: 20px;
    }

    .cart-summary {
      flex: 1;
      background-color: #f5f5f5;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    h2 {
      margin-top: 0;
    }

    .cart-item {
      display: flex;
      align-items: center;
      gap: 15px;
      margin-bottom: 15px;
    }

    .cart-item img {
      width: 150px;
      height: 100px;
      background-color: #e0e0e0; /* Placeholder color */
      border-radius: 5px;
    }

    .cart-item-details {
      flex: 1;
    }

    .cart-item-info {
      font-size: 16px;
      margin-bottom: 10px;
    }

    .cart-item-info p {
      margin: 5px 0;
    }

    .cart-item-quantity {
      display: flex;
      align-items: center;
      gap: 5px;
      margin-top: 10px;
    }

    .cart-item-quantity label {
      font-size: 16px;
      font-weight: bold;
    }

    .cart-item-quantity input {
      width: 50px;
      text-align: center;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 5px;
    }

    .trash-icon {
      font-size: 20px;
      color: #ff5f5f;
      cursor: pointer;
    }

    .summary-item {
      font-size: 16px;
      display: flex;
      justify-content: space-between;
      padding: 5px 0;
    }

    .summary-item.total {
      font-weight: bold;
    }

    .summary-buttons {
      display: flex;
      flex-direction: column;
      gap: 10px;
      margin-top: 20px;
    }

    .button {
      padding: 10px;
      font-size: 16px;
      font-weight: bold;
      text-align: center;
      border-radius: 5px;
      cursor: pointer;
      border: none;
    }

    .button.continue {
      background-color: #e0e0e0;
      color: #333;
    }

    .button.order {
      background-color: #4CAF50; /* Green color */
      color: white;
    }
  </style>
</head>
<body>

<div class="cart-container">
  <!-- Cart Details Section -->
  <div class="cart-details">
    <h2>Votre Panier</h2>
    <div id="cart-item" class="cart-item">
      <img src="" alt="Product Image">
      <div class="cart-item-details">
        <div class="cart-item-info">
          <p><strong>Produits:</strong> Plante x </p>
          <p><strong>Dimensions:</strong> 30x20 CM</p>
        </div>
        <div class="cart-item-quantity">
          <label for="quantity">Quantité</label>
          <input type="number" id="quantity" value="1" min="0">
        </div>
      </div>
      <div class="trash-icon" onclick="removeCartItem()">🗑️</div>
    </div>

    <!-- Message de panier vide -->
    <div id="empty-message" class="cart-empty-message">
      Votre panier est vide.
    </div>
  </div>

  <!-- Cart Summary Section -->
  <div class="cart-summary">
    <h3>Résumé De La Commande</h3>
    <div class="summary-item">
      <span>Prix Total</span>
      <span id="total-price">50Dt</span>
    </div>
    <div class="summary-buttons">
      <button class="button continue">Continuer Nos Achats</button>
      <button class="button order">Passer Une Commande</button>
    </div>
  </div>
</div>

<script>
  function removeCartItem() {
    const cartItem = document.getElementById("cart-item");
    cartItem.remove(); // Supprime l'élément du panier

    // Met à jour le prix total et affiche le message de panier vide
    document.getElementById("total-price").textContent = "0Dt";
    document.getElementById("empty-message").style.display = "block";
  }
</script>

</body>
</html>
