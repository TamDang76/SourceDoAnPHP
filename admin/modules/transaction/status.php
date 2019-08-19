<?php 
	require_once __DIR__."/../../autoload/autoload.php";

    $id = intval(getInput('id'));

    $EditTransaction = $db->fetchID("transaction",$id);
    if (empty($EditTransaction)) 
    {
        $_SESSION['error'] = "Dữ liệu không tồn tại";
        redirectAdmin("transaction");
    }

    if ($EditTransaction['status'] == 1) 
    {
    	$_SESSION['error'] = "Đơn hàng đã được xử lý";
        redirectAdmin("transaction");
    }

    $status = 1;



    $update = $db->update("transaction",array("status" => $status), array("id" => $id));
    if ($update > 0) 
    {
    	$_SESSION['success'] = " cap nhat thanh cong";

    	$sql = "SELECT product_id, qty FROM orders WHERE transaction_id = $id ";
    	$order = $db->fetchsql($sql);
    	foreach ($order as $item) 
    	{
    		$idProduct = intval($item['product_id']);
    		$product = $db->fetchID("product",$idProduct);
    		$number = $product['number'] - $item['qty'];
    		$up_pro = $db->update("product",array("number"=>$number,"pay"=>$product['pay']+1),array("id"=>$idProduct));
    	}
     	redirectAdmin("transaction");
    }
    else
    {
    	$_SESSION['error'] = " Du lieu khong thay doi";
     	redirectAdmin("transaction");
    }

 ?>