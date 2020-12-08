<?php

    include ("config.php");

	$product_id = $_POST['product_id'];
	
    echo "".$product_id."<br>";

    if(isset($product_id)){

        $query_quick_view = "SELECT * FROM product_details WHERE product_id = '$product_id' ";
        $result_quick_view =  mysqli_query($conn, $query_quick_view);
    }

	$product_row = mysqli_fetch_assoc($result_quick_view);
	
	echo $query_quick_view;

    $product_row['product_id'];

?>
<!-- <div class="listing-modal-content-section"> -->
<!-- <div class="container">
	<div class="modal fade listing-modal" id="post_listing_modal_one" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog post-model">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<div class="modal-content">
				<div class="row">
					<div class="col-lg-6">
						<div class="row"> -->
							<article class="popular-listing-post">
								<div class="post-thumb">
									<img src="images/post/14.jpg" alt="img" class="img-responsive">
									<div class="listing-info">
										<h4><a href="javascript:void(0)"><?php echo $product_row['brand_name']  ?></a></h4>
										<p><i class="fa fa-bed" aria-hidden="true"></i> <?php echo $product_row['product_name']  ?></p>
									</div>
									<div class="rating-area">
										<ul>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
										</ul>
										<span>
											(5.0/4)
										</span>
									</div>
									<div class="option-block">
										<ul>
											<li>
												<a href="javascript:void(0)" class="bookmark">
												</a>
											</li>
										</ul>
									</div>
									<div class="overlay"></div>
								</div>
								<div class="post-details">
									<div class="post-meta">
										<div class="location">
											<i class="fa fa-map-marker" aria-hidden="true"></i>
											<h5><a href="javascript:void(0)">California</a></h5>
										</div>
									</div>
									<div class="post-entry-block">
										<div class="post-author">
											<img src="images/post/author/3.jpg" alt="img" class="img-responsive">
										</div>
										<p class="post-entry">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
										</p>
									</div>
									<div class="post-footer">
										<div class="contact-no">
											<i class="fa fa-phone" aria-hidden="true"></i>
											<h5> +1-0000-000-000</h5>
										</div>
										<div class="schedule-info closed">
											<i class="fa fa-clock-o" aria-hidden="true"></i>
											<h5>Closed Now</h5>
										</div>
									</div>
								</div>
							</article>
						<!-- </div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div id="listing_post_map_one" class="listing-post-map"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>				
</div> -->
			<!-- </div> -->