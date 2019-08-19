<?php

	require_once __DIR__. "/autoload/autoload.php";

	

	//unset($_SESSION['cart']);
	$sqlHomeCate = "SELECT name, id FROM category WHERE home = 1 ORDER BY updated_at";
	$CategoryHome = $db->fetchsql($sqlHomeCate);
	
	$data = [];

	
	
	foreach ($CategoryHome as $item) 
	{
		$CateID = intval($item['id']);
		$sql = "SELECT * FROM product WHERE category_id = $CateID ";
		$ProductHome = $db->fetchsql($sql);
		$data[$item['name']] = $ProductHome;
		

	}

?>

<?php require_once __DIR__. "/layouts/header.php"; ?>
    <div class="col-md-9 bor">
        <section id="slide" class="">
            <img src="/Doanphp/public/frontend/images/BANNER-ADIDAS-ALPHATYPE.jpg" class="" width="100%">
        </section>
        <section class="box-main1">
        	<?php foreach ($data as $key => $value): ?>

        		<h3 class="title-main" style="text-align: left;"><a href="javascript:void(0)"> <?php echo $key ?> </a> </h3>
		            <div class="showitem">
		            	<?php foreach ($value as $item): ?>
		            		<div class="col-md-3 item-product bor">
			                    <a href="chi-tiet-san-pham.php?id=<?php echo $item['id'] ?>">
			                    	<img src="<?php echo uploads() ?>/product/<?php echo $item['thunbar'] ?>" class="" width="100%" height="180">
			                    </a>
			                    <div class="info-item">
			                        <a href="chi-tiet-san-pham.php?id=<?php echo $item['id'] ?>"><?php echo $item['name'] ?></a>
			                        <p><strike class="sale"><?php echo formatPrice($item['price']) ?></strike> <b class="price"><?php echo 
			                        formatPriceSale($item['price'],$item['sale']) ?></b></p>
			                    </div>
			                    <div class="hidenitem">
			                        <p><a href="chi-tiet-san-pham.php?id=<?php echo $item['id'] ?>"><i class="fa fa-search"></i></a></p>
			                        <p><a href=""><i class="fa fa-heart"></i></a></p>
			                        <p><a href="addcart.php?id=<?php echo $item['id'] ?>"><i class="fa fa-shopping-basket"></i></a></p>
			                    </div>
			                </div>
		            	<?php endforeach ?>
		            </div>

        	<?php endforeach ?>
        	<!--<div class="pull-right">
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
            </div>-->
            
        </section>
    </div>
<?php require_once __DIR__. "/layouts/footer.php";  ?>
                
                