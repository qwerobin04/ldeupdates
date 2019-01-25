<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Register</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- favicon
		============================================ -->
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
  <!-- Google Fonts
		============================================ -->
  <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
  <!-- Bootstrap CSS
		============================================ -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Bootstrap CSS
		============================================ -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <!-- owl.carousel CSS
		============================================ -->
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/owl.theme.css">
  <link rel="stylesheet" href="css/owl.transitions.css">
  <!-- animate CSS
		============================================ -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- normalize CSS
		============================================ -->
  <link rel="stylesheet" href="css/normalize.css">
  <!-- main CSS
		============================================ -->
  <link rel="stylesheet" href="css/main.css">
  <!-- morrisjs CSS
		============================================ -->
  <link rel="stylesheet" href="css/morrisjs/morris.css">
  <!-- mCustomScrollbar CSS
		============================================ -->
  <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
  <!-- metisMenu CSS
		============================================ -->
  <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
  <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
  <!-- calendar CSS
		============================================ -->
  <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
  <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
  <!-- forms CSS
		============================================ -->
  <link rel="stylesheet" href="css/form/all-type-forms.css">
  <!-- style CSS
		============================================ -->
  <link rel="stylesheet" href="style.css">
  <!-- responsive CSS
		============================================ -->
  <link rel="stylesheet" href="css/responsive.css">
  <!-- modernizr JS
		============================================ -->
  <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
  <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

  <div class="color-line"></div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
      <div class="col-md-6 col-md-6 col-sm-6 col-xs-12">
        <div class="text-center custom-login">
          <h3>Registration</h3>

        </div>
        <div class="hpanel">
          <div class="panel-body">
            <form action="./php/insert.php" method="post" id="loginForm">
              <div class="row">
                <div class="form-group col-lg-12">
                  <label>Full Name</label>
                  <input class="form-control" name ="fullname" required>
                </div>
                <div class="form-group col-lg-12">
                  <label>Username</label>
                  <input class="form-control" name="username" required>
                </div>
                <div class="form-group col-lg-12">
                  <label>Business</label>
                  <input class="form-control" name="business" required>
                </div>
                <div class="form-group col-lg-12">
                  <label>Business Location</label>
                  <input class="form-control" name="businesslocation" required>
                </div>
                <div class="form-group col-lg-6">
                  <label>Password</label>
                  <input type="password" class="form-control" name="password" required>
                </div>

                <div class="form-group col-lg-6">
                  <label>Repeat Password</label>
                  <input type="password" class="form-control" name="rpassword" required>
                </div>

                <div class="form-group col-lg-6">
                  <label>Email Address</label>
                  <input class="form-control" name="emailaddress" required>
                </div>

                <div class="form-group col-lg-6">
                  <label>Repeat Email Address</label>
                  <input class="form-control" name="remailaddress" required>
                </div>
                <div class="checkbox col-lg-12">
                  <input type="checkbox" class="i-checks" checked> Sign up for our newsletter
                </div>
              </div>
              <div class="text-center">
                <button class="btn btn-success loginbtn" name="insert">Register</button>
                <button class="btn btn-default">Cancel</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
        <p>Copyright &copy; 2018 <a href="https://colorlib.com/wp/templates/">Lokal Delivery Express</a> All rights reserved.</p>
      </div>
    </div>
  </div>

  <!-- jquery
		============================================ -->
  <script src="js/vendor/jquery-1.11.3.min.js"></script>
  <!-- bootstrap JS
		============================================ -->
  <script src="js/bootstrap.min.js"></script>
  <!-- wow JS
		============================================ -->
  <script src="js/wow.min.js"></script>
  <!-- price-slider JS
		============================================ -->
  <script src="js/jquery-price-slider.js"></script>
  <!-- meanmenu JS
		============================================ -->
  <script src="js/jquery.meanmenu.js"></script>
  <!-- owl.carousel JS
		============================================ -->
  <script src="js/owl.carousel.min.js"></script>
  <!-- sticky JS
		============================================ -->
  <script src="js/jquery.sticky.js"></script>
  <!-- scrollUp JS
		============================================ -->
  <script src="js/jquery.scrollUp.min.js"></script>
  <!-- mCustomScrollbar JS
		============================================ -->
  <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
  <!-- metisMenu JS
		============================================ -->
  <script src="js/metisMenu/metisMenu.min.js"></script>
  <script src="js/metisMenu/metisMenu-active.js"></script>
  <!-- tab JS
		============================================ -->
  <script src="js/tab.js"></script>
  <!-- icheck JS
		============================================ -->
  <script src="js/icheck/icheck.min.js"></script>
  <script src="js/icheck/icheck-active.js"></script>
  <!-- plugins JS
		============================================ -->
  <script src="js/plugins.js"></script>
  <!-- main JS
		============================================ -->
  <script src="js/main.js"></script>
</body>

</html>
