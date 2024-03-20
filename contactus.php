<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UFT-8">
<title>CONTACT US</title>
 <link rel="stylesheet" href="css/contact.css">
 <script src="js/scripts.js"></script>
</head>
<body>
<?php include("navbar.php") ?>
<div class="header__logo-box">
         <img src="img/1.png" alt="natours logo" id="home_logo">
       </div>
<div class="form">
  <h2>Contact us</h2>
  <div id="error_message"></div>
  <form id="myform"   method="POST">
    <div class="input_field">
        <input type="text" placeholder="Name" id="name" name="name">
    </div>

    <div class="input_field">
        <input type="text" placeholder="Email" id="email" name="email">
    </div>
    <div class="input_field">
        <textarea placeholder="Message" id="message" name="message"></textarea>
    </div>
    <div class="btn">
        <input type="submit" name"submit-btn" value="SUBMIT">
    </div>
  </form>
</div>

</body>

</html>





