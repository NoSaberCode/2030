<?php
require_once 'database/database.php';

$pdo = db_connect(); // Establish a database connection

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the custom text from the POST data
  $customText = $_POST['customText'];

  // Add the custom text to the database
  addTitle($customText);

  // Return a response
  $response = array('status' => 'success', 'message' => 'Custom text added successfully.');
  $jsonResponse = json_encode($response);
  echo $jsonResponse;
} else {
  // Return an error response for other request methods
  $response = array('status' => 'error', 'message' => 'Invalid request method.');
  $jsonResponse = json_encode($response);
  echo $jsonResponse;
}
?>
