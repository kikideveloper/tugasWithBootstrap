<?php
session_start();
extract($_POST);
$action = isset($_GET["action"])?$_GET["action"]:"";
if ($action) {
	switch ($action) {
		case 'add':
			if (!empty($_SESSION["cart"][$id_item])) {
				$val = array();
				$_SESSION["cart"][$id] += $amount;
			}else {
				$_SESSION["cart"][$id] = $amount;
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