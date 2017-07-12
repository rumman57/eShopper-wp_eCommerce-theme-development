<!DOCTYPE html>
<html lang="<?php echo language_attributes();?>">
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <!--<title>Home | E-Shopper</title>-->      
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri();?>/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri();?>/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri();?>/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri();?>/images/ico/apple-touch-icon-57-precomposed.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
   <?php wp_head();?>
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">


                 <?php
            if ( function_exists( 'ot_get_option' ) ) {
					  $headertopcontact = ot_get_option( 'hcontactnumbr' );
					  $headertopemail = ot_get_option( 'hemail' );
					  $headerlogoimg = ot_get_option( 'hlogoimg' );
					  $headerlogotext = ot_get_option( 'hlogotxt' );
					  $hsociallinks = ot_get_option( 'hsociallinks' );
				}
                 ?>



                      <!--This have to changable(Complete) -->

						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> <?php 
								echo $headertopcontact;?></a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> <?php 
								echo $headertopemail;?></a></li>
							</ul>
						</div>









					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">






						  <!--This have to changable(complete) -->
			   <?php 
			    foreach ($hsociallinks as $key => $value) {
			     ?>

					<ul class="nav navbar-nav">
						<li><a href="<?php echo $value['href'];?>"><i class="fa fa-<?php echo $value['name'];?>"></i></a></li>
					</ul>

                <?php } ?>




						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">


                           <!--This have to changable(complete)  -->
                 <?php 

                 if($headerlogoimg=="")
                 	echo '<a href="'.site_url().'">'.$headerlogotext.'</a>';
                 else
                 	echo '<a href="'.site_url().'"><img src="'.$headerlogoimg.'"></a>';
                 ?>

	
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">


                          <!--This have to changable(Complete)) -->
      <?php
		  $defaults = array(
				'theme_location'  => 'header_middle_menu',		
				'menu_class'      => 'nav navbar-nav',			
		);
		   wp_nav_menu( $defaults ); 
		?>
	<!--<ul class="nav navbar-nav">
		<li><a href="#"><i class="fa fa-user"></i> Account</a></li>
		<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
		<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
		<li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
		<li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
	</ul>-->





						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">



                  <!--This have to changable (complete)-->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">

               <?php
		     $defaults = array(
				'theme_location'  => 'main_menu',		
				'menu_class'      => 'nav navbar-nav collapse navbar-collapse dropdown',
				'fallback_cb'     => 'eshopper_fallback_menu',
		);

   function eshopper_fallback_menu(){
			 echo '<div class="mainmenu pull-left">';
			  echo '<ul class="nav navbar-nav collapse navbar-collapse">';
			  if('page' != get_option('show_on_front'))   
			  {
			    echo '<li><a href="'.site_url().'/">Home</a></li>';
			  }
			  wp_list_pages('title_li=');  // Ei function ta fall back cv er jonno
			  echo "</ul>";
			  echo "</div>";
			}	
		   wp_nav_menu( $defaults ); 
		?>

							<!--<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Products</a></li>
										<li><a href="product-details.html">Product Details</a></li> 
										<li><a href="checkout.html">Checkout</a></li> 
										<li><a href="cart.html">Cart</a></li> 
										<li><a href="login.html">Login</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li> 
								<li><a href="404.html">404</a></li>
								<li><a href="contact-us.html">Contact</a></li>
							</ul>-->



						</div>










					</div>
					<div class="col-sm-3">

                    <!--This have to changable (Completed)-->

						<?php if(!dynamic_sidebar('hsearch')) : ?>

						 <h3> Welcome Visitors </h3>
						<?php endif ?>
							
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->