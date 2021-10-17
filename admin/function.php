<?php
	
	$con = mysqli_connect("localhost","root","","foods");

	//getting the brands from brands table.
	function getBrands()
	{
		global $con;
		$get_brand = "SELECT * FROM menus";
		$run_brand = mysqli_query($con,$get_brand);
		while($row_brand = mysqli_fetch_array($run_brand))
		{
			$m_id = $row_brand['m_id'];
			$m_title = $row_brand['m_title'];
			echo "<li>
			<a href='products.php?brand=$m_title'>$m_title</a>
			
			</li>";
		}
	}


	//getting the products from product table.
	function getProduct()
	{
	  if(!isset($_GET['brand']))
	  {
		global $con;
		$get_pro = "SELECT * FROM products order by rand()";
		$run_pro = mysqli_query($con,$get_pro);
		echo"<form method='post'><table border='1' align='center'><tr>";
		while($row_pro = mysqli_fetch_array($run_pro))
		{ 
			$p_id = $row_pro['p_id'];
			$p_name = $row_pro['p_name'];
			
			$price = $row_pro['price'];
			$p_img = $row_pro['p_img'];
			$exp_date=$row_pro['exp_date'];
			
			if($n%3==0)
			 {
				 echo "<tr>";
				 
			 }
			echo 
			"
			 <td width='300' height='200' align='center' >
			
			 <font size='+2' color='0cf4f4'>".$p_name."</font><br>
			 <img src='admin/image/$p_img' width='200' height='200'>
			 <b>Price</b><b style='margin-left:80px;'>".$price."</b>		 		 
			 <b>exp:".$exp_date."<b/>		 
			 <button style='margin-left:40px;'><a href='login.php?buy_p=$p_id'>Buy </a></button>
			
			 </td>";
			 $n++;
					
			
								
		}
		echo "</tr></table>
       </form>";
	  }
	}
	
	function getBrandPro()
	{
	  if(isset($_GET['brand']))
	  {
		global $con;
		$brand_title = $_GET['brand'];
		$get_brand_pro = "SELECT * FROM products WHERE p_menus='$brand_title'";
		$run_brand_pro = mysqli_query($con,$get_brand_pro);
		 echo"<form method='post'><table border='1'><tr>";
		while($row_brand_pro = mysqli_fetch_array($run_brand_pro))
		{ 
			$p_id = $row_brand_pro['p_id'];
			$p_menus = $row_brand_pro['p_menus'];
			$p_name = $row_brand_pro['p_name'];
			$price = $row_brand_pro['price'];
			$p_img = $row_brand_pro['p_img'];
			$exp_date=$row_brand_pro['exp_date'];
			
			if($n%3==0)
			 {
				 echo "<tr>";
				 
			 }
			echo " 
			<td>
			 
			 <td width='300' height='200' align='center'>		
			 <font size='+2' color='0cf4f4'>".$p_name."</font><br>
			 <img src='admin/image/$p_img' width='200' height='200'>
			 <b>Price</b><b style='margin-left:80px;'>".$price."</b>		 		 
			 <b>exp:".$exp_date."<b/>		 
			 <button style='margin-left:40px;'><a href='login.php?buy_p=$p_id'>Buy</a></button>	
			 </td>";
			 $n++;
	
		}
		echo "</tr></table>
       </form>";
	  }
	}
	
	
	
?>