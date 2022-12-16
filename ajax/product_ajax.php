<?php
$site_path = $_SERVER['DOCUMENT_ROOT'];
include_once($site_path . "/lib/config.php");
include_once($site_path . "/class/Product.php");


$product = new Product($con);

$data = $_POST;
$action = $_POST['action'];






switch ($action) {
  case 'create_product':
    $result = $product->createProduct($data, $_FILES['product_img']);
    if ($result == 0) throw new Exception("product creation failed!");
    echo "<script>
                     alert('success'); window.location.href = '/index.php';
                </script>";
    break;

  default:
    break;
}


?>