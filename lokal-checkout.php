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
  <link href="css-landing/checkout.css" rel="stylesheet">
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
  <!--Main layout-->
  <main class="mt-5">
    <div class="container wow fadeIn">

      <!-- Heading -->
      <h2 class="my-5 h2 text-center">Checkout form</h2>

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-md-8 mb-4">

          <!--Card-->
          <div class="card">

            <!--Card content-->
            <form class="card-body">

              <!--Grid row-->
              <div class="row">

                <!--Grid column-->
                <div class="col-md-6 mb-2">

                  <!--firstName-->
                  <div class="md-form ">
                    <input type="text" id="firstName" class="form-control" placeholder="First Name">
                  </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 mb-2">

                  <!--lastName-->
                  <div class="md-form">
                    <input type="text" id="lastName" class="form-control" placeholder="Last Name">
                  </div>

                </div>
                <!--Grid column-->

              </div>
              <!--Contact Number-->
              <div class="md-form">
                <input type="text" id="lastName" class="form-control" placeholder="Contact Number">
              </div>
              <!--Grid column-->

              <!--address-->
              <div class="md-form mb-5">
                <input type="text" id="address" class="form-control" placeholder="Enter exact address">
              </div>

              <!--address-2-->
              <div class="md-form mb-5">
                <input type="text" id="address-2" class="form-control" placeholder="Enter comments for address">
              </div>

              <!--Grid row-->
              <div class="row">

                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4">

                  <label for="country">Town</label>
                  <select class="custom-select d-block w-100" id="country" required>
                    <option value="">Choose...</option>
                    <option>Daet</option>
                    <option>Mercedes</option>
                    <option>Basud</option>
                    <option>San Lorenzo</option>
                    <option>Labo</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid town.
                  </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                  <label for="state">Barangay</label>
                  <select class="custom-select d-block w-100" id="state" required>
                    <option value="">Choose...</option>
                    <option>Barangay I</option>
                    <option>Barangay II</option>
                    <option>Barangay III</option>
                    <option>Barangay IV</option>
                    <option>Barangay V</option>
                    <option>Barangay VI</option>
                    <option>Barangay VII</option>
                    <option>Barangay VIII</option>
                  </select>
                  <div class="invalid-feedback">
                    Please provide a valid state.
                  </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                  <label for="zip">Zip</label>
                  <input type="text" class="form-control" id="zip" placeholder="" required>
                  <div class="invalid-feedback">
                    Zip code required.
                  </div>

                </div>
                <!--Grid column-->

              </div>
              <!--Grid row-->

              <hr>

              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="same-address">
                <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="save-info">
                <label class="custom-control-label" for="save-info">Save this information for next time</label>
              </div>

              <hr>

              <div class="d-block my-3">
                <span>Payment method is Cash on Delivery</span>
              </div>
              <hr class="mb-4">
              <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>

            </form>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4 mb-4">

          <!-- Heading -->
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>

          <!-- Cart -->
          <ul class="list-group mb-3 z-depth-1">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Product name</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">Php 75.00</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Second product</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">Php 0</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Third item</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">Php 0</span>
            </li>

            <li class="list-group-item d-flex justify-content-between">
              <span>Total (Php)</span>
              <strong>Php 75.00</strong>
            </li>
          </ul>
          <!-- Cart -->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

    </div>
  </main>
  <!--Main layout-->
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
  </footer>
  <!--Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js-landing/jquery-1.11.3.min.js"></script>
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
