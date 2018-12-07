<?php 
// echo "wow";
session_start();
error_reporting(E_ALL);

ini_set('display_errors', '1');
include 'db_config.php';

 define( 'DBHOST_', 'localhost' );
        define( 'DBUSER_', 'admin' );
        define( 'DBPASS_', 'adminadmin2012#' );
        define( 'DBNAME_', 'esummit_18' ); 
        // $i = 0;
        $con = mysqli_connect(DBHOST_, DBUSER_, DBPASS_, DBNAME_);
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // var_dump($_POST["name"]);
        // var_dump($_POST["email"]);
        // var_dump($_POST["phone"]);
        // echo $_POST["name"][0];
        $str_name="";
        $str_email="";
        $str_phone="";
        $state="";
        $city="";
        $insert_id=-1;

        if(isset($_POST['type'])){
          $type = $_POST['type'];
          if($type == "prof"){


            $ticket = "Professional";
            $quantity = $_POST['quantity'];
            $email = $_POST['email'][0];
            $phone = $_POST['phone'][0];
            $price = 1300;                      //rajat change to 1300
            $total = $price*$quantity;
            $discount = 300*$quantity;        //rajat change to discount
            $amount = $total - $discount;
            $isEntre = $_POST["isEntre"];
            $coupon = "EarlyBird";
            $tax = 0.02*$amount;
            $is_prof=1;
            $src = $_POST["src"];
            $str_name=$_POST["name"][0];
            $str_email=$_POST["email"][0];
            $str_phone=$_POST["phone"][0];


            //adding to db
            $stmt=$conn->prepare("insert into reg_details (name, email, phone, startup, designation,count,is_prof,src,isEntre ) values (?,?,?,?,?,?,?,?,?)");
            echo $conn->error;
            $stmt->bind_param("sssssiiss",$_POST["name"][0],$_POST["email"][0],$_POST["phone"][0],$_POST["startup"],$_POST["designation"],$quantity,$is_prof,$src,$isEntre);
            $stmt->execute();
            echo $conn->error;
            $insert_id= $stmt->insert_id;
            $stmt->close();
            for($i=1;$i<$quantity;$i++){
              $stmt=$conn->prepare("insert into reg_details (name,email,phone,reference_id) values (?,?,?,?)");
              echo $conn->error;
              $stmt->bind_param("sssi",$_POST["name"][$i],$_POST["email"][$i],$_POST["phone"][$i],$insert_id);
              $stmt->execute();
              echo $conn->error;
              $stmt->close();
            }

          }
          elseif ($type=="stud") {
            $ticket = "Student Individual";
            $quantity = $_POST['quantity'];
            $email = $_POST['email'][0];
            $phone = $_POST['phone'][0];
            $price = 350;  //rajay
            $total = $price*$quantity;
            $discount = 0*$quantity; //rajat
            $amount = $total - $discount;
            $coupon = "";
            $src = $_POST["src"];
            $is_prof=0;
            $isEntre = $_POST["isEntre"];
            $str_name=$_POST["name"][0];
            $str_email=$_POST["email"][0];
            $str_phone=$_POST["phone"][0];
            $state = $_POST["state"];
            $city = $_POST["city"];
           
            $tax = 0.02*$amount;
            // $insert_id=1205;
            //adding to db
            $stmt=$conn->prepare("insert into reg_details (name, email, phone, state, city, college,count,is_prof,src,isEntre ) values (?,?,?,?,?,?,?,?,?,?)");
            echo $conn->error;
            $stmt->bind_param("ssssssiiss",$_POST["name"][0],$_POST["email"][0],$_POST["phone"][0],$_POST["state"],$_POST["city"],$_POST["college"],$quantity,$is_prof,$src,$isEntre);
            $stmt->execute();
            echo $conn->error;
            $insert_id= $stmt->insert_id;
            $stmt->close();
            for($i=1;$i<$quantity;$i++){
              $stmt=$conn->prepare("insert into reg_details (name,email,phone,reference_id) values (?,?,?,?)");
              echo $conn->error;
              $stmt->bind_param("sssi",$_POST["name"][$i],$_POST["email"][$i],$_POST["phone"][$i],$insert_id);
              $stmt->execute();
              echo $conn->error;
              $stmt->close();
            }

          }
          elseif ($type == "cl") {
            if(isset($_SESSION['team_id'])){
              $ticket = "Student Contingent";
              $team_id = $_SESSION['team_id'];
              $sql_cl = "SELECT count_mem,amount_to_pay,count_paid from contingent_group where team_id = '$team_id'";
              // echo $sql_cl;
              $result_cl = mysqli_query($con,$sql_cl);
              $row = mysqli_fetch_array($result_cl,MYSQLI_ASSOC);
              $quantity =$row['count_mem'] - $row['count_paid'];
              $amount = $row['amount_to_pay'];
              $price = 350; //rajat
              $total = $price*$quantity;
              $discount = $total - $amount;
              $coupon = "Contingent";
              $sql_cl_mem = "SELECT name,email,phone from contingent_member where group_id='$team_id' and is_leader = 1";
              $result_cl_mem = mysqli_query($con,$sql_cl_mem);
              // echo $sql_cl_mem;
              $row_mem = mysqli_fetch_array($result_cl_mem,MYSQLI_ASSOC);
              $str_name= $row_mem['name'];
              $str_email= $row_mem['email'];
              $str_phone= $row_mem['phone'];
              $insert_id=-1;
              $tax = 0.02*$amount;
              // echo $name[0];
            }
            else{
              header('Location: ../index2.php');
            }
            # code...
          }
          else{
            header('Location: ../index3.php');
          }
        }
        else{
          header('Location: ../index.php');
        }
