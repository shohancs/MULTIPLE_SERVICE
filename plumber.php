<?php include "inc/header.php"; ?>
	<main>
		<!-- START: TOP IMAGE -->
		<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md py-5" style="background-image: linear-gradient(to left, rgba(0,0,0,0.6), rgba(0,0,0,0.5)) ,url(assets/images/plumber_img.jpg);
					background-repeat: no-repeat;
					background-size: cover;
					background-position: center;
					
					">
			<div class="container">
				<div class="row">
					<div class="col-md-12 align-self-center p-static order-2 text-center">

						<h1 class="text-white font-weight-bold text-8">Plumber Service</h1>
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
					<div class="col-lg-6">
						<div>
							<h1 style="font-family: 'Ruwudu', serif;">Plumbing Services</h1>
							<p style="font-family: 'Ruwudu', serif;">Fast, Same-Day Service, Repair & Installation.<br>Call Now To Schedule Service Today:</p>
						</div>
						<div class="d-flex align-items-center justify-content-evenly">
							<div class="phone" style="border: dashed; padding: 24px; border-radius: 50%;">
          						<img src="assets/images/phone-icon.png" alt="">
          					</div>
          					<div>
          						<h1><a href="tel:+01731578788" style="color: #75B16C; font-weight: 600; font-size: 47px; text-decoration:none; font-family: 'Ruwudu', serif;">+880 1731578788</a></h1>
          					</div>							
						</div>
												
					</div>
					<div class="col-lg-6 d-grid justify-content-center">
						<h1 style="font-family: 'Ruwudu', serif;">Our Services</h1>
						<?php  
							$sql = "SELECT * FROM plumber WHERE status=1 ORDER BY title ASC";
					  		$allrentData = mysqli_query($db, $sql);

					  		while( $row = mysqli_fetch_assoc($allrentData) ) {
					  			$id   				= $row['id'];
					  			$title  			= $row['title'];
					  			$phone  			= $row['phone'];
					  			$email  			= $row['email'];
					  			$address  			= $row['address'];
					  			$description  		= $row['description'];
					  			$image  			= $row['image'];
					  			$status  			= $row['status'];
					  			$join_date  		= $row['join_date'];
					  			?>
					  				<div>
										<h4><i class="fa-regular fa-circle-check" style="color: #75B16C;"></i><a href="pl_details.php?pd=<?php echo $id; ?>" style="font-family: 'Ruwudu', serif; color: #000;">&nbsp; <?php echo $title; ?></a></h4>
									</div>
					  			<?php
					  		}
						?>
					</div>
				</div>
			</div>
		</section>
		<!-- END: TOP IMAGE -->

		<section class="py-5">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div>
							<img src="admin/dist/img/plumbing/plumber.png" alt="" style="width: 100%;">
						</div>
					</div>
					<div class="col-lg-6">
						<h1 style="font-family: 'Ruwudu', serif;">Why Choose Three S Plumbers?</h1>
						<div class="accordion" id="accordionExample">
						  <div class="accordion-item">
						    <h2 class="accordion-header">
						      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						        Reliable 24 Hour Service
						      </button>
						    </h2>
						    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
						      <div class="accordion-body">
						        <strong>Whether you need service now or want to request a free estimate, our network of expert plumbers ensures we always have someone available to help 24 hours a day.</strong>
						      </div>
						    </div>
						  </div>
						  <div class="accordion-item">
						    <h2 class="accordion-header">
						      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						        No-Obligation Estimates
						      </button>
						    </h2>
						    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
						      <div class="accordion-body">
						        <strong>Call us any time to ask our project specialists questions or to request an up-front quote for a job you’re considering.</strong>
						      </div>
						    </div>
						  </div>
						  <div class="accordion-item">
						    <h2 class="accordion-header">
						      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						        Fast Service
						      </button>
						    </h2>
						    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
						      <div class="accordion-body">
						        <strong>When you call us and enter your zip code we’re able to send one of our plumbers who is nearby and available to help now so you don’t have to wait for hours or deal with the hassle of calling multiple companies.</strong>
						      </div>
						    </div>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
<?php include "inc/footer.php"; ?>