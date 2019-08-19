<?php
	
	require_once __DIR__. "/autoload/autoload.php";
	$key = intval(getInput("key")); // chính là id của sản phẩm	
	$qty = intval(getInput("qty"));


	// kiểm tra số lượng người dùng mua có lớn hơn số lượng của sản phẩm đấy trong giỏ hàng không
	$_SESSION['cart'][$key]['qty'] = $qty;

	echo 1;


?>