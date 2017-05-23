<?php 
function generate_code($length) {
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$charactersLength = strlen($characters);
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	return $randomString;
}

$pass = '1234';
$salt = generate_code(20);
$newpass = hash("sha256", $pass . $salt);

$f = fopen("test.txt",'w+');
$text = "salt:$salt, newpass:$newpass";
fwrite($f, $text);
fclose($f);

