<?php

$db = new PDO('mysql:host=localhost;dbname=chombo 1.0', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$q = $db->prepare('SELECT * FROM `db_updates`');
$q->execute();
$result = $q->fetchAll(PDO::FETCH_OBJ);

$updated = array();
foreach ($result as $r) {
	$updated[] = $r->file;
}

$files = scandir('../updates');
array_shift($files); // remove '.' from the array
array_shift($files); // remove '..' from the array

foreach ($files as $file) {
	if (in_array($file, $updated)) {
		continue;
	}

	$content = file_get_contents('../updates/' . $file);

	try {
		$q = $db->prepare($content);
		$q->execute();
	}
	catch (Exception $e) {
		echo $e->getMessage();
		die();
	}

	try {
		$sql = "INSERT INTO `db_updates` (`file`, `updated_on`) VALUES (\"$file\",'".date('Y-m-d H:i:s')."')";
		$q = $db->prepare($sql);
		$q->execute();
	}
	catch (Exception $e) {
		echo $e->getMessage();
		die();
	}
	
}