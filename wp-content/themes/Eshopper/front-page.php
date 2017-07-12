<?php get_header();?>



 <section id="slider"><!--slider-->
		
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
		<div id="slider-carousel" class="carousel slide" data-ride="carousel">
           <div class="carousel-inner">

          <?php
            $obj = new WP_Query(array(
            'post_type' => 'homepageslider',
            'posts_per_page' => -1,
            'order' => 'ASC'

            ));
            if($obj->have_posts())
            {
            	$i = 0;
            	while ($obj->have_posts()) {
            		$obj->the_post();
                   $i++;
                $h1withcolor = get_post_meta(get_the_ID(),'_rumman_h1colorpart',true);
                $h1second = get_post_meta(get_the_ID(),'_rumman_h1secondpart',true);
                $h2part = get_post_meta(get_the_ID(),'_rumman_h2format',true);
                $descpart = get_post_meta(get_the_ID(),'_rumman_descpart',true);
                $bttntitlepart = get_post_meta(get_the_ID(),'_rumman_bttntitlepart',true);           
             ?>
          

         	<div class="item <?php if($i==1) echo 'active'?>">
            	<div class="col-sm-6 ">

				<h1><span><?php echo $h1withcolor; ?></span><?php echo $h1second ?></h1>
					<h2><?php echo $h2part;?></h2>
					<p><?php echo $descpart ?></p>
					<button type="button" class="btn btn-default get"><?php echo $bttntitlepart ?></button>
				</div>
				<div class="col-sm-6 ">
					<?php the_post_thumbnail();?>
					<img src="<?php echo get_template_directory_uri();?>/images/home/pricing.png"  class="pricing" alt="" />
				</div>
			</div>


         <?php
          
           }
       }
       else{
       	echo "No Slider Here";
       }
      wp_reset_postdata();
         ?>
                      
          </div>

            <!-- Indicators ------------------- -->

                        <ol class="carousel-indicators">
                        <?php
                       for($j=0;$j<$i;$j++)
                       {
                       	?>
							<li data-target="#slider-carousel" data-slide-to="<?php echo $j;?>" class="<?php if($j==0)echo 'active'?>"></li>
					 <?php }
                     ?>
						</ol>
		  <!-- Controlers ------------------- -->

						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
              </div>
			</div>
		  </div>
		</div>	
		
 </section><!--/slider-->

	<section>
		<div class="container">
			<div class="row">



				<div class="col-sm-3">
					<div class="left-sidebar">
                     <?php if(!dynamic_sidebar('homesidebar')) : ?>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Sportswear
										</a>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Nike </a></li>
											<li><a href="#">Under Armour </a></li>
											<li><a href="#">Adidas </a></li>
											<li><a href="#">Puma</a></li>
											<li><a href="#">ASICS </a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Mens
										</a>
									</h4>
								</div>
								<div id="mens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Fendi</a></li>
											<li><a href="#">Guess</a></li>
											<li><a href="#">Valentino</a></li>
											<li><a href="#">Dior</a></li>
											<li><a href="#">Versace</a></li>
											<li><a href="#">Armani</a></li>
											<li><a href="#">Prada</a></li>
											<li><a href="#">Dolce and Gabbana</a></li>
											<li><a href="#">Chanel</a></li>
											<li><a href="#">Gucci</a></li>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#womens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Womens
										</a>
									</h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Fendi</a></li>
											<li><a href="#">Guess</a></li>
											<li><a href="#">Valentino</a></li>
											<li><a href="#">Dior</a></li>
											<li><a href="#">Versace</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Kids</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Fashion</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Households</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Interiors</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Clothing</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Bags</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#">Shoes</a></h4>
								</div>
							</div>
						</div><!--/category-products-->



					
						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
									<li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>
									<li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>
									<li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>
									<li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>
									<li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>
									<li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->



						
						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div><!--/price-range-->

					<?php endif ?>
			<div class="accordian">
			    <?php echo do_shortcode('[accordions id="81"]'); ?>
			</div>


			  <?php
            if ( function_exists( 'ot_get_option' ) ) {
					  $sidebarimg1 = ot_get_option( 'homepagesidebarfirst' );
					  $sidebarimg2 = ot_get_option( 'homepagesidebarsecond' );
					  $sidebarimg3 = ot_get_option( 'homepagesidebarthird' );
				}
                 ?>
						
			<div class="shipping text-center"><!--shipping-->
			<?php
				echo '<a href="'.site_url().'"><img src="'.$sidebarimg1.'"></a>';
				echo '<a href="'.site_url().'"><img src="'.$sidebarimg2.'"></a>';
				echo '<a href="'.site_url().'"><img src="'.$sidebarimg3.'"></a>';
			 ?>
			</div><!--/shipping-->
                   
						
					
					</div>
				</div>
				
		 <div class="col-sm-9 padding-right">
			 <div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
				<div class="col-sm-12">
					<div class="product-image-wrapper">
               

               <?php
               
               echo do_shortcode('[featured_products per_page="12" columns="4" orderby="date" order="desc"]');
                   

               ?>

								
							</div>
						</div>
						
					</div><!--features_items-->
					
					<!--<div class="category-tab"><!--category-tab-->
						<div class="col-sm-12">

				
		<div id="filters" class="button-group">  
	  <button class="button is-checked" data-filter="*">All</button>
	  <button class="button" data-filter=".fasion">Fasion</button>
	  <button class="button" data-filter=".kids">Kids</button>
	  <button class="button" data-filter=".bags">Bags</button>
	   </div>
	   
							<!--<ul class="nav nav-tabs">
								<li class="active"><a href="#tshirt" data-toggle="tab">T-Shirt</a></li>
								<li><a href="#blazers" data-toggle="tab">Blazers</a></li>
								<li><a href="#sunglass" data-toggle="tab">Sunglass</a></li>
								<li><a href="#kids" data-toggle="tab">Kids</a></li>
								<li><a href="#poloshirt" data-toggle="tab">Polo shirt</a></li>
							</ul>-->
						</div>
						<div class="tab-content">

         <div class="grid">
 
 <div class="element-item bags" >
    
<?php
 echo do_shortcode('[product_category category="bags"]');
?>
  </div>
  <div class="element-item kids" >
    
<?php
 echo do_shortcode('[product_category category="kids"]');
?>
  </div>
   <div class="element-item fasion" >
    
<?php
 echo do_shortcode('[product_category category="fasion"]');
?>
  </div>
  </div><!-- grid-->
						
						</div><!-- tab-content-->
					<!--</div><!--/category-tab-->				
				</div>
			</div>
		</div>
	</section>
	
<?php get_footer()?>	