<?php
require_once  'database/database.php';
// Establish a database connection
$pdo = db_connect();
 
function getTitle($pdo) {
  try {
    // SQL statement to get all custom texts
    $sql = "SELECT custom_text FROM list";

    // Prepare the statement
    $statement = $pdo->query($sql);

    // Fetch all custom texts
    $customTexts = array();
    while ($row = $statement->fetch()) {
      $customTexts[] = $row['custom_text'];
    }

    return $customTexts;
  } catch (PDOException $e) {
    die($e->getMessage());
  }
}

// Get all titles from the database
$customTexts = getTitle($pdo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>My Account</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    h1{
      padding: 20px 20px 20px 20px;

    }
    #image-container {
      margin-top: 20px;
      border: 2px solid #333;
      padding: 10px;
      background-color: black;
      border-radius: 5px;
    }

    #image-container p {
      margin: 5px 0;
      padding: 5px;
      font-size: 18px;
      font-family: "Arial", sans-serif;
      background-color: #333;
      border-radius: 3px;
      color: white;
      text-align: left;
    }p {
        text-align: center;

        font-size: 18px;
        margin-bottom: 20px;
        background-color: #333;
        color: white;
        padding: 10px;
        border-radius: 10px;
        font-family: "Arial", sans-serif;
        padding: 15px;
        margin: 10px;
      }
  </style>
</head>
<body>
  <h1>My Account</h1>
  <div id="account-info">
    <ul class="menu">
    <li><a href="index.php">Game Wishlist</a></li>
    <li><a href="account.php">My Account</a></li>
    <li><a href="contact_us.php">Contact Us</a></li>
    <li><a href="documentation.php">Documentation</a></li>
  </ul>
  <p>List of Games</p>
    <div id="image-container">
      <?php foreach ($customTexts as $customText): ?>
        <p><?= $customText ?></p>
      <?php endforeach; ?>
    </div>
  </div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="scripts.js"></script>
</body>
</html>
