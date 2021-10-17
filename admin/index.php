
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
    session_start();
    error_reporting(1);
    include("connection.php");
    if(isset($_POST['log']))
    { if($_POST['id']=="" || $_POST['pwd']=="")
    { $err="fill your id and password first"; }
    else 
    {$d=mysql_query("select * from user where name='{$_POST['id']}' ");
    $row=mysql_fetch_object($d);
    $fid=$row->name;
    $fpass=$row->pass; 
    if($fid==$_POST['id'] && $fpass==$_POST['pwd'])
    {$_SESSION['sid']=$_POST['id'];
    header('location:home.php'); }
    else { $er=" your password is not correct."; }}
    }
?>
</head>

<body class="bg03">
    <div class="container">
        <div class="row tm-mt-big">
            <div class="col-12 mx-auto tm-login-col">
                <div class="bg-white tm-block">
                    <div class="row">
                        <div class="col-12 text-center">
                        <img  src="img/balloons.jpg" width="100" height="130">
                            <h2 class="tm-block-title mt-3">Login</h2>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <form action="home.php" method="post" class="tm-login-form">
                                <div class="input-group">
                                    <label for="username" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Username</label>
                                    <input name="id" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" id="username"  required>
                                </div>
                                <div class="input-group mt-3">
                                    <label for="password" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Password</label>
                                    <input name="pwd" type="password" class="form-control validate" id="password" required>
                                </div>
                                <div class="input-group mt-3">
                                    <button type="submit" name="log" value="login" class="btn btn-primary d-inline-block mx-auto">Login</button>
                                </div>
                                <div class="input-group mt-3">
                                    <p><em>Just put a character to login.</em></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</body>

</html>