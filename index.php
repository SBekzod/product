<?php
$site_path = $_SERVER['DOCUMENT_ROOT'];

include_once($site_path . "/lib/header.php");
include_once($site_path . "/class/Product.php");
include_once($site_path . "/lib/navbar.php");

$product = new Product($con);

$products_data = $product->getAllProducts();

// MVC => CMV => Controller & Model & View

?>


<div class="container">

  <div class="card" style="width: 18rem; margin: 30px">
    <img src="https://media.cnn.com/api/v1/images/stellar/prod/221223090506-01-bugatti-chiron-profilee.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>

  <h1 class="display-3 mt-5 text-center">Welcome to Apple Store</h1>
  <div class="d-flex flex-wrap">
    <?php
    foreach ($products_data as $key => $value) { ?>
      <div class="card p-3 bg-white m-3" style="width: 18rem;"><i class="fa fa-apple"></i>
        <div class="about-product text-center mt-2">
          <img src="<?= "/" . $value['product_img'] ?>" width="90%" height="161px">
          <div>
            <h4 style="margin-bottom: 12px; margin-top: 15px">
              <a href="/chosen_product.php?no=<?= $value['no'] ?>"
                 class="text-decoration-none link-secondary"><?= $value['product_name'] ?></a>
            </h4>
          </div>
        </div>
        <div class="stats mt-2">
          <div class="d-flex justify-content-between p-price">
            <span>Price</span><span>$<?= $value['product_price'] ?></span></div>
          <div class="d-flex justify-content-between p-price">
            <span>Product By</span><span><?= $value['product_creator'] ?></span></div>
        </div>
      </div>
    <?php
    } ?>
  </div>

</div>

<?php
include_once($site_path . "/lib/footer.php");
?>
