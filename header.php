<?php
//session_start();
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Online Food Corner</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/slider.css">

<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/sForm.js"></script>
<script src="js/jquery.carouFredSel-6.1.0-packed.js"></script>
<script src="js/tms-0.4.1.js"></script>
<script>
$(window).load(function () {
    $('.slider')._TMS({
        show: 0,
        pauseOnHover: false,
        prevBu: '.prev',
        nextBu: '.next',
        playBu: false,
        duration: 800,
        preset: 'fade',
        pagination: true, //'.pagination',true,'<ul></ul>'
        pagNums: false,
        slideshow: 8000,
        numStatus: false,
        banners: false,
        waitBannerAnimation: false,
        progressBar: false
    })
});
$(window).load(function () {
    $('.carousel1').carouFredSel({
        auto: false,
        prev: '.prev',
        next: '.next',
        width: 960,
        items: {
            visible: {
                min: 1,
                max: 4
            },
            height: 'auto',
            width: 240,
        },
        responsive: false,
        scroll: 1,
        mousewheel: false,
        swipe: {
            onMouse: false,
            onTouch: false
        }
    });
});
</script>
<script src="js/jquery.prettyPhoto.js"></script>
<script>
$(document).ready(function () {
    $("a[data-gal^='prettyPhoto']").prettyPhoto({
        theme: 'facebook'
    });
});
</script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body>
<div class="main">
  <header>
    <div class="container_12">
      <div class="grid_12">
        <h1><a href="home.php"><br><img src="images/j.png" width=600 alt=""></a></h1>
        <div class="menu_block">
          <nav>
            <ul class="sf-menu">
              <li class="current"><a href="home.php">Home</a></li>
              <li><a href="about.php">About Us</a> </li>
			  <li class="with_ul"><a href="food.php">Food Dishes</a>
                <ul>
					<?php
							$qur=mysql_query("select * from food_category");
							while($q=mysql_fetch_row($qur))
							{
							
							?>
								<li><a href="food.php?cid=<?php echo $q[0]; ?>"><?php echo $q[1]; ?></a></li>		
							<?php
							}
							?>
                  
				  
                  
                </ul>
              </li>
			  <?php
				if(isset($_SESSION['cartid']))
				{
			  ?>
			  <li><a href="cart.php">Cart</a></li>
			  <?php
				}
			  ?>
              <li><a href="regis.php">Registration</a></li>
              <li><a href="login.php">Login</a></li>
              
              <li><a href="contact.php">Contact Us</a></li>
            </ul>
          </nav>
          <div class="clear"></div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </header>