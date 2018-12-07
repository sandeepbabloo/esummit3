<!DOCTYPE html>
<!--[if IE 9]> <html lang="zxx" class="ie9"> <![endif]-->
<!--[if gt IE 9]> <html lang="zxx" class="ie"> <![endif]-->
<!--[if !IE]><!-->
<html dir="ltr" lang="zxx">
	<!--<![endif]-->

  <head>
    <meta charset="utf-8">
    <title>Registration | E-Summit '18</title>
    <meta name="description" content="">
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

    <!-- ../plugins -->
    <link href="../plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="../css/animations.css" rel="stylesheet">
    <link href="../plugins/owlcarousel2/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../plugins/owlcarousel2/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="../plugins/hover/hover-min.css" rel="stylesheet">		
    
    <!-- The Project's core CSS file -->
    <!-- Use ../css/rtl_style.css for RTL version -->
    <link href="../css/style.css" rel="stylesheet" >
    <!-- The Project's Typography CSS file, includes used fonts -->
    <!-- Used font for body: Roboto -->
    <!-- Used font for headings: Raleway -->
    <!-- Use ../css/rtl_typography-default.css for RTL version -->
    <link href="../css/typography-default.css" rel="stylesheet" >
    <!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer)-->
    <link href="../css/light_blue.css" data-style="styles-no-cookie" rel="stylesheet">
    <link href="../style-switcher/style-switcher.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/default.css">
    

    <!-- Custom css --> 
    <link href="../css/custom.css" rel="stylesheet">
    <link href="../css/color_scheme.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/default.css" />

    <link rel="stylesheet" type="text/css" href="../css/component.css" /> 

    <style type="text/css">
    	p{
    		color: rgb(230, 231, 234);
    	}
    </style>
    
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
            <li class="breadcrumb-item"><i class="fa fa-home pr-2"></i><a href="../index.php">Home</a></li>
            <li class="breadcrumb-item active">Registration</li>
          </ol>
        </div>
      </div>
      <!-- breadcrumb end -->

      <!-- main-container start -->
      <!-- ================ -->
      <section class="main-container">

        <div class="container">
          <div class="row">

            <!-- main start -->
            <!-- ================ -->
            <!-- <div class="col-lg-3">
            </div> -->
            <div class="main col-lg-12">
	            <ul class="nav nav-tabs style-1" role="tablist">
	                <li class="nav-item">
	                  <a class="nav-link active" href="#htab1" role="tab" data-toggle="tab"><!-- <i class="fa fa-home pr-2"></i> -->Student Individual</a>
	                  </li>
	                <li class="nav-item">
	                  <a class="nav-link" href="#htab2" role="tab" data-toggle="tab"><!-- <i class="fa fa-user pr-2"></i> -->Professional</a>
	                  </li>
	                <li class="nav-item">
	                  <a class="nav-link" href="#htab3" role="tab" data-toggle="tab"><!-- <i class="fa fa-user pr-2"></i> -->Student Contingent</a>
	                  </li>
	                <!-- <li class="nav-item">
	                  <a class="nav-link" href="#htab3" role="tab" data-toggle="tab"><i class="fa fa-envelope pr-2"></i>Well Documented</a>
	                </li> -->
	              </ul>
	            <div class="tab-content">
		            <div class="main col-lg-12 tab-pane fade active show" style="background: url(../images/patterns/pattern_light.png);" id="htab1">

		             
		              <h2 style="text-align: center;">Student Registration</h2>
		              <form role="form" action="checkout.php" method="POST">
                    	<div style="text-align: center;margin-top: 10px;margin-bottom: 5px;">Person 1</div>
		              	<div class="form-group">
		  	                <label for="inlineFormInput">Name</label>
		            		<input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" name="name[0]" id="inlineFormInput" placeholder="Jane" required>
		              	</div>
		                <div class="form-group">
		                  <label for="exampleInputEmail1">Phone</label>
		                  <input type="number" class="form-control"  name="phone[0]" aria-describedby="emailHelp" placeholder="Enter Phone number" required>
		                  <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
		                </div>
		                <div class="form-group">
		                  <label for="exampleInputEmail1">Email address</label>
		                  <input type="email" class="form-control"  name="email[0]" aria-describedby="emailHelp" placeholder="Enter email" id="mail_stud" required>
		                  <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
		                </div>
							     <!--                 <div class="form-group">
		                  <label for="exampleInputPassword1">Password</label>
		                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		                </div> -->
		                
             
		                <div class="form-group">
		                  <label for="exampleSelect1">State</label>
		                  <select class="form-control" id="state" name="state" onchange="city_change();" required>
		                    <option value="select" disabled>State</option>
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
		                <div class="chatti">
			                <div class="form-group">
			                  <label for="exampleSelect1">City</label>
			                  <select class="form-control" id="city" onchange="select_college()" name="city" required>
									<option value="city" disabled>City</option>
			                  </select>
			                </div>
			                <div class="form-group">
			                  <label for="exampleSelect1">College</label>
			                  <select class="form-control" id="college" name="college" onchange="displayCollege()" required>
								<option value="college" disabled>College</option>
			                  </select>
			                </div>
			                <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" name="prof" id="inlineFormInput" placeholder="Doe" value="0" readonly style="display: none;" required>
			                <div class="form-group has-warning" style="display: none;" id="input_college">
			                  <!-- <label class="form-control-label" for="inputWarning1">Input with warning</label> -->
			                  <input type="text" class="form-control form-control-warning" id="inputWarning1">
			                  <div class="form-control-feedback"></div>
			                  <small class="form-text text-muted"></small>
			                </div>

			               <input type="hidden" name="type" value="stud">
	                    	<input id="quantity_stud" type="hidden" name="quantity" value="1">


	                    	<label for="exampleInputEmail1">Do you own a startup?</label>
	                    	<div class="form-check form-check-inline">
			                  <label class="form-check-label"> 
			                    <input class="form-check-input" type="radio" id="inlineRadioOptions2" name="isEntre" value="yes">Yes 
			                  </label>
			                </div>
			                <div class="form-check form-check-inline">
			                  <label class="form-check-label">
			                    <input class="form-check-input" type="radio" id="inlineRadioOptions1" name="isEntre" value="no"> No
			                  </label>
			                </div>
	                    	<div class="form-group">
		                  <label for="exampleSelect1">Where did you get to know about E-Summit?</label>
		                  <select class="form-control" id="src" name="src">
		                    <option value="mailers">Mailers</option>
		                    <option value="friend">Friend</option>
		                    <option value="facebook">Facebook</option>
		                    <option value="news">Newspaper/Magazine</option>
		                    <option value="sms">SMS</option>
		                    <option value="googlead">Google Ad</option>
		                    <option value="posters">Posters</option>
		                    <option value="linkedin">Linkedin</option>
		                    <option value="twitter">Twitter</option>
		                    <option value="tele">Television</option>
		                    <option value="dsn">DSN</option>
		                    <option value="envoyage">Envoyage</option>
		                    <option value="youad">Youtube Ad</option>
		                    <option value="theatread">Theatre Ad</option>
		                    <option value="nec">NEC</option>
		                    <option value="bus">Bus shelters</option>
		                    <option value="bestbus">Best buses</option>
		                  </select>
		                </div>
	                    
	                    <div id="people_container_stud"></div>

	                    
		                    <div style="text-align: left;display: inline-block;">
		                      <!-- <button id="add_mem_btn_stud" type="button" class="btn btn-default"  style="text-align: center;">Add member</button> -->
	                        <p style="text-align: center;">
	                                          <button class="btn btn-1 btn-1e serviceswaala" id="add_mem_btn_stud" type="button">Add member</button>
	                          </p>
		                    </div><div style="float:  right;display:inline-block;">
	                          <p style="text-align: center;">
	                                          <button class="btn btn-1 btn-1e serviceswaala" type="submit">Proceed to Pay</button>
	                          </p>
	    			                	<!-- <button class="btn btn-default" style="text-align: center;" onclick="validateForm()">Proceed to Pay</button> -->
				                </div>
				        </div>
				        <div class="silverscope" style="display: none;">
				        <h3>For registrations in Chattisgarh Region, visit <a href="http://silverscope.in" class="light-blue" target="_blank">SilverScope</a>, Our official associates for E-Summit' 18</h3>
				        </div>

                  		</form>

                   

		            </div>

		            <div class="main col-lg-12 tab-pane fade" style="background: url(../images/patterns/pattern_light.png);" id="htab2">

		              <h2 style="text-align: center;">Professional Registration</h2>
		              <form role="form" action="checkout.php" method="POST">
	                    <div style="text-align: center;margin-top: 10px;margin-bottom: 5px;">Person 1</div>
			              	<div class="form-group">
			  	                <label for="inlineFormInput">Name</label>
			            		<input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" name="name[0]" id="inlineFormInput" placeholder="Jane" required>
			              	</div>
			                <div class="form-group">
			                  <label for="exampleInputEmail1">Phone</label>
			                  <input type="number" class="form-control"  name="phone[0]" aria-describedby="emailHelp" placeholder="Enter Phone number" required>
			                  <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
			                </div>
			                <div class="form-group">
			                  <label for="exampleInputEmail1">Email address</label>
			                  <input type="email" class="form-control"  name="email[0]" aria-describedby="emailHelp" placeholder="Enter email" id="mail_prof" required>
			                  <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
			                </div>
								
			                <div class="form-group">
			  	                <label for="inlineFormInput">Company</label>
			            		<input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" name="startup" id="inlineFormInput" placeholder="Capital One" required>
			              	</div>

	                     <div class="form-group">
	                        <label for="inlineFormInput">Designation</label>
	                    <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" name="designation" id="inlineFormInput" placeholder="HR Manager">
	                    </div>
		              	

	                    <input type="hidden" name="type" value="prof">
	                    <input id="quantity_prof" type="hidden" name="quantity" value=1>

	                    <label for="exampleInputEmail1">Do you own a startup?</label>
	                    	<div class="form-check form-check-inline">
			                  <label class="form-check-label"> 
			                    <input class="form-check-input" type="radio" id="inlineRadioOptions2" name="isEntre" value="yes">Yes 
			                  </label>
			                </div>
			                <div class="form-check form-check-inline">
			                  <label class="form-check-label">
			                    <input class="form-check-input" type="radio" id="inlineRadioOptions1" name="isEntre" value="no"> No
			                  </label>
			                </div>

	                    <div class="form-group">
		                  <label for="exampleSelect1">Where did you get to know about E-Summit?</label>
		                  <select class="form-control" id="src" name="src">
		                    <option value="mailers">Mailers</option>
		                    <option value="friend">Friend</option>
		                    <option value="facebook">Facebook</option>
		                    <option value="news">Newspaper/Magazine</option>
		                    <option value="sms">SMS</option>
		                    <option value="googlead">Google Ad</option>
		                    <option value="posters">Posters</option>
		                    <option value="linkedin">Linkedin</option>
		                    <option value="twitter">Twitter</option>
		                    <option value="tele">Television</option>
		                    <option value="dsn">DSN</option>
		                    <option value="envoyage">Envoyage</option>
		                    <option value="youad">Youtube Ad</option>
		                    <option value="theatread">Theatre Ad</option>
		                    <option value="nec">NEC</option>
		                    <option value="bus">Bus shelters</option>
		                    <option value="bestbus">Best buses</option>
		                  </select>
		                </div>
                    	
                    
                    	<div id="people_container_prof"></div>

                     
	                    <div style="text-align: left;display: inline-block;">
	                      <p style="text-align: center;"><button id="add_mem_btn_prof" type="button" class="btn btn-1 btn-1e serviceswaala"  style="text-align: center;">Add member</button></p>
	                    </div><div style="float:  right;display:inline-block;">

	                      <p style="text-align: center;"><button class="btn btn-1 btn-1e serviceswaala" style="text-align: center;" type="submit">Proceed to Pay</button></p>
	                    </div>


		              	</form>
		            </div>
		            <div class="main col-lg-12 tab-pane fade" style="background: url(../images/patterns/pattern_light.png);text-align: center;min-height: 300px;" id="htab3">
                  <p style="display: block;margin: auto;position: relative;top: 20px;" ><button class="btn btn-1 btn-1e serviceswaala" style="font-size: 15px;z-index: 200;" onclick="window.location.href='contingent_sign.php';">Sign Up</button></p>
                  <p style="display: block;margin: auto;position: relative;top: 70px;" ><button class="btn btn-1 btn-1e serviceswaala" style="font-size: 15px;z-index: 200;" onclick="window.location.href='contingent_login.php';">Login</button></p>
		            	<!-- <button style="display: block;margin: auto;position: relative;top: 100px;" >Sign Up</button>
                  <p style="top: 70%;display: none;z-index: 200;" id="reg_button"><button class="btn btn-1 btn-1e wwh josefin" style="font-size: 23px;z-index: 200;">Register</button></p>
		            	<button style="display: block;margin: auto;position: relative;top: 150px;" onclick="window.location.href='conti_login.html';">Login</button> -->
		            </div>


		            </div>
          
            	</div>
            </div>

          </div>

      </section>
 <section class="main-container" style="padding-top: 0">
 	<div class="container">
 		<h2 style="text-align: center;padding-top: 30px;text-transform: none;padding-top: 0" class="josefin light-black" >Buy Summit T-Shirts</h2>
 		<div class="row">
 			
 			<div class="col-md-3"><img src="images/conti_front.jpg"><p class="light-black" style="text-align: center;">Contingent Front</p></div>
 			<div class="col-md-3"><img src="images/conti_back.jpg"><p class="light-black" style="text-align: center;">Contingent Back</p></div>
 			<div class="col-md-3"><img src="images/nec_front.jpg"><p class="light-black" style="text-align: center;">NEC Front</p></div>
 			<div class="col-md-3"><img src="images/nec_back.jpg"><p class="light-black" style="text-align: center;">NEc Back</p></div>
 		</div>
 		<div class="row">
 			<div class="col-md-2"></div>
 			<div class="col-md-4"><img src="images/summit_front.jpg"><p class="light-black" style="text-align: center;">E-Summit Front</p></div>
 			<div class="col-md-4"><img src="images/summit_back.jpg"><p class="light-black" style="text-align: center;">E-Summit Back</p></div>
 			
 		</div>
 		<p style="text-align: center;">
	                                    <a href="https://www.townscript.com/e/esummit-tshirt-214340"><button class="btn btn-1 btn-1e serviceswaala">Buy Now</button></a>
	                                </p>
 	</div>
 </section>     
 <section class="main-container">
         <div class="container" style="background: url(../images/patterns/pattern_dark.png);">
            <div class="panel panel-default">
                <h2 style="text-align: center;padding-top: 30px;text-transform: none;color: white;" class="josefin" >Registration Guidelines</h2>
                <div class="panel-body whitish">
                    <p><b><u>What are the different categories for registration?</u></b>
                    </p>
                    <div style="margin-left: 20px;">
                      <p class="small_head light-blue"><b><i>Professionals</i></b>
                      </p>
                      <p>Individuals who are not college students and wish to attend the E-Summit.
                          <br> Separate badges will be provided and they will get special benefits in networking and events.
                          <br> Early bird fee of INR 1000/- is applicable only till 1st January, 2018. After that fee of INR 1300/- will be applicable.
                      </p>
                      <p class="light-blue"><b><i>Student</i></b>
                      </p>
                      <p style="margin-left: 20px;"><b>Individual</b> – If you want to attend E-Summit as an individual and not as a part of college contingent, please register under this category. Fee is INR 350/-.
                          <br> If you are an IIT Bombay student, you don't have to pay to attend E-Summit. Please carry your ID card at all the time during E-Summit.</p>
                      <p style="margin-left: 20px;"><b>Contingent</b> – <a href="contingent_leader.pdf">Click here</a> to get the details.</p>

                      <!-- <p style="margin-left: 20px;">For more information about contingent, please go to contingent details or else <a href="#contingent">click here</a></p> -->

                    </div>

                  <p><b>For any queries, contact:</b></p>
                    <div class="row" style="margin-left: 0px;">
                        <div class="col-sm-4">
                            <u>Ashish Kumar</u>
                            <br><i> Mobile:</i> +91-9987583123
                            <br><i> E-mail:</i> ashish@ecell.in
                            <br>
                        </div>
                        <div class="col-sm-4">
                            <u>Shantanu Dubey</u>
                            <br><i> Mobile:</i> +91-8879142835
                            <br><i> E-mail:</i> shantanu@ecell.in
                            <br>
                        </div>
                        <div class="col-sm-4">
                            <u>Srijit Ghosh</u>
                            <br><i>Mobile:</i> +91-8879784886
                            <br><i> E-mail:</i> srijit@ecell.in
                            <br>
                        </div>
                    </div>

                </div>
            </div>
        </div>

