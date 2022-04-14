<!-- Required meta tags -->
<?php
// session_start();
// ob_start();
?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="Assets/img/favicon.png" type="image/png">
  <title>Learn IT Education</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="Assets/css/bootstrap.css">
  <link rel="stylesheet" href="Assets/vendors/linericon/style.css">
  <link rel="stylesheet" href="Assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="Assets/vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="Assets/vendors/lightbox/simpleLightbox.css">
  <link rel="stylesheet" href="Assets/vendors/nice-select/css/nice-select.css">
  <link rel="stylesheet" href="Assets/vendors/animate-css/animate.css">
  <link rel="stylesheet" href="Assets/vendors/popup/magnific-popup.css">
  <!-- main css -->
  <link rel="stylesheet" href="Assets/css/style.css">
  <link rel="stylesheet" href="Assets/css/responsive.css">
  <link rel="stylesheet" href="Assets/css/myStyle.css">
</head>
<!-- menu -->
<header class="header_area">
  <div class="top_menu row m0">
    <div class="container">
      <div class="float-left">
        <ul class="list header_social">
          <li>
            <a href="#"><i style="font-size:18px; line-height: 50px;" class="fa fa-facebook"></i></a>
          </li>
          <li>
            <a href="#"><i style="font-size:18px; line-height: 50px;" class="fa fa-twitter"></i></a>
          </li>
          <li>
            <a href="#"><i style="font-size:18px; line-height: 50px;" class="fa fa-instagram"></i></a>
          </li>

        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="user-menu">
            <ul>
              <?php if (isset($_SESSION['user'])) {
                echo $_SESSION['user']['fullname'];
              } ?>
              <?php if (!isset($_SESSION['user'])) : ?>
                <li>
                  <a href="?controller=UserController&action=login">LOGIN</a>
                </li>
                <li>
                  <a href="?controller=UserController&action=register">REGISTER</a>
                </li>
              <?php endif; ?>

              <?php if (isset($_SESSION['user'])) : if ($_SESSION['user']['role'] == 1) : ?>
                  <li>
                    <a href="?controller=Controller&action=admin"> Admin </a>
                  </li>
              <?php endif;
              endif; ?>
              <?php if (isset($_SESSION['user'])) : ?>
                <li>
                  <a href="?controller=UserController&action=logout">LOGOUT</a>
                </li>
              <?php endif; ?>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="main_menu">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <a class="navbar-brand logo_h" href="index.php"><img src="Assets/img/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
          <ul class="nav navbar-nav menu_nav ml-auto">
            <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="about-us.html">About</a></li>
            <li class="nav-item submenu dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Courses</a>
              <ul class="dropdown-menu">
                <li class="nav-item"><a class="nav-link" href="courses.html">Courses</a>
                <li class="nav-item"><a class="nav-link" href="course-details.html">Course Details</a></li>
              </ul>
            </li>
            <li class="nav-item submenu dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
              <ul class="dropdown-menu">
                <li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
              </ul>
            </li>
            <li class="nav-item submenu dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
              <ul class="dropdown-menu">
                <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
              </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href=""> <i style="color:#93a4be; font-size: 20px; font-weight:300px; line-height:68px;" class="fa fa-shopping-bag"></i> </a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</header>
<!--================Header Menu Area =================-->
<section class="home_banner_area">
  <div class="banner_inner d-flex align-items-center">
    <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
    <div class="container">
      <div class="banner_content text-center">
        <h3>We Ensure better education <br />for a better world</h3>
        <p>In the history of modern astronomy, there is probably no one greater leap forward than the building and launch of the space telescope known as the Hubble.</p>
        <a class="main_btn" href="#">Get Started</a>
      </div>
    </div>
  </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Finance Area =================-->
<section class="finance_area">
  <div class="container">
    <div class="finance_inner row">
      <div class="col-lg-3 col-sm-6">
        <div class="finance_item">
          <div class="media">
            <div class="d-flex">
              <i class="lnr lnr-rocket"></i>
            </div>
            <div class="media-body">
              <h5>Science & <br />Engineering</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="finance_item">
          <div class="media">
            <div class="d-flex">
              <i class="lnr lnr-earth"></i>
            </div>
            <div class="media-body">
              <h5>Science & <br />Engineering</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="finance_item">
          <div class="media">
            <div class="d-flex">
              <i class="lnr lnr-smile"></i>
            </div>
            <div class="media-body">
              <h5>Science & <br />Engineering</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="finance_item">
          <div class="media">
            <div class="d-flex">
              <i class="lnr lnr-tag"></i>
            </div>
            <div class="media-body">
              <h5>Science & <br />Engineering</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>