<?php	
		$post_date_num='';
		$post_date_name = '';
		/*$currentPage = get_query_var('paged');*/
		/*$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;*/
		$args2 = array(
  				  'posts_per_page'=> 1,
				  'cat'   => 2,
				  'monthnum'=>$post_date_num,
			 	
				  
				);
			
			$query2 = new WP_Query($args2);
			while ($query2 -> have_posts()) : $query2 -> the_post();
			
			if($query2 -> current_post > 0){
				
?>

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
                <div class="filters-mini-row">
                  <a href="#" class="filter-btn mini">SIO</a>
                  <a href="#" class="filter-btn mini">Pedis</a>
                  <a href="#" class="filter-btn mini">Lorem ipsum</a>
                </div>
            </div>
           <div class="pagination">
            <!--<div class="pagination-result">Showing 16 of 1,345 results</div>-->
            <div class="pagination-buttons">
				 <?php echo paginate_links(array(
								'total'=>$the_query->max_num_pages,
	 							'add_args'=> false,
								'prev_text' => '<a class="pagination-btn prev">prev</a>',
  								'next_text' => '<a class="pagination-btn next">next</a>'
			 )); ?>
            </div>
			 
          </div>
</div>
<?php 
	}
	endwhile;
    wp_reset_postdata();
?>