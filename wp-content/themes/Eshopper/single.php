<?php get_header();?>
<div class="container">
 <div class="row">
  <div class="col-sm-12">
  <div class="blog-post-area">
    <?php 
              if(have_posts())
              {
              	while (have_posts()) {
              		the_post();
              		?>
              	
					<div class="single-blog-post-area">
						<h3><?php the_title()?></a></h3>
						<div class="post-meta">
							<ul>
								<li><i class="fa fa-user"></i> <?php the_author();?></li>
								<li><i class="fa fa-clock-o"></i><?php the_time('g:i a') ?></li>
								<li><i class="fa fa-calendar"></i> <?php the_time('F j, Y') ?></li>
							</ul>
						</div>
						<?php the_post_thumbnail('fetures_image') ;?>
						<?php the_content();?>
							
				<?php }
             }
             else{
             	 echo "No Posts Found";
             }
             wp_reset_postdata();
       ?>
       </div>

     </div>
    </div>
   </div>
  </div>

<?php get_footer();?>