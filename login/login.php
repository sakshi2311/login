<?php
	$email="";
	$password="";

	$db=mysqli_connect("localhost","id13348602_sakshi","hd@iRp\&kF+7>/Pt","id13348602_logindb");
	if(isset($_POST['login'])){
		$email=$_POST['email_id'];
		$password=$_POST['password'];

		$sql_e="SELECT * FROM users WHERE email_id='$email'";
		$sql_ep="SELECT * FROM users WHERE  email_id='$email' and password='$password'";
		$res_e=mysqli_query($db,$sql_e)or die(mysqli_error($db));
		$res_ep=mysqli_query($db,$sql_ep)or die(mysqli_error($db));
		if(mysqli_num_rows($res_e) >0)
		{
			if(mysqli_num_rows($res_ep) >0)
			{
			echo "You're logged in!";
			exit();
			}
			else
			{
			$invalid_error="Invalid credentials Email_Id and Password doesn't match.";
			}
		}
		else
		{
			$user_error="No such user found..sign up to create an account.";
		}
	}
