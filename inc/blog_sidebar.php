<!-- Sidebar Content Start --> 
<div class="col-lg-3">

    <div class="blog-part sticky-top">
        <h3 class="py-3">Our Blogs</h3>

        <?php  
            $sql = "SELECT * FROM blogs ORDER BY blog_id DESC";
            $allBooks = mysqli_query($db, $sql);

            $totalBooks = mysqli_num_rows($allBooks);
            
            if ($totalBooks <= 0) { ?>
              <div class="alert alert-info" role="alert"><i class="fa-solid fa-bell"> </i> Ooops!! No Book found Yet....</div>
            <?php }
            else {
                while ($row = mysqli_fetch_assoc($allBooks)) {    
                      $blog_id        = $row['blog_id'];
                      $image        = $row['image'];
                      $blog_title     = $row['blog_title'];
                      $blog_text      = $row['blog_text'];
                      $status       = $row['status'];
                      $join_date      = $row['join_date'];
                    ?>
                    
                    <div class="row align-items-center py-3">
                        <div class="col-lg-6">
                            <div>
                                <?php
                                  if (!empty($image)) { ?>
                                    <img src="admin/dist/img/books/<?php echo $image; ?>" alt="" width="100%" class="pb-3">
                                  <?php }
                                  else { ?>
                                    <img src="admin/dist/img/books/blank_book.jpg" alt="" class="img-fluid">
                                  <?php }
                                ?>                          
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="">
                            <a href="blogsearch.php?blog=<?php echo $blog_id; ?>"><h4 style="font-size: 16px; color: #777;"><?php echo $blog_title; ?></h4></a>
                              <p style="font-size: 13px;color: #777;margin: -3px 0px 10px;"><?php echo $join_date; ?></p>
                            </div> 
                        </div>
                    </div>
                    
                    
                <?php }
            }
        ?>
    </div> 
</div>
<!-- Sidebar Content End -->