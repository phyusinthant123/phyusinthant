<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accounts Page - Dashboard Template</title>
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
    
<?php
    session_start();
    error_reporting(1);
    $con=mysql_connect("localhost","root","")or die(mysql_error());
    mysql_select_db("foods",$con);
    if(isset($_REQUEST['insert']))
    {
        $reg_id=$_REQUEST['reg_id'];
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $password=$_REQUEST['password'];
        $phone=$_REQUEST['phone'];
        $town=$_REQUEST['town'];
        $address=$_REQUEST['add'];
        $data="INSERT INTO register VALUES('','$name','$email','$password','$phone','$town','$address')";
        if(mysql_query($data))
        {
            header("location:reg_success.php?name=$name & email=$email");
        }
        else
        {
            $error="User already Exists";
        }
        

    }
?>
</head>

<body>
    <div class="bg01" id="home">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-xl navbar-light bg-light">
                        <a class="navbar-brand" href="register.php">
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
			<div class="row tm-mt-big" >
				<div class="col-xl-8 col-lg-10 col-md-12 col-sm-12">
                <div class="d-inline-block tm-bg-black text-white py-4 px-4">
						<div class="row">
							<div class="col-12">
								<h3 class="tm-block-title d-inline-block" style="color:#0cf4f4;">Create an account</h3>
							</div>
						</div> 
                    <div class="row mt-4 tm-edit-product-row">
                        <div class="col-xl-7 col-lg-7 col-md-12">
                            <form action="register.php" class="tm-edit-product-form" method="post" >
							<div class="form-group">
                                    <label for="name" style="color:#0cf4f4;">Name</label>
                                    <input id="name" name="name" type="text" class="form-control validate">
                            </div>
                            <div class="form-group">
                                    <label for="email" style="color:#0cf4f4;">Email</label>
                                    <input id="email" name="email" type="text" class="form-control validate">
                            </div>   
							<div class="form-group">
                                    <label for="password" style="color:#0cf4f4;">Password</label>
                                    <input id="password" name="password" type="text" class="form-control validate">
                            </div>	
							<div class="form-group">
                                    <label for="phone" style="color:#0cf4f4;">Phone</label>
                                    <input id="phone" name="phone" type="text" class="form-control validate">
                            </div>	
							<div class="form-group">
                                    <label for="town" style="color:#0cf4f4;">Town</label>
                                    <input id="town" name="town" type="text" class="form-control validate">
                            </div>	
							<div class="form-group">
                                    <label for="add" style="color:#0cf4f4;">Address</label>
                                    <textarea id="add" name="add" type="text" class="form-control validate"></textarea>
							</div>	
								<div class="row">
                                    <div class="col-12 col-sm-4">
                                        <button type="submit" value="insert" name="insert" class="btn btn-primary"style="color:#0cf4f4;">Sign In
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
                    <font color="#0cf4f4"><b>OPEN : 7:00 am to 9:00 pm</b></font><br>
					
					<img src="img/valitie.jpg"width="300" height="600" >			   
					
					 <h5 style="color:#0cf4f4;"><span>Follows Us:</span></h5>
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
                           Thank You So Much!
                       </p>
                   </div>
                   
                        Created by Phyu Sin Thant</p>
                    
                   </div>
                   
                        
               </div>                
                
       </footer> 
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
</body>

</html>