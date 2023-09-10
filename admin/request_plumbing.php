<?php include "inc/header.php"; ?>  

	<!-- content-wrapper Start -->
	<div class="content-wrapper">
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="m-0">Plumbing Request Management</h1>
					</div>
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
							<li class="breadcrumb-item active">Plumbing Request Management</li>
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
					                <h3 class="card-title">Manage Plumbing Request</h3>
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
									      <th scope="col">Subject</th>
									      <th scope="col">Message</th>
									      <th scope="col">Email</th>
									      <th scope="col">Service Name</th>
									      <th scope="col">Phone</th>
									      <th scope="col">Join Date</th>
									      <th scope="col">Status</th>	
									      <th scope="col">Action</th>
									    </tr>
									  </thead>

									  <tbody>
									  	<?php  
									  		$sql = "SELECT * FROM pl_message ORDER BY id DESC";
									  		$allrentData = mysqli_query($db, $sql);
									  		$i = 0;

									  		while( $row = mysqli_fetch_assoc($allrentData) ) {
									  			$id   				= $row['id'];
									  			$email  			= $row['email'];
									  			$subject  			= $row['subject'];
									  			$message  			= $row['message'];
									  			$service_id  		= $row['service_id'];
									  			$phone  			= $row['phone'];
									  			$status  			= $row['status'];
									  			$join_date  		= $row['join_date'];
									  			$i++;
									  			?>
									  			<tr>
											      <th scope="row"><?php echo $i; ?></th>
											      <td><?php echo substr($subject, 0, 15) ?>..</td>
											      <td><?php echo substr($message, 0, 15) ?>..</td>
											      <td><?php echo $email; ?></td>
													<td>
														<?php  
													  		$sql = "SELECT * FROM plumber WHERE id='$service_id'";
													  		$allrentData = mysqli_query($db, $sql);

													  		while( $row = mysqli_fetch_assoc($allrentData) ) {
													  			$id   				= $row['id'];
													  			$title  			= $row['title'];
													  			
													  			echo $title;
													  		}
													  	?>
													</td>
											      <td><?php echo $phone; ?></td>
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
														        <h5 class="modal-title" id="exampleModalLabel">Confirm to delete  ?</h5>
														        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
														          <span aria-hidden="true">&times;</span>
														        </button>
														      </div>
														      <div class="modal-body">
														        <div class="modal-btn">
															        	<ul>
															        		<li>
															        			<a href="request_plumbing.php?do=Delete&delrent_id=<?php echo $id; ?>" class="btn btn-danger">Confirm <i class="fa-regular fa-trash-can"></i></a>
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


							// Delete page start
							// We will delete the users from Database
							else if ( $do == "Delete" ) {
								if (isset($_GET['delrent_id'])) {
									$deleteUserId = $_GET['delrent_id'];
									$sql = "DELETE FROM pl_message WHERE id = '$deleteUserId'";
									$deleteUser = mysqli_query( $db, $sql );

									if ( $deleteUser ) {
										header( "Location: request_plumbing.php?do=Manage" );
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