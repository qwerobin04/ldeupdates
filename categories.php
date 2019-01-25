<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Lokal Delivery Express</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="css-landing/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css-landing/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css-landing/categories.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css-landing/responsive.css" />
</head>

<body>
  <div class="se-pre-con"></div>
  <!-- Ends -->
  <section class="section1">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="menu">
            <div class="mobile-nav-container"> </div>
            <div class="mobile-nav-btn"><img class="nav-open" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/6214/nav-open.png" alt="Nav Button Open" /> <img class="nav-close" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/6214/nav-close.png"
                alt="Nav Button Close" /> </div>
            <nav>
              <ul>
                <li><a href="landing-page.php">Home</a></li>
                <li><a href="restaurant.php">Restaurants </a></li>
                <li><a href="about.php">About</a></li>
              </ul>
            </nav>
          </div>
          <!-- <div class="logo-lokal">
            <img src="images/lokal-logo-black.png" alt="">
          </div> -->
          <div class="login">
            <ul>
              <li><a href="#">Login</a></li>
              <li><a href="#">Register</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--CONTENT STARTS HERE-->
  <div id="main">
    <!-- Sidebar -->
    <div id="sidebar">
      <!-- Search -->
      <div class="box search">
        <h2>Search by</h2>
        <div class="box-content">
          <form action="#" method="post">
            <label>Keyword</label>
            <input type="text" class="field" />
            <div class="inline-field">
              <label>Price</label>
              <select class="field small-field">
                <option value="">Php 0</option>
                <option value="">Php 69</option>
              </select>
              <label>to:</label>
              <select class="field small-field">
                <option value="">Php 0</option>
                <option value="">Php 69</option>
              </select>
            </div>
            <input type="submit" class="search-submit" value="Search" />
          </form>
        </div>
      </div>
      <!-- End Search -->
      <!-- Categories -->
      <div class="box categories">
        <h2>Categories <span></span></h2>
        <div class="box-content">
          <ul>
            <li><a href="">All</a></li>
            <li><a href="">Cakes</a></li>
            <li><a href="">Rolls</a></li>
          </ul>
        </div>
      </div>
      <!-- End Categories -->
    </div>
    <!-- End Sidebar -->
    <div class="product-new-list-area">
      <div class="container-fluid">
        <br>

        <div class="row">
          <?php
            include("item.php");
           ?>
          <!-- <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="single-new-trend mg-t-30">
              <a href="#"><img src="img/new-product/5.jpg" alt=""></a>
              <div class="overlay-content">
                <a href="#">
                  <h2>Php69</h2>
                </a>
                <a href="#" class="btn-small">Now</a>
                <div class="product-action">
                  <ul>
                    <li>
                      <a data-toggle="tooltip" title="Shopping" href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                    </li>
                    <li>
                      <a data-toggle="tooltip" title="Quick view" href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                    </li>
                  </ul>
                </div>

                <a href="#">
                  <h4>Item Name</h4>
                </a>
                <div class="pro-rating">
                  <i class="fa fa-star color"></i>
                  <i class="fa fa-star color"></i>
                  <i class="fa fa-star color"></i>
                  <i class="fa fa-star color"></i>
                  <i class="fa fa-star"></i>
                </div>
               </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="single-new-trend mg-t-30">
              <a href="#"><img src="img/new-product/6.jpg" alt=""></a>
              <div class="overlay-content">
                <a href="#">
                  <h2>Php69</h2>
                </a>
                <a href="#" class="btn-small">Now</a>
                <div class="product-action">
                  <ul>
                    <li>
                      <a data-toggle="tooltip" title="Shopping" href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                    </li>
                    <li>
                      <a data-toggle="tooltip" title="Quick view" href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                    </li>
                  </ul>
                </div>
                <a href="#">
                  <h4>Item Name</h4>
                </a>
                <div class="pro-rating">
                  <i class="fa fa-star color"></i>
                  <i class="fa fa-star color"></i>
                  <i class="fa fa-star color"></i>
                  <i class="fa fa-star color"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="single-new-trend mg-t-30">
              <a href="#"><img src="img/new-product/7.jpg" alt=""></a>
              <div class="overlay-content">
                <a href="#">
                  <h2>Php69</h2>
                </a>
                <a href="#" class="btn-small">Now</a>
                <div class="product-action">
                  <ul>
                    <li>
                      <a data-toggle="tooltip" title="Shopping" href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                    </li>
                    <li>
                      <a data-toggle="tooltip" title="Quick view" href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                    </li>
                  </ul>
                </div>
                <a href="#">
                  <h4>Item Name</h4>
                </a>
                <div class="pro-rating">
                  <i class="fa fa-star color"></i>
                  <i class="fa fa-star color"></i>
                  <i class="fa fa-star color"></i>
                  <i class="fa fa-star color"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="single-new-trend mg-t-30">
              <a href="#"><img src="img/new-product/5.jpg" alt=""></a>
              <div class="overlay-content">
                <a href="#">
                  <h2>Php69</h2>
                </a>
                <a href="#" class="btn-small">Now</a>
                <div class="product-action">
                  <ul>
                    <li>
                      <a data-toggle="tooltip" title="Shopping" href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                    </li>
                    <li>
                      <a data-toggle="tooltip" title="Quick view" href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                    </li>
                  </ul>
                </div>
                <a href="#">
                  <h4>Item Name</h4>
                </a>
                <div class="pro-rating">
                  <i class="fa fa-star color"></i>
                  <i class="fa fa-star color"></i>
                  <i class="fa fa-star color"></i>
                  <i class="fa fa-star color"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </div>
  <!--Footer-->
  <footer class="section8">
    <div class="container" id="contact">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="site">
            <h3>Site Link</h3>
          </div>
          <div class="sitelink">
            <ul>
              <li> <span>&#10152;</span><a href="#">About Us</a></li>
              <li><span>&#10152;</span><a href="#">Contact Us</a></li>
              <li><span>&#10152;</span><a href="#">Privacy Policy</a></li>
              <li><span>&#10152;</span><a href="#">Terms of Use</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="site">
            <h3>Site Link</h3>
          </div>
          <div class="sitelink">
            <ul>
              <li><span>&#10152;</span><a href="#">About Us</a></li>
              <li><span>&#10152;</span><a href="#">Contact Us</a></li>
              <li><span>&#10152;</span><a href="#">Privacy Policy</a></li>
              <li><span>&#10152;</span><a href="#">Terms of Use</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="follow">
            <h3>Follow Us On...</h3>
          </div>
          <div class="social">
            <ul>
              <li> <i class="fa fa-facebook-square"></i><a href="#">Facebook</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
          <div class="submit">
            <h3>Subscribe Newsletter</h3>
            <p>To get latest updates and food deals every week</p>
          </div>
          <div class="submitbox">
            <input type="text" />
            <div class="sub"> <a href="#">Submit</a> </div>
          </div>
        </div>
      </div>
    </div>
  </footer> -->
  <!--Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
  <!-- Bootstrap tooltips -->
  <!-- <script type="text/javascript" src="js/popper.min.js"></script> -->
  <!-- Bootstrap core JavaScript -->
  <!-- <script type="text/javascript" src="js/bootstrap.min.js"></script> -->
  <!-- MDB core JavaScript -->
  <!-- <script type="text/javascript" src="js/mdb.min.js"></script> -->
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>
</body>

</html>
