<?php /* Template Name: Laws */

  get_header();
	
 ?>
   <main class="main">   
	   <section class="banner" style="background: url(/wp-content/themes/bakertilly/img/law_banner.jpg);"></section>
       <div class="wrap laws">
          <h1>Laws</h1>
		   
			   	    <?php $query = new WP_QUERY('cat=19');
					while($query->have_posts()) : $query->the_post();	?>	 
		   <div class="law-holder">
		      <h2><?php the_title(); ?></h2>
			  <?php the_content(); ?>
		   </div>					
			  <?php endwhile;
				wp_reset_postdata();
			  ?>			   
		   </div>         
    </main>
	
<?php get_footer(); ?>