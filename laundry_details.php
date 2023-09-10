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
						<?php  
						if (isset($_GET['ldid'])) {
							$lid = $_GET['ldid'];

							$sql = "SELECT * FROM laund_cat WHERE cat_id = '$lid' ORDER BY cat_name ASC";
			  				$allSubCat = mysqli_query($db, $sql);

			  				while ( $row = mysqli_fetch_assoc($allSubCat) ) {
			  					$cat_id 			= $row['cat_id'];
					  			$cat_name 		= $row['cat_name'];
					  			$cat_desc 		= $row['cat_desc'];
					  			$is_parent 		= $row['is_parent'];
					  			$status 			= $row['status'];
					  			$image 				= $row['image'];
					  			$price 				= $row['price'];
					  			?>
					  			<h1 class="text-white font-weight-bold text-8" style="font-family: 'Righteous', cursive; font-size: 60px;"><?php echo $cat_name; ?> Service Pricing</h1>
					  			<?php
					  		}
					  	}
					  ?>
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
						<h1 class="" style="font-weight: 600;font-size: 28px;text-decoration:none;font-family: 'Ruwudu', serif;text-align: center;color: #454545;">PRICE LIST</h1>
					</div>
				</div>
			</div>
		</section>
		<!-- END: TOP IMAGE -->

		<section class="pb-5">
			<div class="container">
				<div class="row">
					
					<div class="col-lg-12">
						<table class="table table-striped table-hover table-bordered">
						  <thead class="table-dark">
						    <tr>
						      <th scope="col">#Sl.</th>
						      <th scope="col">Service Name</th>
						      <th scope="col">Price (Taka)</th>
						    </tr>
						  </thead>
						  <tbody>
						  		<?php  
									if (isset($_GET['ldid'])) {
										$lid = $_GET['ldid'];

										$sql = "SELECT * FROM laund_cat WHERE is_parent = '$lid' ORDER BY cat_name ASC";
						  				$allSubCat = mysqli_query($db, $sql);
						  				$i=0;

						  				while ( $row = mysqli_fetch_assoc($allSubCat) ) {
						  					$cat_id 			= $row['cat_id'];
								  			$cat_name 		= $row['cat_name'];
								  			$cat_desc 		= $row['cat_desc'];
								  			$is_parent 		= $row['is_parent'];
								  			$status 			= $row['status'];
								  			$image 				= $row['image'];
								  			$price 				= $row['price'];
								  			$i++;
								  			?>
								  			<tr>
										      <th scope="row"><?php echo $i; ?></th>
										      <td><?php echo $cat_name; ?></td>
										      <td><?php echo $price; ?> Taka</td>
										    </tr>
								  			<?php
								  		}
								  	}
								?>
						    
						  </tbody>
						</table>
					</div>
				</div>
			</div>
			
		</section>

		


</main>
<?php include "inc/footer.php"; ?>