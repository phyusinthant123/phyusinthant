    <?php
    	include("connection.php");
    	$id=$_GET['id'];
        $new_img=$_POST['p_img'];
    	$p_name=$_POST['p_name'];
    	$price=$_POST['price'];
		$p_img=$_POST['p_img'];
		$exp_date=$_POST['date'];
		
     
    	mysql_query("update products set p_name='$p_name', price='$price',p_img='$p_img',exp_date='$exp_date' where p_id='$id'");
    	header('location:products.php');
    ?>