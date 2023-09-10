<?php include "inc/header.php"; ?>


	<?php  
		if (isset($_GET['blog'])) {
			$searchBlog = $_GET['blog'];
			$sql = "SELECT * FROM blogs WHERE blog_id='$searchBlog'";
			$blogSql = mysqli_query($db, $sql);

			while( $row = mysqli_fetch_assoc($blogSql) ) {
	          $blog_id        = $row['blog_id'];
	          $image        = $row['image'];
	          $blog_title     = $row['blog_title'];
	          $blog_text      = $row['blog_text'];
	          $status       = $row['status'];
	          $join_date      = $row['join_date'];
	          ?>

	          <section class="blog-details">
						  <div class="container">
						    <div class="row align-items-center">

						      <div class="col-lg-6">
						        <h1 class="text-light" style=" font-family: 'Righteous', cursive;
    font-size: 60px;">Blog Details</h1>
						        
						      </div>
						      <div class="col-lg-6">
						      	<img src="assets/images/shape-dots.svg" alt="" style="margin: 0px 0px 0px 215px; opacity: .5;">
						      </div>
						    </div>
						  </div>
						</section>

				<section class="blog_details_search">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="row">
									<!-- Card Part Start -->
			                        <div class="col-lg-9 blog-item pb-4">
			                            <div class="book-thumbnail">
			                              <?php
			                                  if (!empty($image)) { ?>
			                                    <img src="admin/dist/img/books/<?php echo $image; ?>" alt="" style="width: 100%; border-radius: 10px;">
			                                  <?php }
			                                  else { ?>
			                                    <img src="admin/dist/img/books/blank_book.jpg" alt="" style="width: 100%; height: 300px;">
			                                  <?php }
			                                ?>  

			                                <!-- <div class="author-info">
			                                  <span class="tarikh"><h1><?php echo $join_date; ?></h1></span>
			                                </div> --> 

			                            </div>

			                            <div class="pt-3">
			                            	<h1 class="tarikhhh"><?php echo $join_date; ?></h1>
			                            </div>

			                            <div class="pt-2">
			                              <h4 class="btitle"><?php echo $blog_title; ?></h4>

			                              <div>
			                              	<?php  

			                              		$sql = "SELECT * FROM users WHERE role = 1 ORDER BY user_id ASC LIMIT 1";
																	  		$allUserData = mysqli_query($db, $sql);

																	  		while( $row = mysqli_fetch_assoc($allUserData) ) {
																	  			$user_id  		= $row['user_id'];
																	  			$fullname  		= $row['fullname'];
																	  			$email  			= $row['email'];
																	  			$password  		= $row['password'];
																	  			$phone  			= $row['phone'];
																	  			$address  		= $row['address'];
																	  			$image  			= $row['image'];
																	  			$role  				= $row['role'];
																	  			$status  			= $row['status'];
																	  			$join_date  	= $row['join_date'];
																	  			?>
																	  				<div class="d-flex align-items-center" style="color: #777;">
																	  					<i class="far fa-user" aria-hidden="true" style="margin-right: 5px;"></i>
																	  					By <?php echo $fullname; ?>
																	  				</div>
																	  				
																	  			<?php
																	  		}

			                              	?>
			                              	

			                              </div>

			                              <p class="pera"><?php echo $blog_text; ?></p>      
			                            </div>

			                            

			                        </div> 
	                        		<!-- Card Part End -->





	                        		<!-- Sidebar Content Start -->
						      <?php include "inc/blog_sidebar.php"; ?>
						      <!-- Sidebar Content End -->
								</div>								
                         	</div>	        
							
								
						</div>
					</div>
				</section>

	         <?php } 	

		}
	?>

<?php include "inc/footer.php"; ?>