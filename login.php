<?php
session_start();
include("header.php");
include("connection.php");

if(isset($_POST['btnlogin']))
{
	$email=$_POST['txtemail'];
	$pwd=$_POST['txtpwd'];
	
	$res=mysql_query("select * from admin where username='$email' and pwd='$pwd'");
	if(mysql_num_rows($res)>0)
	{
		echo "<script type='text/javascript'>";
		echo "alert('Admin Login Successfully');";
		echo "window.location.href='admin_manage_food_cat.php';";
		echo "</script>";
	}else{
		
		$res=mysql_query("select * from registration where email_id='$email' and pwd='$pwd'");
		if(mysql_num_rows($res)>0)
		{
			$_SESSION['email']=$email;
			if(isset($_SESSION['cartid']))
			{
				echo "<script type='text/javascript'>";
				echo "alert('Customer Login Successfully');";
				echo "window.location.href='cust_order_form.php';";
				echo "</script>";
			}else{
				echo "<script type='text/javascript'>";
				echo "alert('Customer Login Successfully');";
				echo "window.location.href='food.php';";
				echo "</script>";
			}
		}else{
			echo "<script type='text/javascript'>";
			echo "alert('Check Email ID or Password');";
			echo "</script>";
		}
	}
}
?>


<div class="content">
    <div class="container_12">
      <div class="grid_5">
 <br> <h2><u>Login</u></h2>
      
        <ul class="carousel2">
          <li>
          
              <div class="clear"></div>
			  <br><b>
               <form id="form1" name="form1" method="post" >
        
          <fieldset>
         
             
            <label class="email">
              <input type="text" name="txtemail" Placeholder="E-mail" >
              <br class="clear">
				<br>
            <label class="Password">
              <input type="password" name="txtpwd" Placeholder="******">
              <br class="clear">

             
            <div class="clear"></div>
            <div class="btns"><input type="submit" value="LOGIN" name="btnlogin" class="btn"></a></a>
              <div class="clear"></div>
            </div>
          </fieldset>
        </form>
      </b>
          </li>
         
        </ul>
	   
       </div>
      <div class="grid_5 prefix_2">
	<br><br>
 <center>       <img src="images/ds3.jpg"  height=300 width=300 alt="" class="img_inner">
	</div>
      <div class="clear"></div>
      <div class="grid_12">
       
      </div>
      <div class="clear"></div>
      
      <div class="clear"></div>
      <div class="bottom_block">
        
        
      </div>
      <div class="clear"></div>
    </div>
  </div>
<marquee width="100%" direction="down" behaviour="alternate">
<br><br><br><center><img src="images/is10.jpg" height=300  width=350>
<img src="images/ds5.jpg" height=300  width=370>
<img src="images/d3.jpg" height=300  width=370>
<img src="images/page3_img4.jpg" height=300  width=370>
</center></marquee>
</div>

        
<?php
include("footer.php");
?>