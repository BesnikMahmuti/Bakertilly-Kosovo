<?php
	/*Theme Thumbnails size*/
	add_image_size( 'home_sectors_featured_image',384, 369, true);
	add_image_size( 'related_article',381, 332, true);
	
	/*Theme functions*/
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails');
	add_theme_support( 'menus' );	

	function custom_excerpt_length( $length ) {
		return 30;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
		function wpdocs_excerpt_more( $more ) {
    	return ' ...';
	}
	add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

	function widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Home page widget', 'textdomain' ),
        'id'            => 'sidebar-1',        
        'before_title'  => '<div id="cat">',
        'after_title'   => '</div>',
			) );
		}
		add_action( 'widgets_init', 'widgets_init' );

	/* function first_paragraph($content)
	 {
	 if(is_single()) // make paragraph bold for single pages only
	 {
	 return preg_replace('/<p([^>]+)?>/', '<p$1 class="first_para">', $content, 1);
	 }else{
	 return $content;
	 }
	 }
	 add_filter('the_content', 'first_paragraph');*/
	
	//Exclude pages from WordPress Search
	if (!is_admin()) {
	function wpb_search_filter($query) {
	if ($query->is_search) {
	$query->set('post_type', 'post');
	}
	return $query;
	}
	add_filter('pre_get_posts','wpb_search_filter');
	}
	
	add_filter('embed_oembed_html', 'my_embed_oembed_html', 99, 4);
		function my_embed_oembed_html($html, $url, $attr, $post_id) {
		return '
				<div class="video-container">
				<div class="video-container-wrap">' . $html . '</div><div class="description">
                <div class="title">Let\'s grow together</div>
                
              </div></div>';
	}
	
	
?>