?>
<!DOCTYPE html>
<!--[if IE 9]> <html lang="zxx" class="ie9"> <![endif]-->
<!--[if gt IE 9]> <html lang="zxx" class="ie"> <![endif]-->
<!--[if !IE]><!-->
<html dir="ltr" lang="zxx">
  <!--<![endif]-->

  <head>
    <meta charset="utf-8">
    <title>E-Summit 2018 | Checkout</title>
    <meta name="description" content="Checkout">
    <!-- <meta name="author" content="htmlcoder.me"> -->

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
    <!-- The Project's Typography CSS file, includes used fonts -->
    <!-- Used font for body: Roboto -->
    <!-- Used font for headings: Raleway -->
    <!-- Use css/rtl_typography-default.css for RTL version -->
    <link href="../css/typography-default.css" rel="stylesheet" >
    <!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer)-->
    <link href="../css/light_blue.css" data-style="styles-no-cookie" rel="stylesheet">
    <link href="../style-switcher/style-switcher.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/default.css">
    <link href="../css/color_scheme.css" rel="stylesheet">

    

    <!-- Custom css --> 
    <link href="../css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/component.css" /> 
    
      <script type="text/javascript" src="https://platform.linkedin.com/in.js">
     api_key: 81y96vkn1injsh
     onLoad: onLinkedInLoad
     authorize: false
    </script>
    <!-- <script type="in/Login"></script> -->
    <script type="text/javascript">
    // 1. Runs when the JavaScript framework is loaded
    function onLinkedInLoad() {
         $('a[id*=li_ui_li_gen_]').css({marginBottom:'20px'}) 
           .html('<img src="images/shareonlink.png" height="31" width="200" border="0" />');    

     // IN.Event.on(IN, "auth", onLinkedInAuth);
      IN.Event.on(IN, "auth", shareContent);

    }

    // 2. Runs when the viewer has authenticated
    function onLinkedInAuth() {
      // IN.API.Profile("me").result(displayProfiles);
           // IN.Event.on(IN, "auth", shareContent);

    }
      // Handle the successful return from the API call
      function onSuccess(data) {
        console.log(data);
        give_discount();
        // console();
      }

      // Handle an error response from the API call
      function onError(error) {
        console.log(error);
        alert("Sorry 100 people have already shared the post.")
      }

      // Use the API call wrapper to share content on LinkedIn
      function shareContent() {
            
        // Build the JSON payload containing the content to be shared
        var payload = { 
          "content":{
            "title":"E-Summit '18",
          "description": "The annual flagship event, a networking hub for corporates, professionals, and budding entrepreneurs from all across the nation", 
          "submitted-url":"https://www.ecell.in/esummit"
        },
        "comment":"I am all set for the networking sessions and panel discussions at E-Summit ‘18. Are you? Hurry up! Get your passes too. ",
          "visibility": { 
            "code": "anyone"
          } 
        };

        IN.API.Raw("/people/~/shares?format=json")
          .method("POST")
          .body(JSON.stringify(payload))
          .result(onSuccess)
          .error(onError);
      }
    // 3. Runs when the Profile() API call returns successfully
    function displayProfiles(profiles) {
     member = profiles.values[0];
     document.getElementById('demo').style.display = 'block';
     var profile = "<p class='name' id='' + member.id + ''>" +  member.firstName + " " + member.lastName + "</p>";
     profile += '<p class="headline">'+member.headline+'</p>';
     document.getElementById("profiles").innerHTML = profile;
     document.getElementById("picture").innerHTML = '<img src="'+member.pictureUrl+'" class="image" />';
     console.log(profiles);}

     insert_id = <?php echo $insert_id; ?>
   
     function give_discount(){
      // $("#contingent_city_load").css("visibility","");
      // $("#city").css("display","none");
      $.ajax({
        type: 'POST',
        url: 'discount_linkedin.php',
        data: {insert_id : insert_id },
        success: function(result){
    //      alert(data);
          alert("E-Summit poster posted successfully on your LinkedIn account. Thank you for sharing. You have got 100 Rs discount! ")
          $("linkedin_post_image").css("display", "none");
          $("#share_on_linkedin_btn").css("display", "none");
          $("#amount_hidden").val($("#amount_hidden").val() - 100);
          $("#link_dis").removeAttr('style');
          $("#amount").html($("#amount").html() - 100);
        }
      });
     }


       function validate_crid(){
      // $("#contingent_city_load").css("visibility","");
      // $("#city").css("display","none");
      $.ajax({
        type: 'POST',
        url: 'validate_crid.php',
        data: {insert_id : insert_id, crid : $('#crid').val() },
        success: function(result){
         alert(result);
          if(result=="success"){
          alert("You have entered a correct cr_id. You have got 50 Rs discount! ");
          $("#crid").css("display", "none");
          $("#validate_crid").css("display", "none");
          $("#amount_hidden").val($("#amount_hidden").val() - 50);
          $("#amount").html($("#amount").html() - 50);
          }else{
            alert("invalid cr id");
          }
        }
      });
     }
    </script>
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



      <script>
  window.onload = function() {
    var d = new Date().getTime();
    document.getElementById("tid").value = d;
  };
