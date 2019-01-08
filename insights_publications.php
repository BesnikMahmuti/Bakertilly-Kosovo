<?php /* Template Name: Insights Publication */

get_header();
$languages = pll_the_languages( array("raw" => 1));	
?>  
    <main role="main" class="main">
      <section class="banner two-column reverse">
        <div class="col">
          <h1><?php if (pll_current_language() == "en") { echo 'Publications';}else{echo 'Publikimet';} ?></h1>
        </div>
        <div class="col img" style="background: url(/wp-content/themes/bakertilly/img/PUblications.jpg) no-repeat;"></div>
      </section>
      <section class="filters-area">
        <div class="wrap">
          <div class="years-filter">
            <div class="years-filter-input">
              <?php get_search_form(); ?>
            </div>
            <div class="years-filter-buttons">
              <span class="mobile-label">Archives:</span>
				 <?php
		wp_get_archives(array('type'=> 'yearly','limit' => 20, 'format' => 'custom', 'before' => '<a class="filter-btn"', 'after' => '</a> ' ) );
   ?>
              <!--<a href="#" class="filter-btn active">2018</a>
              <a href="#" class="filter-btn">2017</a>
              <a href="#" class="filter-btn">2016</a>
              <a href="#" class="filter-btn">2015</a>
              <a href="#" class="filter-btn">older</a>-->
            </div>
          </div>
        </div>
      </section>

  

      <section class="section gray-bg">
        <div class="wrap">
          <div class="news-article-list">
			  	
            <div class="three-col">
				<?php 	
				
				$currentPage = get_query_var('paged');
			  	$args = array(
  				'posts_per_page'   => 6,
				  'cat'   => 3,
					'paged' => $currentPage,
				);
					$query1 = new WP_Query($args);
					while ($query1 -> have_posts()) : $query1 -> the_post();
			  		
				?>
              <div class="news-article">
                <a href="<?php the_permalink(); ?>">
					 <?php
						$img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "full");
						$img = $img[0];	?>
                  <div class="news-article-img" style="background: url(<?php echo $img; ?>) no-repeat;">
                    <div class="overlay"></div>
                  </div>
                  <div class="news-article-info">
                    <div class="holder ddd-truncated"><?php the_excerpt(); ?></div>
                  </div>
                </a>
              </div>
				<?php endwhile; wp_reset_postdata(); ?>
            </div>
			 
			
            <div class="two-col">
					<?php 	
				
				$currentPage1 = get_query_var('paged');
			  	$args1 = array(
  				'posts_per_page'   => 3,
				  'cat'   => 3,
					'paged' => $currentPage1,
				);
					$query2 = new WP_Query($args1);
					while ($query2 -> have_posts()) : $query2 -> the_post();
			  	  if($query2 -> current_post == 4){ ?>
              <div class="news-article large">
                <a href="<?php the_permalink(); ?>">
					<?php
						$img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "full");
						$img = $img[0];	?>
                  <div class="news-article-img" style="background: url(<?php echo $img; ?>) no-repeat;">
                    <div class="overlay"></div>
                  </div>
                  <div class="news-article-info">
                    <div class="holder"><?php the_excerpt(); ?></div>
                  </div>
                </a>
              </div>
				 <?php }else if($query2 -> current_post >=5){ ?>
				<div class="news-article">
                <a href="<?php the_permalink(); ?>">
					<?php
						$img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "full");
						$img = $img[0];	?>
                  <div class="news-article-img" style="background: url(<?php echo $img; ?>) no-repeat;">
                    <div class="overlay"></div>
                  </div>
                  <div class="news-article-info">
                    <div class="holder"><?php the_excerpt(); ?></div>
                  </div>
                </a>
              </div>
				<?php }  endwhile; wp_reset_postdata(); ?>
			  </div>
			
			  <div class="pagination">
				<div><?php if (pll_current_language() == "en") {echo "Showing ".$query1->post_count." of ".$query1->found_posts." results"; }else{echo "Duke shfaqur ".$query1->post_count." nga ".$query1->found_posts." rezultate";}?></div>   
				<div class="pagination-buttons">
					 <?php echo paginate_links(array(
									'total'=>$query1->max_num_pages,
									'add_args'=> false,
									'prev_text' => '<span class="pagination-btn prev"></span>',
									'next_text' => '<span class="pagination-btn next"></span>',
									
				 		));?>
				</div>

			  	</div>
          </div>
        </div>
      </section>

    </main>
<?php get_footer();?>
