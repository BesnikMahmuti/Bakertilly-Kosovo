<?php		
			$languages = pll_the_languages( array("raw" => 1) ); 
			/*$args = array(
  				'posts_per_page'   => 4,
				'cat'=>'2,21,22,3'
				);*/
			$query1 = new WP_Query('posts_per_page=1&cat=2');
			while ($query1 -> have_posts()) : $query1 -> the_post();
		
		/*if($query1 -> current_post == 0){*/
?>
		<div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="0" style="width: 1903px;">
              <div class="gallery-area reverse">
				  <?php
						$img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "full");
						$img = $img[0];	?>
                <div class="gallery-area-img" style="background: url(<?php echo $img; ?>) no-repeat;"></div>
                <div class="gallery-area-text">
                    <!--<span class="subtitle">Eyebrow goes here</span>-->
                    <h4><?php the_title();?></h4>
                      <p><?php  the_excerpt();?></p>
                    <a href="<?php the_permalink(); ?>"><?php if (pll_current_language() == "en"){ echo 'Read more.';}else{ echo 'Lexo më shumë';} ?></a>
                </div>
              </div>
            </div>

<?php 
	endwhile;
	wp_reset_postdata();
/*	}else{*/
		$query2 = new WP_Query('posts_per_page=1&cat=21');
			while ($query2 -> have_posts()) : $query2 -> the_post();
?>
 <div class="swiper-slide" data-swiper-slide-index="1" style="width: 1903px;">
              <div class="gallery-area">
				  <?php
						$img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "full");
						$img = $img[0];	?>
                <div class="gallery-area-img" style="background: url(<?php echo $img; ?>) no-repeat;"></div>
                <div class="gallery-area-text">
                    <!--<span class="subtitle">Eyebrow goes here</span>-->
                      <h4><?php the_title();?></h4>
                      <p><?php  the_excerpt(); ?></p>
                    <a href="<?php the_permalink();?>"><?php if (pll_current_language() == "en"){ echo 'Read more.';}else{ echo 'Lexo më shumë';} ?></a>
                </div>
              </div>
            </div>
<?php	
	/*}*/
	endwhile;
	wp_reset_postdata();		
?>
<?php $query3 = new WP_Query('posts_per_page=1&cat=22');
			while ($query3 -> have_posts()) : $query3 -> the_post();
?>
 <div class="swiper-slide" data-swiper-slide-index="1" style="width: 1903px;">
              <div class="gallery-area">
				  <?php
						$img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "full");
						$img = $img[0];	?>
                <div class="gallery-area-img" style="background: url(<?php echo $img; ?>) no-repeat;"></div>
                <div class="gallery-area-text">
                    <!--<span class="subtitle">Eyebrow goes here</span>-->
                      <h4><?php the_title();?></h4>
                      <p><?php  the_excerpt(); ?></p>
                    <a href="<?php the_permalink();?>"><?php if (pll_current_language() == "en"){ echo 'Read more.';}else{ echo 'Lexo më shumë';} ?></a>
                </div>
              </div>
            </div>
<?php	
	/*}*/
	endwhile;
	wp_reset_postdata();		
?>
<?php 
$query2 = new WP_Query('posts_per_page=1&cat=3');
			while ($query2 -> have_posts()) : $query2 -> the_post();
?>
 <div class="swiper-slide" data-swiper-slide-index="1" style="width: 1903px;">
              <div class="gallery-area">
				  <?php
						$img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "full");
						$img = $img[0];	?>
                <div class="gallery-area-img" style="background: url(<?php echo $img; ?>) no-repeat;"></div>
                <div class="gallery-area-text">
                    <!--<span class="subtitle">Eyebrow goes here</span>-->
                      <h4><?php the_title();?></h4>
                      <p><?php  the_excerpt(); ?></p>
                    <a href="<?php the_permalink();?>"><?php if (pll_current_language() == "en"){ echo 'Read more.';}else{ echo 'Lexo më shumë';} ?></a>
                </div>
              </div>
            </div>
<?php	
	/*}*/
	endwhile;
	wp_reset_postdata();		
?>