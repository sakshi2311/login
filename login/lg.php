<?php
include('login.php')
?><!DOCTYPE html>
<html lang=>
<head>
   <meta  name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link rel="stylesheet"  href="style.css">
  </head>
  <body background="image\feedback.jpeg" >
    <div class="content">
     <h1>Log in </h1>
    <form class="" action="lg.php" method="post">
      <div class="container">
      <label for="email"><b>Email</b></label><br>
      <input type="text" placeholder="Enter Email" name="email_id" required value=""><br>

      <label for="psw"><b>Password</b></label><br>
      <input type="password" placeholder="Enter Password" name="password" required value=""><br>
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me<br>
        <input type="submit" name="login" value="login"><br>
      </label>
    <span class="psw"><a href="#">Forgot password?</a></span>
  <p>Don't yet have an account? <a href="sg.php">Sign up</a></p>
    <div 
    <?php if (isset($user_error)): ?>
      class="form_error"
    <?php endif ?>
    >
    <?php if (isset($user_error)): ?>
    <span>
       <?php echo $user_error;
       ?>
    </span>
  <?php endif ?>
  <br>
  <div 
    <?php if (isset($invalid_error)): ?>
      class="form_error"
    <?php endif ?>
    >
    <?php if (isset($invalid_error)): ?>
    <span>
       <?php echo $invalid_error;
       ?>
    </span>
  <?php endif ?>
  <br>
  </div>
  </body>
  </html>