<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="style.css" rel="stylesheet" type="text/css" />
    <title>Dashboard Admin Template by Tooplate.com</title>
    <!--

    Template 2108 Dashboard

	http://www.tooplate.com/view/2108-dashboard

    -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/fullcalendar.min.css">
    <!-- https://fullcalendar.io/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/tooplate.css">
<?php
error_reporting(1);
$con=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("foods",$con);
if($_POST['insert'])
{
	$fe_id=$_POST['fe_id'];
	$name=$_POST['n'];
	$email=$_POST['e'];
	$phone=$_POST['p'];
	$message=$_POST['m'];
	$data="INSERT INTO feedbacks VALUES('$fe_id','$name','$email','$phone','$message')";
	if(mysql_query($data))
	{
		header("location:fb_success.php?name=$name");
	}
	
	
}
?>
</head>

<body id="bg02">
    <div class="" id="home">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-xl navbar-light bg-light">
                        <a class="navbar-brand" href="#">
                        <img  src="img/balloons.jpg" width="100" height="130">
                            <h1 class="tm-site-title mb-0">SMILE BAKERY</h1>
                        </a>
                        <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item">
                                    <a class="nav-link active" href="index.php">HOME
                                        
                                    </a>
                                </li>
                               <li class="nav-item">
                                    <a class="nav-link" href="products.php">PRODUCT</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="register.php">REGISTER</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="order.php">ORDER</a>
                                </li>
                               <li class="nav-item">
                                    <a class="nav-link" href="contact.php">CONTACT</a>
                                </li>
                            </ul>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link d-flex" href="login.php">
                                        <i class="far fa-user mr-2 tm-logout-icon"></i>
                                        <span>LOGOUT</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>

