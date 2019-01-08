<?php /* Template Name: Home Page */

get_header();
$languages = pll_the_languages( array("raw" => 1) ); 
	if(is_date() || is_day()){ 
		get_template_part('parts/date_single_part');
	}else if(is_category()){
		get_template_part('parts/category_single_part');
	}else {
?>
	
	<section class="hero-banner" style="background-image: url('<?php the_field('hero-banner-background_image'); ?>');">
      <div class="wrap">
        <div class="hero-banner-text">
          <h1>Now, <br>for tomorrow</h1>
        </div>
      </div>
    </section>	
    <div class="section page-divider">&nbsp;</div> 
    <section class="gallery">
      <div class="swiper-container swiper-container-horizontal swiper-container-autoheight">
        <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide">
          <i class="icon icon-arrow-left"></i>
        </div>
        <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide">
          <i class="icon icon-arrow-left"></i>
        </div>
        <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-7612px, 0px, 0px); height: 649px;">
			<?php
				get_template_part( 'parts/home_slider');
			?>
		  </div>
        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 4"></span></div>
      <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
    </section>	
    <section class="section top-bg-gray">
      <div class="wrap">
        <div class="section-title">
          <h3><?php if (pll_current_language() == "en"){ echo 'Sectors';}else{echo 'Sektorët';} ?></h3>
          
        </div>

        <ul class="info-list">
			<?php
				get_template_part( 'parts/sector_list');
			?>
        </ul>
        <div class="btn-centered-row">
          <a href="<?php if (pll_current_language() == "en"){echo home_url('/services');}else{echo home_url('/sherbimet');}  ?>" class="btn"><?php if (pll_current_language() == "en"){echo 'See sector list';}else{echo 'Shikoni listën e sektorëve';}?></a>
        </div>
      </div>
    </section>
	                               
    <section class="visual-banner" style="background-image: url('<?php the_field('testimonial_user'); ?>');">
      <div class="wrap">
        <div class="visual-banner-text">
          <h4><?php the_field('user_name'); ?></h4>
          <p><?php the_field('user_saying'); ?></p>
          <!--<a href="#" class="btn style2">Lorem ipsum</a> -->
        </div>
      </div>
    </section>

	<div class="sector-divider">&nbsp;</div>

    <section class="news" style="background: url(/wp-content/themes/bakertilly/img/bg-news.jpg) no-repeat;">
      <div class="wrap">
        <div class="news-area">
          <h4 class="news-title">Newsroom</h4>
          <ul class="news-list">
				<?php get_template_part( 'parts/home_news_list'); ?>
          </ul>
          <a href="<?php if (pll_current_language() == "en"){ echo home_url('/insights-news/');}else{echo home_url('/lajme');}?>" class="btn"><?php if (pll_current_language() == "en"){echo 'See more news';}else{echo 'Shiko lajmet';}?></a>
        </div>
      </div>
    </section>
	
<?php  }get_footer(); ?>

