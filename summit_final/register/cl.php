<?php 
session_start();

// echo "wow";
error_reporting(E_ALL);
ini_set('display_errors', 1);
                      // ini_set('display_errors', 1);
				        define( 'DBHOST_', 'localhost' );
				        define( 'DBUSER_', 'admin' );
				        define( 'DBPASS_', 'adminadmin2012#' );
				        define( 'DBNAME_', 'esummit_18' ); 

				        // $i = 0;
				        $con = mysqli_connect(DBHOST_, DBUSER_, DBPASS_, DBNAME_);
				        if (!$con) {
				            die("Connection failed: " . mysqli_connect_error());
				        } 
  $team_id = $_SESSION['team_id'];
  // echo $team_id;
  $sql = "SELECT * FROM contingent_member where group_id='$team_id' and is_leader = 1";
  $result = mysqli_query($con,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$sql2 = "SELECT * FROM contingent_group where team_id='$team_id'";
  $result2 = mysqli_query($con,$sql2);
  $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
  $doc_url = $row2['doc_url'];
  $is_verified = $row2['is_verified'];
  $quantity = $row2['count_mem']-$row2['count_paid'];
  $amount_to_pay = $row2['amount_to_pay'];
  // echo $doc_url;
  $name = $row['name'];
  // echo "done";
?>
<!DOCTYPE html>
<!--[if IE 9]> <html lang="zxx" class="ie9"> <![endif]-->
<!--[if gt IE 9]> <html lang="zxx" class="ie"> <![endif]-->
<!--[if !IE]><!-->
<html dir="ltr" lang="zxx">
	<!--<![endif]-->

  <head>
    <meta charset="utf-8">
    <title>Contingent Leader</title>
    <meta name="description" content="The Project a Bootstrap-based, Responsive HTML5 Template">
    <meta name="author" content="htmlcoder.me">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>

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
    <link rel="stylesheet" type="text/css" href="../css/default.css">
    <link rel="stylesheet" type="text/css" href="../css/component.css">
    <!-- The Project's Typography CSS file, includes used fonts -->
    <!-- Used font for body: Roboto -->
    <!-- Used font for headings: Raleway -->
    <!-- Use css/rtl_typography-default.css for RTL version -->
    <link href="../css/typography-default.css" rel="stylesheet" >
    <!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer)-->
    <link href="../css/skins/light_blue.css" data-style="styles-no-cookie" rel="stylesheet">
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
    	<?php if($doc_url == null){?>
		<div class="alert alert-danger" role="alert" style="margin: 0;text-align: center;"> 
                Please upload the Permission Letter here.Find Sample <a href="Contingent-Leader-Application-Form.pdf" style="color: blue;">file here</a>
            <form style="display: inline-block;margin: 0;" action="upload.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                  <!-- <label for="exampleInputFile">File input</label> -->
                  <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="fileToUpload" style="display: inline-block;">
                  <input type="submit" value="Upload File" name="submit">
                  <!-- <small id="fileHelp" class="form-text text-muted">Example block-level help text here.</small> -->
                </div></form>
       </div>
       <?php }elseif($is_verified == 0){?>
       <div class="alert alert-success" role="alert" style="margin: 0;text-align: center;background: yellow;"> 
                Your Application is peding with us.
       </div>
       <?php  }else{?>
       <div class="alert alert-success" role="alert" style="margin: 0;text-align: center;background: green;"> 
                Congrats you are a CL now.
       </div>
       <?php }?>
      <!-- header-container start -->
      <?php include 'header.html';?>
        <!-- breadcrumb start -->
        <!-- ================ -->
        <div class="breadcrumb-container">
          <div class="container">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><i class="fa fa-home pr-2"></i><a class="link-dark" href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Contingent</li>
            </ol>
          </div>
        </div>
        <!-- breadcrumb end -->
        <div class="container">
          <div class="row justify-content-lg-center">
            <div class="col-lg-8 text-center pv-20">
              <h2 class="title object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">Hi, <strong><?php echo $name;?></strong></h2>
              <div class="separator object-non-visible mt-10" data-animation-effect="fadeIn" data-effect-delay="100"></div>
              <p class="text-center object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">You can start adding members to your Contingent Now. The discount offered would be completely dependent on the number of Contingent members at the time of payment. 
