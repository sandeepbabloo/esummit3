<!DOCTYPE html>
<!--[if IE 9]> <html lang="zxx" class="ie9"> <![endif]-->
<!--[if gt IE 9]> <html lang="zxx" class="ie"> <![endif]-->
<!--[if !IE]><!-->
<html dir="ltr" lang="zxx">
	<!--<![endif]-->

  <head>
    <meta charset="utf-8">
    <title>E-Summit 2018 | Contingent Sign Up</title>
    <meta name="des201cription" content="The Project a Bootstrap-based, Responsive HTML5 Template">
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
    <!-- The Project's Typography CSS file, includes used fonts -->
    <!-- Used font for body: Roboto -->
    <!-- Used font for headings: Raleway -->
    <!-- Use css/rtl_typography-default.css for RTL version -->
    <link href="../css/typography-default.css" rel="stylesheet" >
    <!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer)-->
    <link href="../css/light_blue.css" data-style="styles-no-cookie" rel="stylesheet">
    <link href="../style-switcher/style-switcher.css" rel="stylesheet">
    <link href="../css/default.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/component.css">
    <!-- Custom css --> 
    <link href="../css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/color_scheme.css">
    
    
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
      <!-- header-container start -->
      <?php include 'header.html';?>
      <!-- header-container end -->
      <!-- breadcrumb start -->
      <!-- ================ -->
      <div class="breadcrumb-container">
        <div class="container">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home pr-2"></i><a class="link-dark" href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Sign Up</li>
          </ol>
        </div>
      </div>
      <!-- breadcrumb end -->

      <!-- main-container start -->
      <!-- ================ -->
      <div class="main-container dark-translucent-bg" style="background-image:url('../images/patterns/pattern_light.png');">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-6 col-sm-12">
              <!-- main start -->
              <!-- ================ -->
              <div class="main object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="100" ">
                <div class="form-block p-30 light-gray-bg border-clear" style="margin: auto;background-color: rgb(230, 231, 234);">
                  <h2 class="title light-black">Sign Up</h2>
                  <form method="post" action="conti_act.php">
                    <div class="form-group has-feedback row">
                      <label for="inputName" class="col-md-3 control-label text-md-right col-form-label light-black">Name <span class="text-danger small">*</span></label>
                      <div class="col-md-8">
                        <input type="text" class="form-control" id="inputName" name="name" placeholder="Name" required>
                        <i class="fa fa-pencil form-control-feedback pr-4"></i>
                      </div>
                    </div>
                      <!--          <div class="form-group has-feedback row">
                      <label for="inputLastName" class="col-md-3 control-label text-md-right col-form-label">Last Name <span class="text-danger small">*</span></label>
                      <div class="col-md-8">
                        <input type="text" class="form-control" id="inputLastName" placeholder="Last Name" required>
                        <i class="fa fa-pencil form-control-feedback pr-4"></i>
                      </div>
                    </div> -->
                    <!-- <div class="form-group has-feedback row">
                      <label for="inputUserName" class="col-md-3 control-label text-md-right col-form-label">User Name <span class="text-danger small">*</span></label>
                      <div class="col-md-8">
                        <input type="text" class="form-control" id="inputUserName" placeholder="User Name" required>
                        <i class="fa fa-user form-control-feedback pr-4"></i>
                      </div>
                    </div> -->
                    <div class="form-group has-feedback row">
                      <label for="inputEmail" class="col-md-3 control-label text-md-right col-form-label light-black">Email <span class="text-danger small">*</span></label>
                      <div class="col-md-8">
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" required>
                        <i class="fa fa-envelope form-control-feedback pr-4"></i>
                      </div>
                    </div>
                    <div class="form-group has-feedback row">
                      <label for="inputPassword" class="col-md-3 control-label text-md-right col-form-label light-black">Password <span class="text-danger small">*</span></label>
                      <div class="col-md-8">
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="pass1" required>
                        <i class="fa fa-lock form-control-feedback pr-4"></i>
                      </div>
                    </div>
                    <!-- <div class="form-group has-feedback row">
                      <label for="inputPassword" class="col-md-3 control-label text-md-right col-form-label">Confirm Password <span class="text-danger small">*</span></label>
                      <div class="col-md-8">
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="pass2" required>
                        <i class="fa fa-lock form-control-feedback pr-4"></i>
                      </div>
                    </div> -->
                    <div class="form-group has-feedback row">
                    
                      <label for="exampleInputEmail1" class="col-md-3 control-label text-md-right col-form-label light-black">Phone</label>
                    <div class="col-md-8">
                      <input type="number" class="form-control"  name="phone" aria-describedby="emailHelp" placeholder="Enter Phone number">
                    </div>
                      <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group has-feedback row">
                      
                        <label for="exampleSelect1" class="col-md-3 control-label text-md-right col-form-label light-black">State</label>
                      <div class="col-md-8">
                        <select class="form-control" id="state" name="state" onchange="city_change();">
                          <option value="select">State</option>
                          <option value="Andaman and Nicobar">Andaman and Nicobar</option>
                          <option value="Andhra Pradesh">Andhra Pradesh</option>
                          <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                          <option value="Assam">Assam</option>
                          <option value="Bihar">Bihar</option>
                          <option value="Chandigarh">Chandigarh</option>
                          <option value="Chhattisgarh">Chhattisgarh</option>
                          <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                          <option value="Daman and Diu">Daman and Diu</option>
                          <option value="Delhi">Delhi</option>
                          <option value="Goa">Goa</option>
                          <option value="Gujarat">Gujarat</option>
                          <option value="Haryana">Haryana</option>
                          <option value="Himachal Pradesh">Himachal Pradesh</option>
                          <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                          <option value="Jharkhand">Jharkhand</option>
                          <option value="Karnataka">Karnataka</option>
                          <option value="Kerala">Kerala</option>
                          <option value="Lakshadweep">Lakshadweep</option>
                          <option value="Madhya Pradesh">Madhya Pradesh</option>
                          <option value="Maharashtra">Maharashtra</option>
                          <option value="Manipur">Manipur</option>
                          <option value="Meghalaya">Meghalaya</option>
                          <option value="Mizoram">Mizoram</option>
                          <option value="Nagaland">Nagaland</option>
                          <option value="Orissa">Orissa</option>
                          <option value="Pondicherry">Pondicherry</option>
                          <option value="Punjab">Punjab</option>
                          <option value="Rajasthan">Rajasthan</option>
                          <option value="Sikkim">Sikkim</option>
                          <option value="Tamil Nadu">Tamil Nadu</option>
                          <option value="Andhra Pradesh">Telangana</option>
                          <option value="Tripura">Tripura</option>
                          <option value="Uttaranchal">Uttaranchal</option>
                          <option value="Uttar Pradesh">Uttar Pradesh</option>
                          <option value="West Bengal">West Bengal</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group has-feedback row">
                      
                        <label for="exampleSelect1" class="col-md-3 control-label text-md-right col-form-label light-black">City</label>
                      <div class="col-md-8">
                        <select class="form-control" id="city" onchange="select_college()" name="city">
                        <option value="city">City</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group has-feedback row">
                      
                        <label for="exampleSelect1" class="col-md-3 control-label text-md-right col-form-label light-black">College</label>
                      <div class="col-md-8">
                        <select class="form-control" id="college" name="college" onchange="displayCollege()">
                         <option value="college">College</option>
                        </select>
                      </div>
                    </div>
                    <div id="leader_info" style="display: none;" class="light-black">
                      <!-- <h2>Leader Info</h2> -->
                    </div>
                    <div id="signup">
                      <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" name="prof" id="inlineFormInput" placeholder="Doe" value="0" readonly style="display: none;">
                      <div class="form-group has-warning" style="display: none;" id="input_college">
                        <!-- <label class="form-control-label" for="inputWarning1">Input with warning</label> -->
                        <input type="text" class="form-control form-control-warning" id="inputWarning1" name="college_other">
                        <div class="form-control-feedback"></div>
                        <small class="form-text text-muted"></small>
                      </div>
                      <div class="form-group row">
                        <div class="ml-md-auto col-md-9">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" required class="light-black"> Check this to confirm you have read <a href="contingent_leader.pdf" target="_blank">the guidelines carefully</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="ml-md-auto col-md-9">
                            <p>
                                      <button class="btn btn-1 btn-1e serviceswaala">Sign up</button>
                            </p>
                          <!-- <button type="submit" class="btn btn-group btn-default btn-animated light-black">Sign Up <i class="fa fa-check"></i></button> -->
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
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
		<script type="text/javascript" src="../js/register2.js"></script>
		<!-- Color Switcher End -->
		<!-- Color Switcher (Remove these lines) -->

  </body>
</html>
