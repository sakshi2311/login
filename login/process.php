<?php

	$username="";
	$email="";
	$password="";

	$db=mysqli_connect("localhost","id13348602_sakshi","hd@iRp\&kF+7>/Pt","id13348602_logindb");
	if(isset($_POST['submit'])){
		$username=$_POST['user_name'];
		$email=$_POST['email_id'];
		$password=$_POST['password'];

		$sql_u="SELECT * FROM users WHERE user_name='$username'";
		$sql_e="SELECT * FROM users WHERE email_id='$email'";
		$sql_ue="SELECT * FROM users WHERE user_name='$username'and email_id='$email'";
		$res_u=mysqli_query($db,$sql_u)or die(mysqli_error($db));
		$res_e=mysqli_query($db,$sql_e)or die(mysqli_error($db));
		$res_ue=mysqli_query($db,$sql_ue)or die(mysqli_error($db));
		if (mysqli_num_rows($res_u) >0){
			if(mysqli_num_rows($res_ue) >0){
			$user_error=" User is already registered!";
		}
		else
		{
			$name_error="This username is already taken";
		}
		}
		elseif (mysqli_num_rows($res_e) >0) {
			$email_error="Email is already registered.";
		}
		else{
			//insert data into table
			$query="INSERT INTO users(user_name,email_id,password) VALUES('$username','$email','$password')";
			$result=mysqli_query($db,$query)or die(mysqli_error($db));
			echo "Account is created!";
			exit();
		}
	}

?>