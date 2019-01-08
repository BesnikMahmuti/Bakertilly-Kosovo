<?php get_header(); 
 $languages = pll_the_languages( array("raw" => 1) );?>
  <!--<div class="wrapper">-->
    

    <main class="main">
      <section class="banner half-height">
        <div class="wrap">
          <h1>Search results for : <?php the_search_query(); ?> </h1>
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
			  
					<?php if(have_posts()) : ?> 
					<?php  while(have_posts()) : the_post(); ?>
            <div class="search-box">
                <a href="<?php the_permalink(); ?>">
				  <?php the_title('<h4>','</h4>'); ?>
                  <?php the_excerpt(); ?>
                </a>
            </div>
            
			<?php endwhile; ?>
			  <?php else : ?>	
				<p><?php if (pll_current_language() == "en"){ echo 'Sorry, no results where found.';}else{echo 'Na vjen keq, asnjë rezultat nuk u gjet.';} ?>
			  </p><?php endif;?>
            <div class="btn-row">
              <!--<a href="http://markup.clerkswell.staging.heathmans.net/search-results.html#" class="btn">Show me more</a>--> 
            </div>
          </div>
       </div>
      </div>
    </main>
   
  <!--</div>-->
<?php get_footer(); ?>