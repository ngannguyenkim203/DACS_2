<?php

   include_once './inc/header.php';


?>
<?php
if (isset($_GET['proid']) || $_GET['proid'] != NULL) {
	$id = $_GET['proid'];
}
?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
	$quantity = $_POST['quantity'];
	$AddtoCart = $ct->add_to_cart($id, $quantity);
}
?>


<?php
$customer_id = Session::get('customer_id');
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['compare'])) {
	$productId = $_POST['productId'];
	$insertCompare = $product->insertCompare($productId, $customer_id);
}
?>


<div class="container-xl shadow p-3 mb-5 bg-body rounded">  
<?php
			$product_details = $product->getproduct_details($id);
			if ($product_details) {
				while ($result_details = $product_details->fetch_assoc()) {

			?>
							<div class="row">
								<div class="col-8">
						<div class="car mb-3" style="max-width: 800px;">
						<div class="row g-0">
							<div class="col-md-4 ">
							<img src="admin/uploads/<?php echo $result_details['image'] ?>" class="img-fluid rounded-start" alt="...">
							</div>
							<div class="col-md-1 "></div>
							<div class="col-md-7 ">
							<div class="desc span_3_of_2">
							<h2><?php echo $result_details['productName'] ?></h2>
							<p><?php echo $fm->textShorten($result_details['product_desc'], 5000) ?></p>
							<div class="price">
								<p>Giá : <span>$<?php echo $result_details['price'] . " " . "VND" ?></span></p>
								<p>Loại món ăn : <span><?php echo $result_details['catName'] ?></span></p>
								<p>Nhóm món ăn :<span><?php echo $result_details['brandName'] ?></span></p>
							</div>
							<div class="add-cart">
								<form action="" method="post">
									<input type="number" class="buyfield" name="quantity" value="1" min="1" />
									<input type="submit" class="buysubmit" name="submit" value="Thêm" />
								</form>
								<?php if (isset($AddtoCart)) {
									echo $AddtoCart;
								} ?>
							</div>
							<div class="add-cart">
								<form action="" method="POST">
									<!-- <a href="?wlist=<?php echo $result_details['productId'] ?>" class="buysubmit">Save to Wishlist</a> -->
									<!-- <a href="?compare=<?php echo $result_details['productId'] ?>" class="buysubmit">Compare Product</a> -->
									<input type="hidden" class="buysubmit" name="productId" value="<?php echo $result_details['productId'] ?>" />
									
							 
									<?php
									if (isset($insertCompare)) {
										echo $insertCompare;
									}
									?>
								</form>
							</div>
						</div>
					
    </div>
	<?php
				}
			}
			?>
  </div>
</div>
</div>

<div class="col-4">
<div class="rightsidebar span_3_of_1">
				<h2>Các loại</h2>
				<?php
				$get_category = $cat->show_category_fontend();
				if ($get_category) {
					while ($result_cat = $get_category->fetch_assoc()) {
				?>
						<ul>
							<li><a style="text-decoration: none; font-size: 18px; color: black;" href="productbycat.php?catid=<?php echo $result_cat['catId']; ?>"><?php echo $result_cat['catName']; ?></a></li>
						</ul>
				<?php
					}
				}
				?>
			</div>
</div>
</div>
</div>
<div class="container pt-5">
          
  
        
 

        <div class="container text-center ">
          <div class="row align-items-start shadow p-3 mb-5 bg-body rounded">
          
          <?php
                $getproduct_feathered = $product->getproduct_feathered();
                if($getproduct_feathered){
                  while($result = $getproduct_feathered->fetch_assoc()){
                
			     ?>
               <div class="col-3 ">
               <div class="card" style="width: 15rem; margin-top: 20px;">
               <a href="preview.php?proid=<?php echo $result['productId'] ?>"><img style="width:200px; height:100px" src="admin/uploads/<?php echo $result['image'] ?>" alt=""></a>
                <div class="card-body">
                <h5 class="card-title"><?php echo $result['productName'] ?></h5>
                <p class="card-text"><?php echo $fm->textShorten($result['product_desc'], 50)?></em></p>
                <p><span class="price"><?php echo ($result['price']).''.'VNĐ' ?></span></p>
   
                <a href="preview.php?proid=<?php echo $result['productId'] ?>" class="btn btn-outline-dark btn-sm ">xem</a>
                </div>
              </div>
              </div>
              <?php
              }
            }
              ?>
            
            
           
          </div>

        </div>

  <?php
   include './inc/footer.php';
   
?>
      

