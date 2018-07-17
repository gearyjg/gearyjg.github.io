<!DOCTYPE html>
<html>
<title>Login</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./../css/main.css">
<link rel="stylesheet" href="./../css/font_Oswald.css">
<link rel="stylesheet" href="./../css/font_Open_Sans.css">
<link rel="stylesheet" href="./../css/main_css.css">
<style>
h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
body {font-family: "Open Sans"}
</style>
<body class="light-grey">
  
<!-- General page class -->
<div class="content" style="max-width:1600px">

<!-- Navigation bar -->
<div class="topnav">
  <a href="./index.html">Home</a>
  <a href="./about.html">About Us</a>
  <a href="./contact-us.html">Contact Us</a>
  <a href="./store.html">Shop</a>
  <a class="active" href="#">Login</a>
</div>

<style>
.topnav {
  background-color: #666666; /* Grey */
  overflow: hidden;
}
.topnav a {
  float: left;
  text-align: center;
  padding: 15px;
  text-decoration: none;
  font-size: 24px;
  color: white;
}
.topnav a:hover{
  background-color: #666666;
  color:#ff1cca; /* Purple */
}
.topnav a.active{
  background-color: #666666;
  color: #ff1cca;
}
</style>


<!-- Header -->
<header class="w3-container w3-center w3-padding-48 w3-white">
  <h1 class="w3-xxxlarge"><b>Children of Time</b></h1>
  <h6>Welcome to <span class="w3-tag">Children of Time</span></h6>
</header>

<!-- BEGIN CONTENT -->
<div class="container w3-center">
  <style>
  div {
    width: 85%;
    margin: auto;
  }
  </style>

  <?php
    $loginErr = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["email"])) {
        $loginErr = "E-mail field is required."
      } else if (empty($_POST["passwd"])) {
        $loginErr = "Please enter your password"
      } else {
        //else if login check fails, else nothing
      }
    }
  ?>

  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="container">
      <h2>Login</h2><br>
      <span class="error"><?php echo $loginErr;?></span><br>
      <label for="email"<b>E-mail Address</b></label>
      <input type="text" name="email" required>

      <label for="passwd"<b>Password</b></label>
      <input type="password" name="passwd" required>

      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me on this computer
      </label>
      <br>
      <button type="submit">Login</button>
    </div>
  </form>

  <form>
    <h2>New to CoT?</h2>

    <div class="container" style="background-color:#ffffff">
        <a href="./create-account.html"><button type="button">Create an Account</button></a>
    </div>
  </form>

</div>

<br>

<style>
form {
  border: 5px solid #f1f1f1;
}
input[type=text], input[type=password] {
  width: 100%;
  display: inline-block;
  text-align: center;
  padding: 5px;
}
button {
  width: 25% !important;
  background-color: #4caf50;
  color: white;
  border: none;
  cursor: pointer;
  text-align: center;
  padding: 10px;
  margin: 5px;
}
button:hover {
  opacity: 0.8;
}
</style>

<!-- END CONTENT -->

<!-- Footer -->
<footer class="w3-container w3-dark-grey" style="padding:0px;width:90%;margin:auto">
<!-- Social media icons -->
<div class="w3-bar w3-black w3-hide-small">
  <a href="https://www.facebook.com" class="w3-bar-item w3-button"><img src="./../res/facebook.jpg" alt="Facebook" width="40"
    height="40" padding="0"></a>
  <a href="https://www.instagram.com" class="w3-bar-item w3-button"><img src="./../res/instagram.jpg" alt="Instagram" width="40"
    height="40" padding="0"></a>
  <a href="https://www.twitter.com" class="w3-bar-item w3-button"><img src="./../res/twitter.jpg" alt="Twitter" width="40"
    height="40" padding="0"></a>
</div>
</footer>

</body>
</html>