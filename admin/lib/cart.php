<?php
$action = isset($_GET["action"])?$_GET["action"]:"";
if ($action) {
	$id = isset($_GET["id_item"])?$_GET["id_item"]:"";
	switch ($action) {
		case 'add':
			$amount = isset($_GET["amount"])?$_GET["amount"]:0;
			if (!empty($_SESSION["cart"][$id])) {
				$_SESSION["cart"][$id] += $amount;
			}else {
				$_SESSION["cart"][$id] = $amount;
			}
			break;
		case 'up':
			if (!empty($_SESSION["cart"])) {
				$
			}
			break;
		case 'del':
			# code...
			break;
		
	}
}
?>