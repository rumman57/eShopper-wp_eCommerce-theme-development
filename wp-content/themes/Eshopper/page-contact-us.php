<?php get_header(); ?>



<div class="container-fluid">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Contact <strong>Us</strong></h2>    			    				    				
					<div id="gmap" class="contact-map">
					<?php 
			   if ( function_exists( 'ot_get_option' ) ) {
				  $maps = ot_get_option( 'maps' );
				  $conformtitle = ot_get_option( 'conformtitle' );
				  $socialbook = ot_get_option( 'socialbook' );
				  $socialbooktitle = ot_get_option( 'socialbooktitle' );
				  

				}
				  echo $maps;
	                ?>
					</div>
				</div>			 		
			</div>
			</div>   

	<div id="contact-page" class="container">
    	<div class="bg">

    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    			<h2 class="title text-center"><?php echo $conformtitle; ?></h2>
	    				<div class="status alert alert-success" style="display: none"></div>

	    	<?php echo do_shortcode('[contact-form-7 id="198" title="Contact page form"]')?>


<!--<form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
<div class="form-group col-md-6">
    <input type="text" name="name" class="form-control" placeholder="Name">
</div>
<div class="form-group col-md-6">
    <input type="email" name="email" class="form-control" required="required" placeholder="Email">
</div>
<div class="form-group col-md-12">
    <input type="text" name="subject" class="form-control" required="required" placeholder="Subject">
</div>
<div class="form-group col-md-12">
    <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
</div>                        
<div class="form-group col-md-12">
    <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
</div>
</form>-->


	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
                   <div class="nichesorano">
	    			<?php dynamic_sidebar('contactinfo'); ?>
	    				<!--Contact Info</h2>
	    				<address>
	    					<p>E-Shopper Inc.</p>
							<p>935 W. Webster Ave New Streets Chicago, IL 60614, NY</p>
							<p>Newyork USA</p>
							<p>Mobile: +2346 17 38 93</p>
							<p>Fax: 1-714-252-0026</p>
							<p>Email: info@e-shopper.com</p>
	    				</address>-->
                       </div>

	    				<div class="social-networks">
	    					<h2 class="title text-center"><?php echo $socialbooktitle;?></h2>
							<ul>

               <?php 

               foreach ($socialbook as $key => $value) {
               
                ?>
				<li>
					<a href="<?php echo $value['href']?>"><i class="fa fa-<?php echo $value['name']?>"></i></a>
				</li>
                    <?php } ?>
							</ul>
	    				</div>



	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
	
<?php get_footer() ?>