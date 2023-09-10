<?php 
  session_start();
  ob_start();
  include "admin/inc/db.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ThreeSservice | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/0c66e46c25.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="assets/css/custom.css"> 

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ruwudu:wght@400;600&display=swap" rel="stylesheet">

    <style>

      .banner-part{
          background-image: linear-gradient(to left, rgba(0,0,0,0.6), rgba(0,0,0,0.6)) ,url(assets/images/body.png); 
          background-repeat: no-repeat;
          background-size: cover;
          background-position: center;
          padding: 114px 0px;
      }
      .fea-part{
        background-image: url(assets/images/soft_bg.jpg); 
          background-repeat: no-repeat;
          background-size: cover;
          background-position: center;
          background-attachment: fixed;
          padding: 20px 0;
      }
      .blog-details{
        /*background-image: linear-gradient(to left, rgba(0,0,0,0.4), rgba(0,0,0,0.4)) ,url(assets/images/blog.jpg); 
          background-repeat: no-repeat;
          background-size: cover;
          background-position: center;
          padding: 100px 0;*/
          background: #000 ;
      }

 
      header{
        background-color: #f7f7f7;
      }

      .dropdown {
        position: relative;
        display: inline-block;
      }

      .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        padding: 12px 16px;
        z-index: 1;
      }

      .dropdown:hover .dropdown-content {
        display: block;
      }

      .card:hover{
        box-shadow: 1px 10px 15px #ccc;
        transition: 0.5s;
      }

      .about{
        background-image: linear-gradient(to left, rgba(0,0,0,0.5), rgba(0,0,0,0.4)) ,url(assets/images/about.webp);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        padding: 114px 0px;

      }




    </style>
  </head>

  <body style="
    background-image: url(assets/images/wholeBg.jpg); 
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;">

    <!-- ::::: Header Section Start ::::: -->
      <header>
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <!-- Nav Menu Start -->
              <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                  <a class="navbar-brand" href="index.php"><img src="assets/images/bg.png" alt="" style="width: 35%;"></a>

                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>

                  <!-- Menu Item Start -->
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="aboutus.php">About Us</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="blogdetails.php">Blog</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#foot">Contact Us</a>
                      </li>

                      <?php  
                        if (empty($_SESSION['user_id']) || empty($_SESSION['email'])) { ?>
                          <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="login.php"><i class="fa-solid fa-right-to-bracket"></i> Log in</a>
                          </li>

                          <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="register.php"><i class="fa-solid fa-circle-user"></i> Create account</a>
                          </li>
                        <?php }

                        else { ?>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <!-- Show user name -->
                              <?php  
                                $user_id = $_SESSION['user_id'];
                                $query = "SELECT * FROM users WHERE user_id = '$user_id'";
                                $userData = mysqli_query($db, $query);

                                while ($row = mysqli_fetch_assoc($userData)) {
                                  $fullname =  $row['fullname'];
                                  $image    = $row['image'];

                                  if (!empty($image)) { ?>
                                    <img src="admin/dist/img/users/<?php echo $image; ?>" alt="User Image" style="width: 30px; height: 30px; border-radius: 50%; border: 1px solid #333;"> 
                                  <?php echo $fullname; }
                                  else { ?>
                                    <img src="admin/dist/img/image.jpg" alt="User Image" style="width: 30px; height: 30px; border-radius: 50%; border: 1px solid #333;"> 
                                  <?php echo $fullname; }
                                }
                              ?>
                            </a>
                            <ul class="dropdown-menu">                              
                              <li><a class="dropdown-item" href="orderHistory.php"><i class="fa-solid fa-cart-shopping"></i> Booking Item </a></li>
                              <li><a class="dropdown-item" href="manage.php?mid=<?php echo $_SESSION['user_id']; ?>"><i class="fa-solid fa-user"></i> Manage Profile</a></li>
                              <li><a class="dropdown-item" href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> Log Out </a></li>                            
                            </ul>
                          </li>

                       <?php }
                      ?>


                      
                      

                                          
                    </ul>
                  </div>
                  <!-- Menu Item End -->
                </div>
              </nav>
              <!-- Nav Menu End -->
            </div>
          </div>
        </div>
      </header>
      <!-- ::::: Header Section End ::::: -->