</section>
    <section id="contingent">
      <div class="container" style="background: url(../images/patterns/pattern_dark.png);">
          <div class="panel panel-default">
              <h2 style="text-align: center;padding-top: 30px;text-transform: none;color: white;" class="josefin">Contingent Model</h2>
              <div id="reg" class="panel-body">
                  <p> A contingent is a team of students (at least 7) from the same college, attending The Entrepreneurship Summit. They would be representing their college at all the events of E-Summit, 2018.
                  </p>
                  <p>
                      If you are planning to attend The Entrepreneurship Summit 2018, please go through the following document carefully to know why you should come in a contingent and ensure that you do not miss out on anything .
                  </p>
                  <p>

                      <p style="display: block;margin: auto;" ><button 
                      class="btn btn-1 btn-1e hover-black" style="color: rgb(230, 231, 234);border-color: rgb(230, 231, 234);"
                      class="btn btn-1 btn-1e serviceswaala" style="z-index: 200;" onclick="window.location.href='contingent_leader.pdf';">More Details</button></p>
                  </p>
              </div>

          </div>
      </div>
    </section>
    <section class="main-container" id="acco">
             <div class="container" id="accomo" style="background: url(../images/patterns/pattern_dark.png);">
        <div class="panel panel-default">
            <h2 style="text-align: center;padding-top: 30px;text-transform: none;color: white;" class="josefin">Accommodation</h2>
            <div class="panel-body">
            <p>We are really sorry to inform you that accommodation from our side is over. But you can avail accommodation through Oyo rooms.Fill the form for more details.</p>
            	 <form role="form" action="accommodation_page.php" method="POST">
                    	
		              <div class="form-group">
		  	                <label for="inlineFormInput">Name</label>
		            		<input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" name="name" id="inlineFormInput" placeholder="Jane" required>
		              	</div>
		                <div class="form-group">
		                  <label for="exampleInputEmail1">Phone</label>
		                  <input type="number" class="form-control"  name="phone" aria-describedby="emailHelp" placeholder="Enter Phone number" required>
		                  <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
		                </div>
		                <div class="form-group">
		                  <label for="exampleInputEmail1">Email address</label>
		                  <input type="email" class="form-control"  name="email" aria-describedby="emailHelp" placeholder="Enter email" id="mail_stud" required>
		                
		           </div>

		             <div id="people_container_stud"></div>

	                     <p>

                      <p style="display: block;margin: auto;" ><button 
                      class="btn btn-1 btn-1e hover-black" style="color: rgb(230, 231, 234);border-color: rgb(230, 231, 234);"
                      class="btn btn-1 btn-1e serviceswaala" style="z-index: 200;">Submit</button></p>
                  </p>
		       </form>


            



      
        
       
      <!-- </form> -->
                                    <!--p>Accommodation in IIT Bombay Campus or in the vicinity would be provided to students who would be needing it at a subsidized cost.<br>
                Accommodation would be provided to all the participants who would be needing one by E-Cell, IIT Bombay starting from 12 PM 29th January, 30th January and 31st January. Rooms have to be emptied before 09:00 AM on 1st February.
                </p>
                <p>Due to huge number of entries we have to close down the accommodation registration for now. We will notify you once we confirm more availaibilty of rooms with us. Please fill the form below to get notified. We regret for the inconvinience.<br>
                <a href="https://docs.google.com/forms/d/14bWZor_H4WSfKdl0xUERGp_nAEB2bNOSXzf8Ew4TVCo/viewform?usp=send_form" target="_blank"> <button class="btn btn-default btn-theme-color">Get Notification</button></a>
                </p>
                <p>
                INR 2000 is to be paid online to get accommodation on Campus which would be allotted on a first-come first-serve basis. This will include:
                <br>- Complementary coupons worth INR 200 will be given when you reach the campus (only for online early birds)</p>
                <p>
                On your arrival at IIT Campus, irrespective of your online payment, you would be charged an amount of INR 100 which is refundable once you submit the accommodation Receipt, keys and other things provided to you.
                </p>
                <button onclick="popup('esummit16acco');" class="tsbutton">Register Now</button><noscript id="tsNoJsMsg">Javascript on your browser is not enabled.</noscript><script src="//www.townscript.com/popup-widget/townscript-widget.nocache.js" type="text/javascript"></script>
                <p-->
               <!--  <b>For any issues regarding accommodation please contact any one of the following:</b><p></p>
                <div class="row" style="margin-left: 0px;">

                    <div class="col-sm-4">
                        <u>Rupal Sahu</u>
                        <br><i> Mobile:</i> +91-8828290471
                        <br><i> E-mail:</i> rupal@ecell.in
                        <br>
                    </div>
                    <div class="col-sm-4">
                        <u>Sawan soni</u>
                        <br><i> Mobile:</i> +91-9619128657
                        <br><i> E-mail:</i> sawan@ecell.in
                        <br>
                    </div>
                </div> -->
                <p><b>Instructions</b>
                </p>
                <div style="margin-left: 15px;">
      <p><b>*Accommodation is only for students.</b></p>
          <!-- <p><b>*Girls will get accommodation inside the institute.</b></p> -->
                  <p>1. Those carrying their laptops, CPU or similar electronic gadgets will have to declare their belongings at the main gate of IIT Bombay and get a 'Gate Pass'. Your belongings will be checked on your way out of IIT Bombay and those who fail to produce their Gate Pass may have their belongings impounded.</p>
                  <p>2. We shall provide you with mattresses and buckets. However, you are encouraged to carry your own blankets since it might be a little cold at night.</p>
                  <p>3. At the time of check-out the participants are required to return all the commodities provided to them to the organisers.</p>
                  <p>4. Random checks would be made to avoid any illegal stay at the campus. Any team failing to produce their receipts of accommodation would be heavily fined and disqualified.</p>
                  <p>5. Entry will be only through the 'Main Gate' of IIT Bombay, all other gates will be closed for entry.</p>
                  <p>6. All student participants must carry their valid College photo ID card. Others must bring their valid photo identity for the purpose of entry. People without valid photo identity card will not be allowed inside the campus during E-Summit 2017-18.</p>
                  <p>7. Alcohol, drugs, sharp objects and explosives of any kind are strictly prohibited inside the campus. Any other item if deemed unsafe will be prohibited. The decision of Security and E-Cell team will be final in case of any disputes.</p>
                  <p>8. No outside vehicles will be allowed into the campus during the E-Summit 2017-18.</p>
                  <p>9. E-Cell and IIT Bombay will not be responsible for any mishaps that occur through the duration of stay for E-Summit 2017-18.</p>
                  <p>10. All those who does not have accommodation inside the campus, will not be allowed to stay in the campus after 10pm.</p>
                  <p>Hope to see you here at E-Summit 2017-18. We will be more than happy to receive your suggestions and queries.</p>
                </div>
            </div>

        </div>
        </div>


  </section>
  <section class="main-container">

        <div class="container" style="background: url(../images/patterns/pattern_dark.png);">
             <div class="container">
        <div class="panel panel-default">
            <h2 style="text-align: center;padding-top: 30px;text-transform: none;color: white;" class="josefin">FAQ's</h2>
              <div class="panel-body">
                  <p><b><i>What is the payment procedure?</i></b>
                  </p>
                  <p>The payment can be made online or at the time you come to IIT Bombay, but you will have to pay an extra INR 100/- for on venue registration. Though it is preferred that you pay the registration and accommodation charges online as there are limited seats and accommodations.</p>
                  <p><b><i>What are the charges?</i></b>
                  </p>
                  <p>Registration charges are listed under registration guidelines tab. The accommodation charges and other necessary details regarding the accommodation are available under the tab Accommodation.</p>
                  <p><b><i>Is there any charge for the workshops/panel discussions/competitions/speaker sessions etc. at E-Summit?</i></b>
                  </p>
                  <p>
                      No, there are no charges for those if you have registered for E-Summit. All events are free.
                  </p>
                  <b><i>What are the necessary documents that I am supposed to bring?</i></b>
                  <p></p>
                  <p>
                      For students who have not applied for accommodation, Just the college identity card would do. If you have applied for accommodation, failing to bring any of the documents may lead to cancellation of your accommodation. The documents are: Gate Pass for the electronic gadgets you are carrying like laptops, camera, etc. Accommodation Payment Receipt received after paying online. Accommodation Confirmation mail from Townsript.</p>
                  <b><i>Can I enter IIT-B campus anytime?</i></b>
                  <p></p>
                  <p>
                      Students who have been provided accommodation can enter IIT Main gate anytime by showing valid photo ID proof during 8 AM to 9:30 PM. However, people without accommodation should leave campus by 10 PM.</p>
                  <b><i>Do we get any food facilities at accommodation places?</i></b>
                  <p></p>
                  <p>
                      You would be given complementary food coupons worth INR 200 when you reach the campus (Only if you pay for accommodation online). Apart from these, you can purchase food from our Food Court in the IITB campus.</p>
                  <b><i>Will all the team members be given accommodation at the same place?</i></b>
                  <p></p>
                  <p>
                      Outstation participants who have registered or paid for accommodation are requested to report to the accommodation desk/ online registration desk where the required formalities involving checking of documents, allotment of rooms will be done.</p>
                  <b><i>Shall I carry my ID card with me?</i></b>
                  <p></p>
                  <p>
                      It is mandatory for all participants to carry college IDs. This is for your own convenience. Moreover you will be asked to produce your college ID cards at the time of registration at the campus.</p>
                  <b><i>What kind of accommodation is provided?</i></b>
                  <p></p>
                  <p>
                      Accommodation is provided on a shared basis. We have hostel rooms and flats for accommodation. Mattresses and other essential commodities will be provided. Girls and boys will be provided separate accommodation.</p>
                  <b><i>What about the canteen?</i></b>
                  <p></p>
                  <p>
                      For our guests and participants we have a Food Court serving a variety of cuisines satisfying the needs of every palate.</p>
                  <b><i>What about medical facilities?</i></b>
                  <p></p>
                  <p>
                      There is an institute Hospital located near the Canara Bank. In case you fall ill, you are advised to report to us at registration desk. We shall make appropriate arrangements for you to be treated at the Institute hospital.</p>
                  <b><i>What about the security facilities?</i></b>
                  <p></p>
                  <p>
                      IIT Bombay campus has a vigilant and round-the-clock security service. To ensure the safety of the participants, there will be additional security guards in hostels in order to avoid thefts and other mishaps. Although E-Cell team will not take responsibility of any theft or other mishaps. So participants are requested to take care of their luggage and valuable items.</p>
                  <p><b><i>Is there an ATM inside the campus?</i></b>
                  </p>
                  <p>
                      There are SBI and Canara Bank ATMs inside the campus. There is also an ICICI Bank ATM just outside the campus.</p>
                  <p><b><i>Is there any internal transport in the campus?</i></b>
                  </p>
                  <p>
                      Internal transport will be available at reasonable rates. Also auto rickshaws are usually available in the campus. Personal Vehicles are NOT allowed in the campus.</p>
                  <p><b><i>Do the accommodation charges include food facilities too?</i></b>
                  </p>
                  <p>
                      No, the accommodation charges do not include food facilities. As mentioned, every participant who has paid for accommodation online would get breakfast as well as complimentary food coupons worth INR 200 (When they reach the campus). Participantscan also purchase their meals from our food court inside the campus.</p>
                  <p><b><i>Where will I get my accommodation?</i></b>
                  </p>
                  <p>
                      You will get accommodation inside the campus on a first-come-first-serve basis depending upon availability .In case too many requests for accommodation, we will try to provide you accommodation outside the campus (the rates will be different for that). However,we will try to provide accommodation to all the girls inside the IIT-B campus on a priority basis.</p>
                  <p><b><i>One of our team members who had been provided accommodation is unable to come so can we replace him with our other team member?</i></b>
                  </p>
                  <p>Yes, but the person coming should have all the documents that the other member was supposed to have and the person should be of the same college.</p>
                  <p><b>In case of any query, drop a mail to <i>esummit@ecell.in.</i><!--  or please contact:</b></p> -->
                  <!-- <div class="row" style="margin-left: 0px;">
                      
                        <div class="col-sm-4">
                        <u>Rupal Sahu</u>
                        <br><i> Mobile:</i> +91-8828290471
                        <br><i> E-mail:</i> rupal@ecell.in
                        <br>
                      </div>
                      <div class="col-sm-4">
                          <u>Sawan soni</u>
                          <br><i> Mobile:</i> +91-9619128657
                          <br><i> E-mail:</i> sawan@ecell.in
                          <br>
                      </div>
                  </div> -->
              </div>
          </div>
        </div>

          </div>

  </section>  
  <?php include '../footer.html';?>    
    <script type="text/javascript">
      function validateForm() 

      {
        console.log("called");
        var errorCount=0;
        var errMsg = "";
          var email = $("#mail_stud").val();

         if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))
         {
            
         }else{
            errorCount++;
            errMsg=errMsg+"Invaid email\n";
        }
                console.log(errMsg);
        if(errorCount==0){
          $(this).submit();
          // return true;
          // $("#billing-information").submit();
        }
        else{
          // return false;
            // document.getElementById("errors_stud").innerHTML="Invalid Email";
            // document.getElementById("errors_prof").innerHTML="Invalid Email";
            window.alert("Invalid Email");
            
        }
      }
            function validateForm_p() 

      {
        console.log("called");
        var errorCount=0;
        var errMsg = "";
          var email = $("#mail_prof").val();

         if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))
         {
            
         }else{
            errorCount++;
            errMsg=errMsg+"Invaid email\n";
        }
                console.log(errMsg);
        if(errorCount==0){
          $(this).submit();
          // return true;
          // $("#billing-information").submit();
        }
        else{
          // return false;
            // document.getElementById("errors_stud").innerHTML="Invalid Email";
            // document.getElementById("errors_prof").innerHTML="Invalid Email";
            window.alert("Invalid Email");
            
        }
      }

    </script>
      <!-- main-container end -->

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
    <!-- Initialization of ../plugins -->
    <script type="text/javascript" src="../js/template.js"></script>
    <!-- Custom Scripts -->
		<script type="text/javascript" src="../js/custom.js"></script>
		<!-- Color Switcher (Remove these lines) -->
		<script type="text/javascript" src="../js/register.js"></script>

    <script type="text/javascript">

      $(document).ready(function(){

        person_count_stud=1;
        $("#add_mem_btn_stud").click(function(){
          person_count_stud++;
          $("#quantity_stud").val(person_count_stud);
          var i=person_count_stud-1;
          $('<div style="text-align: center;margin-top: 10px;margin-bottom: 5px;">Person '+person_count_stud+'</div><div class="row" style="padding: 10px;"><input type="text" class="col-md-4" id="inlineFormInput" placeholder="Name" name="name['+i+']" style="padding: 5px;" required><input type="email" class="col-md-4" id="inlineFormInputGroup" placeholder="email" name="email['+i+']" style="padding: 5px;" required><input type="number" class="col-md-4" id="inlineFormInputGroup" placeholder="Phone" name="phone['+i+']" style="padding: 5px;" required></div>').appendTo( $("#people_container_stud"));
   
        });

        person_count_prof=1;
        $("#add_mem_btn_prof").click(function(){
          person_count_prof++;
          $("#quantity_prof").val(person_count_prof);
          var i=person_count_prof-1;
          $('<div style="text-align: center;margin-top: 10px;margin-bottom: 5px;">Person '+person_count_prof+'</div><div class="row" style="padding: 10px;"><input type="text" class="col-md-4" id="inlineFormInput" placeholder="Name" name="name['+i+']" style="padding: 5px;" required><input type="email" class="col-md-4" id="inlineFormInputGroup" placeholder="email" name="email['+i+']" style="padding: 5px;" required><input type="number" class="col-md-4" id="inlineFormInputGroup" placeholder="Phone" name="phone['+i+']" style="padding: 5px;" required></div>').appendTo( $("#people_container_prof"));
   
        });

    });
    </script>
    <script type="text/javascript" src="../js/classie.js"></script>
  </body>
</html>
