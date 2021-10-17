     
		     
		  <?php
				error_reporting(1);
	
				$con=mysql_connect("localhost","root","")or die(mysql_error());
				mysql_select_db("foods",$con);
	
				$del = "DELETE FROM products WHERE p_id='{$_GET['id']}'";
				$result = mysql_query($del);
				unlink("image/".$_GET['p_img']);
				rmdir("image/".$_GET['p_img']);
				echo "<script>alert('Product has been deleted successfully!')</script>";
				echo "<script>window.open('products.php','_self')</script>";
		  ?>
		
        