<?php
add_action( 'after_setup_theme', 'teammachine_setup' );
function teammachine_setup() {
	load_theme_textdomain( 'teammachine', get_template_directory() . '/languages' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array( 'search-form' ) );
	global $content_width;
	if ( ! isset( $content_width ) ) {
		$content_width = 1920;
	}
	register_nav_menus( array(
	        'main-menu' => esc_html__( 'Main Menu', 'teammachine' ),
    ) );
}

//add_action( 'admin_notices', 'teammachine_admin_notice' );
//function teammachine_admin_notice() {
//	$user_id = get_current_user_id();
//	if ( ! get_user_meta( $user_id, 'teammachine_notice_dismissed_3' ) && current_user_can( 'manage_options' ) ) {
//		echo '<div class="notice notice-info"><p>' . __( '<big><strong>Team Machine</strong>:</big> Livesidan hittas här! <a href="?notice-dismiss" class="alignright">Dismiss</a> <a href="https://teammachine.fi" class="button-primary" target="_blank">Hsh</a>', 'teammachine' ) . '</p></div>';
//	}
//}

add_action( 'admin_init', 'teammachine_notice_dismissed' );
function teammachine_notice_dismissed() {
	$user_id = get_current_user_id();
	if ( isset( $_GET['notice-dismiss'] ) ) {
		add_user_meta( $user_id, 'teammachine_notice_dismissed_3', 'true', true );
	}
}
require_once('includes/enqueue.php');

add_action( 'wp_footer', 'teammachine_footer' );
function teammachine_footer() {
	?>
    <script>
        jQuery(document).ready(function ($) {
            var deviceAgent = navigator.userAgent.toLowerCase();
            if (deviceAgent.match(/(iphone|ipod|ipad)/)) {
                $("html").addClass("ios");
            }
            if (navigator.userAgent.search("MSIE") >= 0) {
                $("html").addClass("ie");
            } else if (navigator.userAgent.search("Chrome") >= 0) {
                $("html").addClass("chrome");
            } else if (navigator.userAgent.search("Firefox") >= 0) {
                $("html").addClass("firefox");
            } else if (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0) {
                $("html").addClass("safari");
            } else if (navigator.userAgent.search("Opera") >= 0) {
                $("html").addClass("opera");
            }
        });
    </script>
	<?php
}

add_filter( 'document_title_separator', 'teammachine_document_title_separator' );
function teammachine_document_title_separator( $sep ) {
	$sep = '|';

	return $sep;
}

add_filter( 'the_title', 'teammachine_title' );
function teammachine_title( $title ) {
	if ( $title == '' ) {
		return '...';
	} else {
		return $title;
	}
}

add_filter( 'nav_menu_link_attributes', 'teammachine_schema_url', 10 );
function teammachine_schema_url( $atts ) {
	$atts['itemprop'] = 'url';

	return $atts;
}

if ( ! function_exists( 'teammachine_wp_body_open' ) ) {
	function teammachine_wp_body_open() {
		do_action( 'wp_body_open' );
	}
}
add_action( 'wp_body_open', 'teammachine_skip_link', 5 );
function teammachine_skip_link() {
	echo '<a href="#content" class="skip-link screen-reader-text">' . esc_html__( 'Skip to the content', 'teammachine' ) . '</a>';
}

//add_filter( 'the_content_more_link', 'teammachine_read_more_link' );
//function teammachine_read_more_link() {
//	if ( ! is_admin() ) {
//		return ' <a href="' . esc_url( get_permalink() ) . '" class="more-link">' . sprintf( __( '...%s', 'teammachine' ), '<span class="screen-reader-text">  ' . esc_html( get_the_title() ) . '</span>' ) . '</a>';
//	}
//}

//add_filter( 'excerpt_more', 'teammachine_excerpt_read_more_link' );
//function teammachine_excerpt_read_more_link( $more ) {
//	if ( ! is_admin() ) {
//		global $post;
//
//		return ' <a href="' . esc_url( get_permalink( $post->ID ) ) . '" class="more-link">' . sprintf( __( '...%s', 'teammachine' ), '<span class="screen-reader-text">  ' . esc_html( get_the_title() ) . '</span>' ) . '</a>';
//	}
//}

add_filter( 'big_image_size_threshold', '__return_false' );
add_filter( 'intermediate_image_sizes_advanced', 'teammachine_image_insert_override' );
function teammachine_image_insert_override( $sizes ) {
	unset( $sizes['medium_large'] );
	unset( $sizes['1536x1536'] );
	unset( $sizes['2048x2048'] );

	return $sizes;
}
require_once( 'includes/widget-areas.php' );

add_theme_support( 'custom-logo' );

add_action( 'wp_head', 'teammachine_pingback_header' );
function teammachine_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s" />' . "\n", esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}

add_action( 'comment_form_before', 'teammachine_enqueue_comment_reply_script' );
function teammachine_enqueue_comment_reply_script() {
	if ( get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

function teammachine_custom_pings( $comment ) {
	?>
    <li <?php comment_class(); ?>
            id="li-comment-<?php comment_ID(); ?>"><?php echo esc_url( comment_author_link() ); ?></li>
	<?php
}

add_filter( 'get_comments_number', 'teammachine_comment_count', 0 );
function teammachine_comment_count( $count ) {
	if ( ! is_admin() ) {
		global $id;
		$get_comments     = get_comments( 'status=approve&post_id=' . $id );
		$comments_by_type = separate_comments( $get_comments );

		return count( $comments_by_type['comment'] );
	} else {
		return $count;
	}
}

// wp lazy loading is not recognizing above the fold, SG optimizer does. So turning this off.
add_filter( 'wp_lazy_loading_enabled', '__return_false' );
add_theme_support( 'align-wide' );

require_once('acf/options-page.php');
require_once('acf/acf-json.php');
require_once('includes/customizer.php');
require_once('includes/custom-post-types.php');
require_once('includes/bootstrap5-walker.php');
require_once('includes/menu-walkers.php');
require_once('includes/polylang.php');
require_once('includes/post_types.php');

require_once('acf/blocks/register-blocks.php');

/*
function gf_enqueue_required_files() {
    GFCommon::log_debug( __METHOD__ . '(): running.' );
        gravity_form_enqueue_scripts( 1, true ); // Form ID 5 with ajax enabled.
}
add_action( 'get_header', 'gf_enqueue_required_files' );
*/
