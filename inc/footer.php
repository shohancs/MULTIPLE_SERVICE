</main>

<!-- Footer part start -->
<footer style="
    background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url(assets/images/45603.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;">

    <div class="container py-5 pb-0">
        <div class="row">
            <div class="col-lg-4">
                <div class="logo-ftr">
                    <a href="index.php"><img src="assets/images/bg.png" alt="" width="100%"></a>
                </div>                
            </div>

            <div class="col-lg-4" id="foot">
                <h4 class="text-white">CONTACT US</h4>
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" ><strong>PHONE</strong></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="">
                        <?php  
                            $sql = "SELECT * FROM users WHERE role = 1 ORDER BY fullname ASC";
                            $allUserData = mysqli_query($db, $sql);
                            $i = 0;

                            while( $row = mysqli_fetch_assoc($allUserData) ) {
                                $user_id        = $row['user_id'];
                                $fullname       = $row['fullname'];
                                $email              = $row['email'];
                                $password       = $row['password'];
                                $phone              = $row['phone'];
                                $address        = $row['address'];
                                $image              = $row['image'];
                                $role               = $row['role'];
                                $status             = $row['status'];
                                $join_date      = $row['join_date'];
                                ?>
                                    <div class="d-flex align-items-center">
                                        <i class="fa-solid fa-phone mx-2"></i>
                                        <?php echo $phone ."<br>"; ?>
                                    </div>
                                <?php
                                
                            }
                        ?>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" ><strong>EMAIL</strong></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=GTvVlcSHxwCmkSFtmZkphksCSZKZTrWSQLjpLHdqRRvKtGWtcZdLpbrbvLFFTlfrVvvLsqFcFzWJJ">
                        <?php  
                            $sql = "SELECT * FROM users WHERE role = 1 ORDER BY fullname ASC";
                            $allUserData = mysqli_query($db, $sql);
                            $i = 0;

                            while( $row = mysqli_fetch_assoc($allUserData) ) {
                                $user_id        = $row['user_id'];
                                $email          = $row['email'];
                                ?>
                                    <div class="d-flex align-items-center">
                                        <i class="fa-solid fa-envelope mx-2"></i>
                                        <?php echo $email ."<br>"; ?>
                                    </div>
                                <?php
                                
                            }
                        ?>
                    </a>
                  </li>
                </ul>
            </div>

            <div class="col-lg-4">
                <h4 class="text-white">CUSTOMER SERVICE</h4>
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page"><strong>STORE LOCATIONS</strong></a>
                  </li>                  
                </ul>
                <span>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7301.832161750958!2d90.37526630000004!3d23.786002500000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1667932853950!5m2!1sen!2sbd" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </span>
            </div>
            <div class="col-lg-12">
                <div class="bottom-part py-5 pb-0">
                    <div class="divedier" style=" width: 100%; background: whitesmoke; height: 2px;"></div>
                    <div class="row" style="align-content: center;">
                        <div class="col-lg-6 py-4">
                        <p class="text-white">&copy; 2023 Threes Service</p>
                    </div>
                    <div class="col-lg-6 py-4">
                        <nav class="nav justify-content-end">
                          <a class="nav-link active text-white" aria-current="page" href="" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                          <a class="nav-link text-white" href="#" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                          <a class="nav-link text-white" href="#" target="_blank"><i class="fa-brands fa-linkedin"></i></a>                          
                        </nav>
                    </div>
                </div>
                    
                </div>
            </div>
        </div>
        
    </div>
    
</footer>
<!-- Footer part end -->

    <!-- JQuery Library File -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- Bootstrap CDN Js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <!-- Ck editor js -->
    <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'description' );
    </script>

    <!-- JQuery UI js -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#datepicker1" ).datepicker();
        } );
    </script>

    <script>
        $( function() {
            $( "#datepicker2" ).datepicker();
        } );
    </script>

    <!-- Data Table Jquery -->

  <!-- Data Table Js -->
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
  <script>
    $(document).ready(function () {
        $('#dataSearch').DataTable();
    });
  </script> 

    <?php  
        ob_end_flush();
    ?>
  </body>
</html>