<?php
    $currentPage = get_query_var('paged');
    /*$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;*/
	$args = array(
  				  'posts_per_page'=> 2,
				  'cat'   => 2,
				  'paged' => 2,
				);
			$query1 = new WP_Query($args);
			while ($query1 -> have_posts()) : $query1 -> the_post();
		
		if($query1 -> current_post == 0){
?>
<div class="single-post-wrap">
 <div class="single-post-img">
              <!--<img src="/wp-content/themes/bakertilly/img/single-post.jpg" alt="image description">-->
	 		  <?php the_post_thumbnail(); ?>	
            </div>
            <div class="single-post-text">
              <div class="search-box">
                <span class="date"><?php echo get_the_date('j F, Y'); ?></span>
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
            </div>
</div>
<?php 
	  }else{
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
<?
	}
	endwhile;
    wp_reset_postdata();
?>
