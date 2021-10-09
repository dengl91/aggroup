<?php
/**
 * Alphagreen functions and definitions
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package alphagreen
 * @since 1.1.0
 */

add_theme_support( 'title-tag' );

register_nav_menus ( array(
	'top'    => 'top',
	'bottom' => 'bottom'
));

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 250, 150 );
add_image_size( 'big-thumb', 400, 400, true );
add_image_size( 'cat-thumb', 600, 300, true );

register_sidebar( array(
	'name' 		    => 'sidebar', 
	'id'   		    => 'sidebar', 
	'description'   => 'Simple sidebar', 
	'before_widget' => '<div id="%1$s" class="widget %2$s">', 
	'before_title'  => '<span class="widgettitle">'
));

if ( !class_exists( 'clean_comments_constructor' ) ) { 
	class clean_comments_constructor extends Walker_Comment { 
		public function start_lvl( &$output, $depth = 0, $args = array()) { 
			$output .= '<ul class="children">' . "\n";
		}
		public function end_lvl( &$output, $depth = 0, $args = array()) { 
			$output .= "</ul><!-- .children -->\n";
		}
	    protected function comment( $comment, $depth, $args ) { 
	    	$classes = implode(' ', get_comment_class()).($comment->comment_author_email == get_the_author_meta('email') ? ' author-comment' : '');
	        echo '<li id="comment-'.get_comment_ID().'" class="'.$classes.' media">'."\n";
	    	echo '<div class="media-left">'.get_avatar($comment, 64, '', get_comment_author(), array('class' => 'media-object'))."</div>\n";
	    	echo '<div class="media-body">';
	    	echo '<span class="meta media-heading">Author: '.get_comment_author()."\n";
	    	
	    	echo ' '.get_comment_author_url();
	    	echo ' Добавлено '.get_comment_date('F j, Y в H:i')."\n";
	    	if ( '0' == $comment->comment_approved ) echo '<br><em class="comment-awaiting-moderation">Your comment will be published soon.</em>'."\n";
	    	echo "</span>";
	        comment_text()."\n";
	        $reply_link_args = array( 
	        	'depth' => $depth, 
	        	'reply_text' => 'Answer', 
				'login_text' => 'Login required' 
	        );
	        echo get_comment_reply_link(array_merge($args, $reply_link_args));
	        echo '</div>'."\n";
	    }
	    public function end_el( &$output, $comment, $depth = 0, $args = array() ) { 
			$output .= "</li><!-- #comment-## -->\n";
		}
	}
}

if ( !function_exists( 'pagination' ) ) { 
	function pagination() { 
		global $wp_query;
		$big = 9999;
		$links = paginate_links( array(
			'base'         => str_replace($big,'%#%',esc_url(get_pagenum_link($big))),
			'format'       => '?paged=%#%',
			'current'      => max(1, get_query_var('paged')),
			'type'         => 'array',
			'prev_text'    => 'Next',
	    	'next_text'    => 'Prev',
			'total'        => $wp_query->max_num_pages,
			'show_all'     => false,
			'end_size'     => 15,
			'mid_size'     => 15,
			'add_args'     => false,
			'add_fragment' => ''
		));
	 	if( is_array( $links ) ) { 
		    echo '<ul class="pagination">';
		    foreach ( $links as $link ) {
		    	if ( strpos( $link, 'current' ) !== false ) echo "<li class='active'>$link</li>";
		        else echo "<li>$link</li>";
		    }
		   	echo '</ul>';
		 }
	}
}

/* add theme tranlsates */

add_action( 'after_setup_theme', 'alphagreen_translate_theme' );
function alphagreen_translate_theme() {
	load_theme_textdomain( 'alphagreen', get_template_directory() . '/languages' );
	$locale = get_locale();
	$locale_file = get_template_directory() . "/languages/$locale.php";
	if ( is_readable( $locale_file ) ) require_once ( $locale_file );
} 

add_action( 'wp_enqueue_scripts', 'alphagreen_cdn_method' );
function alphagreen_cdn_method() {
	wp_deregister_script( 'jquery' );
	wp_deregister_script( 'wp-embed' );
}

add_action( 'wp_print_styles', 'add_styles' );
if ( !function_exists( 'add_styles' ) ) {
	function add_styles() {
	    if ( is_admin() ) return false;
		// wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/style.css' );
		wp_enqueue_style( 'sass', get_stylesheet_directory_uri() . '/assets/css/common.css' );
	}
}

add_action( 'wp_footer', 'add_scripts' );
if ( !function_exists( 'add_scripts' ) ) { 
	function add_scripts() { 
	    if ( is_admin() ) return false;
		wp_enqueue_style( 'bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.1/css/bootstrap-grid.min.css' );
		wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/assets/js/script.js', '', '', true );
	}
}

function admin_style() {
	wp_enqueue_style( 'admin-styles', get_stylesheet_directory_uri() . '/admin/css/admin.css' );
}
add_action( 'admin_enqueue_scripts', 'admin_style' );

/* disable Gutenberg css on homepage */

function alphagreen_remove_wp_block_library_css() {
	if ( is_front_page() ) {
    	wp_dequeue_style( 'wp-block-library' );
    	wp_dequeue_style( 'wp-block-library-theme' );
    	wp_dequeue_style( 'wc-block-style' );
	}
} 
add_action( 'wp_enqueue_scripts', 'alphagreen_remove_wp_block_library_css', 100 );

/* admin bar only on desktop */

if ( wp_is_mobile() ) {
	add_filter( 'show_admin_bar', '__return_false' );
}

/* Add acf option page */

if ( function_exists( 'acf_add_options_page' ) ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Theme settings',
		'menu_title'	=> 'Theme settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

/* Promo cookie */

add_action('wp_ajax_promo_cookie', 'promo_cookie');
add_action('wp_ajax_nopriv_promo_cookie', 'promo_cookie');
function promo_cookie() {
	$promo = $_POST['promo'];
	setcookie('promo', $promo, strtotime('+1 month'), '/');
}

/* Disable Gutenberg for custom templates */

function alphagreen_disable_editor( $id = false ) {
	$excluded_templates = array(
		'templates/homepage.php'
	);

	if ( empty( $id ) ) return false;

	$id = intval( $id );
	$template = get_page_template_slug( $id );

	return in_array( $template, $excluded_templates );
}

function alphagreen_disable_gutenberg( $can_edit, $post_type ) {
	if ( ! ( is_admin() && !empty( $_GET['post'] ) ) ) return $can_edit;
	if ( alphagreen_disable_editor( $_GET['post'] ) ) $can_edit = false;
	return $can_edit;
}
add_filter( 'gutenberg_can_edit_post_type', 'alphagreen_disable_gutenberg', 10, 2 );
add_filter( 'use_block_editor_for_post_type', 'alphagreen_disable_gutenberg', 10, 2 );

/* add pagination to categories */

function custom_pre_get_posts( $query ) {
	if ( $query->is_main_query() && !$query->is_feed() && !is_admin() && is_category() ) {
		$query->set( 'paged', str_replace( '/', '', get_query_var( 'page' ) ) );
	}
} 
add_action( 'pre_get_posts', 'custom_pre_get_posts' );

function custom_request( $query_string ) {
	if ( isset( $query_string['page'] ) ) {
		if ( ''!=$query_string['page'] ) {
			if ( isset( $query_string['name'] ) ) {
				unset( $query_string['name'] );
			}
		}
	}
	return $query_string;
} 
add_filter('request', 'custom_request');
