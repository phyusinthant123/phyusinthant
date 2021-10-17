
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
	
	include("connection.php");
	
	if($_REQUEST['log']=='out')
	{
		session_destroy();
		header("location:index.php");
	}
?>
</head>
<div class="row tm-content-row tm-mt-big">
 
		  
		  
		  
		  <div class="tm-col tm-col-big">
		  <div class="bg-white tm-block h-100">
			 <h4>Thank You for shooping with us! </h4>
			 <p><font color="#a84141"><i>We are precious your advice!</i></font></p><br/>
			  <p>Thank you  <?php echo "<font size='4' color='blue'>".$_REQUEST['name']."</font>";?></p><br/>
			  <p>Please come again.</p><br/>			
			 <img src="img/bake.jpg" alt="Profile Image"width="300" height="300" class="img-fluid mx-auto d-block">
			<p><a href="?log=out">Go back</a></p>
			</div>
			</div>
			<div class="tm-col tm-col-big">
                    <div class="bg-white tm-block h-100">
					<h5>Healthy Food & Healthy Life</h5>
					<b style="margin-left:300px;">For You !</b><br>
					
                       <img src="img/thank.jpg" alt="Profile Image" class="img-fluid mx-auto d-block">
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
                   <b>Email:<a style="color:#04AA6D;">smilebakery@gmail.com</a></b>
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
</body>
</html>
