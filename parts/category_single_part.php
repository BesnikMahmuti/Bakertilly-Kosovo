<?php get_header();
 	$languages = pll_the_languages( array("raw" => 1) );
	$cats = get_the_category();
?>
    <main class="main">
      <section class="banner half-height">
        <div class="wrap">
          <h1><?php if (pll_current_language() == "en"){echo "Category: ". $cats[0]->name;}else{echo "Kategoria: ". $cats[0]->name;} ?></h1>
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
							  'cat'=> $cats[0]->term_id,
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