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

						<h1 class="text-white font-weight-bold text-8" style="font-family: 'Righteous', cursive; font-size: 60px;">Home Rent Details</h1>
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
					<div class="col-lg-9">
						<?php  

							if (isset($_GET['dId'])) {
								$find_postId = $_GET['dId'];

								$sql = "SELECT * FROM rent WHERE re_id='$find_postId' AND status=1 ORDER BY re_title ASC";
						  		$allrentData = mysqli_query($db, $sql);

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

						  			<article class="post post-large">
						  				<div>
						  					<?php 
												if (!empty($re_image)) {
													echo '<img src="admin/dist/img/rent/' . $re_image . '" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="'. $re_title .'" style="width: 100%; border:0; ">';
												}
												else {
													echo 'No Image';
												}
											?>
						  				</div>

						  				<div class="px-2">
												<h3 class="py-3" style="font-size: 36px; font-weight: 600;"><span style="font-size: 25px"><sub>BDT </sub></span><?php echo $re_price; ?> Thousand</h3>

												<p><i class="fa-solid fa-location-dot"></i> <?php echo $re_address; ?></p>
												<div class="d-flex">
													<p><?php echo $re_title; ?> |&nbsp; </p>
													<p><i class="fa-solid fa-house"></i></i>Total: <?php echo $re_room; ?> Rooms&nbsp;&nbsp;</p>
													<p><i class="fa-solid fa-bed"></i> <?php echo $re_bed; ?> Beds&nbsp;&nbsp;</p>
													<p><i class="fa-solid fa-toilet-portable"></i> <?php echo $re_toilet; ?> Baths</p>
												</div>

												<div class="py-3">
													<a href="tel:<?php echo $ow_phone; ?>" class="btn btn-success"><i class="fa-solid fa-phone"></i> <?php echo $ow_phone; ?></a>

													<a href="mailto:<?php echo $ow_email; ?>" class="btn btn-success"><i class="fa-regular fa-envelope"></i> <?php echo $ow_email; ?></a>
												</div>
												<h6 style="font-size: 15px; margin: 0; color: #777; text-align: justify; line-height:"><?php echo $re_description;?></h6>
												

												

											</div>
									
								
									</article>

						  			<?php


						  		}
							}
						?>
					</div>
					<div class="col-lg-3 ">
						<div class="sticky-top" style="background: #fff; padding: 23px 0px">
							<?php include "inc/home_sidebar.php"; ?>

							<h2 style="font-weight: 600;font-size: 20px;text-align: center;padding: 29px 0px 10px;">Recommended Home</h2>
							<?php include "inc/detailsside.php"; ?>
						</div>
						
					</div>
				</div>
			</div>
		</section>

</main>

<?php include "inc/footer.php"; ?>