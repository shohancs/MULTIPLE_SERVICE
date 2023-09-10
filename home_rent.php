<?php include "inc/header.php"; ?>
	<main>
		<!-- START: TOP IMAGE -->
		<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md py-5" style="background-image: linear-gradient(to left, rgba(0,0,0,0.6), rgba(0,0,0,0.5)) ,url(assets/images/hh.png);
					background-repeat: no-repeat;
					background-size: cover;
					background-position: center;
					
					">
			<div class="container">
				<div class="row">
					<div class="col-md-12 align-self-center p-static order-2 text-center">

						<h1 class="text-white font-weight-bold text-8" style="font-family: 'Righteous', cursive; font-size: 60px;">Home Rent Service</h1>
					</div>

					<div class="col-md-12 align-self-center order-1">

						<ul class="breadcrumb d-block text-center d-flex justify-content-center" style="font-size: 12px;">
							<li><a href="index.php" class="text-white">HOME &nbsp; </a> </li>
							<li class="active text-white">/&nbsp;SERVICE DETAILS</li>
						</ul>
					</div>								
				</div>
			</div>
		</section>
		<!-- END: TOP IMAGE -->

		<section class="py-5">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3">
						
						<?php include "inc/home_sidebar.php"; ?>
					</div>
				</div>
			</div>
		</section>

		<hr style="width: 85%; margin: 0px auto; padding: 2px 0px;">


		<section>
			<div class="container">
				<div class="row">

							<!-- ########## START: SIDE BAR ########## -->
							<div class="col-lg-3 order-lg-2">
								<div class="blog-part sticky-top">
									<h2 class="py-3" style="text-transform: capitalize;">Our Area</h2>

									<?php  

									$sql = "SELECT * FROM rent_category WHERE is_parent = 1 ORDER BY re_cat_name ASC";
									  		$allCat = mysqli_query($db, $sql);
									  		$i = 0;

									  		while ( $row = mysqli_fetch_assoc($allCat) ) {
									  			$re_cat_id 				= $row['re_cat_id'];
									  			$re_cat_name 			= $row['re_cat_name'];
									  			$rent_cat_desc 		= $row['rent_cat_desc'];
									  			$is_parent 				= $row['is_parent'];
									  			$status 					= $row['status'];
									  			$join_date 				= $row['join_date'];
									  			$i++;
									  			?>
									  			<div class="area">
									  				<ul>
										  				<li>
										  					<p style="color: #777;"><?php echo $re_cat_name; ?></p>
										  				</li>
										  			</ul>
									  			</div>
									  			
									  			 
									  			
									  			<?php
									  		}
								?>
								</div>
							</div>
							<!-- ########## END: SIDE BAR ########## -->

							<div class="col-lg-9 order-lg-1">
								

								<div class="blog-posts">

									<?php  

									$sql = "SELECT * FROM rent WHERE status=1 ORDER BY re_title ASC";
									$allrentData = mysqli_query($db, $sql);
									$i = 0;

										while( $row = mysqli_fetch_assoc($allrentData) ) {
											$re_id   					= $row['re_id'];
								  			$re_title  				= $row['re_title'];
								  			$re_room  				= $row['re_room'];
								  			$re_bed  					= $row['re_bed'];
								  			$re_toilet  			= $row['re_toilet'];
								  			$re_category  		= $row['re_category'];
								  			$re_address  			= $row['re_address'];
								  			$re_description  	= $row['re_description'];
								  			$ow_phone  				= $row['ow_phone'];
								  			$ow_email  				= $row['ow_email'];
								  			$re_price  				= $row['re_price'];
								  			$re_image  				= $row['re_image'];
								  			$status  					= $row['status'];
								  			$join_date  			= $row['join_date'];
											?>

												<article class="post post-large py-3">
													<div class="d-flex align-items-center " style="border: 1px solid #ccc;border-radius: 8px;box-shadow: 1px 2px 6px #ccc; background: #fff;">
														<div class="post-image" style="">
															<a href="home_details.php?dId=<?php echo $re_id; ?>">
																<?php 
																	if (!empty($re_image)) {
																		echo '<img src="admin/dist/img/rent/' . $re_image . '" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="'. $re_title .'" style="width: 424px;     margin-right: 8px; ">';
																	}
																	else {
																		echo 'No Image';
																	}
																?>
																
															</a>
														</div>
														<div class="px-2">
															<a href="home_details.php?dId=<?php echo $re_id; ?>" style="color: #000;"><h3 style="font-family: 'Righteous', cursive; font-size: 35px; font-weight: 600;"><span style="font-size: 20px"><sub>BDT </sub></span><?php echo $re_price; ?> Thousand</h3></a>
															<div class="d-flex py-2">
																<p><?php echo $re_title; ?> |&nbsp; </p>
																<p><i class="fa-solid fa-bed"></i> <?php echo $re_bed; ?>&nbsp;</p>
																<p><i class="fa-solid fa-toilet-portable"></i> <?php echo $re_toilet; ?></p>
															</div>
															<h6 style="font-size: 15px; margin: 0; color: #777;"><?php echo substr($re_description, 0, 46); ?>... <a href="home_details.php?dId=<?php echo $re_id; ?>">read more</a></h6>
															<p><i class="fa-solid fa-location-dot"></i> <?php echo $re_address; ?></p>

															<div>
																<a href="tel:<?php echo $ow_phone; ?>" class="btn btn-success"><i class="fa-solid fa-phone"></i> CALL</a>

																<a href="mailto:<?php echo $ow_email; ?>" class="btn btn-success"><i class="fa-regular fa-envelope"></i> EMAIL</a>
															</div>

														</div>
													</div>
												
											
												</article>

											<?php
										}
									?>

								</div>
							</div>
						</div>
			</div>
		</section>

		
	</main>
<?php include "inc/footer.php"; ?>