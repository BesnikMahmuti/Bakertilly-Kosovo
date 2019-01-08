<?php 
			$languages = pll_the_languages( array("raw" => 1) ); 
		$args = array(
  				  'posts_per_page'   => 3,
				  'cat'   => 22
				);
		$query1 = new WP_Query($args); 
		while ($query1 -> have_posts()) : $query1 -> the_post();
?>
		<li>
            <div class="info-list-img">
			  <?php the_post_thumbnail('home_sectors_featured_image'); ?>
              <!--<img src="/wp-content/themes/bakertilly/img/img02.jpg" alt="image description">-->
            </div>
            <div class="info-list-text">
              <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do.</p>-->
				<?php the_title('<h3>','</h3>'); ?>
			  <?php  the_excerpt(); ?>	
              <a href="<?php the_permalink(); ?>"><?php if (pll_current_language() == "en"){ echo 'Read more.';}else{ echo 'Lexo më shumë';} ?></a>
            </div>
          </li>
<?php	
	endwhile;
	wp_reset_postdata();
?>