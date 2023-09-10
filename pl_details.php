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
						<?php  
						if (isset($_GET['pd'])) {
							$findId = $_GET['pd'];

							$sql = "SELECT * FROM plumber WHERE id='$findId' AND status=1 ORDER BY title ASC";
					  		$allrentData = mysqli_query($db, $sql);

					  		while( $row = mysqli_fetch_assoc($allrentData) ) {
					  			$id   				= $row['id'];
					  			$title  			= $row['title'];
					  			?>
					  				<h1 class="text-white font-weight-bold text-8"><?php echo $title; ?></h1>
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
				<div class="row align-items-center">
					<?php  

								if(isset($_SESSION['msg'])) {
								    $message = $_SESSION['msg'];
								    unset($_SESSION['msg']);
								    ?>
								    <div class="alert alert-primary text-center" role="alert">
									  <?php echo $message; ?>
									</div>
								    <?php
								    
								}
							?>
					<?php  
						if (isset($_GET['pd'])) {
							$findId = $_GET['pd'];

							$sql = "SELECT * FROM plumber WHERE id='$findId' AND status=1 ORDER BY title ASC";
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
					  			<div class="col-lg-6">
					  				<?php
							      		if (!empty($image)) { ?>
							      			<img src="admin/dist/img/plumbing/<?php echo $image; ?>" style="width: 100%;">
							      		<?php }
							      		else {
							      			echo "No Image Uploaded";
							      		}
							      	?>		
					  			</div>
					  			<div class="col-lg-6">
					  				<h1><?php echo $title; ?></h1>
					  				<p><?php echo $description; ?></p>
					  				<p style="color: #75B16C; font-weight: 600; font-size: 20px; text-decoration:none; font-family: 'Ruwudu', serif;"><i class="fa-regular fa-envelope"></i> <?php echo $email; ?></p>
					  				<p style="color: #75B16C; font-weight: 600; font-size: 20px; text-decoration:none; font-family: 'Ruwudu', serif;" ><i class="fa-regular fa-clock"></i><span> Open at</span> 9:00 am</p>

					  			</div>
					  			<?php
					  		}
						}
					?>
				</div>
			</div>
		</section>
		<!-- END: TOP IMAGE -->

		<!-- START: TOP IMAGE -->
		<section class="py-5">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div>
							<h1 style="font-family: 'Ruwudu', serif;">Contact Us</h1>
						</div>
						<div class="d-flex align-items-center justify-content-evenly">
							<div class="phone" style="border: dashed; padding: 24px; border-radius: 50%;">
          						<img src="assets/images/phone-icon.png" alt="">
          					</div>
          					<div>
          						<?php  
          							if (isset($_GET['pd'])) {
										$findId = $_GET['pd'];

										$sql = "SELECT * FROM plumber WHERE id='$findId' AND status=1 ORDER BY title ASC";
								  		$allrentData = mysqli_query($db, $sql);

								  		while( $row = mysqli_fetch_assoc($allrentData) ) {
								  			$id   				= $row['id'];
								  			$phone  			= $row['phone'];
								  			?>
<h1><a href="tel:+01731578788" style="color: #75B16C; font-weight: 600; font-size: 47px; text-decoration:none; font-family: 'Ruwudu', serif;"><?php echo $phone; ?></a></h1>
								  			<?php
								  		}
								  	}
          						?>
          						
          					</div>							
						</div>
												
					</div>

					<div class="col-lg-6">
						<div class="contact_form" style="box-shadow: 1px 10px 15px #ccc; border-top: 4px solid #08c; border-radius: 5px; color: #000; background: #F7F7F7; font-size: 16px; padding: 34px;">

							<form action="" method="POST" enctype="multipart/form-data">
							  <div class="mb-3">
							    <label for="subject">Problem Subject</label>
							    <input type="text" name="subject" class="form-control" id="subject" aria-describedby="subject" placeholder="subject.." required autocomplete="off">
							  </div>
							  <div class="mb-3">
							    <label for="message">Message (Problem Descrive)</label>
							    <textarea name="message" class="form-control" id="message.." rows="5" placeholder="message" required autocomplete="off"></textarea>
							  </div>


							<?php  
							if (!empty( $_SESSION['email'] )) {
								$id = $_SESSION['email'];
								$sql = "SELECT * FROM users WHERE email='$id'";
						          $userData = mysqli_query($db, $sql);

						          // Data gula kea khujbe
						          while( $row = mysqli_fetch_assoc($userData) ) {
						            $_SESSION['user_id']      = $row['user_id'];
						            $fullname                 = $row['fullname'];
						            $_SESSION['email']        = $row['email'];
						            $password                 = $row['password'];
						            $phone                    = $row['phone'];
						            $address                  = $row['address'];
						            $image                    = $row['image'];
						            $_SESSION['role']         = $row['role'];
						            $status                   = $row['status'];
						            $join_date                = $row['join_date'];
						            ?>
						            <input type="hidden" name="phone" value="<?php echo $phone; ?>">
						            <input type="hidden" name="email" value="<?php echo $_SESSION['email']; ?>">
						            <?php  
						           
						        }
							}
												  	 
							?>



							  <?php  
          							if (isset($_GET['pd'])) {
										$findId = $_GET['pd'];

										$sql = "SELECT * FROM plumber WHERE id='$findId' AND status=1 ORDER BY title ASC";
								  		$allrentData = mysqli_query($db, $sql);

								  		while( $row = mysqli_fetch_assoc($allrentData) ) {
								  			$id   				= $row['id'];
								  			?>
								  			<input type="hidden" name="service_name" value="<?php echo $findId; ?>">
								  		<?php } 
								  	}
								?>
								<input type="hidden" name="status" value="1">

								<?php  
	                                if (empty($_SESSION['email'])) { ?>
	                                  <a href="login.php">Log In to Reserve your Service</a>
	                                <?php }
	                                else { ?>
	                                  <div class="d-grid gap-2">
									  	<input type="submit" name="addUser" class="btn btn-primary" value="Submit Here">
										</div>
	                                <?php }
	                              ?>    
							  
							  
							</form>


							<?php  
								if (isset( $_POST['addUser'] )) {
									$subject 		= $_POST['subject'];
									$email 			= $_POST['email'];
									$message 		= $_POST['message'];
									$service_name 	= $_POST['service_name'];
									$phone 			= $_POST['phone'];
									$status 		= $_POST['status'];

$sql = "INSERT INTO pl_message (email, subject, message, service_id, phone, status , join_date ) VALUES ( '$email', '$subject', '$message', '$service_name', '$phone', '$status', now() )";
									$query = mysqli_query( $db, $sql );

									if ($query) {
										$_SESSION['msg'] = "We Received your message. After of some times letter we will call & email you. Thank you for with us.";
										header("Location: pl_details.php?pd=$service_name");
									}
									else {
										die ("Mysql Error." .mysqli_error($db) );
									}
								}
							?>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END: TOP IMAGE -->

			


	</main>
<?php include "inc/footer.php"; ?>