<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="blog-top">                  
          <h1>Our Blog Posts</h1>

          <div class="blog-btm">
            <div class="row">
              <!-- Book Content Start -->
            <div class="col-lg-12">
              <div class="row">      

                <?php  

                    $sql = "SELECT * FROM blogs WHERE status=1 ORDER BY blog_title ASC LIMIT 4";
                    $allData = mysqli_query($db, $sql);

                    $numOfBlogs = mysqli_num_rows($allData);

                    if ($numOfBlogs == 0) { ?>
                      <div class="alert alert-info" role="alert">
                      <i class="fa-solid fa-bell"> </i> Ooops!! No Blog found in our Bloging aplication. Please make a blog first.
                      </div>
                    <?php }

                  
                    else {
                      while( $row = mysqli_fetch_assoc($allData) ) {
                          $blog_id        = $row['blog_id'];
                          $image        = $row['image'];
                          $blog_title     = $row['blog_title'];
                          $blog_text      = $row['blog_text'];
                          $status       = $row['status'];
                          $join_date      = $row['join_date'];
                          ?>

                        <!-- Card Part Start -->
                        <div class="col-lg-3 blog-item pb-4">
                            <div class="book-thumbnail">
                              <?php
                                  if (!empty($image)) { ?>
                                    <img src="admin/dist/img/books/<?php echo $image; ?>" alt="" style="width: 100%; height: 250px; border-radius: 10px;">
                                  <?php }
                                  else { ?>
                                    <img src="admin/dist/img/books/blank_book.jpg" alt="" style="width: 100%; height: 250px;">
                                  <?php }
                                ?>  

                                <div class="author-info">
                                  <span class="tarikh"><h1><?php echo $join_date; ?></h1></span>
                                </div> 

                            </div>

                            <div class="blog-info py-3">
                              <a href="blogsearch.php?blog=<?php echo $blog_id; ?>"><h4><?php echo $blog_title; ?></h4> </a>
                              <p><?php echo substr($blog_text, 0, 57); ?>... <a href="blogsearch.php?blog=<?php echo $blog_id; ?>">read more</a></p>      
                            </div>

                        </div> 
                        <!-- Card Part End -->

                      <?php }
                    }
                    

                ?>
                        
                              
              </div>
            </div>
            <!-- Book Content End -->
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>