<!DOCTYPE html>
<html>
    <head>
        <title>MaxShop</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="/Doanphp/public/frontend/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="/Doanphp/public/frontend/css/bootstrap.min.css">
        <script  src="/Doanphp/public/frontend/js/jquery-3.2.1.min.js"></script>
        <script  src="/Doanphp/public/frontend/js/bootstrap.min.js"></script>
        <!---->
        <link rel="stylesheet" type="text/css" href="/Doanphp/public/frontend/css/slick.css"/>
        <link rel="stylesheet" type="text/css" href="/Doanphp/public/frontend/css/slick-theme.css"/>
        <!--slide-->
        <link rel="stylesheet" type="text/css" href="/Doanphp/public/frontend/css/styledoan.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    </head>
    <body>
        <div id="wrapper">
            <!---->
            <!--HEADER-->
            <div id="header">
                <div id="header-top">
                    <div class="container">
                        <div class="row clearfix">
                            <div class="col-md-6" id="header-text">
                            <a>HOANGTAM76</a><b>MANG ĐẾN CHẤT LƯỢNG HOÀN HẢO</b>
                            </div>
                            <div class="col-md-6">
                                <nav id="header-nav-top">
                                    <ul class="list-inline pull-right" id="headermenu">
                                        <?php if (isset($_SESSION['name_user'])): ?>
                                            <li style="color: green">
                                                Xin Chào : <?php echo $_SESSION['name_user'] ?>
                                            </li>
                                            <li>
                                                <a href=""><i class="fa fa-user"></i> Tài khoản <i class="fa fa-caret-down"></i></a>
                                                <ul id="header-submenu">
                                                    <li><a href="">Thông tin</a></li>
                                                    <li><a href="gio-hang.php">Giỏ hàng</a></li>
                                                    <li><a href="thoat.php"><i class="fa fa-share-square-o"></i>Thoát</a></li>
                                                </ul>
                                            </li>
                                            
                                        <?php else : ?>
                                            <li>
                                                <a href="dang-nhap.php"><i class="fas fa-sign-in-alt"></i> Đăng nhập</a>
                                            </li>
                                            <li>
                                                <a href="dang-ky.php"><i class="fas fa-sign-out-alt"></i> Đăng ký</a>
                                            </li>
                                        <?php endif; ?>
                                        
                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row" id="header-main">
                        <div class="col-md-5">
                            <form class="form-inline" method="get" action="search.php">
                                <div class="form-group">
                                    <!--<label>
                                        <select name="category" class="form-control">
                                            <option> All Category</option>
                                            <option> Adidas </option>
                                            <option> Nike </option>
                                            <option> Balenciaga </option>
                                            <option> Converse </option>
                                            <option> Fila </option>
                                        </select>
                                    </label>-->
                                    <input type="text" name="search" placeholder=" input keywork" class="form-control">
                                    <button type="submit" name="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-4">
                            <a href="">
                            <img src="/Doanphp/public/frontend/images/logo-default.png">
                            </a>
                        </div>
                        <div class="col-md-3" id="header-right">
                            <div class="pull-right">
                                <div class="pull-left">
                                    <i class="glyphicon glyphicon-phone-alt"></i>
                                </div>
                                <div class="pull-right">
                                    <p id="hotline">HOTLINE</p>
                                    <p>0986420994</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--END HEADER-->
            <!--MENUNAV-->
            <div id="menunav">
                <div class="container">
                    <nav>
                        <div class="home pull-left">
                            <a href="index.php">Trang chủ</a>
                        </div>
                        <!--menu main-->
                        <ul id="menu-main">
                            <li>
                                <a href="/Doanphp/contact/index.php">Contact</a>
                            </li>
                        </ul>
                        <!-- end menu main-->
                        <!--Shopping-->
                        <ul class="pull-right" id="main-shopping">
                            <li>
                                <a href="gio-hang.php"><i class="fa fa-shopping-basket"></i> My Cart </a>
                            </li>
                        </ul>
                        <!--end Shopping-->
                    </nav>
                </div>
            </div>
            <!--ENDMENUNAV-->
            <div id="maincontent">
                <div class="container">
                    <div class="col-md-3  fixside" >
                        <div class="box-left box-menu" >
                            <h3 class="box-title"><i class="fa fa-list"></i>  Danh mục</h3>
                            <!-- <ul>
                                <li>
                                    <a href="">Máy tính  <span class="badge pull-right">14</span></a>
                                    <ul>
                                        <li><a href=""> Sonny 1</a></li>
                                        <li><a href=""> Sonny 2</a></li>
                                        <li><a href=""> Sonny 3</a></li>
                                        <li><a href=""> Sonny 4</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="">Máy giặt  <span class="badge pull-right">14</span></a>
                                    <ul>
                                        <li><a href=""> Sonny 1</a></li>
                                        <li><a href=""> Sonny 2</a></li>
                                        <li><a href=""> Sonny 3</a></li>
                                        <li><a href=""> Sonny 4</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="">Đồ điện  <span class="badge pull-right">14</span></a>
                                </li>
                                <li>
                                    <a href=""> Thiết bị văn phòng  <span class="badge pull-right">14</span> </a>
                                    <ul>
                                        <li><a href=""> Sonny 1</a></li>
                                        <li><a href=""> Sonny 2</a></li>
                                        <li><a href=""> Sonny 3</a></li>
                                        <li><a href=""> Sonny 4</a></li>
                                    </ul>
                                </li>
                            </ul> -->
                            <ul>
                                <?php foreach ($category as $item): ?>
                                    <li><a href="danh-muc-san-pham.php?id=<?php echo $item['id'] ?>"><?php echo $item['name'] ?></a></li>
                                <?php endforeach ?>
                                
                            </ul>
                        </div>
                        <div class="box-left box-menu">
                            <h3 class="box-title"><i class="fa fa-warning"></i>  Sản phẩm mới </h3>
                            <!--  <marquee direction="down" onmouseover="this.stop()" onmouseout="this.start()"  > -->
                            <ul>
                                <?php foreach ($productNew as $item): ?>
                                     <li class="clearfix">
                                        <a href="chi-tiet-san-pham.php">
                                            <img src="<?php echo uploads() ?>product/<?php echo $item['thunbar'] ?>" class="img-responsive pull-left" width="80" height="80">
                                            <div class="info pull-right">
                                                <p class="name"> <?php echo $item['name'] ?></p >
                                                <b class="price"><?php echo formatPrice($item['price']) ?></b><br>
                                                <!--<b class="sale"><?php echo formatPrice($item['price']) ?></b><br> -->
                                                <span class="view"><i class="fa fa-eye"></i> 10 </span>
                                            </div>
                                        </a>
                                    </li>
                                <?php endforeach ?>
                               
                                
                            </ul>
                            <!-- </marquee> -->
                        </div>
                        
                    </div>