<?php
	include 'inc.php';
	$action=$java->get("action","");
	if ($action == "add") {
		$post = $eng->sant(INPUT_POST);
		extract($post);
		$q="INSERT INTO category VALUES(
			'',
			'$name'
			)";
		$eng->execute($q,null);
		$java->alert("Data Tersimpan!!");
		$java->redirect("../../../index.php?page=crud/item/index");
	}
	if ($action == "up") {

	}
	if ($action == "del") {
		# code...
	}
?>