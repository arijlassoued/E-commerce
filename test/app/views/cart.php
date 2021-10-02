
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

<div class="col-md-12">
						<div class="order-summary clearfix">
							<div class="section-title">
								<h3 class="title">Order Review</h3>
							</div>
							<table class="shopping-cart-table table">
								<thead>
									<tr>
										<th>Product</th>
										<th></th>
										<th class="text-center">Price</th>
										<th class="text-center">Quantity</th>
										<th class="text-center">Total</th>
										<th class="text-right"></th>
									</tr>
								</thead>
								<tbody>
								
								<?php foreach($aa as $prod ){
									foreach($data as $cart ){
										if($prod->code == $cart->product_id){
									
									?>
									<tr>
										<td class="thumb"><img src="<?php echo $prod->photo ?>" alt=""></td>
										<td class="details">
											<a href="#">Product Name </a>
											<ul>
												
												<li><span><?php echo ($prod->designation );?></span></li>
											</ul>
										</td>
										<td class="price text-center"><strong>Dt<?php echo (($prod->prix/100)*(100-$prod->promo))?></strong><br><del class="font-weak"><small>Dt<?php echo ($prod->prix )?></small></del></td>
										<td class="qty text-center"><input class="input" type="number" value="<?php echo ($cart->qte );?>"></td>
										<td class="total text-center"><strong class="primary-color"><?php echo (($prod->prix/100)*(100-$prod->promo)*($cart->qte))?></strong></td>
										
										<td>
              								<form  action=  "<?php echo URLROOT ?>/cart/deleteCart"  method="POST" >
                        					<button type="submit" class="btn btn-default add-product" data-dismiss="modal" aria-label="Close">Delete
                        					<span aria-hidden="true">&times;</span>
                        					</button>
											<input type="hidden" name="product_id" value="<?php echo($cart->product_id);?>" >
											</form>
             
              </td>
									</tr>
									<?php }}} ?>
								</tbody>
								<tfoot>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>SUBTOTAL</th>
										<th colspan="2" class="sub-total">$97.50</th>
									</tr>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>SHIPING</th>
										<td colspan="2">Free Shipping</td>
									</tr>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>TOTAL</th>
										<th colspan="2" class="total">$97.50</th>
									</tr>
								</tfoot>
							
							</table>
							<div class="pull-right">
								<button class="primary-btn">Payer</button>
							</div>
						</div>

					</div>




					<?php
require("includes/Footer.php");
?>

</body>
</html>
