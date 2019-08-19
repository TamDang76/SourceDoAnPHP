<?php
    $open = "category";
    require_once __DIR__."/../../autoload/autoload.php";

    $id = intval(getInput('id'));
    $DeleteUser = $db->fetchID("users",$id);
    if (empty($DeleteUser)) 
    {
        $_SESSION['error'] = "Dữ liệu không tồn tại";
        redirectAdmin("user");
    }

    
    $delete = $db->delete("users",$id);
    if ($delete > 0) 
    {
        $_SESSION['success'] = "Xóa thành công";
        redirectAdmin("user");
    }
    else
    {
        $_SESSION['error'] = "Xóa thất bại";
        redirectAdmin("user");
    }
?>
                