<?php
    $open = "transaction";
    require_once __DIR__."/../../autoload/autoload.php";
    
    if(isset($_GET['page']))
    {
        $p = $_GET['page'];
    }
    else
    {
        $p = 1;
    }

    $sql = "SELECT transaction.*, users.name as nameuser, users.phone as phoneuser FROM transaction LEFT JOIN users ON users.id = transaction.users_id ORDER BY ID DESC ";
    $transaction = $db->fetchJone('transaction',$sql,$p,3,true); 

    if (isset($transaction['page'])) 
    {
        $sotrang = $transaction['page'];
        unset($transaction['page']);
    }
   
    
?>

<?php require_once __DIR__."/../../layouts/header.php"; ?>
    <!-- Content -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Danh sách đơn hàng
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Danh mục
                </li>
            </ol>
            <div class="clearfix">
                <?php if (isset($_SESSION['success'])) :?>
                    <div class="alert alert-success">
                        <?php echo $_SESSION['success']; unset($_SESSION['success']) ?>
                    </div>
                <?php endif ?>

                <?php if (isset($_SESSION['error'])) :?>
                    <div class="alert alert-danger">
                        <?php echo $_SESSION['error']; unset($_SESSION['error']) ?>
                    </div>
                <?php endif ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>NameUser</th>
                        <th>PhoneUser</th>
                        <th>Trang Thai</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $stt = 1; foreach ($transaction as $item): ?>
                        <tr>
                            <td><?php echo $stt ?></td>
                            <td><?php echo $item['nameuser'] ?></td>
                            <td><?php echo $item['phoneuser'] ?></td>
                            <td>
                                <a href="status.php?id=<?php echo $item['id'] ?>" class="btn btn-xs <?php echo $item['status'] == 0 ? 'btn-danger' : 'btn-info' ?>"><?php echo $item['status'] == 0 ? 'Chưa xử lý' : 'Đã xử lý' ?></a>
                            </td>
                            <td>
                
                                <a class="btn btn-xs btn-success" href="delete.php?id=<?php echo $item['id'] ?>"><i class="fa fa-times"></i>Xóa</a>
                            </td>
                        </tr>
                    <?php $stt++; endforeach ?>
                </tbody>
            </table>
            <div class="pull-right">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <?php for( $i = 1 ; $i <= $sotrang ; $i++ ): ?>
                            <?php
                                if (isset($_GET['page'])) 
                                {
                                    $p = $_GET['page'];
                                }
                                else
                                {
                                    $p = 1;
                                }
                            ?>
                            <li class=" <?php echo ($i == $p) ? 'active' : '' ?> ">
                                <a href="?page= <?php echo $i; ?> "> <?php echo $i; ?></a>
                        <?php endfor; ?>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
<?php require_once __DIR__."/../../layouts/footer.php"; ?>
                
                
                