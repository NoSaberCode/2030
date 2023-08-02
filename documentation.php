<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Documentation</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    #text{
        text-align: left;
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
    .image-gallery {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between; /* This will create space between images */
    }

    .image-gallery img {
      width: 48%; /* Set the width to 48% to create two images in one row */
      height: auto; /* This will maintain the aspect ratio of the images */
      margin: 10px;
      object-fit: cover;
      border: 5px solid black;
      border-radius: 10px;
    }
  </style>

</head>
<body>
  <h1>Documentation</h1>
    <ul class="menu">
      <li><a href="index.php">Game Wishlist</a></li>
      <li><a href="account.php">My Account</a></li>
      <li><a href="contact_us.php">Contact Us</a></li>
      <li><a href="documentation.php">Documentation</a></li>
    </ul>
    <div id="text">
      <h2>Steps</h2>
        <p>1. As you navigate towards "Game Wishlist" page, you will see at the bottom the add button with textfield. What you can do it click on the title of any images provided and it should then turn to green.</p>
        <p>2. Once you clicked it, it then will copy that title into the textfield.</p>
        <p>3. Then when you click add, it will add to your account on the "My Account" page. The text is stored in database then it is retrieved on "My Account" page. </p>
        <p>4. Once you navigate to "My Account" you will be able to see the same title you clicked on "Game Wishlist". </p>
        <p>5. To note, you cannot enter custom text as I made it so that only texts of the titles can be entered. If you try to enter something else it will display the message and ask you to enter the right title.</p>
        <p>6. If you tried to enter invalid input, you must refresh the page for the input message to dissapear then you can try again.
        <p>7. On "Contact Us" page is simple page to display your name, email and comment once you enter some texts. I added some validation such as email, that needs to have @ sign. </p>
        <h2>What I am proud of:</h2>
        <p> I am really satisfied with how I managed to implement the system where user clicks on title of the image and it is copied to the textfield and stored in database after user clicks "add" button. Then it is displayed on another page using combination of php, javascript.
    </div>
    <h1>Screenshot</h1>
    <div class="image-gallery">
      <img src="screenshot/1.png" alt="index Game Wishlist" />
      <img src="screenshot/2.png" alt="documentation" />
      <img src="screenshot/3.png" alt="My account" />
      <img src="screenshot/4.png" alt="css file" />
      <img src="screenshot/5.png" alt="contact us" />

    </div>


</body>
</html>
