<?php
session_start();
extract($_POST);
$action = isset($_GET["action"])?$_GET["action"]:"";
if ($action) {
	switch ($action) {
		case 'add':
			if (!empty($_SESSION["cart"][$id_item])) {
				$val = array($_SESSION["cart"][$id_item][0]+$amount,$kadaluarsa,$price);
				$_SESSION["cart"][$id] = $val;
			}else {
				$val = array($amount,$kadaluarsa,$price);
				$_SESSION["cart"][$id] = $val;
			}
			break;
		case 'up':
			if (!empty($_SESSION["cart"])) {
				$amount = isset($_POST['amount'])?$_POST['amount']:"";
			}
			break;
		case 'del':
			# code...
			break;
		
	}
}
?>