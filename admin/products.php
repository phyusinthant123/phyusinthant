<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="style.css"/>
    <title>Products Page - Dashboard Template</title>
    <!--

    Template 2108 Dashboard

	http://www.tooplate.com/view/2108-dashboard

    -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/tooplate.css">
</head>
<body id="reportsPage">
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
                <div class="col-xl-12 col-lg-12 tm-md-12 tm-sm-12 tm-col">
                    <div class="bg-white tm-block h-400">
                        <div class="row">
                            <div class="col-md-8 col-sm-12">
                                <h2 class="tm-block-title d-inline-block"> In Stocks</h2>

                            </div>
                            <div class="col-md-4 col-sm-12 text-right">
                                <a href="add-product.php" class="btn btn-small btn-primary">Add New Product</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                         
<?php
error_reporting(1);	
include("connection.php");

#$con=mysql_connect("localhost","root","")or die(mysql_error());
#mysql_select_db("foods",$con);
$data="SELECT * FROM products";
$val=mysql_query($data);
$sn =1;

                            echo"<table border='1'class='table table-hover table-striped tm-table-striped-even mt-3'>";
                                echo"<thead>";
                                   echo "<tr class='tm-bg-gray'>
                                        
										<th scope='col'>p_id</th>
                                                                               
										<th scope='col'>Product Name</th>
										<th scope='col'>Price</th>
										<th scope+'col'>Product Image</th>

										<th scope='col' class='text-center'>Menus</th>
                                        <th scope='col'>Expire Date</th>
										<th scope='col'>Description</th>
										<th scope='col' colspan='2' class='text-center'>Active</th>
                                    </tr>";
                                echo"</thead>";
								while(list($p_id,$p_name,$price,$p_img,$p_menus,$exp_date,$desc)=mysql_fetch_array($val))
								{
                                echo"<tbody>";
                                    echo"<tr>";
                                        
										 echo"<td class='id'>".$sn++."</td>";
                                        echo"<td class='tm-product-name'>".$p_name."</td>";
										 echo"<td class='text-center'>".$price."</td>";
                                        echo "<td>"."<img src='image/$p_img' height='100' width='150'>"."</td>";
                                       
									   echo"<td class='text-center'>".$p_menus."</td>";
                                       echo"<td class='text-center'>".$exp_date."</td>";
									   echo"<td class='text-center'>".$desc."</td>";
									   echo"<td>"."<a href='edit-product.php?id=$p_id'>"."<i class='fas fa-edit'> "."</i></a>"."</td>";
                                      
                                        echo"<td>"."<a href='delete.php? id=$p_id & img=$p_img'>"."<i class='fas fa-trash-alt tm-trash-icon'>"."</i><a/>"."</td>";
                                    echo"</tr>";
								
                                echo"</tbody>";
								}
                            echo"</table>";
                        
?>
<p><a href="icons-bar.php"> <i class="fa fa-home"></i> </a></p>


   
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
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
        $(function () {
            $('.tm-product-name').on('click', function () {
                window.location.href = "edit-product.html";
            });
        })
    </script>
</body>

</html>