<?php
include('process.php');
?>
<!DOCTYPE html>
<html lang=>
<head>
   <meta  name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link rel="stylesheet"  href="style.css">
  </head>
  <body background="image\feedback.jpeg" >
  	 <div class="content">
     <h1>Sign up </h1>
      <p>Please fill in this form to create an account.</p>
       <div class="imgcontainer">
    <img src="image\icon.jpg" alt="Avatar" class="avatar">
  </div>
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
<form method="post" action="sg.php">
	<div class="container">
   	<div 
   	<?php if (isset($name_error)): ?>
   		class="form_error"
   	<?php endif ?>
   	>
  Username:<br>
  <input type="text" placeholder="Enter Username" name="user_name" value="<?php echo $username; ?>" required value="">
  <br><?php if (isset($name_error)): ?>
  	<span>
  		 <?php echo $name_error;
  		 ?>
  	</span>
 <?php endif ?>
  <br>
  	<div 
   	<?php if (isset($email_error)): ?>
   		class="form_error"
   	<?php endif ?>
   	>
  Email:<br>
  <input type="text" placeholder="Enter Email" name="email_id" value="<?php echo $email; ?>"required value="">
  <br>
  <?php if (isset($email_error)): ?>
  	<span>
  		 <?php echo $email_error;
  		 ?>
  	</span>
 <?php endif ?>
  <br>
  Password:<br>
  <input type="password"placeholder="Enter Password" name="password">
  <br><br>
  <input type="submit" name="submit">
  <p>Already an user?<a href="lg.php">Login</a>
</form> 
</div>
</p>
</div>
</body>
</html>