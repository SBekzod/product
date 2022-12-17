<?php
$site_path = $_SERVER['DOCUMENT_ROOT'];
include_once($site_path . "/lib/header.php");
include_once($site_path . "/lib/navbar.php");


?>

<div class="container">
  <form action="/ajax/product_ajax.php" method="POST" enctype="multipart/form-data">
    <p class="text-center mt-3 fs-2">LET'S CREATE</p>

    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingInput"  placeholder="Name" name="product_name">
      <label for="floatingInput">Name</label>
    </div>
    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingInput"  placeholder="Price" name="product_price" >
      <label for="floatingInput">Price</label>
    </div>
    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="floatingInput"  placeholder="Creator" name="product_creator" >
      <label for="floatingInput">Creator</label>
    </div>
    <div class="form-floating mb-3">
      <input type="file" class="form-control" id="floatingInput"  placeholder="Upload"  name="product_img">
    </div>
    <div class="d-flex justify-content-end">
      <button name="action" value="create_product" class="btn btn-primary">Save</button>
    </div>
  </form>
</div>

<?php
include_once($site_path . "/lib/footer.php");
?>

