<?php
    $open = "category";
    require_once __DIR__."/../../autoload/autoload.php";

    $id = intval(getInput('id'));
    $Editproduct = $db->fetchID("product",$id);
    if (empty($Editproduct)) 
    {
        $_SESSION['error'] = "Dữ liệu không tồn tại";
        redirectAdmin("product");
    }

    
    $delete = $db->delete("product",$id);
    if ($delete > 0) 
    {
        $_SESSION['success'] = "Xóa thành công";
        redirectAdmin("product");
    }
    else
    {
        $_SESSION['error'] = "Xóa thất bại";
        redirectAdmin("product");
    }
?>
                