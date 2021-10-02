<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        
        require("includes/Head.php");
    ?>
    <title>E-Shop</title>
</head>
<body>
<?php
require("includes/Header.php");
require("includes/Navigation.php");
?>

<!-- section -->
<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!--  Product Details -->
				<div class="product product-details clearfix">
					<div class="col-md-6">
						<div id="product-main-view">
							<div class="product-view">
								<img src="<?php echo $data->photo ?>" alt="">
							</div>
						
						</div>
						<div id="product-view">
							<div class="product-view">
								<img src="<?php echo $data->photo ?>" alt="">
							</div>
							
						</div>
					</div>
					<div class="col-md-6">
						<div class="product-body">
							<div class="product-label">
								<span>New</span>
								<span class="sale"><?php echo $data->promo ?>%</span>
							</div>
							<h2 class="product-name"><?php echo $data->designation ?></h2>
							<h3 class="product-price"><?php echo $data->prix ?>DT<del class="product-old-price"><?php echo (($data->prix)*($data->promo)/100) ?>Dt</del></h3>
							<div>
								<div class="product-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o empty"></i>
								</div>
								<a href="#">3 Review(s) / Add Review</a>
							</div>
							<p><strong>Availability:</strong> In Stock</p>
							<p><strong>Brand:</strong> <?php echo $data->categorie ?></p>
							<p> <?php echo $data->description ?>
								</p>
						
						<!-- gestion panier -->

								<form  action=  "http://localhost/test/cart/addCart"  method="POST" >
								<div class="qty-input">
									<span class="text-uppercase">QTY: </span>
									<input class="input" type="number" name="qte"  >
									
								
									<input type="hidden" name="item_id" value="<?php echo $data->code ?>" >
									
									
									
								</div>
								<button class="main-btn icon-btn" type="submit"><i class="fa fa-heart"></i> Add to Cart</button>
							</form>
						</div>
					</div>
							</div>
						</div>
					</div>

				</div>
				<!-- /Product Details -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->



<?php
require("includes/Footer.php");
?>

</body>
</html>

