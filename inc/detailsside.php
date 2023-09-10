<section>
			<div class="container">
				<div class="row">

							<div class="col-lg-12">
								

								<div class="blog-posts">

									<?php  

									$sql = "SELECT * FROM rent WHERE status=1 ORDER BY re_id DESC LIMIT 4";
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
											?>

												<article class="post post-large py-1">
													<div class="d-flex align-items-center " style="border-radius: 8px; background: #fff;">
														<div class="post-image" style="">
															<a href="home_details.php?dId=<?php echo $re_id; ?>">
																<?php 
																	if (!empty($re_image)) {
																		echo '<img src="admin/dist/img/rent/' . $re_image . '" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="'. $re_title .'" style="width: 100%;     margin-right: 8px; ">';
																	}
																	else {
																		echo 'No Image';
																	}
																?>
																
															</a>
														</div>
														<div class="px-2">
															<a href="home_details.php?dId=<?php echo $re_id; ?>" style="color: #000;"><h3 style="font-size: 15px; font-weight: 600;"><span style="font-size: 20px"><sub>BDT </sub></span><?php echo $re_price; ?> Thousand</h3></a>
															
															

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
		</section>