<?php /* Template Name: Insights News */

  get_header();
  $languages = pll_the_languages( array("raw" => 1) ); 

?> 
    <main role="main" class="main">
      <section class="banner two-column">
        <div class="col">
          <h1><?php if (pll_current_language() == "en") { echo 'News';}else{echo 'Lajmet';} ?></h1>
          
        </div>
        <div class="col img" style="background: url(/wp-content/themes/bakertilly/img/hero-img003.jpg) no-repeat;"></div>
      </section>
      <section class="filters-area">
        <div class="wrap">
          <div class="years-filter">
            <div class="years-filter-input">
              <?php get_search_form(); ?>
            </div> 
			  
          </div>
        </div>
      </section>
	<?php 
		$currentPage = get_query_var('paged');
    	/*$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;*/
		$args = array(
				  'post_type'  =>  'post',
  				  'posts_per_page'=> 3,
				  'category_name'   => 'news',
				  'paged' => $currentPage,
				);
			$query1 = new WP_Query($args);
			while ($query1 -> have_posts()) : $query1 -> the_post();
		
		if($query1 -> current_post == 0){ ?>
      <section class="section single-post">
        <div class="wrap">
			<div class="single-post-wrap">
 				<div class="single-post-img">
				  <?php the_post_thumbnail();?>	
				</div>
				<div class="single-post-text">
				  <div class="search-box">
					<span class="date"><?php echo get_the_date('j F, Y'); ?></span>
					<h4>
					  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h4>
					<?php the_excerpt(); ?>
					
				  </div>
				</div>
			</div>
        </div>
      </section>
	 <?php }else{ ?> 
      <section class="section gray-bg search-result">
        <div class="wrap">
			  <div class="search-result-holder">
				<div class="heading-title">
				  <h2><?php 
							echo get_the_time('F', $post->ID); 
						?></h2>
				</div>
				<div class="search-box">
				  <span class="date"><?php echo get_the_date('j F, Y'); ?></span>
					<?php 
						  $posts = get_posts(array('numberposts'==0,'cat'=> 2,)); 
						  $post_date_num = get_the_date('n',$post_id);
						  $post_date_name = get_the_date('F',$post_id,$post_id);?>
					<h4>
					  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h4>
					<?php the_excerpt(); ?>
					
				</div>
			   
			</div>
			
        </div>
		
      </section>
		  <?php }endwhile; wp_reset_postdata(); ?>
		<div class="pagination">
				<!--<div class="pagination-result">Showing 16 of 1,345 results</div>-->
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
    </main>
    <?php  get_footer(); ?>