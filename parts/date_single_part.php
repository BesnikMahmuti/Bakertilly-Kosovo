<?php get_header();
	 $languages = pll_the_languages( array("raw" => 1) );
	 $month=get_the_date('m');
	
?>
    <main class="main">
      <section class="banner half-height">
        <div class="wrap">
          <h1><?php if (pll_current_language() == "en"){echo 'Year: '.date('Y');}else{echo "Viti: ".date('Y');}//get_the_archive_title('',false);?></h1>
        </div>
      </section>

      <section class="filters-area">
        <div class="wrap">
          <div class="search-container">
			  <?php get_search_form(); ?>
          </div>
        </div>
      </section>

      <div class="content">
        <div class="wrap">
          <div class="search-result-list">
			  
					<?php $args1 = array(
							  'monthnum'=>$month,
							);	
						 $the_query = new WP_Query($args1); 
						 while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
            <div class="search-box">
                <a href="<?php the_permalink(); ?>">
				  <?php the_title('<h4>','</h4>'); ?>
                  <?php the_excerpt(); ?>
                </a>
            </div>
            
			<?php endwhile; wp_reset_postdata(); ?>
			  
            <div class="btn-row">
              <!--<a href="http://markup.clerkswell.staging.heathmans.net/search-results.html#" class="btn">Show me more</a>--> 
            </div>
          </div>
       </div>
      </div>
    </main>
   

<?php get_footer(); ?>