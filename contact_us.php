<?php
error_reporting(E_ALL);
  ini_set('display_errors', 1);

require_once('validation.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Contact Us</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    body {
      background-color: darkgrey;
    }

    h1 {
      color: white;
      font-size: 36px;
      font-family: "Arial", sans-serif;
      text-align: center;
      padding: 20px 0;
      margin: 0;
      background-color: #333;
      border-radius: 10px;
    }

    .wrapper {
      width: 80%;
      margin: 0 auto;
    }

    label {
      display: block;
      margin-bottom: 10px;
      font-family: "Arial", sans-serif;
      font-size: 18px;
      color: #333;
    }

    input[type="text"],
    textarea {
      width: 100%;
      padding: 10px;
      border: 2px solid #333;
      border-radius: 10px;
      font-size: 16px;
    }

    textarea {
      resize: vertical;
    }

    input[type="submit"],
    input[type="reset"] {
      margin-top: 10px;
      padding: 10px 20px;
      background-color: #333;
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }

    input[type="submit"]:hover,
    input[type="reset"]:hover {
      background-color: #45a049;
    }

    .failure-message {
      color: red;
      font-size: 14px;
      margin-top: 5px;
    }

    .success-message {
      color: green;
      font-size: 14px;
      margin-top: 5px;
    }
  </style>
</head>
<body>

  <div class="wrapper">

    <h1>Contact Us</h1>
    
    <ul class="menu">
      <li><a href="index.php">Game Wishlist</a></li>
      <li><a href="account.php">My Account</a></li>
      <li><a href="contact_us.php">Contact Us</a></li>
      <li><a href="documentation.php">Documentation</a></li>


    </ul>
    <form action="contact_us.php" method="post">
      <label for="name">Name:
        <input type="text" name="name" id="name">
        <?php the_validation_message('name'); ?>
      </label>

      <label for="email">Email:
        <input type="text" name="email" id="email">
        <?php the_validation_message('email'); ?>
      </label>

      <label for="comment">Comment:
        <textarea name="comment" id="comment" rows="5"></textarea>
        <?php the_validation_message('comment'); ?>
      </label>

      <input type="reset" name="" value="Reset Form">
      <input type="submit" value="Submit Form">
    </form>

    <?php the_results(); ?>

  </div> 

</body>
</html>
