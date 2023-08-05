<?php
session_start();
if(session_destroy()) {
	echo '<h1>You have been successfully logged out</h1>';
	header( "Refresh:1; url=Login Form.php");
}
?>