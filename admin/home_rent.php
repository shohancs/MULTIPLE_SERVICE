<?php include "inc/header.php"; ?>  

	<!-- content-wrapper Start -->
	<div class="content-wrapper">
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="m-0">Home Rent Management</h1>
					</div>
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
							<li class="breadcrumb-item active">Home Rent Management</li>
						</ol>
					</div>
				</div>
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 col-sm-12 col-md-12">
						<?php  

							// Ternary Condition
							$do = isset($_GET['do']) ? $_GET['do'] : "Manage";
							
							
							// Manage Page Start
							// All Users Manage Page
							if ( $do == "Manage" ) { ?>

								<!-- Card Stat -->
								<div class="card">
					              <div class="card-header">
					                <h3 class="card-title">Manage Home Rent</h3>
					                <div class="card-tools">
					                  	<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
					                </div>
					              </div>
					              <div class="card-body">
					                
					              <div class="table-responsive">
					              	<!-- Table Start -->
					              	<table id="dataSearch" class="table table-dark table-striped table-hover table-bordered">
													  <thead>
													    <tr>
													      <th scope="col">#Sl.</th>
													      <th scope="col">Picture</th>
													      <th scope="col">Title</th>
													      <th scope="col">Email</th>
													      <th scope="col">Phone No.</th>
													      <th scope="col">Category</th>
													      <th scope="col">Address</th>
													      <th scope="col">Discription</th>
													      <th scope="col">Price</th>
													      <th scope="col">Room</th>
													      <th scope="col">Bed</th>
													      <th scope="col">Toilet</th>
													      <th scope="col">Join Date</th>
													      <th scope="col">Status</th>								      
													      <th scope="col">Action</th>
													    </tr>
													  </thead>

													  <tbody>
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
													  			$i++;
													  			?>
													  			<tr>
															      <th scope="row"><?php echo $i; ?></th>
															      	<td>
																      	<?php
																      		if (!empty($re_image)) { ?>
																      			<img src="dist/img/rent/<?php echo $re_image; ?>" width="40">
																      		<?php }
																      		else {
																      			echo "No Image Uploaded";
																      		}
																      	?>											      		
															      	</td>
															      <td><?php echo $re_title; ?></td>
															      <td><?php echo $ow_email; ?></td>
															      <td><?php echo $ow_phone; ?></td>
															      <td>
																    	<?php
																    	 		$sql = "SELECT * FROM rent_category WHERE re_cat_id = '$re_category'";
																    	 		$categoryName = mysqli_query($db, $sql);

																    	 		while ($row = mysqli_fetch_assoc($categoryName)) {
																    	 				$re_cat_id 				= $row['re_cat_id'];
																							$re_cat_name 			= $row['re_cat_name'];
																    	 			?>
																    	 			<span class="badge badge-warning"><?php echo $re_cat_name; ?></span>
																    	 		<?php }
																    	 ?>											      		
															      </td>
															      <td><?php echo $re_address; ?></td>
															      <td><?php echo substr($re_description, 0, 15); ?>...</td>
															      <td><?php echo $re_price; ?></td>
															      <td><?php echo $re_room; ?></td>
															      <td><?php echo $re_bed; ?></td>
															      <td><?php echo $re_toilet; ?></td>
															      <td><?php echo $join_date; ?></td>
															      <td>
															      	<?php
															      		if( $status == 1 ) { ?>
															      			<span class="badge badge-success">Active</span>
															      		<?php }
															      		else if ( $status == 0 ) { ?>
															      			<span class="badge badge-danger">InActive</span>
															      		<?php }
															      	?>	
															      </td>
															      <td>
																			<div class="action-btn">
																			    <ul>
																			      <li>
																			        <a href="home_rent.php?do=Edit&uid=<?php echo $re_id; ?>"><i class="fa-regular fa-pen-to-square"></i></a>
																			      </li>
																			      <li>
																			        <a href="" data-toggle="modal" data-target="#delUser<?php echo $re_id; ?>"><i class="fa-solid fa-trash-can"></i></a>
																			      </li>
																			    </ul>
																			</div>
																		</td>

																			<!-- Modal Start -->
																			<!-- Modal -->
																		<div class="modal fade" id="delUser<?php echo $re_id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
																		  <div class="modal-dialog">
																		    <div class="modal-content">
																		      <div class="modal-header">
																		        <h5 class="modal-title" id="exampleModalLabel">Confirm to delete this <?php echo $re_title; ?> ?</h5>
																		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		          <span aria-hidden="true">&times;</span>
																		        </button>
																		      </div>
																		      <div class="modal-body">
																		        <div class="modal-btn">
																			        	<ul>
																			        		<li>
																			        			<a href="home_rent.php?do=Delete&delrent_id=<?php echo $re_id; ?>" class="btn btn-danger">Confirm <i class="fa-regular fa-trash-can"></i></a>
																			        		</li>
																			        		<li>
																			        			<a href="" class="btn btn-success" data-dismiss="modal">Cancel <i class="fa-regular fa-circle-xmark"></i></a>
																			        		</li>	        		
																			        	</ul>
																			        </div>
																		      </div>
																		    </div>
																		  </div>
																		</div>
																			<!-- Modal End -->
															    </tr>
													  		<?php }
													  	?>
													    
													    
													  </tbody>
													</table>
												</div>
					              	<!-- Table End -->

					              </div>
					            </div>
								<!-- Card End -->

							<?php }
							// Manage Page End



							// Create Page Start
							// This is the Create new users Html Page
							else if ( $do == "Add" ) { ?>
								
								<!-- Card Stat -->
								<div class="card">
					              <div class="card-header">
					                <h3 class="card-title">Add New Rent</h3>
					                <div class="card-tools">
					                  	<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
					                </div>
					              </div>
												<div class="card-body">
													<form action="home_rent.php?do=Store" method="POST" enctype="multipart/form-data">
														<div class="row">
															<div class="col-lg-6">
																<div class="form-group">
													        		<label>Title <sup style="font-size: 8px; color: #DD5353; top: -9px;"><small><i class="fa-solid fa-star"></i></small></sup></label>					                	
													        		<input type="text" name="title" class="form-control" placeholder="title..." required autocomplete="off">
													        	</div>

													        	<div class="form-group">
													        		<label>Email <sup style="font-size: 8px; color: #DD5353; top: -9px;"><small><i class="fa-solid fa-star"></i></small></sup></label>					                	
													        		<input type="email" name="email" class="form-control" placeholder="Your email..." required autocomplete="off">
													        	</div>

													        	<div class="form-group">
													        		<label>Phone <sup style="font-size: 8px; color: #DD5353; top: -9px;"><small><i class="fa-solid fa-star"></i></small></sup></label>					                	
													        		<input type="tel" name="phone" class="form-control" placeholder="Your phone..." required autocomplete="off">
													        	</div>

													        	<div class="form-group">
													        		<label>Category Name <sup style="font-size: 8px; color: #DD5353; top: -9px;"><small><i class="fa-solid fa-star"></i></small></sup></label>					                	
													        		<select name="cat_name" class="form-control">
													        			<option value="">Please select the Category or SubCategory name</option>
																				<?php  

																					// Parent category part start
																					$sql = "SELECT * FROM rent_category WHERE is_parent = 1 ORDER BY re_cat_name ASC";
																					$parentCat = mysqli_query($db, $sql);

																					while ( $row = mysqli_fetch_assoc($parentCat) ) {
																						$p_cat_id 			= $row['re_cat_id'];
																						$p_cat_name 		= $row['re_cat_name'];
																						?>
																						<option value="<?php echo $p_cat_id; ?>"><?php echo $p_cat_name; ?></option>
																						<!-- Parent category part End -->

																						<?php  
																								// Child category part start
																								$query = "SELECT * FROM rent_category WHERE is_parent = '$p_cat_id' ORDER BY re_cat_name ASC";
																								$childCat = mysqli_query($db, $query);

																								while ($row = mysqli_fetch_assoc($childCat)) {
																									$c_cat_id 			= $row['re_cat_id'];
																									$c_cat_name 		= $row['re_cat_name'];
																									?>
																									<option value="<?php echo $c_cat_id; ?>">-- <?php echo $c_cat_name; ?></option>
																								<?php }
																								// Child category part end																	
																					 }

																				?>
													        		</select>
													        	</div> 

													        	<div class="form-group">
													        		<label>Room <sup style="font-size: 8px; color: #DD5353; top: -9px;"><small><i class="fa-solid fa-star"></i></small></sup></label>					                	
													        		<input type="text" name="room" class="form-control" placeholder="Phone No...">
													        	</div>  

													        	<div class="form-group">
													        		<label>Bed <sup style="font-size: 8px; color: #DD5353; top: -9px;"><small><i class="fa-solid fa-star"></i></small></sup></label>					                	
													        		<input type="text" name="bed" class="form-control" placeholder="Phone No...">
													        	</div> 

													        	<div class="form-group">
													        		<label>Toilet <sup style="font-size: 8px; color: #DD5353; top: -9px;"><small><i class="fa-solid fa-star"></i></small></sup></label>					                	
													        		<input type="text" name="toilet" class="form-control" placeholder="Phone No...">
													        	</div>    

													        	<div class="form-group">
													        		<label>Price (Taka) <sup style="font-size: 8px; color: #DD5353; top: -9px;"><small><i class="fa-solid fa-star"></i></small></sup></label>					                	
													        		<input type="text" name="price" class="form-control" placeholder="Phone No...">
													        	</div>   	
															</div>
															<div class="col-lg-6">
																<div class="form-group">
													        		<label>Address <sup style="font-size: 8px; color: #DD5353; top: -9px;"><small><i class="fa-solid fa-star"></i></small></sup></label>		
													        		<textarea name="address" class="form-control" placeholder="Your Address.." rows="4"></textarea>	
													        	</div>

													        	<div class="form-group">
													        		<label>Description</label>		
													        		<textarea name="description" class="form-control" placeholder="description.." rows="4"></textarea>	
													        	</div>

													        	<div class="form-group">
													        		<label>Status <sup style="font-size: 8px; color: #DD5353; top: -9px;"><small><i class="fa-solid fa-star"></i></small></sup></label>
													        		<select name="status" class="form-control">
													        			<option value="1">Please Select the Status</option>
													        			<option value="1">Active</option>
													        			<option value="0">InActive</option>
													        		</select>
													        	</div>

													        	<div class="form-group">
													        		<label>Profile Picture <sup style="font-size: 8px; color: #DD5353; top: -9px;"><small><i class="fa-solid fa-star"></i></small></sup></label>
													        		<input type="file" name="image" class="form-control-file">
													        	</div>

													        	<div class="form-group">
													        		<input type="submit" name="addrent" class="btn btn-success btn-block" value="Add New Rent">
													        	</div>
															</div>
														</div>
													</form>
												</div>
					            </div>
								<!-- Card End -->

							<?php }
							// Create Page End


							
							// Store page start
							// This store page will store the new users data into the Database
							else if ( $do == "Store" ) {
								if (isset($_POST['addrent'])) {
									$title  				= $_POST['title'];
									$email 					= $_POST['email'];
									$phone 					= $_POST['phone'];
									$cat_name 			= $_POST['cat_name'];
									$room 					= $_POST['room'];
									$bed 						= $_POST['bed'];
									$toilet 				= $_POST['toilet'];
									$price 					= $_POST['price'];
									$address 				= $_POST['address'];
									$description 		= $_POST['description'];
									$status 				= $_POST['status'];
									$image 					= $_FILES['image']['name'];
									$image_temp     = $_FILES['image']['tmp_name'];

										if ( !empty($image) ) {
											$image_name		= rand(1, 999999999) ."_". $image;
											move_uploaded_file($image_temp, "dist/img/rent/$image_name");

											$sql = "INSERT INTO rent (re_title,	re_room, re_bed, re_toilet,	re_category, re_address, re_description,	ow_phone,	ow_email,	re_price,	re_image,	join_date, status) VALUES ( '$title', '$room', '$bed', '$toilet', '$cat_name', '$address', '$description', '$phone', '$email', '$price', '$image_name', now(), '$status' )";
											$addUser = mysqli_query($db, $sql);

											if ( $addUser ) {
												header("Location: home_rent.php?do=Manage");
											}
											else {
												die("mysqli Error" . mysqli_error($db));
											}

										}
										
										
									}


									
								}
							// Store page End



							// Edit page start
							// This edit page will show the update users info in a html file
							else if ( $do == "Edit" ) { 
								if (isset($_GET['uid'])) {
									$updateId = $_GET['uid'];

									$sql = "SELECT * FROM rent WHERE re_id = '$updateId' ORDER BY re_title ASC ";
									$usersData = mysqli_query($db, $sql);

									while ($row = mysqli_fetch_assoc($usersData)) {
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
										?>
										<!-- Card Stat -->
										<div class="card">
					              <div class="card-header">
					                <h3 class="card-title">Update <?php echo $re_title; ?> Rent</h3>
					                <div class="card-tools">
					                  	<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
					                </div>
					              </div>
												<div class="card-body">
													<form action="home_rent.php?do=Update" method="POST" enctype="multipart/form-data">
														<div class="row">
															<div class="col-lg-6">
																<div class="form-group">
													        		<label>Title <sup style="font-size: 8px; color: #DD5353; top: -9px;"><small><i class="fa-solid fa-star"></i></small></sup></label>					                	
													        		<input type="text" name="title" class="form-control" placeholder="title..." required autocomplete="off" value="<?php echo $re_title; ?>">
													        	</div>

													        	<div class="form-group">
													        		<label>Email <sup style="font-size: 8px; color: #DD5353; top: -9px;"><small><i class="fa-solid fa-star"></i></small></sup></label>					                	
													        		<input type="email" name="email" class="form-control" placeholder="Your email..." required autocomplete="off" value="<?php echo $ow_email; ?>">
													        	</div>

													        	<div class="form-group">
													        		<label>Phone <sup style="font-size: 8px; color: #DD5353; top: -9px;"><small><i class="fa-solid fa-star"></i></small></sup></label>					                	
													        		<input type="tel" name="phone" class="form-control" placeholder="Your phone..." required autocomplete="off" value="<?php echo $ow_phone; ?>">
													        	</div>

<div class="form-group">
	<label>Category Name </label>					                	
	<select name="cat_name" class="form-control">
		<option value="">Please select the Category or SubCategory name</option>
		<?php  

			// Parent category part start
			$sql = "SELECT * FROM rent_category WHERE is_parent = 1 ORDER BY re_cat_name ASC";
			$parentCat = mysqli_query($db, $sql);

			while ( $row = mysqli_fetch_assoc($parentCat) ) {
				$p_cat_id 			= $row['re_cat_id'];
				$p_cat_name 		= $row['re_cat_name'];
				?>
				<option value="<?php echo $p_cat_id; ?>"
					<?php if( $p_cat_id == $re_category ){ echo 'selected'; } ?>
					><?php echo $p_cat_name; ?></option>
				<!-- Parent category part End -->

				<?php  
						// Child category part start
						$query = "SELECT * FROM rent_category WHERE is_parent = '$p_cat_id' ORDER BY re_cat_name ASC";
						$childCat = mysqli_query($db, $query);

						while ($row = mysqli_fetch_assoc($childCat)) {
							$c_cat_id 			= $row['re_cat_id'];
							$c_cat_name 		= $row['re_cat_name'];
							?>
							<option value="<?php echo $c_cat_id; ?>"
								<?php if( $c_cat_id == $re_category ){ echo 'selected'; } ?>
								>- - <?php echo $c_cat_name; ?></option>
						<?php }
						// Child category part end																	
			 }

		?>
		
	</select>
</div> 

													        	<div class="form-group">
													        		<label>Room <sup style="font-size: 8px; color: #DD5353; top: -9px;"><small><i class="fa-solid fa-star"></i></small></sup></label>					                	
													        		<input type="text" name="room" class="form-control" placeholder="Phone No..." value="<?php echo $re_room; ?>">
													        	</div>  

													        	<div class="form-group">
													        		<label>Bed <sup style="font-size: 8px; color: #DD5353; top: -9px;"><small><i class="fa-solid fa-star"></i></small></sup></label>					                	
													        		<input type="text" name="bed" class="form-control" placeholder="Phone No..." value="<?php echo $re_bed; ?>">
													        	</div> 

													        	<div class="form-group">
													        		<label>Toilet <sup style="font-size: 8px; color: #DD5353; top: -9px;"><small><i class="fa-solid fa-star"></i></small></sup></label>					                	
													        		<input type="text" name="toilet" class="form-control" placeholder="Phone No..." value="<?php echo $re_toilet; ?>">
													        	</div>    

													        	<div class="form-group">
													        		<label>Price (Taka) <sup style="font-size: 8px; color: #DD5353; top: -9px;"><small><i class="fa-solid fa-star"></i></small></sup></label>					                	
													        		<input type="text" name="price" class="form-control" placeholder="Phone No..."  value="<?php echo $re_price; ?>">
													        	</div>   	
															</div>
															<div class="col-lg-6">
																<div class="form-group">
													        		<label>Address <sup style="font-size: 8px; color: #DD5353; top: -9px;"><small><i class="fa-solid fa-star"></i></small></sup></label>		
													        		<textarea name="address" class="form-control" placeholder="Your Address.." rows="4"><?php echo $re_address; ?></textarea>	
													        	</div>

													        	<div class="form-group">
													        		<label>Description</label>		
													        		<textarea name="description" class="form-control" placeholder="description.." rows="4"><?php echo $re_description; ?></textarea>	
													        	</div>

													        	<div class="form-group">
													        		<label>Status <sup style="font-size: 8px; color: #DD5353; top: -9px;"><small><i class="fa-solid fa-star"></i></small></sup></label>
													        		<select name="status" class="form-control">
													        			<option value="1">Please Select the Status</option>
													        			<option value="1" <?php if( $status == 1 ){ echo "selected"; } ?>>Active</option>
													        			<option value="0" <?php if( $status == 0 ){ echo "selected"; } ?>>InActive</option>
													        		</select>
													        	</div>

													        	<div class="form-group">
													        		<label>Profile Picture <sup style="font-size: 8px; color: #DD5353; top: -9px;"><small><i class="fa-solid fa-star"></i></small></sup></label>
													        		<br>
													        		<?php
															      		if (!empty($re_image)) { ?>
															      			<img src="dist/img/rent/<?php echo $re_image; ?>" alt="" width="60">
															      		<?php }
															      		else { ?>
															      			<p>No Picture Uploaded!</p>
															      		<?php }
															      	?>	
													        		<input type="file" name="image" class="form-control-file">
													        	</div>

													        	<div class="form-group">
													        		<input type="hidden" name="user_id" value="<?php echo $re_id; ?>">
													        		<input type="submit" name="updaterent" class="btn btn-success btn-block" value="Add New Rent">
													        	</div>
															</div>
														</div>
													</form>
												</div>
					            </div>
										<!-- Card End -->

									<?php }
								}
							}
							// Edit page end



							// Update page start
							// This Update page will Update the users existing data info in a html file
							else if ( $do == "Update" ) {
								if (isset($_POST['updaterent'])) {
									$user_id  		= $_POST['user_id'];
									$title  				= $_POST['title'];
									$email 					= $_POST['email'];
									$phone 					= $_POST['phone'];
									$cat_name 			= $_POST['cat_name'];
									$room 					= $_POST['room'];
									$bed 						= $_POST['bed'];
									$toilet 				= $_POST['toilet'];
									$price 					= $_POST['price'];
									$address 				= $_POST['address'];
									$description 		= $_POST['description'];
									$status 				= $_POST['status'];
									$image 					= $_FILES['image']['name'];
									$image_temp     = $_FILES['image']['tmp_name'];

										// Delete if image already exists
									if (!empty($image)) {
										$query = "SELECT * FROM rent WHERE re_id = '$user_id'";
										$oldImage = mysqli_query($db, $query);

										while ($row = mysqli_fetch_assoc($oldImage)) {
											$existingImage = $row['re_image'];
											unlink("dist/img/rent/$image_name" . $existingImage);
										}

										// Upload New Image
										$image_name		= rand(1, 999999999) ."_". $image;
										move_uploaded_file($image_temp, "dist/img/rent/$image_name");

										$sql = "UPDATE rent SET re_title='$title', re_room='$room', re_bed='$bed', re_toilet='$toilet',	re_category='$cat_name', re_address='$address', re_description='$description',	ow_phone='$phone',	ow_email='$email',	re_price='$price',	re_image='$image_name', status='$status' WHERE re_id='$user_id'";
											$updateRent = mysqli_query($db, $sql);

											if ( $updateRent ) {
												header("Location: home_rent.php?do=Manage");
											}
											else {
												die("mysqli Error" . mysqli_error($db));
											}
									}
									else if (empty($image)) {
										$sql = "UPDATE rent SET re_title='$title', re_room='$room', re_bed='$bed', re_toilet='$toilet',	re_category='$cat_name', re_address='$address', re_description='$description',	ow_phone='$phone',	ow_email='$email',	re_price='$price', status='$status' WHERE re_id='$user_id'";
											$updateRent = mysqli_query($db, $sql);

											if ( $updateRent ) {
												header("Location: home_rent.php?do=Manage");
											}
											else {
												die("mysqli Error" . mysqli_error($db));
											}
									}

										
									}

								}
							// Update page end



							// Delete page start
							// We will delete the users from Database
							else if ( $do == "Delete" ) {
								if (isset($_GET['delrent_id'])) {
									$deleteUserId = $_GET['delrent_id'];
									$sql = "DELETE FROM rent WHERE re_id  = '$deleteUserId'";
									$deleteUser = mysqli_query( $db, $sql );

									if ( $deleteUser ) {
										header( "Location: home_rent.php?do=Manage" );
									}
									else {
										die("MySql Error!" . mysqli_error($db));
									}
								}
							}
							// Delete page end

						?>
					</div>
				</div>
			</div>
		</section>
	</div>
	<!-- content-wrapper End -->

<?php include "inc/footer.php"; ?>