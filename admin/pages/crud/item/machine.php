<?php
	include 'inc.php';
	$action=$java->get("action","");
	if ($action == "add") {
		$tmp_name="../../img/upload";
		$picture=move_uploaded_file(null $tmp_name);
		if ($file==) {
			$post = $eng->sant(INPUT_POST);
			extract($post);
			$id=md5($barcode);
			$eng->insert("item","'$id','$category','$name','$id_unit','$barcode','$hpp','$hju','$stock','$kadaluarsa','$picture'");
			$java->alert("Data Tersimpan!!");
			$java->redirect("../../../index.php?page=crud/item/index");
		}
	}
	if ($action == "up") {
		$post=$eng->sant(INPUT_POST);
		extract($post);
		$eng->update("category","name='$name' where id_category='$id'");
		$java->alert("Data Product Telah di ubah!!");
		$java->redirect("../../../index.php?page=crud/item/index");
	}
	if ($action == "delete") {
		$id=$java->get("id","");
		$eng->delete("category where id_category=$id");
		$java->alert("Data Has been deleted");
		$java->redirect("../../../index.php?page=crud/item/index");
	}
?>