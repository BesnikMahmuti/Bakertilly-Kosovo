<?php 	  
		 $currentID = get_the_ID();
		 $categories = get_the_category();
		 $category_id = $categories[0]->cat_ID;
		 $related_args = array('posts_per_page' => 9,'orderby' => 'rand','cat'=> $category_id,'post__not_in' => array($currentID));
		 $related_post_query = new WP_Query($related_args);
		  
		  while ( $related_post_query->have_posts() ) : $related_post_query->the_post(); 
?>
<li>
	<a href="<?php the_permalink(); ?>">
		<div class="img-holder">
    	<div class="holder"><?php if ( has_post_thumbnail()){ the_post_thumbnail('related_article');}?></div>
    	</div>
    		<div class="text-holder">
        		<!--<b>Assurance</b>-->
				<?php the_title('<b>','</b>'); ?>
        	</div>
    </a>
</li>
<?php 
	
	endwhile;
	wp_reset_postdata();
?>