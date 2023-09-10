<?php include "inc/header.php"; ?>  

	<!-- content-wrapper Start -->
	<div class="content-wrapper">
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="m-0">Plumbing Management</h1>
					</div>
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
							<li class="breadcrumb-item active">Plumbing Management</li>
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
					                <h3 class="card-title">Manage Plumbing</h3>
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
													      <th scope="col">Address</th>
													      <th scope="col">Discription</th>
													      <th scope="col">Join Date</th>
													      <th scope="col">Status</th>	
													      <th scope="col">Action</th>
													    </tr>
													  </thead>

													  <tbody>
													  	<?php  
													  		$sql = "SELECT * FROM plumber WHERE status=1 ORDER BY title ASC";
													  		$allrentData = mysqli_query($db, $sql);
													  		$i = 0;

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
													  			$i++;
													  			?>
													  			<tr>
															      <th scope="row"><?php echo $i; ?></th>
															      	<td>
																      	<?php
																      		if (!empty($image)) { ?>
																      			<img src="dist/img/plumbing/<?php echo $image; ?>" width="40">
																      		<?php }
																      		else {
																      			echo "No Image Uploaded";
																      		}
																      	?>											      		
															      	</td>
															      <td><?php echo $title; ?></td>
															      <td><?php echo $email; ?></td>
															      <td><?php echo $phone; ?></td>
															      <td><?php echo $address; ?></td>
															      <td><?php echo substr($description, 0, 15);?></td>
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
																			        <a href="plumbing.php?do=Edit&uid=<?php echo $id; ?>"><i class="fa-regular fa-pen-to-square"></i></a>
																			      </li>
																			      <li>
																			        <a href="" data-toggle="modal" data-target="#delUser<?php echo $id; ?>"><i class="fa-solid fa-trash-can"></i></a>
																			      </li>
																			    </ul>
																			</div>
																		</td>

																			<!-- Modal Start -->
																			<!-- Modal -->
																		<div class="modal fade" id="delUser<?php echo $id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
																		  <div class="modal-dialog">
																		    <div class="modal-content">
																		      <div class="modal-header">
																		        <h5 class="modal-title" id="exampleModalLabel">Confirm to delete this <?php echo $title; ?> ?</h5>
																		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		          <span aria-hidden="true">&times;</span>
																		        </button>
																		      </div>
																		      <div class="modal-body">
																		        <div class="modal-btn">
																			        	<ul>
																			        		<li>
																			        			<a href="plumbing.php?do=Delete&delrent_id=<?php echo $id; ?>" class="btn btn-danger">Confirm <i class="fa-regular fa-trash-can"></i></a>
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
					                <h3 class="card-title">Add New Plumbing</h3>
					                <div class="card-tools">
					                  	<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
					                </div>
					              </div>
												<div class="card-body">
													<form action="plumbing.php?do=Store" method="POST" enctype="multipart/form-data">
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
													        		<label>Address <sup style="font-size: 8px; color: #DD5353; top: -9px;"><small><i class="fa-solid fa-star"></i></small></sup></label>		
													        		<textarea name="address" class="form-control" placeholder="Your Address.." rows="4"></textarea>	
													        	</div>

													        	<div class="form-group">
													        		<label>Status <sup style="font-size: 8px; color: #DD5353; top: -9px;"><small><i class="fa-solid fa-star"></i></small></sup></label>
													        		<select name="status" class="form-control">
													        			<option value="1">Please Select the Status</option>
													        			<option value="1">Active</option>
													        			<option value="0">InActive</option>
													        		</select>
													        	</div>
															</div>
															<div class="col-lg-6">
																

													        	<div class="form-group">
													        		<label>Description</label>		
													        		<textarea name="description" class="form-control" placeholder="description.." rows="4"></textarea>	
													        	</div>

													        	<div class="form-group">
													        		<label>Profile Picture <sup style="font-size: 8px; color: #DD5353; top: -9px;"><small><i class="fa-solid fa-star"></i></small></sup></label>
													        		<input type="file" name="image" class="form-control-file">
													        	</div>

													        	<div class="form-group">
													        		<input type="submit" name="addrent" class="btn btn-success btn-block" value="Submit">
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
									$title  		= $_POST['title'];
									$email 			= $_POST['email'];
									$phone 			= $_POST['phone'];
									$address 		= $_POST['address'];
									$description 	= $_POST['description'];
									$status 		= $_POST['status'];
									$image 			= $_FILES['image']['name'];
									$image_temp     = $_FILES['image']['tmp_name'];

										if ( !empty($image) ) {
											$image_name		= rand(1, 999999999) ."_". $image;
											move_uploaded_file($image_temp, "dist/img/plumbing/$image_name");
										}
										else {
											echo "Not Uploaded";
										}

											$sql = "INSERT INTO plumber (title, phone, email, address, description, image, status, join_date) VALUES ( '$title', '$phone', '$email', '$address', '$description', '$image_name', '$status',  now())";
											$addUser = mysqli_query($db, $sql);

											if ( $addUser ) {
												header("Location: plumbing.php?do=Manage");
											}
											else {
												die("mysqli Error" . mysqli_error($db));
											}

										}
										
									}
							// Store page End



							// Edit page start
							// This edit page will show the update users info in a html file
							else if ( $do == "Edit" ) { 
								if (isset($_GET['uid'])) {
									$updateId = $_GET['uid'];

									$sql = "SELECT * FROM plumber WHERE id = '$updateId' ORDER BY title ASC ";
									$usersData = mysqli_query($db, $sql);

									while ($row = mysqli_fetch_assoc($usersData)) {
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
										<!-- Card Stat -->
								<div class="card">
					              <div class="card-header">
					                <h3 class="card-title">Update Plumbing</h3>
					                <div class="card-tools">
					                  	<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
					                </div>
					              </div>
												<div class="card-body">
													<form action="plumbing.php?do=Update" method="POST" enctype="multipart/form-data">
														<div class="row">
															<div class="col-lg-6">
																<div class="form-group">
													        		<label>Title <sup style="font-size: 8px; color: #DD5353; top: -9px;"><small><i class="fa-solid fa-star"></i></small></sup></label>					                	
													        		<input type="text" name="title" class="form-control" placeholder="title..." required autocomplete="off" value="<?php echo $title; ?>">
													        	</div>

	<div class="form-group">
		<label>Email <sup style="font-size: 8px; color: #DD5353; top: -9px;"><small><i class="fa-solid fa-star"></i></small></sup></label>					                	
		<input type="email" name="email" class="form-control" placeholder="Your email..." required autocomplete="off" value="<?php echo $email; ?>">
	</div>

													        	<div class="form-group">
													        		<label>Phone <sup style="font-size: 8px; color: #DD5353; top: -9px;"><small><i class="fa-solid fa-star"></i></small></sup></label>					                	
													        		<input type="tel" name="phone" class="form-control" placeholder="Your phone..." required autocomplete="off" value="<?php echo $phone; ?>">
													        	</div>	

													        	<div class="form-group">
													        		<label>Address <sup style="font-size: 8px; color: #DD5353; top: -9px;"><small><i class="fa-solid fa-star"></i></small></sup></label>		
													        		<textarea name="address" class="form-control" placeholder="Your Address.." rows="4"><?php echo $address; ?></textarea>	
													        	</div>

													        	<div class="form-group">
													        		<label>Status <sup style="font-size: 8px; color: #DD5353; top: -9px;"><small><i class="fa-solid fa-star"></i></small></sup></label>
													        		<select name="status" class="form-control">
													        			<option value="1">Please Select the Status</option>
													        			<option value="1" <?php if ( $status == 1 ) {echo "selected";} ?>>Active</option>
													        			<option value="0" <?php if ( $status == 0 ) {echo "selected";} ?>>InActive</option>
													        		</select>
													        	</div>
															</div>
															<div class="col-lg-6">
																

													        	<div class="form-group">
													        		<label>Description</label>		
													        		<textarea name="description" class="form-control" placeholder="description.." rows="4"><?php echo $description; ?></textarea>	
													        	</div>

													        	<div class="form-group">
													        		<label>Profile Picture <sup style="font-size: 8px; color: #DD5353; top: -9px;"><small><i class="fa-solid fa-star"></i></small></sup></label>
													        		<br>
													        		<?php
															      		if (!empty($image)) { ?>
															      			<img src="dist/img/plumbing/<?php echo $image; ?>" width="40">
															      		<?php }
															      		else {
															      			echo "No Image Uploaded";
															      		}
															      	?>		
													        		<br>
													        		<input type="file" name="image" class="form-control-file">
													        	</div>

													        	<div class="form-group">
													        		<input type="hidden" name="user_id"value="<?php echo $id; ?>">
													        		<input type="submit" name="updaterent" class="btn btn-success btn-block" value="Submit">
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
									$title  		= $_POST['title'];
									$email 			= $_POST['email'];
									$phone 			= $_POST['phone'];
									$address 		= $_POST['address'];
									$description 	= $_POST['description'];
									$status 		= $_POST['status'];
									$image 			= $_FILES['image']['name'];
									$image_temp     = $_FILES['image']['tmp_name'];

										// Delete if image already exists
									if (!empty($image)) {
										$query = "SELECT * FROM plumber WHERE id = '$user_id'";
										$oldImage = mysqli_query($db, $query);

										while ($row = mysqli_fetch_assoc($oldImage)) {
											$existingImage = $row['image'];
											unlink("dist/img/plumbing/$image_name" . $existingImage);
										}

										// Upload New Image
										$image_name		= rand(1, 999999999) ."_". $image;
										move_uploaded_file($image_temp, "dist/img/plumbing/$image_name");

										$sql = "UPDATE plumber SET title='$title', phone='$phone', email='$email', address='$address', description='$description', image='$image_name', status='$status' WHERE id='$user_id' ";
											$addUser = mysqli_query($db, $sql);

											if ( $addUser ) {
												header("Location: plumbing.php?do=Manage");
											}
											else {
												die("mysqli Error" . mysqli_error($db));
											}
										
									}
									else if (empty($image)) {
										$sql = "UPDATE plumber SET title='$title', phone='$phone', email='$email', address='$address', description='$description', status='$status' WHERE id='$user_id' ";
											$addUser = mysqli_query($db, $sql);

											if ( $addUser ) {
												header("Location: plumbing.php?do=Manage");
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
									$sql = "DELETE FROM plumber WHERE id  = '$deleteUserId'";
									$deleteUser = mysqli_query( $db, $sql );

									if ( $deleteUser ) {
										header( "Location: plumbing.php?do=Manage" );
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