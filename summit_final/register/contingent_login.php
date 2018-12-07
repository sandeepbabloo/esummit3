<!DOCTYPE html>
<!--[if IE 9]> <html lang="zxx" class="ie9"> <![endif]-->
<!--[if gt IE 9]> <html lang="zxx" class="ie"> <![endif]-->
<!--[if !IE]><!-->
<html dir="ltr" lang="zxx">
	<!--<![endif]-->

  <head>
    <meta charset="utf-8">
    <title>E-Summit 18 | Contingent Login</title>
    <meta name="description" content="The Project a Bootstrap-based, Responsive HTML5 Template">
    <meta name="author" content="htmlcoder.me">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Web Fonts -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'> -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'> -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'> -->
    <!-- <link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'> -->

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link href="../fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Fontello CSS -->
    <link href="../fonts/fontello/css/fontello.css" rel="stylesheet">

    <!-- ../Plugins -->
    <link href="../plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="../css/animations.css" rel="stylesheet">
    <link href="../plugins/owlcarousel2/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../plugins/owlcarousel2/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="../plugins/hover/hover-min.css" rel="stylesheet">		
    
    <!-- The Project's core CSS file -->
    <!-- Use css/rtl_style.css for RTL version -->
    <link href="../css/style.css" rel="stylesheet" >
    <link rel="stylesheet" type="text/css" href="../css/default.css">
    <!-- The Project's Typography CSS file, includes used fonts -->
    <!-- Used font for body: Roboto -->
    <!-- Used font for headings: Raleway -->
    <!-- Use css/rtl_typography-default.css for RTL version -->
    <link href="../css/typography-default.css" rel="stylesheet" >
    <!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer)-->
    <link href="../css/light_blue.css" data-style="styles-no-cookie" rel="stylesheet">
    <link href="../style-switcher/style-switcher.css" rel="stylesheet">
    

    <!-- Custom css --> 
    <link href="../css/custom.css" rel="stylesheet">
    
    
  </head>

  <!-- body classes:  -->
  <!-- "boxed": boxed layout mode e.g. <body class="boxed"> -->
  <!-- "pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1"> -->
  <!-- "transparent-header": makes the header transparent and pulls the banner to top -->
  <!-- "gradient-background-header": applies gradient background to header -->
  <!-- "page-loader-1 ... page-loader-6": add a page loader to the page (more info @components-page-loaders.html) -->
  <body class=" ">

    <!-- scrollToTop -->
    <!-- ================ -->
    <div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>

    <!-- page wrapper start -->
    <!-- ================ -->
    <div class="page-wrapper">
      <?php include 'header.html';?>
      <!-- breadcrumb start -->
      <!-- ================ -->
      <div class="breadcrumb-container">
        <div class="container">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home pr-2"></i><a class="link-dark" href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Page Login</li>
          </ol>
        </div>
      </div>
      <!-- breadcrumb end -->

      <!-- main-container start -->
      <!-- ================ -->
      <div class="main-container dark-translucent-bg" style="background-image:url('images/background-img-6.jpg');">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-auto">
              <!-- main start -->
              <!-- ================ -->
              <div class="main object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="100">
                <div class="form-block p-30 light-gray-bg border-clear">
                  <h2 class="title">Login</h2>
                  <form class="form-horizontal" action="conti_login.php" method="POST">
                    <div class="form-group has-feedback row">
                      <label for="inputUserName" class="col-md-3 text-md-right control-label col-form-label">User Name</label>
                      <div class="col-md-8">
                        <input type="text" class="form-control" id="inputUserName" placeholder="User Name" name="username" required>
                        <i class="fa fa-user form-control-feedback pr-4"></i>
                      </div>
                    </div>
                    <div class="form-group has-feedback row">
                      <label for="inputPassword" class="col-md-3 text-md-right control-label col-form-label">Password</label>
                      <div class="col-md-8">
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="pass" required>
                        <i class="fa fa-lock form-control-feedback pr-4"></i>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="ml-md-auto col-md-9">
                                             
                        <button type="submit" class="btn btn-group btn-default btn-animated">Log In <i class="fa fa-user"></i></button>
                        
                        
                      </div>
                    </div>
                  </form>
                </div>
                <p class="text-center space-top">Don't have an account yet? <a href="contingent_sign.php">Sign up</a> now.</p>
              </div>
              <!-- main end -->
            </div>
          </div>
        </div>
      </div>
      <!-- main-container end -->

      <?php include '../footer.html';?>
    </div>
    <!-- page-wrapper end -->

    <!-- JavaScript files placed at the end of the document so the pages load faster -->
    <!-- ================================================== -->
    <!-- Jquery and Bootstap core js files -->
    <script type="text/javascript" src="../plugins/jquery.min.js"></script>
    <script type="text/javascript" src="../plugins/popper.min.js"></script>
    <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- Modernizr javascript -->
    <script type="text/javascript" src="../plugins/modernizr.js"></script>
    <!-- Magnific Popup javascript -->
    <script type="text/javascript" src="../plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Appear javascript -->
    <script type="text/javascript" src="../plugins/waypoints/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="../plugins/waypoints/sticky.min.js"></script>
    <!-- Count To javascript -->
    <script type="text/javascript" src="../plugins/jquery.countTo.js"></script>
    <!-- Parallax javascript -->
    <script src="../plugins/jquery.parallax-1.1.3.js"></script>
    <!-- Contact form -->
    <script src="../plugins/jquery.validate.js"></script>
    <!-- Owl carousel javascript -->
    <script type="text/javascript" src="../plugins/owlcarousel2/owl.carousel.min.js"></script>
    <!-- Initialization of ../Plugins -->
    <script type="text/javascript" src="../js/template.js"></script>
    <!-- Custom Scripts -->
		<script type="text/javascript" src="../js/custom.js"></script>
		<!-- Color Switcher (Remove these lines) -->
		<script type="text/javascript" src="../style-switcher/style-switcher.js"></script>
		<div class="style-switcher closed">
			<div class="header">
				<a class="trigger" href="page-login.html#"><i class="icon-cog-1"></i></a>
				<h2>Style Switcher</h2>
			</div>
			<div class="clearfix body">
				<h3>Predifined Colors</h3>
				<ul class="styleChange">
					<li class="light-blue selected" data-style="light_blue" title="light_blue"></li>
					<li class="blue" data-style="blue" title="blue"></li>
					<li class="green" data-style="green" title="green"></li>
					<li class="dark-cyan" data-style="dark_cyan" title="dark_cyan"></li>
					<li class="brown" data-style="brown" title="brown"></li>
					<li class="dark-red" data-style="dark_red" title="dark_red"></li>
					<li class="gold" data-style="gold" title="gold"></li>
					<li class="gray" data-style="gray" title="gray"></li>
					<li class="cool-green" data-style="cool_green" title="cool_green"></li>
					<li class="pink" data-style="pink" title="pink"></li>
					<li class="purple" data-style="purple" title="purple"></li>
					<li class="orange" data-style="orange" title="orange"></li>
					<li class="red" data-style="red" title="red"></li>
					<li class="vivid-red" data-style="vivid_red" title="vivid_red"></li>
				</ul>
				<hr>
				<h3>Layout Mode</h3>
				<ul class="layoutChange">
					<li class="wide selected" data-style="wide" title="wide"><i class="fa fa-arrow-left pr-10"></i>Wide<i class="fa fa-arrow-right pl-10"></i></li>
					<li class="boxed" data-style="boxed" title="boxed"><i class="fa fa-arrow-right pr-1"></i>Boxed<i class="fa fa-arrow-left pl-1"></i></li>
				</ul>
				<h3>Patterns</h3>
				<ul class="patternChange">
					<li class="pattern-0" data-style="pattern-0" title="white background"></li>
					<li class="pattern-1" data-style="pattern-1" title="pattern-1"></li>
					<li class="pattern-2" data-style="pattern-2" title="pattern-2"></li>
					<li class="pattern-3" data-style="pattern-3" title="pattern-3"></li>
					<li class="pattern-4" data-style="pattern-4" title="pattern-4"></li>
					<li class="pattern-5" data-style="pattern-5" title="pattern-5"></li>
					<li class="pattern-6" data-style="pattern-6" title="pattern-6"></li>
					<li class="pattern-7" data-style="pattern-7" title="pattern-7"></li>
					<li class="pattern-8" data-style="pattern-8" title="pattern-8"></li>
					<li class="pattern-9" data-style="pattern-9" title="pattern-9"></li>
				</ul>
				<ul class="resetAll text-center">
					<li class="btn btn-default btn-sm" title="Reset"><a href="../index.html">Demos</a></li>
				</ul>
			</div>
		</div>
		<!-- Color Switcher End -->
		<!-- Color Switcher (Remove these lines) -->

  </body>
</html>
