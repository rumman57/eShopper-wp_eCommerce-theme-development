<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">

<?php

   if ( function_exists( 'ot_get_option' ) ) {

		  $companyinfot1 = ot_get_option( 'ftopcompinfot1' );
		  $companyinfot2 = ot_get_option( 'ftopcompinfot2' );
		  $companyinfotdesc = ot_get_option( 'ftopcompinfodesc' );

		  $galimg1 = ot_get_option( 'gimg1' );
		  $galimgdesc1 = ot_get_option( 'gimgdesc1' );
		  $galimgdate1 = ot_get_option( 'gimgdate1' );

		  $galimg2 = ot_get_option( 'gimg2' );
		  $galimgdesc2 = ot_get_option( 'gimgdesc2' );
		  $galimgdate2 = ot_get_option( 'gimgdate2' );

		  $galimg3 = ot_get_option( 'gimg3' );
		  $galimgdesc3 = ot_get_option( 'gimgdesc3' );
		  $galimgdate3 = ot_get_option( 'gimgdate3' );

		  $galimg4 = ot_get_option( 'gimg4' );
		  $galimgdesc4 = ot_get_option( 'gimgdesc4' );
		  $galimgdate4 = ot_get_option( 'gimgdate4' );

		  $ftadderssimg = ot_get_option( 'ftadderssimg' );
		  $ftadderssimgdesc = ot_get_option( 'ftadderssimgdesc' );

		  $fcopywrite = ot_get_option( 'fcopywrite' );
	}








?>





					    <!-- have to dynamic-->
						<div class="companyinfo">
							<h2><span><?php echo $companyinfot1;  ?></span><?php echo $companyinfot2;  ?></h2>
							<p><?php echo $companyinfotdesc;  ?></p>
						</div>




					</div>
					<div class="col-sm-7">


					<!-- have to dynamic-->
					
						<div class="col-sm-3">
							<div class="video-gallery text-center">
							<img src="<?php echo $galimg1;?>">
							<p><?php echo $galimgdesc1;  ?></p>
							<h2><?php echo $galimgdate1;  ?></h2>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="video-gallery text-center">
						<img src="<?php echo $galimg2;?>">  
								<p><?php echo $galimgdesc2;?></p>
								<h2><?php echo $galimgdate2;?></h2>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="video-gallery text-center">
						<img src="<?php echo $galimg3;?>">  
								<p><?php echo $galimgdesc3;?></p>
								<h2><?php echo $galimgdate3;?></h2>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="video-gallery text-center">
						<img src="<?php echo $galimg4;?>"> 
								<p><?php echo $galimgdesc4;?></p>
								<h2><?php echo $galimgdate4;?></h2>
							</div>
						</div>
 

						
						
					</div>
					<div class="col-sm-3">



					<!-- have to dynamic-->
						<div class="address">
							<img src="<?php echo $ftadderssimg;?>"> 
							<p><?php echo $ftadderssimgdesc;?></p>
						</div>



					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">


					<!-- have to dynamic-->
						
						<?php if(!dynamic_sidebar('ftsidbar1')) : ?>
						<?php endif ?>
					</div>
					<div class="col-sm-2">



					<!-- have to dynamic-->
						<?php if(!dynamic_sidebar('ftsidbar2')) : ?>
						<?php endif ?>




					</div>
					<div class="col-sm-2">


					<!-- have to dynamic-->
						<?php if(!dynamic_sidebar('ftsidbar3')) : ?>
						<?php endif ?>



					</div>
					<div class="col-sm-2">


					<!-- have to dynamic-->
					<?php if(!dynamic_sidebar('ftsidbar4')) : ?>
						<?php endif ?>



					</div>
					<div class="col-sm-3 col-sm-offset-1">


						<!-- have to dynamic-->
						<?php if(!dynamic_sidebar('ftsidbar5')) : ?>
						<?php endif ?>

						<div class="ftp"> 
						<p>Get the most recent updates from <br />our site and be updated your self...</p>
						</div>




					</div>					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">


              <!-- have to dynamic-->
				<div class="row">
					<p class="pull-left"><?php echo $fcopywrite;?></p>
				</div>




			</div>
		</div>
		
	</footer><!--/Footer-->
	
<?php wp_footer();?>
  
    <!--<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>-->
</body>
</html>