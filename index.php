<?php
require_once 'database/database.php';
// Establish a database connection
$pdo = db_connect();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Game Wishlist</title>
  <link rel="stylesheet" href="styles.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <style>
        main {
          text-align: center;
        }

        main p {
          font-size: 18px;
          margin-bottom: 20px;
          background-color: #333;
          color: white;
          padding: 10px;
          border-radius: 10px;
          font-family: "Arial", sans-serif;
          padding: 20px;
          margin: 10px;
      }

        .image-text {
          font-size: 20px;
          transition: font-size 0.3s ease;
        }

        .image-text:hover {
          font-size: 35px; 
        }

        main {
          text-align: center;
          position: sticky; 
          top: 0; 
          background-color: darkgrey; 
          padding: 20px;
      }
    </style>
</head>
<body>
  <header>
    <h1>Game Wishlist</h1>
  </header>
  <nav class="menu-container">
    <ul class="menu">
      <li><a href="index.php">Game Wishlist</a></li>
      <li><a href="account.php">My Account</a></li>
      <li><a href="contact_us.php">Contact Us</a></li>
      <li><a href="documentation.php">Documentation</a></li>

    </ul>
  </nav>
  <main>
    <p> Please select a desired game by navigating to game title</p>
    <div id="image-gallery">
    <?php
      $folder = 'images/';
      $imageFiles = array(
        "image1.jpg",
        "image2.jpeg",
        "image3.jpeg",
        "4.jpeg",
        "5.jpeg",
        "6.jpeg",
        "7.jpeg",
        "8.jpeg",
        "9.jpeg",
        "10.jpeg",
        "11.jpeg",
        "12.jpeg"
      );
      $customTexts = array(
        "Apex Legend",
        "Attack of the Dead",
        "CSGO",
        "Call Of Duty",
        "Escape from Tarkov",
        "Final Fantasy",
        "Need for Speed",
        "PUBG",
        "Phlyndir",
        "Rainbow Six Siege",
        "Rocket League",
        "The Division"
      );
      
      $count = 0;
      foreach ($imageFiles as $file) {
        $imageSrc = $folder . $file;
        echo '<div class="image-container">';
        echo '<div class="image-wrapper">';
        echo '<img src="' . $imageSrc . '" alt="' . $customTexts[$count] . '" />';
        echo '</div>';
        echo '<div class="image-text" data-custom-text="' . $customTexts[$count] . '">' . $customTexts[$count] . '</div>';
        echo '</div>';
        $count++;
      }
      ?>
    </div>
    <div class="button-container">
      <label for="custom-text-input"></label>
      <input type="text" id="custom-text-input" placeholder="Enter game name.">

      <button class="add-button">Add</button>
      <p id="reminder" style="display: none; color: red;">Please select or enter a custom text before adding.</p>
    </div>
  </main>
  <script src="scripts.js"></script>
  
</body>
</html>
