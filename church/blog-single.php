<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ArcLab - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container-fluid">
	      <a class="navbar-brand" href="index.html">ArcLab.</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="team.html" class="nav-link">Team</a></li>
	          <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
	          <li class="nav-item"><a href="project.html" class="nav-link">Project</a></li>
	          <li class="nav-item active"><a href="blog.html" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a href="blog.php">Blog <i class="fa fa-chevron-right"></i></a></span> <span>Blog Single <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-3 bread">Blog Details</h1>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ftco-animate">
                    <div>
                        <?php 
                            if(isset($_GET['id'])){
                                $id = $_GET['id'];
                                // connect to database
                                include '../../database.php';
                                $sql = "SELECT * FROM church WHERE id='$id'";
                                $query= @mysqli_query($conn,$sql);
                                if($query){
                                    $array = @mysqli_fetch_array($query);
                                    ?>
                                    <div class="" style="">
                                        <p>
                                            <img style="width:100%;height:450px;" src="../admin/uploads/<?php echo $array['photo']; ?>" alt="" class="img-fluid">
                                        </p>
                                        <h2 class="mb-3"><?php echo $array['title']; ?></h2>
                                        <p><?php echo $array['content']; ?></p>
                                    </div>
                                    <?php
                                }
                            }
                        ?>
                    </div>

                </div> <!-- .col-md-8 -->
                <div class="col-md-4 sidebar ftco-animate">
                    <div class="sidebar-box">
                    <form action="#" class="search-form">
                        <div class="form-group">
                        <span class="icon fa fa-search"></span>
                        <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                        </div>
                    </form>
                    </div>
                    <div class="sidebar-box ftco-animate">
                    <div class="categories">
                        <h3>Categories</h3>
                        <li><a href="#">Planning <span>(12)</span></a></li>
                        <li><a href="#">Interior Design <span>(22)</span></a></li>
                        <li><a href="#">Exterior Design <span>(37)</span></a></li>
                        <li><a href="#">Furniture <span>(42)</span></a></li>
                        <li><a href="#">Decoration <span>(14)</span></a></li>
                        <li><a href="#">Urban <span>(20)</span></a></li>
                        <li><a href="#">Exclusively <span>(10)</span></a></li>
                    </div>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3>Recent Blog</h3>
                        <?php 
                            // connect to database
                            include '../../database.php';
                            $sql = "SELECT * FROM church ORDER BY time DESC LIMIT 3";
                            $result = @mysqli_query($conn,$sql);
                            while($array = @mysqli_fetch_array($result)){
                        ?>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(../admin/uploads/<?php echo $array['photo']; ?>);"></a>
                            <div class="text">
                            <h3 class="heading"><a href="blog-single.php?id=<?php echo $array['id']; ?>"><?php echo $array['title']; ?></a></h3>
                            <div class="meta">
                                <div><a href="blog-single.php?id=<?php echo $array['id']; ?>"><span class="icon-calendar"></span><?php echo $array['created_at']; ?></a></div>
                                <div><a href="blog-single.php?id=<?php echo $array['id']; ?>"><span class="icon-person"></span><?php echo $array['time']; ?></a></div>
                            </div>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- .section -->

    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">ArchLab.</h2>
              <p>Far far away, behind the word mountains, far from the countries.</p>
              <ul class="ftco-footer-social list-unstyled mt-5">
                <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Community</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Projects</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Team</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Reviews</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>FAQs</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Our Story</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Meet the team</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Careers</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Company</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>About Us</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Press</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Careers</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon fa fa-map"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon fa fa-envelope pr-4"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
	
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>