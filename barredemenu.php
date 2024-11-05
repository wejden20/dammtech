<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navigation Bar</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 10vh;
    }

    .navbar {
      width: 100%;
      max-width: 1600px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 30px;
      background-color: transparent;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
      position: relative;
    }

    .navbar .nav-links {
      display: flex;
      gap: 15px;
    }

    .navbar .nav-links a {
      text-decoration: none;
      color: #000000; 
      font-size: 14px;
      transition: all 0.3s;
    }

    .navbar .nav-links a:active {
      color: #666;
      box-shadow: inset 4px 4px 12px #c5c5c5, inset -4px -4px 12px #ffffff;
    }

    .navbar .logo {
      font-size: 24px;
      font-weight: bold;
      text-align: center;
      flex: 1;
      display: flex;
      justify-content: center;
    }

    .navbar .icons {
      display: flex;
      gap: 15px;
      align-items: center;
    }

    .navbar .icons i {
      font-size: 18px;
      color: #333;
      cursor: pointer;
      transition: all 0.3s;
    }

    .navbar .icons i:active {
      color: #666;
      box-shadow: inset 4px 4px 12px #c5c5c5, inset -4px -4px 12px #ffffff;
    }

    /* Sign Up Button Styling */
    .sign-up-btn {
      color: #090909;
      padding: 0.7em 1.7em;
      font-size: 18px;
      border-radius: 0.5em;
      background: #e8e8e8;
      cursor: pointer;
      border: 1px solid #e8e8e8;
      transition: all 0.3s;
      box-shadow: 6px 6px 12px #c5c5c5, -6px -6px 12px #ffffff;
      text-decoration: none; 
      font-weight: bold;
    }

    .sign-up-btn:active {
      color: #4f8e369e;
      box-shadow: inset 4px 4px 12px #c5c5c5, inset -4px -4px 12px #ffffff;
    }

    /* Updated Search Bar Styling */
    .search-bar {
      display: none; /* Initially hidden */
      position: absolute;
      top: 100%;
      right: -1050px; /* Initially position off-screen to the right */
      height: 75px;
      padding: 12px;
      width: 0; /* Initially collapsed */
      transition: width 0.3s ease-in-out, right 0.3s ease-in-out; /* Smooth transition for width and right position */
      border-radius: 12px;
      border: 1.5px solid lightgrey;
      outline: none;
      box-shadow: 0px 0px 20px -18px rgba(0, 0, 0, 0.1);
    }

    .search-bar.active {
      display: flex; /* Show the search bar when active */
      width: 1500px; /* Expanded width */
      right: 10px; /* Position search bar inside the screen */
    }

    .search-bar input {
      width: 100%;
      height: 100%;
      padding: 12px;
      border-radius: 12px;
      border: 1.5px solid lightgrey;
      outline: none;
      transition: all 0.3s cubic-bezier(0.19, 1, 0.22, 1);
      box-shadow: 0px 0px 20px -18px rgba(0, 0, 0, 0.1);
      font-size: 16px;
    }

    .search-bar input:hover {
      border: 2px solid lightgrey;
      box-shadow: 0px 0px 20px -17px rgba(0, 0, 0, 0.1);
    }

    .search-bar input:active {
      transform: scale(0.95);
    }

    .search-bar input:focus {
      border: 2px solid grey;
    }
  </style>
</head>
<body>

<div class="navbar">
  <div class="nav-links">
    <a href="#">À propos de nous</a>
    <a href="#">Marketplace</a>
    <a href="#">Blog</a>
    <a href="#">Événements</a>
  </div>

  <div class="logo">Logo</div>

  <div class="icons">
    <i class="fas fa-search" onclick="toggleSearchBar()"></i> 
    <i class="fas fa-shopping-cart"></i>
    <a href="#" class="sign-up-btn">S'inscrire</a>
  </div>

  <div class="search-bar" id="search-bar">
    <input type="text" placeholder="Rechercher...">
  </div>
</div>

<script>
  function toggleSearchBar() {
    const searchBar = document.getElementById('search-bar');
    searchBar.classList.toggle('active'); // Toggle the 'active' class to show or hide the search bar
  }
</script>

</body>
</html>
