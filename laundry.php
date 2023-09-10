<?php include "inc/header.php"; ?>
	<main>
		<!-- START: TOP IMAGE -->
		<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md py-5" style="background-image: linear-gradient(to left, rgba(0,0,0,0.6), rgba(0,0,0,0.5)) ,url(assets/images/la.png);
					background-repeat: no-repeat;
					background-size: cover;
					background-position: center;
					
					">
			<div class="container">
				<div class="row">
					<div class="col-md-12 align-self-center p-static order-2 text-center">

						<h1 class="text-white font-weight-bold text-8" style="font-family: 'Righteous', cursive; font-size: 60px;">Laundry Service</h1>
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

		<!-- START: TOP IMAGE -->
		<section class="py-5">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h1 style="font-weight: 600;font-size: 28px;text-decoration:none;font-family: 'Ruwudu', serif;text-align: center;color: #454545;">WE ARE PASSIONATE ABOUT LAUNDRY</h1>
						<div class="divedier" style="height: 2px;width: 7%;background: #FCBD02;text-align: center;margin: 35px auto;"></div>
						<p style="font-weight: 400;font-size: 15px;text-decoration:none;font-family: 'Ruwudu', serif;text-align: center;color: #454545;">We are professionals in the laundry and dry cleaning business, which means we always stay up to date on the latest technologies, cleaning methods, and solutions for dealing with stains or delicate fabrics. Plus, we maintain the highest standards of business integrity by following local and national regulations and environmental safety rules. We are passionate about changing the way you think about laundry!</p>
					</div>
				</div>
			</div>
		</section>
		<!-- END: TOP IMAGE -->

		<!-- How work -->
		<section style="background: #cccccc0d; padding: 62px;">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="pb-5" style="font-weight: 600;font-size: 28px;text-decoration:none;font-family: 'Ruwudu', serif;text-align: center;color: #454545;">HOW IT WORKS: IN 4 EASY STEPS</h1>

						<div class="row" style="padding: 15px;">
							<div class="col-lg-3">
								<div class="row" >
									<div class="col-lg-8 d-flex">
										<div>
											<img src="assets/images/img_icon_01.png" alt="">
											<h5 class="pt-3 pb-1" style="font-weight: 500; font-size: 15px; text-align: center;">Step 1</h5>
											<h3  style="font-size: 20px; text-align: center;"><strong>Bag up</strong>  all your dirty clothes</h3>
										</div>
										<div>
											<img src="assets/images/step-arrow1.png" alt="">
										</div>
									</div>
									<div class="col-lg-4"></div>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="row">
									<div class="col-lg-8 d-flex">
										<div>
											<img src="assets/images/img_icon_02.png" alt="">
											<h5 class="pt-3 pb-1" style="font-weight: 500; font-size: 15px; text-align: center;">Step 2</h5>
											<h3  style="font-size: 20px; text-align: center;">We <strong>Pick up</strong>  your clothes</h3>
										</div>
										<div>
											<img src="assets/images/step-arrow2.png" alt="">
										</div>
									</div>
									<div class="col-lg-4"></div>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="row">
									<div class="col-lg-9 d-flex">
										<div>
											<img src="assets/images/img_icon_03.png" alt="">
											<h5 class="pt-3 pb-1" style="font-weight: 500; font-size: 15px; text-align: center;">Step 3</h5>
											<h3  style="font-size: 20px; text-align: center;">We <strong>Clean</strong>   your clothes</h3>
										</div>
										<div>
											<img src="assets/images/step-arrow1.png" alt="">
										</div>
									</div>
									<div class="col-lg-3"></div>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="row">
									<div class="col-lg-6 d-flex">
										<div>
											<img src="assets/images/img_icon_04.png" alt="">
											<h5 class="pt-3 pb-1" style="font-weight: 500; font-size: 15px; text-align: center;">Step 4</h5>
											<h3  style="font-size: 20px; text-align: center;">We <strong>Deliver</strong> clean, folded clothes</h3>
										</div>
										<div>
											<!-- <img src="assets/images/step-arrow.png" alt=""> -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- How work -->

		<!-- services -->
		<section class="py-5">
			<div class="container">
				<div class="row">
					<h1 class="pb-5" style="font-weight: 600;font-size: 28px;text-decoration:none;font-family: 'Ruwudu', serif;text-align: center;color: #454545;">OUR SERVICES AND PRICE LIST</h1>

					<?php  
						$sql = "SELECT * FROM laund_cat WHERE is_parent = 1 ORDER BY cat_name ASC";
				  		$allCat = mysqli_query($db, $sql);

				  		while ( $row = mysqli_fetch_assoc($allCat) ) {
				  			$cat_id 			= $row['cat_id'];
				  			$cat_name 		= $row['cat_name'];
				  			$image 				= $row['image'];
				  			?>
				  			<div class="col-lg-4">
				  				<a href="laundry_details.php?ldid=<?php echo $cat_id; ?>">
				  				<div class="card dropdown" style="width: 100%;border: 0;border-radius: 20px; transition: 0.5s;">
				  					<?php
										if (!empty($image)) { ?>
											<img src="admin/dist/img/laundry/<?php echo $image; ?>" alt="" style="width: 100%;">
										<?php }
										else {
											echo"No Image";
										}
									?>				
					  				<h1 class="text-center pt-3 pb-1" style="font-weight: 600;font-size: 28px;text-decoration:none;font-family: 'Ruwudu', serif;text-align: center;color: #454545;"> <?php echo $cat_name;?> </h1>
				  				</div>	
				  				</a>			  				
				  			</div>

				  			<?php
				  		}
					?>
				</div>
			</div>
		</section>
		<!-- services -->


</main>
<?php include "inc/footer.php"; ?>