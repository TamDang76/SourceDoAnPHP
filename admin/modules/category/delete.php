<?php
    $open = "category";
    require_once __DIR__."/../../autoload/autoload.php";

    $id = intval(getInput('id'));
    $EditCategory = $db->fetchID("category",$id);
    if (empty($EditCategory)) 
    {
        $_SESSION['error'] = "Dữ liệu không tồn tại";
        redirectAdmin("category");
    }
    $is_product = $db->fetchOne("product"," category_id = $id ");
    if($is_product == NULL)
    {
        $delete = $db->delete("category",$id);
        if ($delete > 0) 
        {
            $_SESSION['success'] = "Xóa thành công";
            redirectAdmin("category");
        }
        else
        {
            $_SESSION['error'] = "Xóa that bai";
            redirectAdmin("category");
        }
    }
    else
        {
            $_SESSION['error'] = "Đã có sản phẩm! Bạn không thể xóa ";
            redirectAdmin("category");
        }
?>


                
                
                