<p>Please bear in mind that the Permission Letter is essential to avail the discounts as  a Contingent Leader. In case, theres's a genuine reason of not being able to get the Permission Letter you may contact the undersigned.</p>
Srijit <br>
8879784886<br>
srijit@ecell.in<br>
            </div>
          </div>
        </div>      
      </div>
      <!-- banner end -->

      
      <div class="container" style="height: initial;">
      	<h2>Add Member</h2>
		      <form class="form-inline" method="POST" action="add_mem.php">
			        <label class="sr-only" for="inlineFormInput">Name</label>
			        <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="Name" name="name">

			        <label class="sr-only" for="inlineFormInputGroup">Email</label>
			        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
			          <!-- <div class="input-group-addon"></div> -->
			          <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="email" name="email">
			        </div>
			        <label class="sr-only" for="inlineFormInputGroup">Phone</label>
			        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
			          <!-- <div class="input-group-addon"></div> -->
			          <input type="number" class="form-control" id="inlineFormInputGroup" placeholder="Phone" name="phone">
			        </div>

			       <!--  <div class="form-check mb-2 mr-sm-2 mb-sm-0">
			          <label class="form-check-label">
			            <input class="form-check-input" type="checkbox"> Remember me
			          </label>
			        </div> -->

			        <button type="submit" class="btn btn-success">Add</button>
		      </form>
      </div>


      <!-- main-container start -->
      <!-- ================ -->
      <section class="main-container">

        <div class="container">
          <div class="row">

            <!-- main start -->
            <!-- ================ -->
            <div class="main col-lg-12">
              <!-- pills start -->
              <!-- ================ -->
              <!-- Nav tabs -->
              <h3>Memebers List</h3>
              <!-- Tab panes -->
              <div class="tab-content clear-style">
                <div class="tab-pane active" id="pill-1">
                  <div class="listing-item mb-20">
                    <div class="row grid-space-0">
                      <!-- <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="overlay-container">
                          <img src="images/product-1.jpg" alt="">
                          <a class="overlay-link" href="shop-product.html"><i class="fa fa-plus"></i></a>
                          <span class="badge">30% OFF</span>
                        </div>
                      </div> -->
                      <?php

                      $sql_mem = "SELECT `id`,`name`, `email`, `phone`, `esummit_id`, `time_stamp` FROM `contingent_member` WHERE group_id = '$team_id'";
                      $result = mysqli_query($con,$sql_mem);
                      $i=0;
                      while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                        $id= $row['id'];
                      	$name = $row['name'];
                      	$email = $row['email'];
                      	$phone = $row['phone'];
                      	$esummit_id = $row['esummit_id'];
                      	$time_stamp = $row['time_stamp'];

                      	$i++;
                      ?>
                      <div class="col-md-12 col-lg-12 col-xl-12">
                        <div class="body">
                         <!--  <h3 class="margin-clear" style="display: inline-block;"><?php echo $name;?></a></h3>
                          <p style="display: inline-block;">
                            <i class="fa fa-star text-default"></i>
                            <i class="fa fa-star text-default"></i>
                            <i class="fa fa-star text-default"></i>
                            <i class="fa fa-star text-default"></i>
                            <i class="fa fa-star"></i>
                            <a href="shop-listing-list.html#" class="btn-sm-link"><i class="icon-heart pr-1"></i><?php echo $email;?></a>
                            <a href="shop-listing-list.html#" class="btn-sm-link"><i class="icon-link pr-1"></i><?php echo $phone;?></a>
                          </p> -->
                          <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, cum repellat nisi quaerat mollitia reiciendis totam repellendus dicta id dolorem voluptate debitis molestias molestiae asperiores, odit magni vitae placeat optio.</p> -->
				   	      <form class="form-inline" method="POST" action="edit_mem.php">
						        <label class="sr-only" for="inlineFormInput">Name</label>
						        <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput"  name="name" value="<?php echo $name;?>">

						        <label class="sr-only" for="inlineFormInputGroup">Email</label>
						        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
						          <!-- <div class="input-group-addon"></div> -->
						          <input type="text" class="form-control" id="inlineFormInputGroup"  name="email" value="<?php echo $email;?>" readonly>
						        </div>
						        <label class="sr-only" for="inlineFormInputGroup">Phone</label>
						        <div class="input-group mb-2 mr-sm-2 mb-sm-0" value="<?php echo $phone;?>">
						          <!-- <div class="input-group-addon"></div> -->
						          <input type="number" class="form-control" id="inlineFormInputGroup"  name="phone" value="<?php echo $phone;?>">
						        </div>

						       <!--  <div class="form-check mb-2 mr-sm-2 mb-sm-0">
						          <label class="form-check-label">
						            <input class="form-check-input" type="checkbox"> Remember me
						          </label>
						        </div> -->

						        <button type="submit" class="btn btn-default">Update Info</button>
					      </form>
                <?php if($i!=1){?>
                <form  class="form-inline" method="POST" action="delete_mem.php">
                  <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput"  name="id" value="<?php echo $id;?>" style="display: none;">
                  <button type="submit" class="btn btn-default">Delete Member</button>
                </form>
                <?php }?>
                          <!-- <div class="elements-list clearfix">
                            <span class="price"><del>$199.00</del> $150.00</span>
                            <a href="shop-listing-list.html#" class="pull-right btn btn-sm btn-default-transparent btn-animated">Add To Cart<i class="fa fa-shopping-cart"></i></a>
                          </div> -->
                  <!--   <form action="del_mem.php" method="POST">
                      <input type="hidden" name="id" value="<?php echo $id; ?>">
                      <button type="submit" class="btn btn-default">Delete</button>

                    </form> -->
                        </div>
                      </div>
                      <?php } ?>


                      <?php 

                      $price = 350; //rajat
                      $total=$price*$quantity;
                      $discount = $total - $amount_to_pay;

                        ?>

                       <table class="table cart">
                <thead>
                  <tr>
                   
                    <th>Price </th>
                    <th>Quantity</th>
                    <th class="amount">Total </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="price">&#8377;<?php echo $price; ?></td>
                    <td class="quantity">
                      <div class="form-group">
                        <input type="text" class="form-control" value="<?php echo $quantity;?>" disabled>
                      </div>                      
                    </td>
                    <td class="amount">&#8377;<?php echo $total?> </td>
                  </tr>
                  <tr>                    
                    <td class="total-quantity" colspan="2">Discount Coupon</td>
                    <td class="price"><?php echo "Contingent"; ?></td>
                    <td class="amount">-&#8377;<?php echo $discount;?></td>
                  </tr>
                  <tr>
                    <td class="total-quantity" colspan="3">Total</td>
                    <td class="total-amount">&#8377;<?php echo $amount_to_pay;?></td>
                  </tr>
                </tbody>
              </table>
                      <form action="checkout.php" method="POST">
                      	<input name="type" type="hidden" value="cl">
                      	<input name="team_id" style="display: none;" value="<?php echo $team_id;?>">
                      	<button>Checkout</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- pills end -->

            </div>
            <!-- main end -->

          </div>
        </div>
      </section>
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
    <!-- Isotope javascript -->
    <script type="text/javascript" src="../plugins/isotope/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="../plugins/isotope/isotope.pkgd.min.js"></script>
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
				<a class="trigger" href="shop-listing-list.html#"><i class="icon-cog-1"></i></a>
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
