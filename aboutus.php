<?php include "inc/header.php"; ?>
    <main>
      <?php  

        $sql = "SELECT * FROM blogs";
        $allData = mysqli_query($db, $sql);

        while( $row = mysqli_fetch_assoc($allData) ) {
          $blog_id        = $row['blog_id'];
          $image        = $row['image'];
          $blog_title     = $row['blog_title'];
          $blog_text      = $row['blog_text'];
          $status       = $row['status'];
          $join_date      = $row['join_date'];
          ?>
<?php }

      ?>
<section class="blog-details">
  <div class="container">
    <div class="row align-items-center">

      <div class="col-lg-6">
        <h1 class="text-light" style=" font-family: 'Righteous', cursive;
    font-size: 60px;">About Us</h1>
        
      </div>
      <div class="col-lg-6">
        <img src="assets/images/shape-dots.svg" alt="" style="margin: 0px 0px 0px 215px; opacity: .5;">
      </div>
    </div>
  </div>
</section>

<section class="py-5">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="blog-top py-5 text-centre"> 

          <h5 style="text-transform: uppercase; font-weight: 600; font-size: 15px;">Our Mission</h5>
          <h2 class="py-3" style="font-weight: 600; text-transform: capitalize;">Making commerce Better for Everyone</h2>
          <p style="padding: 0px 59px; color: #777777e3;">Discover the future of online convenience with our Three S service. Offering a seamless blend of essential services, Three S service simplifies your digital life. Whether it's managing your finances, staying organized our platform delivers it all. With an intuitive interface and robust security, we ensure a hassle-free and secure online experience. Embrace efficiency and versatility with Three S service.</p>

        </div>
      </div>
    </div>

        <div class="row" style="padding: 0px 103px;">
          <div class="col-lg-4">
            <img src="assets/images/we.png" alt="" style="border-radius: 50%;width: 390px;height: 390px;">
          </div>
          <div class="col-lg-8" style="padding: 0px 86px;">
            <h5 style="text-transform: uppercase; font-weight: 600; font-size: 15px;">Our People</h5>
            <h2 class="py-3" style="font-weight: 600; text-transform: capitalize;">Creating a Community for impact</h2>
            <p style=" color: #777777e3; text-align: justify;">Our service is backed by a dedicated and skilled team of developers who are passionate about crafting exceptional digital experiences. Our developer team consists of highly trained professionals with diverse expertise, from front-end wizards who ensure an intuitive user interface to back-end architects who guarantee the reliability and security of our platform. We pride ourselves on fostering innovation, staying at the forefront of technology, and continuously improving our services. With a collaborative spirit and a commitment to excellence, our developer team is always working diligently to bring you the latest features and enhancements, ensuring that Three S service remains a cutting-edge solution you can rely on.</p>
          </div>
        </div>

      
    
  </div>
</section>

<!-- ########## START: FEATURE PART ########## -->
        <section class="featured-section pt-5">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="" style="width: 40%;
    margin: -45px auto;
    padding: 37px;
    text-align: center;
    background: #f7f7f7;
    box-shadow: 1px 10px 15px #eee;
    border-radius: 21px;
">
                  <!-- <span><h3>Featured Categories</h3></span> -->
                  <h1 style="font-weight: 600; text-transform: capitalize;">Our Services</h1>
                </div>
                <div class="category-bottom">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="servicer-1">
                        <a href="education.php">
                          <img src="assets/images/education.png" class="img-fluid" alt="">
                          <h2>Education</h2>
                        </a>
                      </div>
                    </div>

                    <div class="col-lg-3">
                      <div class="servicer-1">
                        <a href="home_rent.php">
                          <img src="assets/images/home.png" class="img-fluid" alt="">
                          <h2>Home Rent</h2>
                        </a>
                      </div>
                    </div>

                    <div class="col-lg-3">
                      <div class="servicer-1">
                        <a href="plumber.php">
                          <img src="assets/images/servoce.png" class="img-fluid" alt="">
                          <h2>Plumber Service</h2>
                        </a>
                      </div>
                    </div>                    

                    <div class="col-lg-3">
                      <div class="servicer-1">
                        <a href="laundry.php">
                          <img src="assets/images/laundry.png" class="img-fluid" alt="" style="width: 64%; border-radius: 11%;">
                          <h2>Laundry Service</h2>
                        </a>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- ########## END: FEATURE PART ########## -->



        
      
    </main>

<?php include "inc/footer.php"; ?>