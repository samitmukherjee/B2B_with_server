<?php
error_reporting(0);

header('Cache-Control: max-age=900');

	include ("config.php");

	$product_name = $_POST['product_name'];
	$product_per_page = $_POST['product_per_page'];
	$sort_filter = $_POST['sort_filter'];
	// $sub_categories = $_POST['sub_categories'];
	

	// echo "VALUE: ".$sort_filter."";

	if(isset($product_name) || isset($product_per_page) && isset($sort_filter)){

			if($sort_filter == "Price: Low to High"){
				$query_show_products = "SELECT * FROM product_details, business_details 
						WHERE business_details.business_id = product_details.business_id 
						AND product_name LIKE '".$product_name."%' AND product_details.product_status = 1 ORDER BY product_price ASC LIMIT $product_per_page ";
						$result_show_products = mysqli_query($conn,$query_show_products);
			}
			
			elseif($sort_filter == "Price: High to Low"){
				$query_show_products = "SELECT * FROM product_details, business_details 
						WHERE business_details.business_id = product_details.business_id 
						AND product_name LIKE '".$product_name."%' AND product_details.product_status = 1 ORDER BY product_price DESC LIMIT $product_per_page ";
						$result_show_products = mysqli_query($conn,$query_show_products);
			}
			else{
				$query_show_products = "SELECT * FROM product_details, business_details 
						WHERE business_details.business_id = product_details.business_id 
						AND product_name LIKE '".$product_name."%' AND product_details.product_status = 1 ORDER BY brand_name ASC LIMIT $product_per_page ";
						$result_show_products = mysqli_query($conn,$query_show_products);
			}

	}
	

	$product_count = mysqli_num_rows($result_show_products);

	while($product = mysqli_fetch_assoc($result_show_products)){

?>
<div class="item col-lg-4 col-md-6" id="append_card">
	<article class="popular-listing-post">
		
		<div class="post-thumb">
		<form action="./product_page.php" method="POST">
			<input type="hidden" name= "product_name" value="<?php echo $product['product_name'] ?>">
			<input type="hidden" name= "business_name" value="<?php echo $product['legal_name'] ?>">
			<button type="submit" style="background: transparent; border:none;">
			<img src=" <?php 
			echo $product['product_image_1'] 
			?> " alt="img" class="img-responsive" style = "width: 100%; height: 200px">
			<!-- <div class="overlay"></div> -->
			</button>
		</form>
		</div>
		<div class="post-detail	s">
			<div class="post-meta">
			<h4><?php 
				echo $product['brand_name']  ?></h4>
				<p> <?php 
				echo $product['product_name'] ?></p>
				<div class="location">
					<i class="fa fa-inr" aria-hidden="true"></i>
					<h5><a href="javascript:void(0)"><?php 
					echo $product['product_price'] ?></a></h5>
				</div>
			</div>
			<div class="post-entry-block">
				<p class="post-entry" style = "height: 70px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
					<?php  
					echo $product['product_description']  ?>
				</p>
			</div>
			<div class="post-footer">
			<div class="contact-no">													
					<form action="./inquiry.php" method="POST">														
					<input type="hidden" name= "product_id" value="<?php echo $product['product_id'] ?>">														
						<button type="submit" id="<?php echo $product['product_id'] ?>" style="width: 170px; background: transparent; border:none; margin-left:40%" value="Contact Dealer">
						<i class="fa fa-phone" aria-hidden="true"></i>Contact Dealer</button>
					</form>
			</div>
				<!-- <div class="schedule-info closed">
					<i class="fa fa-clock-o" aria-hidden="true"></i>
					<h5>Closed Now</h5>
				</div> -->
			</div>
		</div>
	</article>
</div>

<?php

	}

?>