<?php get_header();


 if ( function_exists( 'ot_get_option' ) ) {
  $logo = ot_get_option( '404logo' );
  $h11 = ot_get_option( '404h11' );
  $h12 = ot_get_option( '404h12' );
  $desc = ot_get_option( '404desc' );
  $h22 = ot_get_option( '404h2' );
  $mainimage = ot_get_option( '404mainimage' );
}
 ?>



	<div class="container text-center">
		<div class="logo-404">
			<a href="<?php site_url();?>"><img src="<?php echo $logo; ?>" alt="" /></a>
		</div>
		<div class="content-404">
			<img src="<?php echo $mainimage; ?>" class="img-responsive" alt="" />
			<h1><b><?php echo $h11; ?></b> <?php echo $h12; ?></h1>
			<p><?php echo $desc; ?></p>
			<h2><a href="<?php echo site_url();?>"><?php echo $h22; ?></a></h2>
		</div>
	</div>

<?php get_footer();?>