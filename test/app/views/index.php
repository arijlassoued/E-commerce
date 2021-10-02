

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
require("includes/Navigation.php"); ?>


<!-- HOME -->
<div id="home">
		<!-- container -->
		<div class="container">
			<!-- home wrap -->
			<div class="home-wrap">
				<!-- home slick -->
				<div id="home-slick">
					<!-- banner -->
					<div class="banner banner-1">
						<img src="http://localhost/test/public/img/banner01.jpg" alt="">
						
					</div>
					<!-- /banner -->

					<!-- banner -->
					<div class="banner banner-1">
						<img src="http://localhost/test/public/img/banner02.jpg" alt="">
						<div class="banner-caption">
							<h1 class="primary-color">HOT DEAL<br><span class="white-color font-weak">Up to 50% OFF</span></h1>
							<button class="primary-btn"><a href="http://localhost/test/produit/afficheProd">Shop Now</a></button>
						</div>
					</div>
					<!-- /banner -->

					<!-- banner -->
					<div class="banner banner-1">
						<img src="http://localhost/test/public/img/banner03.jpg" alt="">
						<div class="banner-caption">
							<h1 class="white-color">New Product <span>Collection</span></h1>
							<button class="primary-btn">Shop Now</button>
						</div>
					</div>
					<!-- /banner -->
				</div>
				<!-- /home slick -->
			</div>
			<!-- /home wrap -->
		</div>
		<!-- /container -->
	</div>
	<!-- /HOME -->



	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section-title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Deals Of The Day</h2>
						<div class="pull-right">
							<div class="product-slick-dots-1 custom-dots"></div>
						</div>
					</div>
				</div>
				<!-- /section-title -->

				<!-- banner -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="banner banner-2">
						<img src="http://localhost/test/public/img/gaminPc/p5.jpg" alt="">
						<div class="banner-caption">
							<h2 class="white-color">NEW<br>COLLECTION</h2>
							<button class="primary-btn">Shop Now</button>
						</div>
					</div>
				</div>
				<!-- /banner -->

				<!-- Product Slick -->
			
				<div class="col-md-9 col-sm-6 col-xs-6">
					<div class="row">
						<div id="product-slick-1" class="product-slick">
						<?php foreach($aa as $prod ){?>
							<!-- Product Single -->
							<div class="product product-single">
								<div class="product-thumb">
									<div class="product-label">
										<span>New</span>
										
									</div>
									
									<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> <a href="http://localhost/test/produit/propriete?code=<?php echo $prod->code ?>"> Quick view</a></button>
									<img src="<?php echo $prod->photo ?>" alt="">
								</div>
								<div class="product-body">
									<h3 class="product-price"><?php echo $prod->prix ?>Dt</h3>
									<div class="product-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o empty"></i>
									</div>
									<h2 class="product-name"><a href="#"><?php echo $prod->designation ?></a></h2>
									<div class="product-btns">
										<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
										<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
										<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> <a href="cart_view.php"> Add to Cart</a></button>
									</div>
								</div>
							</div>
							<?php } ?> 
							<!-- /Product Single -->
						</div>
					</div>
				</div>
				<!-- /Product Slick -->
			</div>
			<!-- /row -->

			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Deals Of The Day</h2>
						<div class="pull-right">
							<div class="product-slick-dots-2 custom-dots">
							</div>
						</div>
					</div>
				</div>
				<!-- section title -->

				<!-- Product Single -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single product-hot">
						<div class="product-thumb">
							<div class="product-label">
								<span class="sale">-20%</span>
							</div>
							
							<button class="main-btn quick-view"><i class="fa fa-search-plus"></i><a href="http://localhost/test/produit/propriete?code=<?php echo $prod->code ?>"> Quick view</a></button>
							<img src="http://localhost/test/public/img/tablette/t9.jpg" alt="">
						</div>
						<div class="product-body">
							<h3 class="product-price">DT400 <del class="product-old-price">DT240</del></h3>
							<div class="product-rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o empty"></i>
							</div>
							<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
							<div class="product-btns">
								<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
								<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /Product Single -->

				<!-- Product Slick -->
				<div class="col-md-9 col-sm-6 col-xs-6">
					<div class="row">
						<div id="product-slick-2" class="product-slick">
							<!-- Product Single -->
							<?php foreach($dump as $prodd ){?>
							<div class="product product-single">
								<div class="product-thumb">
								<div class="product-label">
											<span>discount</span>
											<span class="sale"><?php echo $prodd->promo ?>%</span>
										</div>
									<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> <a href="http://localhost/test/produit/propriete?code=<?php echo $prodd->code ?>"> Quick view</a></button>
									<img src="<?php echo $prodd->photo ?>" alt="">
								</div>
								<div class="product-body">
									<h3 class="product-price"><?php echo $prodd->prix ?>Dt <del class="product-old-price"><?php echo (($prodd->prix)*($prodd->promo)/100) ?>Dt</del></h3>
									<div class="product-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o empty"></i>
									</div>
									<h2 class="product-name"><a href="#"><?php echo $prodd->designation ?></a></h2>
									<div class="product-btns">
										<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
										<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
										<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
									</div>
								</div>
							</div>
							<!-- /Product Single -->
							<?php } ?>
						
						</div>
					</div>
				</div>
				<!-- /Product Slick -->
			</div>
			<!-- /row -->
	
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

	<!-- section -->
	<div class="section section-grey">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<h1>THE MSI GAMING BRAND</h1>
			<div class="row">
			
				<!-- banner -->
				<div class="col-md-8">
					<div class="banner banner-1">
						<img src="http://localhost/test/public/img/banner13.jpg" alt="">
						<div class="banner-caption text-center">
							<h1 class="primary-color">for more information<br><span class="white-color font-weak">on our brand</span></h1>
							<button class="primary-btn"><a href="https://fr.msi.com/" target="_blank"> Quick view</a></button>
						</div>
					</div>
				</div>
				<!-- /banner -->

				<!-- banner -->
				<div class="col-md-4 col-sm-6">
					<a class="banner banner-1" href="#">
						<img src="http://localhost/test/public/img/b1.jpg" alt="">
						<div class="banner-caption text-center">
							<h2 class="white-color">NEW COLLECTION</h2>
						</div>
					</a>
				</div>
				<!-- /banner -->

				<!-- banner -->
				
				<div class="col-md-4 col-sm-6">
					<a class="banner banner-1" href="#">
						<img src="http://localhost/test/public/img/b2.jpg" alt="">
						
					</a>
				</div>
				<!-- /banner -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
		
		</div>
		<!-- /container -->
	</div>
	<!-- /section --> 
	
  <?php
require("includes/Footer.php");
?>

</body>
</html>