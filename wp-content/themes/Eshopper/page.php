<?php get_header()?>
<div class="container">
 <div class="row">
   <div class="col-lg-12 col-sm-12">
   <?php
      if(have_posts())
 {
 	while (have_posts()) {
 		the_post();
         the_content();
         if(the_post_thumbnail()!=null)
         	the_post_thumbnail();
 	}

 }
 ?>
</div>
</div>
</div>

<?php get_footer()?>