

<?php
	$open = "category";
	require_once __DIR__. "/../../autoload/autoload.php";

	$id = intval(getInput('id'));


	$EditProduct = $db->fetchID("product",$id);
	if( empty($EditProduct))
	{
		$_SESSION['error'] = " Dữ liệu không tồn tại";
		redirectAdmin("product");
	}

	/**
	 * Kiểm tra danh mục có sản phẩm
	 */

	$num = $db->delete("product",$id);
	if ($num > 0)
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