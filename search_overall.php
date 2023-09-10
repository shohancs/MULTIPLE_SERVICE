<?php include "inc/header.php"; ?>
	<div role="main" class="main">

		<?php  
			if (isset($_GET['search'])) {
				$searContent = $_GET['search'];
				$searchSql = "";

				$searchSql = "SELECT * FROM rent WHERE re_title LIKE '%$searContent%' OR re_room LIKE '%$searContent%' OR re_bed LIKE '%$searContent%' OR re_toilet LIKE '%$searContent%' OR re_category LIKE '%$searContent%' OR re_address LIKE '%$searContent%' OR re_description LIKE '%$searContent%' OR ow_phone LIKE '%$searContent%' OR ow_email LIKE '%$searContent%' OR re_price LIKE '%$searContent%' OR join_date LIKE '%$searContent%' ORDER BY re_id DESC";
				$postData = mysqli_query($db, $searchSql);
				$numOfPost = mysqli_num_rows($postData);

				if ($numOfPost == 0) { ?>
					<!-- ########## START: TOP SEARCH ########## -->
					<!-- START: TOP IMAGE -->
					<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md py-5" style="background-image: linear-gradient(to left, rgba(0,0,0,0.6), rgba(0,0,0,0.5)) ,url(assets/images/plumber_img.jpg);
								background-repeat: no-repeat;
								background-size: cover;
								background-position: center;
								
								">
						<div class="container">
							<div class="row">
								<div class="col-md-12 align-self-center p-static order-2 text-center">

									<h1 class="text-white font-weight-bold text-8"><?php echo $searContent; ?></h1>
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
					<hr class="m-0">
					<!-- ########## END: TOP SEARCH ########## -->

		
					<!-- ########## START: MAIN BODY ########## -->
					<div class="container py-5 mt-3">

						<div class="row">
							<div class="col">
								<h2 class="font-weight-normal text-7 mb-0">Showing results for <strong class="font-weight-extra-bold"><?php echo $searContent;?></strong></h2>
								<p class="lead mb-0"><?php echo $numOfPost; ?> results found.</p>
							</div>
						</div>

						<div class="row">
							<!-- ########## START: SIDE BAR ########## -->
							<div class="col-lg-3 order-lg-2">
								<?php include "inc/home_sidebar.php"; ?>
							</div>
							<!-- ########## END: SIDE BAR ########## -->

							<div class="col-lg-9 order-lg-1">
							</div>
						</div>
					</div>
					<!-- ########## END: MAIN BODY ########## -->
				<?php }

				else { ?>

					<!-- ########## START: TOP SEARCH ########## -->
					<!-- START: TOP IMAGE -->
					<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md py-5" style="background-image: linear-gradient(to left, rgba(0,0,0,0.6), rgba(0,0,0,0.5)) ,url(assets/images/plumber_img.jpg);
								background-repeat: no-repeat;
								background-size: cover;
								background-position: center;
								
								">
						<div class="container">
							<div class="row">
								<div class="col-md-12 align-self-center p-static order-2 text-center">

									<h1 class="text-white font-weight-bold text-8"><?php echo $searContent; ?></h1>
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
					<hr class="m-0">
					<!-- ########## END: TOP SEARCH ########## -->

					
					<!-- ########## START: MAIN BODY ########## -->
					<div class="container py-5 mt-3">

						<div class="row">
							<div class="col">
								<h2 class="font-weight-normal text-7 mb-0">Showing results for <strong class="font-weight-extra-bold"><?php echo $searContent;?></strong></h2>
								<p class="lead mb-0"><?php echo $numOfPost; ?> results found.</p>
							</div>
						</div>
						<div class="row">
							<div class="col pt-2 mt-1">
								<hr class="my-4">
							</div>
						</div>

						<div class="row">
							<!-- ########## START: SIDE BAR ########## -->
							<div class="col-lg-3 order-lg-2">
								<?php include "inc/home_sidebar.php"; ?>
							</div>
							<!-- ########## END: SIDE BAR ########## -->

							<div class="col-lg-9 order-lg-1">
								<div class="blog-posts">

									<?php  

										while( $row = mysqli_fetch_assoc($postData) ) {
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

												<article class="post post-large">
													<div class="d-flex align-items-center py-3">
														<div class="post-image" >
															<a href="home_details.php?dId=<?php echo $re_id; ?>">
																<?php 
																	if (!empty($re_image)) {
																		echo '<img src="admin/dist/img/rent/' . $re_image . '" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="'. $re_title .'" style="width: 525px; ">';
																	}
																	else {
																		echo 'No Image';
																	}
																?>
																
															</a>
														</div>
														<div class="px-2">
															<a href="home_details.php?dId=<?php echo $re_id; ?>" style="color: #000;"><h3><span style="font-size: 20px"><sub>BDT </sub></span><?php echo $re_price; ?> Thousand</h3></a>
															<div class="d-flex">
																<p><?php echo $re_title; ?> |&nbsp; </p>
																<p><i class="fa-solid fa-bed"></i> <?php echo $re_bed; ?>&nbsp;</p>
																<p><i class="fa-solid fa-toilet-portable"></i> <?php echo $re_toilet; ?></p>
															</div>
															<p style="font-size: 15px; margin: 0"><?php echo substr($re_description, 0, 46); ?>... <a href="">read more</a></p>
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
					<!-- ########## END: MAIN BODY ########## -->
					
				<?php }
			}
		?>

		


	</div>
<?php include "inc/footer.php"; ?>