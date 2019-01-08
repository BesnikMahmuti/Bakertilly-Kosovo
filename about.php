<?php /* Template Name: About Us */

  get_header();

?>
   <main class="main">
      <section class="banner" style="background: url(/wp-content/themes/bakertilly/img/banner-img2.jpg);"></section>
      <div class="content">
        <div class="wrap">
          <div class="news-holder">
            <h4>Great Relationships</h4>
            <div class="news-holder-box">
              <div class="news-holder-img">
                <img src="/wp-content/themes/bakertilly/img/Komplet.jpg" alt="image description">
              </div>
              <div class="news-holder-text">
                <div class="holder ddd-truncated"><p>Meet our team</p></div>
                <a href="#teamposition">See More.</a>
             </div>
            </div>
          </div>

          <div class="content-holder">
			  <?php 
			  	$languages = pll_the_languages( array("raw" => 1) );
				if (pll_current_language() == "en") { ?>
            <h1>About Baker Tilly </h1>
            <p>Baker Tilly is a business consulting firm in Kosovo providing professional services in auditing, accounting, taxation and business consulting.<br/>Baker Tilly was formed in 2001 as BU & Partners and now is one of the leading auditing firms in Kosovo, providing financial and accountancy services, tax and business consultancy to organizations on a national and international basis. Our team consists of experienced professionals, including licensed and senior auditors, tax experts, and a team of supporting professionals with business administration and finance degrees.</p>
            <p>Our commitment to providing high quality services is achieved by the personalized approach we provide to our clients. We use our best professional resources available to provide our clients with timely and affordable professional services.<br/>Baker Tilly is licensed from the Kosovo Council on Financial Reporting and legally operates in Republic of Kosovo.</p>			  
            <div class="columns">
              <div class="col">
				<h2>About Baker Tilly International</h2>
				<p>Baker Tilly International is one of the world's leading networks of independently owned and managed accountancy and business advisory firms united by a commitment to provide exceptional client service.</p>
				  <p>Every day, 33,600 people in 147 locations share experiences and expertise to help privately held businesses and public interest entities meet challenges and proactively respond to opportunities. International capability and global consistency of service are central to the way we work.</p>
                <h3>Globally Minded</h3>
                <p>Experts across a wide range of industry and business sectors, each Baker Tilly International member firm combines high quality services and in-depth local knowledge.</p>
				<p>Our people are more than just accountants. They make it their business to know and understand their clients' long-term ambitions, anticipating and responding to challenges as their clients pursue opportunities.</p>
				<p>125 independent firms come together across four geographic areas. Sharing knowledge and resources, our business approach brings together the power of the global network to deliver exceptional results to clients globally.</p>
				  
              </div>
				
              <div class="col">
                <h3>Our Commitment</h3>
				  <p>All Baker Tilly International member firms aim to be open and transparent businesses and make the following commitments:</p>
                <ul>
                  <li>To lead by example</li>
                  <li>To deliver a quality service with an emphasis on integrity</li>
                  <li>To be open and honest in all communications</li>
                  <li>To act ethically</li>
                  <li>To foster teamwork and collaboration with other member firms</li>
				  <li>To maintain a supportive environment in which their individuals can flourish.</li>
                </ul>
				  <p>The shared values of Baker Tilly International and its member firms define what we stand for and how we do things, forming the basis for a consistent approach to service delivery worldwide.</p>
              </div>
				
            </div>
			  <?php }else if((pll_current_language() == "al")){ ?>
			   <h1>Baker Tilly  - Për ne</h1>
            <p>Baker Tilly është firmë e konsulencës biznesore në Kosovë që ofron shërbime profesionale në auditim, kontabilitet, tatime dhe konsulencë biznesore. <br/>Baker Tilly  është themeluar në vitin 2001 me emri BU & Partners dhe tani është njëra ndër firmat lidere të auditimit në Kosovë dhe ofron shërbime të financiare dhe të kontabilitetit, tatimeve dhe këshilla tjera biznesore për organizata vendore dhe ndërkombëtare. Ekipi ynë përbëhet nga profesionist me përvojë, përfshirë auditorë të licencuar, ekspert tatimesh dhe një ekip mbështetës të profesionistëve me diploma në administrim biznesi dhe financa.</p>
			  <p>Zotimi ynë për të ofruar shërbime të kualitetit të lart arrihet përmes qasjes së personalizuar që i ofrojmë klientëve tanë. Ne përdorim profesionistët tanë më të mirë në dispozicion për të ofruar shërbime profesionale me kosto të përballueshme dhe me kohë.<br/>Baker Tilly është firmë e licencuar nga Këshilli Kosovar për Raportim Financiar dhe operon ligjërisht në Republikën e Kosovës.</p>            
	<div class="columns">		  
		<div class="col">
			<h2>Për Baker Tilly International</h2>
			<p>Baker Tilly International është një nga rrjetet udhëheqëse botërore të ndërmarrjeve të pavarura dhe të menaxhuara të kontabilitetit dhe firmave këshilluese të biznesit, të bashkuara nga një angazhim për të ofruar shërbime të jashtëzakonshme të klientëve.</p>
			<p>Çdo ditë, 33,600 njerëz në 147 vende ndajnë përvoja dhe ekspertizë për të ndihmuar bizneset private dhe subjektet me interes publik të përmbushin sfidat dhe të reagojnë në mënyrë proaktive ndaj mundësive. Aftësia ndërkombëtare dhe konsistenca globale e shërbimit janë thelbësore për mënyrën se si punojmë.</p>
            <h3>Qasja Globale</h3>
            <p>Ekspertë në një gamë të gjerë të sektorëve të industrisë dhe biznesit, secila kompani anëtare e Baker Tilly International kombinon shërbime me cilësi të lartë dhe njohuri të thella lokale.</p>
	    <p>Njerëzit tanë janë më shumë se thjesht kontabilistë. Ata janë të vendosur të njohin dhe kuptojnë ambiciet afatgjata të klientëve të tyre, duke parashikuar dhe duke iu përgjigjur sfidave, përderisa klientët e tyre ndjekin mundësitë.</p>
		  <p>125 firma të pavarura vijnë së bashku në katër zona gjeografike. Duke ndarë njohuri dhe burime, qasja jonë e biznesit bashkon fuqinë e rrjetit global për të dhënë rezultate të jashtëzakonshme për klientët global.</p>
		</div>
		<div class="col">
			 <h3>Angazhimi ynë</h3>
		  <p>Të gjitha firmat anëtare të Baker Tilly International synojnë të jenë biznese të hapura<br> dhe transparente dhe të bëjnë angazhimet e mëposhtme:</p>
		  <ul>
            <li>Të udhëheqim me shembull</li>
            <li>Për të ofruar një shërbim cilësor me theks integritetin</li>
            <li>Të jesh i hapur dhe i sinqertë në të gjitha komunikimet</li>
            <li>Të veprojë në mënyrë etike</li>
            <li>Të përkrahet puna ekipore dhe bashkëpunimi me firmat e tjera anëtare</li>
			<li>Për të ruajtur një mjedis mbështetës në të cilin individët e tyre mund të lulëzojnë.</li>
          </ul>
			<p>Vlerat e përbashkëta të Baker Tilly International dhe firmave të saj anëtare përcaktojnë atë për të cilën ne qëndrojmë dhe si i bëjmë gjërat, duke formuar bazën për një qasje të vazhdueshme në ofrimin e shërbimeve në mbarë botën.</p>
		</div>
   </div>
			  <?php } ?>
          </div>
        </div>
      </div>
    </main>	  
          <section class="section team-section" id="teamposition">
            <div class="wrap">
              <h2><?php if (pll_current_language() == "en") { echo 'Our team at Kosovo office';}else{ echo 'Ekipi ynë në zyrën e Kosovës';}?></h2>
              <ul class="team-section-list">
                <li>
                  <div class="user-info">
                    <div class="user-info-img">
                      <img src="<?php the_field('user_img1'); ?>" alt=""/>
                    </div>
                    <strong class="user-info-name"><?php the_field('user_name1'); ?></strong>
                    <div class="user-info-position">
                      <div class="user-info-row"><?php the_field('user_position1'); ?></div>                      
                    </div>
                  </div>
                </li> 
				  <li>
                  <div class="user-info">
                    <div class="user-info-img">
                      <img src="<?php the_field('user_img2'); ?>" alt=""/>
                    </div>
                    <strong class="user-info-name"><?php the_field('user_name2'); ?></strong>
                    <div class="user-info-position">
                      <div class="user-info-row"><?php the_field('user_position2'); ?></div>                      
                    </div>
                  </div>
                </li> 
				  <li>
                  <div class="user-info">
                    <div class="user-info-img">
                      <img src="<?php the_field('user_img3'); ?>" alt=""/>
                    </div>
                    <strong class="user-info-name"><?php the_field('user_name3'); ?></strong>
                    <div class="user-info-position">
                      <div class="user-info-row"><?php the_field('user_position3'); ?></div>                      
                    </div>
                  </div>
                </li> 
				  <li>
                  <div class="user-info">
                    <div class="user-info-img">
                      <img src="<?php the_field('user_img4'); ?>" alt=""/>
                    </div>
                    <strong class="user-info-name"><?php the_field('user_name4'); ?></strong>
                    <div class="user-info-position">
                      <div class="user-info-row"><?php the_field('user_position4'); ?></div>                      
                    </div>
                  </div>
                </li> 
				  <li>
                  <div class="user-info">
                    <div class="user-info-img">
                      <img src="<?php the_field('user_img5'); ?>" alt=""/>
                    </div>
                    <strong class="user-info-name"><?php the_field('user_name5'); ?></strong>
                    <div class="user-info-position">
                      <div class="user-info-row"><?php the_field('user_position5'); ?></div>                      
                    </div>
                  </div>
                </li> 
				  <li>
                  <div class="user-info">
                    <div class="user-info-img">
                      <img src="<?php the_field('user_img6'); ?>" alt=""/>
                    </div>
                    <strong class="user-info-name"><?php the_field('user_name6'); ?></strong>
                    <div class="user-info-position">
                      <div class="user-info-row"><?php the_field('user_position6'); ?></div>                      
                    </div>
                  </div>
                </li> 
				  <li>
                  <div class="user-info">
                    <div class="user-info-img">
                      <img src="<?php the_field('user_img7'); ?>" alt=""/>
                    </div>
                    <strong class="user-info-name"><?php the_field('user_name7'); ?></strong>
                    <div class="user-info-position">
                      <div class="user-info-row"><?php the_field('user_position7'); ?></div>                      
                    </div>
                  </div>
                </li> 
				  <li>
                  <div class="user-info">
                    <div class="user-info-img">
                      <img src="<?php the_field('user_img8'); ?>" alt=""/>
                    </div>
                    <strong class="user-info-name"><?php the_field('user_name8'); ?></strong>
                    <div class="user-info-position">
                      <div class="user-info-row"><?php the_field('user_position8'); ?></div>                      
                    </div>
                  </div>
                </li> 
				  <li>
                  <div class="user-info">
                    <div class="user-info-img">
                      <img src="<?php the_field('user_img9'); ?>" alt=""/>
                    </div>
                    <strong class="user-info-name"><?php the_field('user_name9'); ?></strong>
                    <div class="user-info-position">
                      <div class="user-info-row"><?php the_field('user_position9'); ?></div>                      
                    </div>
                  </div>
                </li> 
				  <li>
                  <div class="user-info">
                    <div class="user-info-img">
                      <img src="<?php the_field('user_img10'); ?>" alt=""/>
                    </div>
                    <strong class="user-info-name"><?php the_field('user_name10'); ?></strong>
                    <div class="user-info-position">
                      <div class="user-info-row"><?php the_field('user_position10'); ?></div>                      
                    </div>
                  </div>
                </li> 
				  <li>
                  <div class="user-info">
                    <div class="user-info-img">
                      <img src="<?php the_field('user_img11'); ?>" alt=""/>
                    </div>
                    <strong class="user-info-name"><?php the_field('user_name11'); ?></strong>
                    <div class="user-info-position">
                      <div class="user-info-row"><?php the_field('user_position11'); ?></div>                      
                    </div>
                  </div>
                </li> 
				  <li>
                  <div class="user-info">
                    <div class="user-info-img">
                      <img src="<?php the_field('user_img12'); ?>" alt=""/>
                    </div>
                    <strong class="user-info-name"><?php the_field('user_name12'); ?></strong>
                    <div class="user-info-position">
                      <div class="user-info-row"><?php the_field('user_position12'); ?></div>                      
                    </div>
                  </div>
                </li> 
				  <li>
                  <div class="user-info">
                    <div class="user-info-img">
                      <img src="<?php the_field('user_img13'); ?>" alt=""/>
                    </div>
                    <strong class="user-info-name"><?php the_field('user_name13'); ?></strong>
                    <div class="user-info-position">
                      <div class="user-info-row"><?php the_field('user_position13'); ?></div>                      
                    </div>
                  </div>
                </li> 
				  <li>
                  <div class="user-info">
                    <div class="user-info-img">
                      <img src="<?php the_field('user_img14'); ?>" alt=""/>
                    </div>
                    <strong class="user-info-name"><?php the_field('user_name14'); ?></strong>
                    <div class="user-info-position">
                      <div class="user-info-row"><?php the_field('user_position14'); ?></div>                      
                    </div>
                  </div>
                </li> 
				  <li>
                  <div class="user-info">
                    <div class="user-info-img">
                      <img src="<?php the_field('user_img15'); ?>" alt=""/>
                    </div>
                    <strong class="user-info-name"><?php the_field('user_name15'); ?></strong>
                    <div class="user-info-position">
                      <div class="user-info-row"><?php the_field('user_position15'); ?></div>                      
                    </div>
                  </div>
                </li> 
              </ul>
            </div>
          </section>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		$('.news-holder-text a[href^="#"]').click(function() {
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
				return false;
				e.preventDefault();
			});
	 });
</script>
<?php get_footer(); ?>
