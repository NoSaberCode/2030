<?php
require 'config.php';

function db_connect() {
  try {
    // Access the constants from config.php
    $host = DBHOST;
    $dbname = DBNAME;
    $username = DBUSER;
    $password = DBPASS;

    // Create a PDO connection
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Return the PDO object
    return $pdo;
  } catch (PDOException $e) {
    die($e->getMessage());
  }
}

// Function to add an text to the database
function addTitle($custom_text) {
  try {
    $pdo = db_connect();

    // Check if the request method is POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      $sql = "INSERT INTO list (custom_text) VALUES (:custom_text)";

      // Prepare the statement
      $statement = $pdo->prepare($sql);

      // Bind the custom_text value to the placeholder
      $statement->bindValue(':custom_text', $custom_text);

      // Execute the statement
      $statement->execute();
    }

    // Close the connection
    $pdo = null;
  } catch (PDOException $e) {
    die($e->getMessage());
  }
}
?>
