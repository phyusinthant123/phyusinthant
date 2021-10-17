
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page - Dashboard Admin Template</title>
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
	error_reporting(1);
	include("connection.php");
	
	$p_id = $_REQUEST['buy_p'];
	
	if(isset($_REQUEST['login']))
	{
		
		$email = $_REQUEST['email'];
		$pass = $_REQUEST['pass'];
		$query = mysql_query("SELECT email,password FROM register WHERE email='$email'");
		$arr = mysql_fetch_array($query);
		if(($arr['email']==$email) && ($arr['password']==$pass))
		{
			echo "<script>location.href='order.php?buy_p=$p_id'</script>";
		
		}
		else
		{
			$er="UserID or Password do not match.Try again.";
		}
	}
	
?>

</head>

<body class="bg03">
    <div class="container">
        <div class="row tm-mt-big">
            <div class="col-12 mx-auto tm-login-col">
                <div class="d-inline-block tm-bg-black text-white py-4 px-4">
                    <div class="row">
                        <div class="col-12 text-center">
                        <img  src="img/balloons.jpg" width="100" height="130">
                            <h2 class="tm-block-title mt-3">Login</h2>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
						
                            <p>Welcome our bakery.If you want buy,you need to register below.Then, please log in with your member account.</p>
							<center><i class="fas fa-arrow-alt-circle-right"></i></i><button><a href="register.php">Register</a></button><i class="fas fa-arrow-circle-left"></i></center>
			<form method="post">
				<table border="0" cellpadding="15px" style="font-size:16px; font-weight:bold;" align="center">
					<tr><td colspan="2"><?php echo "<font color='red'>$er</font>";?></td></tr>
					<tr>
						<td>Email</td>
						<td><input type="text" name="email"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="pass"></td>
					</tr>
					
					<tr>
						<td colspan="2" align="center"><input type="submit" name="login" value="Log In"> <br><br>
													   
						</td>
					</tr>
				</table>
			</form>
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
</body>

</html>