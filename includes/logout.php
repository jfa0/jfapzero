<?php
session_start(); 
	if(session_destroy()) // Destroying All Sessions
	{
		echo "<script>window.open('../index.php','_self')</script>"; // Redirecting To Home Page
	}
?>