<?php
$site_path = $_SERVER['DOCUMENT_ROOT'];
include_once($site_path . "/lib/header.php");
include_once($site_path . "/lib/navbar.php");


?>

<div class="container">
  <form action="/ajax/product_ajax.php" method="POST" enctype="multipart/form-data">
    <p class="text-center mt-3 fs-2">LET'S CREATE</p>

    <div class="input-group mb-3">
      <input type="text" class="form-control" name="product_name">
      <span class="input-group-text">Name</span>
    </div>
    <div class="input-group mb-3">
      <input type="text" class="form-control" name="product_price" >
      <span class="input-group-text">Price</span>
    </div>
    <div class="input-group mb-3">
      <input type="text" class="form-control" name="product_creator" >
      <span class="input-group-text">Creator</span>
    </div>
    <div class="input-group mb-3">
      <input type="file" class="form-control"  name="product_img">
      <label class="input-group-text" >Upload</label>
    </div>
    <div class="d-flex justify-content-end">
      <button name="action" value="create_product" class="btn btn-primary">Save</button>
    </div>
  </form>
</div>

<?php
include_once($site_path . "/lib/footer.php");
?>

