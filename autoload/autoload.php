<?php
	session_start();
	 require_once __DIR__."/../libraries/Database.php";
	 require_once __DIR__."/../libraries/Function.php";
	 $db = new Database;

	 define("ROOT", $_SERVER['DOCUMENT_ROOT'] ."/Doanphp/public/uploads/");


	 //Hiển thị danh sách danh mục
	 $category = $db->fetchAll("category");


	 // hiện thị danh sách sản phẩm
	 $sqlNew = "SELECT * FROM product WHERE 1 ORDER BY ID DESC LIMIT 5";
	 $productNew = $db->fetchsql($sqlNew);


?>