<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="style.css" rel="stylesheet" type="text/css" />
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
<style>
	.mainbar div{float:left;}
</style>
<?php

error_reporting(1);
include("admin/function.php");

?>

</head>

<body id="bg02">
    <div class="" id="products.php">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-xl navbar-light bg-light">
                        <a class="navbar-brand" href="products.php">
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
            <div class="row tm-mt-small ">
                
                   
    
        <div >
           
            <div class="mainbar">
                <div class="d-inline-block tm-bg-black text-white py-4 px-4"> 
                       <h4 style="color:#0cf4f4"; align="center">Products of our bakery</h4>
		
							<?php getProduct(); ?>
							<?php getBrandPro(); ?>
				</div>
            </div>           
        </div>
        
  
     
	<div class="tm-col tm-col-small" >
	
   
			<div class="bg-white tm-block h-30" >
			
                          
                           
				<font size="+2" color="#3760e8"><span>Today Menu</span></font><hr>
				
					<ol class="tm-list-group tm-list-group-alternate-color tm-list-group-pad-big">
                           
                              <?php getBrands(); ?>
                          
					
                    </ol>
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