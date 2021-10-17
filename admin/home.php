<?php
session_start();
?>
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
include("function.php");

?>
</head>

<body id="reportsPage">
    <div class="" id="home">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-xl navbar-light bg-light">
                        <a class="navbar-brand" href="#">
                        <img  src="img/balloons.jpg" width="100" height="130">
                            <h1 class="tm-site-title mb-0" >SMILE BAKERY</h1>
					
                        </a>
                        <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item">
                                    <a class="nav-link active" href="home.php">HOME
                                        <span class="sr-only">(current)</span>
                                    </a>
                                </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="products.php">PRODUTS</a>
                                </li>
								

                                
								<li class="nav-item">
                                    <a class="nav-link" href="menu.php">MENUS</a>
                                </li>
								

                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="view_orders.php">ORDERS</a>
                                </li>

                             
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="feedbacks.php">FEEDBACKS</a>
                                </li>
                            </ul>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link d-flex" href="log 
									out.php">
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
            
            <div class="row tm-content-row tm-mt-big">
                        
                   
                <div class="tm-col tm-col-big">
                    <div class="bg-white tm-block h-100">
                        <h2 class="tm-block-title">Profit</h2>
                        <canvas id="lineChart"></canvas>
                    </div>
                </div>
                <div class="tm-col tm-col-big">
                    <div class="bg-white tm-block h-100">
                        <h2 class="tm-block-title">Selling Rate</h2>
                        <canvas id="barChart"></canvas>
                    </div>
                </div>
                <div class="tm-col tm-col-small">
                    <div class="bg-white tm-block h-100">
                        <canvas id="pieChart" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
			  			
       <div class="clear"></div>
               
                

                <div class="tm-col tm-col-big" >
                    <div class="bg-white tm-block h-100">
                        <div class="row">
                            <div class="col-8">
                                <h2 class="tm-block-title d-inline-block">Main Menus</h2>

                            </div>
                            <div class="col-4 text-right">
                                <a href="products.php" class="tm-link-black">View All</a>
                            </div>
                        </div>
                        <ol class="tm-list-group tm-list-group-alternate-color tm-list-group-pad-big">
                           
                              <?php getBrands(); ?>
                       
                        </ol>
                    </div>
                </div>
                <div class="tm-col tm-col-big">
                    <div class="bg-white tm-block h-100">
                        <h2 class="tm-block-title">Calendar</h2>
                        <div id="calendar"></div>
                        <div class="row mt-4">
                            <div class="col-12 text-right">
                                <a href="todo.php" class="tm-link-black">View Schedules</a>
                            </div>
                        </div>

                    </div>
                </div>
            <div class="tm-col tm-col-small">
                   
                <div class="bg-white tm-block h-100">
                        <h2 class="tm-block-title">Future Plan</h2>
                        <div><h5><a href='todo.php?'>Click Me!</a></h5></div>
                        
                            <img src="img/todo.jpg" alt="Image"width="200" height="350">
                       
                        <div class="row mt-4">
                            <div class="col-12 text-right">
                                <a href="todo.php" class="tm-link-black">View ToDo List</a>
                            </div>
                        </div>
                               
</div>
                </div>
            </div>

                
            </div>
            <footer class="row tm-mt-big">
           
            <div class="d-inline-block tm-bg-black text-white py-4 px-4">
                <div class="icon-bar">
                <a class="active" href="home.php"><i class="fa fa-home"></i></a> 
                <a  class="active" href="products.php"><i class="fab fa-product-hunt"></i></a>             
                <a  class="active" href="menu.php"><i class="fas fa-bars"></i></a>
                <a  class="active" href="todo.php"><i class="far fa-sticky-note"></i></a>
                <a class="active" href="feedbacks.php"><i class="fa fa-envelope"></i></a>  
            </div>
                <div class="row">

                    <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="1.3s">
                    <h5>Feedbacks </h5>
                    <b>Email:<a style="color:#3760e8;">smilebakery@gmail.com</a></b>
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