<?php

	require_once __DIR__. "/autoload/autoload.php";

	
	if (!isset($_SESSION['name_id'])) 
	{
		echo "<script>alert('Bạn phải đăng nhập mới thực hiện được chức năng này');location.href='index.php'</script>";
	}


	$id = intval(getInput('id'));


	$product = $db->fetchID("product",$id);

	// kiểm tra nếu tồn tại giỏ hàng thì cập nhật giỏ hàng
	// 
	// nếu chưa có thì tạo mới
	if (!isset($_SESSION['cart'][$id])) 
	{
		// Tạo mới giỏ hàng
		$_SESSION['cart'][$id]['name']    = $product['name'];
		$_SESSION['cart'][$id]['thunbar'] = $product['thunbar'];
		$_SESSION['cart'][$id]['qty']     = 1;
		$_SESSION['cart'][$id]['price']	  = ((100-$product['sale'])*$product['price'])/100;

	}
	else
	{
		$_SESSION['cart'][$id]['qty'] += 1;
		// Cập nhật giỏ hàng
	}

	echo "<script>alert('Thêm giỏ hàng thành công');location.href='gio-hang.php'</script>";

?>