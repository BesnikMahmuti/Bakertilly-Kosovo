<?php 
			$languages = pll_the_languages( array("raw" => 1) ); 
			$args = array(
  				'posts_per_page'   => 3,
				  'cat'   => 2
				);
			$query1 = new WP_Query($args);
			while ($query1 -> have_posts()) : $query1 -> the_post();
?>
<li>
	<div class="news-box">
		<div class="holder"><?php the_title('<h6>','</h6>');?></div>
		<div class="holder">
			<?php the_excerpt(); ?></div>
		<a href="<?php the_permalink(); ?>" class="toggle"><?php if (pll_current_language() == "en"){ echo 'Read more.';}else{ echo 'Lexo më shumë';} ?></a>
	</div>
</li>
<?php 
	
	endwhile;
	wp_reset_postdata();	
?>