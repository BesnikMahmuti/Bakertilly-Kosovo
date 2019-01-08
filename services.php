<?php /* Template Name: Services */

 get_header();
$languages = pll_the_languages( array("raw" => 1) );
?>
	<main role="main" class="main">
      <section class="banner">
        <div class="wrap">
          <h1><?php if (pll_current_language() == "en"){echo 'sector &amp; services';}else{echo 'sektorët &amp; shërbimet';} ?></h1>
          <p><?php if (pll_current_language() == "en"){echo 'Our firm offers many services both for our individual as well as our corporate clients. We demand the highest quality dedicated work from our professionals.
We offer our clients the unique benefits of variety and quality services. Our services are tailored to specific needs of our clients in achieving the best outcome for their business. Whether serving public sector organizations, owner managed businesses, private individuals or listed companies with overseas presence we can offer you a reliable partner';}else{echo ' Firma jonë ofron shërbime për individ dhe klient korporativ. Ne kërkojmë cilësinë më të lartë nga profesionistët tonë. 
Ne ju ofrojmë klientëve tanë përfitime unike nga shumëllojshmëria e shërbimeve cilësore. Shërbimet tona përshtaten me nevojat specifike të klientëve për të arritur rezultatin më të mirë për biznesin e tyre. Qoftë duke i ofruar shërbime organizatave të sektorit publik, bizneseve individuale ose kompanive të listuara me prezencë globale, ne mund të ofrojmë një partner të besueshëm';}?></p>
        </div>
      </section>
      <section class="service-list">
        <div class="wrap">
          <div class="column">
            <div class="img-holder">
              <div class="holder"><img src="/wp-content/themes/bakertilly/img/News_e_re.jpg" alt="image description"></div>
            </div>
            <div class="open-close-holder">
              <h2>Service <span class="open-icon"></span></h2>
              <ul class="list">
                <li>
					<?php
						
						$query = new WP_QUERY('cat=21');
						while($query->have_posts()) : $query->the_post();
					?>	
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					<?php 
						endwhile;
						wp_reset_postdata();
						
					?>
				  </li>                
              </ul>
            </div>
          </div>
          <div class="column">
            <div class="img-holder">
              <div class="holder"><img src="/wp-content/themes/bakertilly/img/Sectors-landing_e_re.jpg" alt="image description"></div>
            </div>
            <div class="open-close-holder">
              <h2>Sector <span class="open-icon"></span></h2>
              <ul class="list">
                <li>
					<?php 
						$query = new WP_QUERY('cat=22');
						while($query->have_posts()) : $query->the_post();
					?>	
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					<?php 
						endwhile;
						wp_reset_postdata();
					?>
				  </li>                 
              </ul>
            </div>
          </div>
        </div>
      </section>
    </main>
    <?php get_footer(); ?>
