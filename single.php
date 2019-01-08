<?php

  get_header();
  if ( have_posts() ) while ( have_posts() ) : the_post();	
  $languages = pll_the_languages( array("raw" => 1) ); 	
  	
 ?>  
    <main role="main" class="main post">
		 <?php
				$img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "full");
				$img = $img[0];	?>
      <?php if ( has_post_thumbnail()) { ?>
	  	<section class="banner" style="background: url(<?php echo $img; ?>);">
        	<div class="wrap">
		  
		  	</div>
      	</section>
	  <?php } ?>
	  <div class="twocolumns">
        <div class="wrap">   
				<div class="content">	
					<?php the_title('<h1>','</h1>')?>
					<?php the_content(); ?>		
					
              		
            	</div>
					
			<!--</div>   -->        
			
          <aside class="sidebar">
            <div class="service-list-holder">
              <div class="open-btn"><span class="open-icon"></span></div>
              <div class="open-close-drop">
                <nav class="service-nav">
                  <ul>
					  <?php 
					  	$currentID = get_the_ID();
					    $categories = get_the_category();
						$category_id = $categories[0]->cat_ID;
							$args = array(
							'cat'   => $category_id,
							'post__not_in' => array($currentID)	
							);
							$query2 = new WP_Query($args);
							while ($query2 -> have_posts()) : $query2 -> the_post();
					  ?>
					  <?php the_title( '<li><a href="' . esc_url( get_permalink()) .
							'" rel="bookmark">', '</a></li>' ); ?>
					<?php endwhile; wp_reset_postdata(); ?>
                  </ul>
                </nav>
                <a href="<?php if (pll_current_language() == "en"){ echo home_url('/contact');}else{echo home_url('/kontakti');} ?>" class="btn contact-btn"><?php if (pll_current_language() == "en"){ echo 'Contact your advisor';}else{echo 'Kontakto këshilltarin tuaj';} ?></a>
              </div>
            </div>
          </aside>
        </div>
	  </div>
      <section class="related-services">
        <div class="wrap">
          <h2>Related <?php 
			  $currentID = get_the_ID();
		 	  $categories = get_the_category();
		      $category_id = $categories[0]->cat_ID;
			  if (pll_current_language() == "en"){ echo esc_html( $categories[0]->name );}else if(pll_current_language() == "al"){echo esc_html( $categories[0]->name );}?></h2>
          <ul class="services-list">
			  <?php get_template_part( 'parts/related_posts'); ?>
          </ul>
        </div>
      </section>
    </main>	
     <?php endwhile; ?>
<?php get_footer(); ?>
