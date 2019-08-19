<?php 
	require_once __DIR__. "/autoload/autoload.php";


	if (isset($_REQUEST['submit'])) 
	{
		$search = $_GET['search'];

		if (empty($search)) 
		{
			echo "<p>Ban chưa nhập</p>";
		}
		else
		{
			$sql = "SELECT * FROM product WHERE name LIKE '%$search%' or price  like '%$search%'";
			$resulf = $db->fetchsql($sql);

		}
	}
	


	
	
?>

<?php require_once __DIR__. "/layouts/header.php"; ?>
    <div class="col-md-9 bor">
        
        <section class="box-main1">
            <h3 class="title-main" style="text-align: center;"><a href="javascript:void(0)"> Danh sách sản phẩm được tìm kiếm  </a> </h3>
            <!-- Noi Dung -->
            <div class="showitem clearfix">
            <?php foreach ($resulf as $item): ?>
         		<div class="col-md-3 item-product bor">
                    <a href="">
                    	<img src="<?php echo uploads() ?>/product/<?php echo $item['thunbar'] ?>" class="" width="100%" height="180">
                    </a>
                    <div class="info-item">
                        <a href=""><?php echo $item['name'] ?></a>
                        <p><strike class="sale"><?php echo formatPrice($item['price']) ?></strike> <b class="price"><?php echo 
                        formatPriceSale($item['price'],$item['sale']) ?></b></p>
                    </div>
                    <div class="hidenitem">
                        <p><a href=""><i class="fa fa-search"></i></a></p>
                        <p><a href=""><i class="fa fa-heart"></i></a></p>
                        <p><a href="gio-hang.php"><i class="fa fa-shopping-basket"></i></a></p>
                    </div>
                </div>	
         	<?php endforeach ?>         	
        		
        </div>
        </section>
    </div>
<?php require_once __DIR__. "/layouts/footer.php";  ?>
                
                