</script>
      <!-- header-container end -->
      <!-- breadcrumb start -->
      <!-- ================ -->
      <div class="breadcrumb-container">
        <div class="container">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home pr-2"></i><a class="link-dark" href="../index.php">Home</a></li>
            <li class="breadcrumb-item active">Checkout</li>
          </ol>
        </div>
      </div>
      <!-- breadcrumb end -->

      <!-- main-container start -->
      <!-- ================ -->
      <script>
      function validateForm() 
      {
        console.log("called");

        var errMsg="";
        var errorCount=0;
      var text = $("#billingFirstName").val();
      //console.log(text+"ty");
      if(text==""){
        errorCount++;
        errMsg=errMsg+"Name is empty\n";

      }
      var text = $("#billingLastName").val();
      //console.log(text+"ty");
      if(text==""){
        errorCount++;
        errMsg=errMsg+"Name is empty\n";

      }
      var email = $("#billingemail").val();

       if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))
       {
          
       }else{
          errorCount++;
          errMsg=errMsg+"Invaid email\n";
      }


      if(errorCount==0){
        $("#billing-information").submit();
      }
      else{
          document.getElementById("errors").innerHTML=errMsg;
          // window.alert(document.getElementById("errors").innerHTML);
          
      }

    }

    </script>
      <section class="main-container">

        <div class="container">
          <div class="row">

            <!-- main start -->
            <!-- ================ -->
            <!-- <div class="col-2"></div> -->
            <div class="main col-8" style="background: url(../images/patterns/pattern_light.png);">

              <!-- page-title start -->
              <!-- ================ -->
              <h1 class="page-title">Checkout</h1>
              <div class="separator-2"></div>
              <!-- page-title end -->

              <table class="table cart">
                <thead>
                  <tr>
                    <th>Ticket </th>
                    <th>Price </th>
                    <th>Quantity</th>
                    <th class="amount">Total </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="product"><a><?php echo $ticket;?></a> <!-- <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas inventore modi.</small> --></td>
                    <td class="price">&#8377;<?php echo $price;?></td>
                    <td class="quantity">
                      <div class="form-group">
                        <input type="text" class="form-control" value="<?php echo $quantity;?>" disabled>
                      </div>                      
                    </td>
                    <td class="amount">&#8377;<?php echo $total;?> </td>
                  </tr>
                  <tr>                    
                    <td class="total-quantity" colspan="2">Discount</td>
                    <td class="price" ><?php echo $coupon;?></td>
                    <td class="amount">-&#8377;<?php echo $discount;?></td>

                  </tr>
                  <tr>                    
                    <td class="total-quantity" colspan="2">Transactional Charges</td>
                    <td class="price" ></td>
                    <td class="total-amount">&#8377;<?php echo $tax;?></td>

                  </tr>
                  <tr id="link_dis" style="display: none;">                    
                    <td class="total-quantity" colspan="2">Linkedin share</td>
                    <td class="price"></td>
                    <td class="amount">-&#8377;<?php echo '100';?></td>
                    
                  </tr>
                  <tr>
                    <td class="total-quantity" colspan="3">Total</td>
                    <td class="total-amount">&#8377;<span id="amount"><?php echo 1.02*$amount;?></span></td>
                  </tr>
                </tbody>
              </table>
              <?php if($type=="prof"){ ?>
              <div style="width: 100%";>
              <img id="linkedin_post_image" src="images/linkedin_share.png" style="margin: auto;">
              </div>
              <div class="alert alert-success" role="alert" id="share_on_linkedin_btn">
                Share this on linkedin and get a discount of ₹100 <script type="in/Login"></script>
              </div>
              <?php } ?>

              <?php if($type=="stud"){ ?>
             <p>Enter cr id of your college representative to avail a discount of 50 Rs</p>
              <input id="crid" type="text" name="crid">
              <button id="validate_crid" onclick="validate_crid()">Validate</button>
              <?php } ?>
              <div class="space-bottom"></div>
              <fieldset>
                <legend>Billing information</legend>
                <form class="form-horizontal" id="billing-information" method="post" name="customerData" action="ccavRequestHandler.php">
                  <div class="row">
                    <div class="col-xl-3">
                      <h3 class="title">Personal Info</h3>
                    </div>
                    <div class="col-xl-8 ml-xl-auto">
                      <div class="form-group row">
                        <label for="billingFirstName" class="col-lg-2 control-label text-lg-right col-form-label">Name<small class="text-default">*</small></label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="billingFirstName"  value="<?php echo $str_name;?>" name="billing_name" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="billingTel" class="col-lg-2 control-label text-lg-right col-form-label" >Telephone<small class="text-default">*</small></label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="billingTel" value="<?php echo $str_phone;?>" name="billing_tel" required>
                        </div>
                      </div>
                     <!--  <div class="form-group row">
                        <label for="billingFax" class="col-lg-2 control-label text-lg-right col-form-label">Fax</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="billingFax" value="Fax">
                        </div>
                      </div> -->
                      <div class="form-group row">
                        <label for="billingemail" class="col-lg-2 control-label text-lg-right col-form-label">Email<small class="text-default">*</small></label>
                        <div class="col-lg-10">
                          <input type="email" class="form-control" id="billingemail" name="billing_email" value="<?php echo $str_email;?>" required>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="space"></div>
                  <div class="row">
                    <div class="col-xl-3">
                      <h3 class="title mt-5 mt-lg-0">Your Address</h3>
                    </div>
                    <div class="col-xl-8 ml-xl-auto">
                      <div class="form-group row">
                        <label for="billingAddress1" class="col-lg-2 control-label text-lg-right col-form-label">Address<small class="text-default">*</small></label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="billingAddress1"  name="billing_address" required>
                        </div>
                      </div>

                      <div id="errors"></div>
                      <div class="form-group row">
                        <label for="billingState" class="col-lg-2 control-label text-lg-right col-form-label">State<small class="text-default">*</small></label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="billingState" value="<?php echo $state;?>" name="billing_state" placeholder="Maharashtra" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="billingCity" class="col-lg-2 control-label text-lg-right col-form-label">City<small class="text-default">*</small></label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="billingCity" value="<?php echo $city;?>" name="billing_city" placeholder="Mumbai" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="billingPostalCode" class="col-lg-2 control-label text-lg-right col-form-label">Zip Code<small class="text-default">*</small></label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" id="billingPostalCode" placeholder="Postal Code" name="billing_zip" required>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="space"></div>
                  <div class="row">
                    <div class="col-xl-3">
                      <h3 class="title mt-5 mt-lg-0">Additional Info</h3>
                    </div>
                    <div class="col-xl-8 ml-xl-auto">
                      <div class="form-group row">
                        <div class="col-12">
                          <textarea class="form-control" rows="4" name="merchant_param1"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                      <div style="display: none;">
                        <input type="text" name="tid" id="tid" readonly="">
                        <input type="text" name="merchant_id" value="135831">
                        <input type="text" name="order_id" value="<?php echo $numbers = rand(100000000, 999999999);?>">
                        <input type="text" name="amount" id="amount_hidden" value="<?php echo 1.02*$amount;?>"> <!-- change to $amount -->
                        <input type="text" name="redirect_url" value="https://www.ecell.in/esummit/register/ccavResponseHandler.php">
                        <input type="text" name="currency" value="INR">
                        <input type="text" name="cancel_url" value="https://www.ecell.in/esummit/register/ccavResponseHandler.php"/>
                        <input type="text" name="billing_country" value="India"/>
                        <input type="text" name="language" value="EN"/>
                        <input type="text" name="merchant_param1" id="id" value="<?php echo $insert_id;?>">

                      </div>
                                      <div style="text-align: right;">
                      <button type="button" class="btn btn-default" onclick="validateForm()" style="text-align: center;">Proceed to Pay</button>
                    </div>
                </form>
              </fieldset>
 
              <div class="text-right">  


              </div>

            </div>
            <!-- main end -->

          </div>
        </div>
      </section>
      <?php include '../footer.html';?>
      <!-- main-container end -->
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
    <!-- <script type="text/javascript" src="style-switcher/style-switcher.js"></script> -->

    <!-- Color Switcher End -->
    <!-- Color Switcher (Remove these lines) -->

  </body>
</html>
