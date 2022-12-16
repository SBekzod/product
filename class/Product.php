<?php

class Product {

  public function __construct($con) {
    $this->con = $con;
  }

  public function createProduct($data, $image) {

    $random_named = uniqid();
    $thumbnail_path = "uploads/products/" . $random_named . '.png';
    $finalThumbnailPath = $_SERVER['DOCUMENT_ROOT'] . "/" . $thumbnail_path;
    $isUploaded = move_uploaded_file($image["tmp_name"], $finalThumbnailPath);

    if ($isUploaded) {
      $query = $this->con->prepare("INSERT INTO mit_product.products (product_name, product_price, product_creator, product_img)
                                        VALUES(:product_name, :product_price, :product_creator, :product_img)");

      $query->bindParam(":product_name", $data['product_name']);
      $query->bindParam(":product_price", $data['product_price']);
      $query->bindParam(":product_creator", $data['product_creator']);
      $query->bindParam(":product_img", $thumbnail_path);

      $query->execute();
      return $this->con->lastInsertId();
    } else return 0;
  }

  public function getAllProducts($no = null) {
    if ($no) {
      $query = $this->con->prepare("SELECT * FROM mit_product.products WHERE no=:no");
      $query->bindParam(":no", $no);
      $query->execute();
      return $query->fetch(PDO::FETCH_ASSOC);
    } else {
      $query = $this->con->prepare("SELECT * FROM mit_product.products WHERE 1=1");
      $query->execute();
      return $query->fetchAll(PDO::FETCH_ASSOC);
    }
  }

}