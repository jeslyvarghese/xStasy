<?php
 #This library is to preprocess all users inputs to prevent sql injection
 
 function sanitizeMail($Mail)
	{
		return preg_replace("[^A-Za-z0-9._@]","",$Mail);
	}
function sanitizeText($Text)
	{
		return preg_replace("[^A-Za-z0-9]","",$Mail);
	}
?>
