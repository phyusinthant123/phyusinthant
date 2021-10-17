<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Menu - Dashboard Admin Template</title>
    <!--

    Template 2108 Dashboard

	http://www.tooplate.com/view/2108-dashboard

    -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/tooplate.css">
</head>

<body class="bg03">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-xl navbar-light bg-light">
                    <a class="navbar-brand" href="index.php">
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
        <div class="row tm-mt-big">
            <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12">
                <div class="bg-white tm-block">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-block-title d-inline-block">Add Menu</h2>
                        </div>
                    </div>
        <div class="row mt-4 tm-edit-product-row">
            <div class="col-xl-7 col-lg-7 col-md-12">

                <?php
                error_reporting(1);
                include("connection.php");

                    $m_title=$_POST['m_title'];

                    $sql="insert into menus (m_title) values ('$m_title')";
                    mysql_query($sql);
                 
                ?>

                       

				<form method="post" action="add-menu.php" enctype="multipart/form-data">
                    <div class="input-group mb-3">
                        <label for="name" name="m_title"class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Product
                            Name
                        </label>
                        <input id="name" name="m_title" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7">
                    </div>

                    <div class="input-group mb-3">
                        <div class="ml-auto col-xl-8 col-lg-8 col-md-8 col-sm-7 pl-0">
                            <button type="submit" name="insert" class="btn btn-primary">Add
                            </button>
                        </div>
                    </div>
				</form>
            </div> 
      
				
						<div class="col-xl-4 col-lg-4 col-md-12 mx-auto mb-4">
                            <img src="img/beauty.jpg" alt="Profile Image"class="img-fluid mx-auto d-block" >
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










	