<!-- row -->
<div class="row tm-mt-big">
            <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12" >
            
            <div class="d-inline-block tm-bg-black text-white py-4 px-4">   
                    <div class="row">
                        <div class="col-12">
                         <h2 class="tm-block-title d-inline-block" style="color:#0cf4f4;">Contact Us!</h2><br>   
						<font color="black"><i>We are precious your advice!</i></font>
                        </div>
                    </div>
                    <div class="row mt-4 tm-edit-product-row">
                        <div class="col-xl-7 col-lg-7 col-md-12">
						
                          <form class="tm-signup-form" method="post">

				
                                <div class="form-group">
                                    <label for="n" style="color:#0cf4f4;"> Name</label>
                                    <input  id="n" name="n" type="text" class="form-control validate"  >
                                </div>
                                <div class="form-group">
                                    <label for="e" style="color:#0cf4f4;">Email</label>
                                    <input id="e" name="e" type="text" class="form-control validate">
									
                                </div>
                                <div class="form-group">
                                    <label for="p" style="color:#0cf4f4;">Phone</label>
                                    <input id="p" name="p" type="text" class="form-control validate">
                                </div>
                                
                                <div class="form-group">
                                    <label for="m" style="color:#0cf4f4;">Message</label>
                                    <textarea id="m" name="m" type="text" class="form-control validate"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-4">
                                        <button type="submit" value="insert" name="insert" class="btn btn-primary" style="color:#0cf4f4;">SEND
                                        </button>
										
                                    </div>
									<div class="col-12 col-sm-8 tm-btn-right">
                                        <button type="reset" class="btn btn-danger" value="Cancel">Cancel
                                        </button>
                                    </div>
                                    
                                    
                                </div>

                            </form>  

						</div>	

                         <div class="col-xl-4 col-lg-4 col-md-12 mx-auto mb-4">
						

								<font color="#0cf4f4"> <b>OPEN at 7:00 am to 9:00 pm</b></font><br>
                            <img src="img/content1.jpg"  class="img-fluid mx-auto d-block">
							<h5><span  style="color:#0cf4f4;">Follows Us:</span></h5>
                                <a href="#"><img src="img/fb.jpg" width="56" height="56" alt="ad" class="ad" /></a>
                                <a href="#"><img src="img/inst.jpg" width="56" height="56" alt="ad" class="ad"/></a>
                                <a href="#"><img src="img/twiter.jpg" width="56" height="56" alt="ad" class="ad"/></a>
                                <a href="#"><img src="img/te.jpg" width="56" height="56" alt="ad" class="ad"/></a>
                            <b style="color:#0cf4f4;">No.175,Shwedagon pagoda Road,Lather Yangon</b><br>
							<u style="color:#0cf4f4;">Email:smilebakery@gmail.com</u>
							<i style="color:#0cf4f4;">Tel:09-267733309</i><br>
							<i style="color:#0cf4f4;">Tel:09-267744409</i><br><hr>
							
							
                        
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <footer class="row tm-mt-big">
           
           <div class="d-inline-block tm-bg-black text-white py-4 px-4">
               <div class="icon-bar">
               <a class="active" href="index.php"><i class="fa fa-home"></i></a> 
               <a  class="active" href="register.php"><i class="fas fa-registered"></i></a>
               <a  class="active" href="login.php"><i class="fas fa-sign-in-alt"></i></a>
               <a  class="active" href="products.php"><i class="fab fa-product-hunt"></i></a> 
               <a  class="active" href="order.php"><i class="fas fa-shopping-cart"></i></a>             
              
               
               
           </div>
               <div class="row">

                   <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="1.3s">
                   <h5>Feedbacks </h5>
                   <b>Email:<a style="color:#0cf4f4;">smilebakery@gmail.com</a></b>
                   </div> 

                   <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="1.9s">
                   <h5>Opening Hours</h5>
                   <strong>Monday - Saturday</strong>
                   <p>7:00 AM - 9:00 PM</p>
                   </div>
                   <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="1.6s">
                       <h5>About Us</h5>
                       <p>Our Bakery since 1990 started.Our Chef created wonderful cake & break.
                        Thank You So Much!</p>
                   </div>

                   </div>
                   <p>Created by Phyu Sin Thant</p> 
                        
               </div>                
               
       </footer> 
        </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/moment.min.js"></script>
    <!-- https://momentjs.com/ -->
    <script src="js/utils.js"></script>
    <script src="js/Chart.min.js"></script>
    <!-- http://www.chartjs.org/docs/latest/ -->
    <script src="js/fullcalendar.min.js"></script>
    <!-- https://fullcalendar.io/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script src="js/tooplate-scripts.js"></script>
    <script>
        let ctxLine,
            ctxBar,
            ctxPie,
            optionsLine,
            optionsBar,
            optionsPie,
            configLine,
            configBar,
            configPie,
            lineChart;
        barChart, pieChart;
        // DOM is ready
        $(function () {
            updateChartOptions();
            drawLineChart(); // Line Chart
            drawBarChart(); // Bar Chart
            drawPieChart(); // Pie Chart
            drawCalendar(); // Calendar

            $(window).resize(function () {
                updateChartOptions();
                updateLineChart();
                updateBarChart();
                reloadPage();
            });
        })
    </script>
	 <script> 
	/* Google map
        ------------------------------------------------*/
        var map = '';
        var center;

        function initialize() {
            var mapOptions = {
                zoom: 16,
                center: new google.maps.LatLng(37.769725, -122.462154),
                scrollwheel: false
            };

            map = new google.maps.Map(document.getElementById('google-map'),  mapOptions);

            google.maps.event.addDomListener(map, 'idle', function() {
              calculateCenter();
          });

            google.maps.event.addDomListener(window, 'resize', function() {
              map.setCenter(center);
          });
        }

        function calculateCenter() {
            center = map.getCenter();
        }

        function loadGoogleMap(){
            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDVWt4rJfibfsEDvcuaChUaZRS5NXey1Cs&v=3.exp&sensor=false&' + 'callback=initialize';
            document.body.appendChild(script);
        } 

        $(document).ready(function(){           

            // Google Map
            loadGoogleMap();    

            // Update the current year in copyright
            $('.tm-current-year').text(new Date().getFullYear());        
        });
    </script>
</body>
</html>