<?php
session_start();
echo $id = $_GET['id'];
if (!in_array($id, $_SESSION['cart'])) {
	$_SESSION['cart'][] = $id;
}
echo json_encode($_SESSION['cart']);
?>