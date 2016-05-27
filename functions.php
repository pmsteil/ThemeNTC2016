<?php 
require_once('lib/nav.php');
if( ! function_exists( 'reverie_theme_support' ) ) {
    function reverie_theme_support() {
        // Add language supports.
        load_theme_textdomain('reverie', get_template_directory() . '/lang');

        // Add post thumbnail supports. http://codex.wordpress.org/Post_Thumbnails
        add_theme_support('post-thumbnails');
        // set_post_thumbnail_size(150, 150, false);
        add_image_size('fd-lrg', 1024, 99999);
        add_image_size('fd-med', 768, 99999);
        add_image_size('fd-sm', 320, 9999);

        // rss thingy
        add_theme_support('automatic-feed-links');

        // Add post formats support. http://codex.wordpress.org/Post_Formats
        add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));
      
        
        // Add menu support. http://codex.wordpress.org/Function_Reference/register_nav_menus
        add_theme_support('menus');
        /*register_nav_menus(array(
            'primary' => __('Primary Navigation', 'reverie'),
            'additional' => __('Additional Navigation', 'reverie'),
            'utility' => __('Utility Navigation', 'reverie')
        ));*/
register_nav_menus( array('topmenu' => 'Top Menu1'));	
register_nav_menus( array('footer1' => 'bottom footer1'));
register_nav_menus( array('footer2' => 'bottom footer2'));
register_nav_menus( array('footer3' => 'bottom footer3'));
register_nav_menus( array('footer4' => 'bottom footer4'));

        // Add custom background support
        add_theme_support( 'custom-background',
            array(
                'default-image' => '',  // background image default
                'default-color' => '', // background color default (dont add the #)
                'wp-head-callback' => '_custom_background_cb',
                'admin-head-callback' => '',
                'admin-preview-callback' => ''
            )
        );
    }
}
add_action('after_setup_theme', 'reverie_theme_support'); /* end Reverie theme support */

function wtg_theme_add_sidebars(){

	register_sidebar(array(
  'name' => __( 'Main', 'Laity' ),
  'id' => 'sidebarmain',
  'description' => __( 'Main sidebar that appears onthe default page template', 'Laity' ),
  'before_widget' => '<div id="%1s" class="widget %2s">',
  'after_widget'  => '</div>',
  'before_title' => '<h2>',
  'after_title' => '</h2>')
);
register_sidebar(array(
  'name' => __( 'Churches Dropdowns', 'Laity' ),
  'id' => 'c-dropdowns',
  'description' => __( 'Churches Dropdowns that appears onthe Header Sections', 'Laity' ),
  'before_widget' => '<li class="has-dropdown">',
  'after_widget'  => '</li>',
  'before_title' => ' <a class="drop-p-bg" href="#">',
  'after_title' => '</a>')
);
register_sidebar(array(
  'name' => __( 'District Dropdowns', 'Laity' ),
  'id' => 'd-dropdowns',
  'description' => __( 'District Dropdowns that appears onthe Header Sections', 'Laity' ),
   'before_widget' => '<li class="has-dropdown">',
  'after_widget'  => '</li>',
  'before_title' => ' <a class="drop-p-bg" href="#">',
  'after_title' => '</a>')
);
register_sidebar(array(
  'name' => __( 'bottom sidebar', 'Laity' ),
  'id' => 'sidebarbottom',
  'description' => __( 'bottom sidebar that appears onthe default page template', 'Laity' ),
  'before_widget' => '<div id="%1s" class="widget %2s">',
  'after_widget'  => '</div>',
  'before_title' => '<h2>',
  'after_title' => '</h2>')
);


register_sidebar(array(
  'name' => __( 'footer 1', 'Laity' ),
  'id' => 'footer1',
  'description' => __( 'Footer first widgets that appears onthe footer section', 'Laity' ),
  'before_widget' => '<div id="%1s" class="widget %2s">',
  'after_widget'  => '</div>',
  'before_title' => '<strong>',
  'after_title' => '</strong>')
);
register_sidebar(array(
  'name' => __( 'footer 2', 'Laity' ),
  'id' => 'footer2',
  'description' => __( 'Footer 2nd widgets that appears onthe footer section', 'Laity' ),
  'before_widget' => '<div id="%1s" class="widget %2s">',
  'after_widget'  => '</div>',
  'before_title' => '<strong>',
  'after_title' => '</strong>')
);
register_sidebar(array(
  'name' => __( 'footer 3', 'Laity' ),
  'id' => 'footer3',
  'description' => __( 'Footer 3nd widgets that appears onthe footer section', 'Laity' ),
  'before_widget' => '<div id="%1s" class="widget %2s">',
  'after_widget'  => '</div>',
  'before_title' => '<strong>',
  'after_title' => '</strong>')
);
register_sidebar(array(
  'name' => __( 'footer 4', 'Laity' ),
  'id' => 'footer4',
  'description' => __( 'Footer 4th widgets that appears onthe footer section', 'Laity' ),
  'before_widget' => '<div id="%1s" class="widget %2s">',
  'after_widget'  => '</div>',
  'before_title' => '<strong>',
  'after_title' => '</strong>')
);
register_sidebar(array(
  'name' => __( 'Bottom footer 1', 'Laity' ),
  'id' => 'bottom_footer1',
  'description' => __( 'Bottom Footer 1 widgets that appears onthe Bottom footer section', 'Laity' ),
  'before_widget' => '<div id="%1s" class="widget %2s">',
  'after_widget'  => '</div>',
  'before_title' => '<strong>',
  'after_title' => '</strong>')
);
register_sidebar(array(
  'name' => __( 'Bottom footer 2', 'Laity' ),
  'id' => 'bottom_footer2',
  'description' => __( 'Bottom Footer 2 widgets that appears onthe Bottom footer section', 'Laity' ),
  'before_widget' => '<div id="%1s" class="widget %2s">',
  'after_widget'  => '</div>',
  'before_title' => '<strong>',
  'after_title' => '</strong>')
);
register_sidebar(array(
  'name' => __( 'Bottom footer 2', 'Laity' ),
  'id' => 'bottom_footer3',
  'description' => __( 'Bottom Footer 3 widgets that appears onthe Bottom footer section', 'Laity' ),
  'before_widget' => '<div id="%1s" class="widget %2s">',
  'after_widget'  => '</div>',
  'before_title' => '<strong>',
  'after_title' => '</strong>')
);

register_sidebar(array(
  'name' => __( 'header stripe', 'Laity' ),
  'id' => 'header-stripe',
  'description' => __( 'header stripe appears on the header section', 'Laity' ),
  'before_widget' => '<div id="%1s" class="widget %2s">',
  'after_widget'  => '</div>',
  'before_title' => '<strong>',
  'after_title' => '</strong>')
);

register_sidebar(array(
  'name' => __( 'footer stripe left', 'Laity' ),
  'id' => 'footer-stripe-left',
  'description' => __( 'footer stripe appears on the footer left section', 'Laity' ),
  'before_widget' => '<div id="%1s" class="widget %2s">',
  'after_widget'  => '</div>',
  'before_title' => '<strong>',
  'after_title' => '</strong>')
);
register_sidebar(array(
  'name' => __( 'footer stripe right', 'Laity' ),
  'id' => 'footer-stripe-right',
  'description' => __( 'footer stripe appears on the footer right section', 'Laity' ),
  'before_widget' => '<div id="%1s" class="widget %2s">',
  'after_widget'  => '</div>',
  'before_title' => '<strong>',
  'after_title' => '</strong>')
);
register_sidebar(array(
  'name' => __( 'Metro District', 'Laity' ),
  'id' => 'metro_district',
  'description' => __( 'Metro District appears on the header section', 'Laity' ),
  'before_widget' => '<div id="%1s" class="widget %2s">',
  'after_widget'  => '</div>',
  'before_title' => '<strong>',
  'after_title' => '</strong>')
);


}
add_action( 'widgets_init', 'wtg_theme_add_sidebars' );


function wtg_add_theme_javascript(){
	wp_register_script( 'js_vendor_modernizr_js', get_stylesheet_directory_uri() . '/js/vendor/modernizr.js', array(), filemtime( get_stylesheet_directory(). '/js/vendor/modernizr.js' ), true);
	wp_enqueue_script('js_vendor_modernizr_js');

	wp_register_script( 'js_vendor_modernizr_js', get_stylesheet_directory_uri() . '/js/vendor/modernizr.js', array(), filemtime( get_stylesheet_directory(). '/js/vendor/modernizr.js' ), true);
	wp_enqueue_script('js_vendor_modernizr_js');

  wp_enqueue_script('jquery');

	wp_register_script( 'js_main_new_js', get_stylesheet_directory_uri() . '/js/main-new.js', array(), filemtime( get_stylesheet_directory(). '/js/main-new.js' ), true);
	wp_enqueue_script('js_main_new_js');

	wp_register_script( 'js_foundation_min_js', get_stylesheet_directory_uri() . '/js/foundation.min.js', array(), filemtime( get_stylesheet_directory(). '/js/foundation.min.js' ), true);
	wp_enqueue_script('js_foundation_min_js');


}
add_action( 'wp_enqueue_scripts', 'wtg_add_theme_javascript' );


function wtg_add_theme_styles(){
	wp_register_style( 'css_foundation_css', get_stylesheet_directory_uri().'/css/foundation.css', array(), '1461321202');
	wp_enqueue_style('css_foundation_css');

	wp_register_style( 'questions_css', get_stylesheet_directory_uri() . '/css/questions.css', array(), '');
	wp_enqueue_style('questions_css');

	wp_register_style( 'css_custom_css', get_stylesheet_directory_uri().'/css/custom.css', array(), '1461321202');
	wp_enqueue_style('css_custom_css');

	wp_register_style( 'questions_css', get_stylesheet_directory_uri() . '/css/questions.css', array(), '');
	wp_enqueue_style('questions_css');

	wp_register_style( 'style_css', get_stylesheet_directory_uri().'/style.css', array(), '1461321202');
	wp_enqueue_style('style_css');

	wp_register_style( 'questions_css', get_stylesheet_directory_uri() . '/css/questions.css', array(), '');
	wp_enqueue_style('questions_css');

	wp_register_style( 'cdnjs_cloudflare_com_ajax_libs_foundicons_3_0_0_foundation_icons_css', 'https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css', array(), '');
	wp_enqueue_style('cdnjs_cloudflare_com_ajax_libs_foundicons_3_0_0_foundation_icons_css');

	wp_register_style( 'questions_css', get_stylesheet_directory_uri() . '/css/questions.css', array(), '');
	wp_enqueue_style('questions_css');

	wp_register_style( 'css_foundation_css', get_stylesheet_directory_uri().'/css/foundation.css', array(), '1461321202');
	wp_enqueue_style('css_foundation_css');

	wp_register_style( 'questions_css', get_stylesheet_directory_uri() . '/css/questions.css', array(), '');
	wp_enqueue_style('questions_css');

	wp_register_style( 'css_custom_css', get_stylesheet_directory_uri().'/css/custom.css', array(), '1461321202');
	wp_enqueue_style('css_custom_css');

	wp_register_style( 'questions_css', get_stylesheet_directory_uri() . '/css/questions.css', array(), '');
	wp_enqueue_style('questions_css');

	wp_register_style( 'style_css', get_stylesheet_directory_uri().'/style.css', array(), '1461321202');
	wp_enqueue_style('style_css');

	wp_register_style( 'questions_css', get_stylesheet_directory_uri() . '/css/questions.css', array(), '');
	wp_enqueue_style('questions_css');

	wp_register_style( 'cdnjs_cloudflare_com_ajax_libs_foundicons_3_0_0_foundation_icons_css', 'https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css', array(), '');
	wp_enqueue_style('cdnjs_cloudflare_com_ajax_libs_foundicons_3_0_0_foundation_icons_css');

	wp_register_style( 'questions_css', get_stylesheet_directory_uri() . '/css/questions.css', array(), '');
	wp_enqueue_style('questions_css');

	wp_register_style( 'css_foundation_css', get_stylesheet_directory_uri().'/css/foundation.css', array(), '1461321202');
	wp_enqueue_style('css_foundation_css');

	wp_register_style( 'questions_css', get_stylesheet_directory_uri() . '/css/questions.css', array(), '');
	wp_enqueue_style('questions_css');

	wp_register_style( 'css_custom_css', get_stylesheet_directory_uri().'/css/custom.css', array(), '1461321202');
	wp_enqueue_style('css_custom_css');

	wp_register_style( 'questions_css', get_stylesheet_directory_uri() . '/css/questions.css', array(), '');
	wp_enqueue_style('questions_css');

	wp_register_style( 'style_css', get_stylesheet_directory_uri().'/style.css, array()', '1461321202');
	wp_enqueue_style('style_css');

	wp_register_style( 'questions_css', get_stylesheet_directory_uri() . '/css/questions.css', array(), '');
	wp_enqueue_style('questions_css');

	wp_register_style( 'cdnjs_cloudflare_com_ajax_libs_foundicons_3_0_0_foundation_icons_css', 'https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css', array(), '');
	wp_enqueue_style('cdnjs_cloudflare_com_ajax_libs_foundicons_3_0_0_foundation_icons_css');

	wp_register_style( 'questions_css', get_stylesheet_directory_uri() . '/css/questions.css', array(), '');
	wp_enqueue_style('questions_css');

	wp_register_style( 'css_foundation_css', get_stylesheet_directory_uri().'/css/foundation.css', array(), '1461321202');
	wp_enqueue_style('css_foundation_css');

	wp_register_style( 'questions_css', get_stylesheet_directory_uri() . '/css/questions.css', array(), '');
	wp_enqueue_style('questions_css');

	wp_register_style( 'css_custom_css', get_stylesheet_directory_uri().'/css/custom.css', array(), '1461321202');
	wp_enqueue_style('css_custom_css');

	wp_register_style( 'questions_css', get_stylesheet_directory_uri() . '/css/questions.css', array(), '');
	wp_enqueue_style('questions_css');

	wp_register_style( 'style_css', get_stylesheet_directory_uri().'/style.css', array(), '1461321202');
	wp_enqueue_style('style_css');

	wp_register_style( 'questions_css', get_stylesheet_directory_uri() . '/css/questions.css', array(), '');
	wp_enqueue_style('questions_css');

	wp_register_style( 'cdnjs_cloudflare_com_ajax_libs_foundicons_3_0_0_foundation_icons_css', 'https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css', array(), '');
	wp_enqueue_style('cdnjs_cloudflare_com_ajax_libs_foundicons_3_0_0_foundation_icons_css');

	wp_register_style( 'questions_css', get_stylesheet_directory_uri() . '/css/questions.css', array(), '');
	wp_enqueue_style('questions_css');

	wp_register_style( 'css_foundation_css', get_stylesheet_directory_uri().'/css/foundation.css', array(), '1461321202');
	wp_enqueue_style('css_foundation_css');

	wp_register_style( 'questions_css', get_stylesheet_directory_uri() . '/css/questions.css', array(), '');
	wp_enqueue_style('questions_css');

	wp_register_style( 'css_custom_css', get_stylesheet_directory_uri().'/css/custom.css', array(), '1461321202');
	wp_enqueue_style('css_custom_css');

	wp_register_style( 'questions_css', get_stylesheet_directory_uri() . '/css/questions.css', array(), '');
	wp_enqueue_style('questions_css');

	wp_register_style( 'style_css', get_stylesheet_directory_uri().'/style.css', array(), '1461321202');
	wp_enqueue_style('style_css');

	wp_register_style( 'questions_css', get_stylesheet_directory_uri() . '/css/questions.css', array(), '');
	wp_enqueue_style('questions_css');

	wp_register_style( 'cdnjs_cloudflare_com_ajax_libs_foundicons_3_0_0_foundation_icons_css', 'https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css', array(), '');
	wp_enqueue_style('cdnjs_cloudflare_com_ajax_libs_foundicons_3_0_0_foundation_icons_css');

	wp_register_style( 'questions_css', get_stylesheet_directory_uri() . '/css/questions.css', array(), '');
	wp_enqueue_style('questions_css');

	wp_register_style( 'css_foundation_css', get_stylesheet_directory_uri().'/css/foundation.css', array(), '1461321202');
	wp_enqueue_style('css_foundation_css');

	wp_register_style( 'questions_css', get_stylesheet_directory_uri() . '/css/questions.css', array(), '');
	wp_enqueue_style('questions_css');

	wp_register_style( 'css_custom_css', get_stylesheet_directory_uri().'/css/custom.css', array(), '1461321202');
	wp_enqueue_style('css_custom_css');

	wp_register_style( 'questions_css', get_stylesheet_directory_uri() . '/css/questions.css', array(), '');
	wp_enqueue_style('questions_css');

	wp_register_style( 'style_css', get_stylesheet_directory_uri().'/style.css', array(), '1461321202');
	wp_enqueue_style('style_css');

	wp_register_style( 'questions_css', get_stylesheet_directory_uri() . '/css/questions.css', array(), '');
	wp_enqueue_style('questions_css');

	wp_register_style( 'cdnjs_cloudflare_com_ajax_libs_foundicons_3_0_0_foundation_icons_css', 'https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css', array(), '');
	wp_enqueue_style('cdnjs_cloudflare_com_ajax_libs_foundicons_3_0_0_foundation_icons_css');

	wp_register_style( 'questions_css', get_stylesheet_directory_uri() . '/css/questions.css', array(), '');
	wp_enqueue_style('questions_css');

	wp_register_style( 'css_foundation_css', get_stylesheet_directory_uri().'/css/foundation.css', array(), '1461321202');
	wp_enqueue_style('css_foundation_css');

	wp_register_style( 'questions_css', get_stylesheet_directory_uri() . '/css/questions.css', array(), '');
	wp_enqueue_style('questions_css');

	wp_register_style( 'css_custom_css', get_stylesheet_directory_uri().'/css/custom.css', array(), '1461321202');
	wp_enqueue_style('css_custom_css');

	wp_register_style( 'questions_css', get_stylesheet_directory_uri() . '/css/questions.css', array(), '');
	wp_enqueue_style('questions_css');

	wp_register_style( 'style_css', get_stylesheet_directory_uri().'/style.css', array(), '1461321202');
	wp_enqueue_style('style_css');

	wp_register_style( 'questions_css', get_stylesheet_directory_uri() . '/css/questions.css', array(), '');
	wp_enqueue_style('questions_css');

	wp_register_style( 'cdnjs_cloudflare_com_ajax_libs_foundicons_3_0_0_foundation_icons_css', 'https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css', array(), '');
	wp_enqueue_style('cdnjs_cloudflare_com_ajax_libs_foundicons_3_0_0_foundation_icons_css');

	wp_register_style( 'questions_css', get_stylesheet_directory_uri() . '/css/questions.css', array(), '');
	wp_enqueue_style('questions_css');

	wp_register_style( 'css_foundation_css', get_stylesheet_directory_uri().'/css/foundation.css', array(), '1461321202');
	wp_enqueue_style('css_foundation_css');

	wp_register_style( 'questions_css', get_stylesheet_directory_uri() . '/css/questions.css', array(), '');
	wp_enqueue_style('questions_css');

	wp_register_style( 'css_custom_css', get_stylesheet_directory_uri().'/css/custom.css', array(), '1461321202');
	wp_enqueue_style('css_custom_css');

	wp_register_style( 'questions_css', get_stylesheet_directory_uri() . '/css/questions.css', array(), '');
	wp_enqueue_style('questions_css');

	wp_register_style( 'style_css', get_stylesheet_directory_uri().'/style.css', array(), '1461321202');
	wp_enqueue_style('style_css');

	wp_register_style( 'questions_css', get_stylesheet_directory_uri() . '/css/questions.css', array(), '');
	wp_enqueue_style('questions_css');

	wp_register_style( 'cdnjs_cloudflare_com_ajax_libs_foundicons_3_0_0_foundation_icons_css', 'https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css', array(), '');
	wp_enqueue_style('cdnjs_cloudflare_com_ajax_libs_foundicons_3_0_0_foundation_icons_css');

	wp_register_style( 'questions_css', get_stylesheet_directory_uri() . '/css/questions.css', array(), '');
	wp_enqueue_style('questions_css');


}
add_action( 'wp_enqueue_scripts', 'wtg_add_theme_styles' );

//always add support for featured images
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 75, 75, true ); // W x H, hard crop 


//allow the default WP 'text' widget to accept shortcodes
add_filter('widget_text', 'do_shortcode');

function new_excerpt_more( $more ) {
   return '...';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );   

$at_options = array(
  'theme_logourl' => '',  
  'copyright_text' => '',
  'favicon' => '',
  'blog_image' => '',
  'copyright_logo' => '',
  'display_fp_blogs' => '',
  'right_blog' => '',  
  'left_blog' => ''  
); 

if ( is_admin() ) : // Load only if we are viewing an admin page

function at_register_settings() {
	// Register settings and call sanitation functions
	register_setting( 'at_theme_options', 'at_options', 'at_validate_options' );
}

add_action( 'admin_init', 'at_register_settings' );

function at_theme_options() {
	// Add theme options page to the addmin menu
	add_theme_page( 'Theme Options', 'Theme Options', 'edit_theme_options', 'theme_options', 'at_theme_options_page' );
}

add_action( 'admin_menu', 'at_theme_options', 'at_validate_options' );


function at_validate_options( $input ) {
	global $at_options;

	$settings = get_option( 'at_options', $at_options );
	
	// We strip all tags from the text field, to avoid vulnerablilties like XSS
	//$input['tag_line'] = wp_filter_nohtml_kses( $input['tag_line'] );
	return $input;
}

function my_admin_scripts() {
  wp_enqueue_script('media-upload');
  wp_enqueue_script('thickbox');  
  wp_register_script('my-upload', get_template_directory_uri() . '/js/scripts/upload.js', array('jquery','media-upload','thickbox'));
  wp_enqueue_script('my-upload');
}

function my_admin_styles() {
  wp_enqueue_style('thickbox');
}
  
add_action('admin_print_scripts', 'my_admin_scripts');
add_action('admin_print_styles', 'my_admin_styles');

function at_theme_options_page() {
	global $at_options;
  
	if ( ! isset( $_REQUEST['updated'] ) ) {
		$_REQUEST['updated'] = false; // This checks whether the form has just been submitted. 
	}	
	?>

	<div class="wrap">

	<?php screen_icon(); echo "<h2>" . __( ' Theme Options' ) . "</h2>"; ?>

	<?php if ( false !== $_REQUEST['updated'] ) : ?>
	  <div class="updated fade"><p><strong><?php _e( 'Options saved' ); ?></strong></p></div>
	<?php endif; ?>

	<form method="post" action="options.php">

	<?php $settings = get_option( 'at_options', $at_options ); ?>
	
	<?php settings_fields( 'at_theme_options' );
	/* This function outputs some hidden fields required by the form,
	including a nonce, a unique number used to ensure the form has been submitted from the admin page
	and not somewhere else, very important for security */ ?>

	<table class="form-table">
    <tr valign="top"><th scope="row"><label for="theme_logourl">Site Logo (550x89 pixels)</label></th>
      <td><input style="width:600px;" id="theme_logourl" name="at_options[theme_logourl]" type="text" value="<?php  esc_attr_e($settings['theme_logourl']); ?>" /></td>
      <td><input style="width:200px" id="upload_logo_button" type="button" value="Upload Logo Image" /></td>
    </tr>
    
    <tr valign="top"><th scope="row"><label for="favicon">Favicon</label></th>
      <td><input style="width:600px;" id="favicon" name="at_options[favicon]" type="text" value="<?php  esc_attr_e($settings['favicon']); ?>" /></td>
      <td><input style="width:200px" id="upload_favicon_button" type="button" value="Upload Favicon" /></td>
    </tr>
    
    <tr valign="top"><th scope="row"><label for="blog_image">Default Blog Featured Image</label></th>
      <td><input style="width:600px;" id="blog_image" name="at_options[blog_image]" type="text" value="<?php  esc_attr_e($settings['blog_image']); ?>" /></td>
      <td><input style="width:200px" id="upload_blog_image_button" type="button" value="Upload Image" /></td>
    </tr>
    
    <tr valign="top"><th scope="row"><label for="copyright_logo">Copyright Logo Image (1093x73 pixels)</label></th>
      <td><input style="width:600px;" id="copyright_logo" name="at_options[copyright_logo]" type="text" value="<?php  esc_attr_e($settings['copyright_logo']); ?>" /></td>
      <td><input style="width:200px" id="upload_copyr_image_button" type="button" value="Upload Image" /></td>
    </tr>
    
	</table>
      
	<table class="form-table">
    <tr valign="top"><th scope="row"><label for="copyright_text">Copyright Text</label></th>
        <td><input style="width:600px;" id="copyright_text" name="at_options[copyright_text]" type="text" value="<?php  esc_attr_e($settings['copyright_text']); ?>" /></td>
        <td></td>  
    </tr>
    
    <tr valign="top"><th scope="row"><label for="display_fp_blogs">Display blogs on front page</label></th>
      <td><input id="display_fp_blogs" name="at_options[display_fp_blogs]" type="checkbox" value="1" <?php checked( '1', $settings['display_fp_blogs'] ); ?> /></td>
      <td></td>  
    </tr>
    
	<tr valign="top"><th scope="row"><label for="left_blog">Left Blog Post List</label></th>
	<td>
      <select style="width:250px" id="at_options[left_blog]" name="at_options[left_blog]">
    	<?php
        //cat_ID
        $args = array(
          'hide_empty' => 0,  
          'exclude' => '1',  
          'orderby' => 'name',
          'order' => 'ASC'
        );
        
        $categories = get_categories($args);     
        print_r($categories);
        foreach ( $categories as $category ) {
					if(  $category->slug == $settings['left_blog'] )
        	  $option = '<option selected="selected" value="' . $category->slug . '">';
					else	
        	  $option = '<option value="' . $category->slug . '">';
        	$option .= $category->cat_name;
        	$option .= '</option>';
        	echo $option;
        } ?>  
    	</select>
	</td>
  <td></td>
	</tr>
    
	<tr valign="top"><th scope="row"><label for="right_blog">Right Blog Post List</label></th>
	<td>
      <select style="width:250px" id="at_options[right_blog]" name="at_options[right_blog]">
    	<?php
        
        foreach ( $categories as $category ) {
					if(  $category->slug == $settings['right_blog'] )
        	  $option = '<option selected="selected" value="' . $category->slug . '">';
					else	
        	  $option = '<option value="' . $category->slug . '">';
        	$option .= $category->cat_name;
        	$option .= '</option>';
        	echo $option;
        } ?>  
    	</select>
	</td>
  <td></td>
	</tr>
    
      
      
	</table>
	<p class="submit"><input type="submit" class="button-primary" value="Save Options" /></p>

	</form>
		

	</div>

	<?php
}

endif;  // EndIf is_admin()

add_theme_support( 'menus' );

// => location name
register_nav_menus(array(
  'custom-menu_1' => 'Main Column 1',
  'custom-menu_2' => 'Main Column 2',
  'custom-menu_3' => 'Main Column 3',
  'custom-menu_4' => 'Main Column 4',
  'custom-menu_5' => 'Main Column 5',
  'custom-menu_6' => 'Main Column 6',
  'custom-menu_7' => 'Main Column 7'
));

// programmatically set the locations of menus
//                                   these are the menu names
$menu_column1 = get_term_by('name', 'Menu 1', 'nav_menu');
$menu_column2 = get_term_by('name', 'Menu 2', 'nav_menu');
$menu_column3 = get_term_by('name', 'Menu 3', 'nav_menu');
$menu_column4 = get_term_by('name', 'Menu 4', 'nav_menu');
$menu_column5 = get_term_by('name', 'Menu 5', 'nav_menu');
$menu_column6 = get_term_by('name', 'Bottom Menu', 'nav_menu');
$menu_column7 = get_term_by('name', 'Top Menu', 'nav_menu');

$locations = get_theme_mod('nav_menu_locations');
$locations['custom-menu_1'] = $menu_column1->term_id;
$locations['custom-menu_2'] = $menu_column2->term_id;
$locations['custom-menu_3'] = $menu_column3->term_id;
$locations['custom-menu_4'] = $menu_column4->term_id;
$locations['custom-menu_5'] = $menu_column5->term_id;
$locations['custom-menu_6'] = $menu_column6->term_id;
$locations['custom-menu_7'] = $menu_column7->term_id;
set_theme_mod( 'nav_menu_locations', $locations );

function get_first_sub_menu_item ($menu_name) {
  global $wpdb;
  
 $sql = "SELECT p.post_title as title, pm.meta_value as page_id, p2.menu_order, p2.post_title
FROM " . $wpdb->prefix . "terms AS t
LEFT JOIN " . $wpdb->prefix . "term_taxonomy AS tt ON t.term_id = tt.term_id
LEFT JOIN " . $wpdb->prefix . "term_relationships AS tr ON tr.term_taxonomy_id = tt.term_taxonomy_id
LEFT JOIN " . $wpdb->prefix . "postmeta AS pm ON pm.post_id = tr.object_id
LEFT JOIN " . $wpdb->prefix . "posts AS p ON pm.meta_value = p.ID
LEFT JOIN " . $wpdb->prefix . "posts AS p2 ON p2.ID = tr.object_id
WHERE tt.taxonomy = 'nav_menu'
AND t.name = '$menu_name'
AND pm.meta_key = '_menu_item_object_id' order by p2.menu_order LIMIT 0 , 1"; 
  
  //echo $sql;
      
  $row = $wpdb->get_row($sql);
  if($row) {
    if( $row->post_title == "")
      $item_name = $row->title;
    else
      $item_name = $row->post_title;    
  }
  else {
    $item_name = "Not found";
  }
  return $item_name;
}

// gets the menu title and link; allows us to skip the first menu item 
function get_sub_menu ($menu_name, $class_name, $include_first = false) {
  
  global $wpdb;
  
 $sql = "SELECT p.post_title as title, pm.meta_value as page_id, p2.menu_order, p2.post_title
FROM " . $wpdb->prefix . "terms AS t
LEFT JOIN " . $wpdb->prefix . "term_taxonomy AS tt ON t.term_id = tt.term_id
LEFT JOIN " . $wpdb->prefix . "term_relationships AS tr ON tr.term_taxonomy_id = tt.term_taxonomy_id
LEFT JOIN " . $wpdb->prefix . "postmeta AS pm ON pm.post_id = tr.object_id
LEFT JOIN " . $wpdb->prefix . "posts AS p ON pm.meta_value = p.ID
LEFT JOIN " . $wpdb->prefix . "posts AS p2 ON p2.ID = tr.object_id
WHERE tt.taxonomy = 'nav_menu'
AND t.name = '$menu_name'
AND pm.meta_key = '_menu_item_object_id' order by p2.menu_order"; 
  
  //echo $sql;
    
  $rows = $wpdb->get_results($sql);
  $counter = 0;
  if($rows) {
    $menu = '<ul class="' .$class_name .'">' . PHP_EOL;
    foreach($rows as $row) {
      $counter++;            
      //skip the first item
      if($counter == 1 && !$include_first)
        continue;
      if( $row->post_title == "")
        $item_name = $row->title;
      else
        $item_name = $row->post_title;
      
      //do not display draft pages in the menu 
      if(get_post_status($row->page_id) != 'draft')
        $menu .= "<li><a href='" . get_permalink($row->page_id) . "'>" . $item_name . "</a></li>";
    }
    $menu .= "</ul>" . PHP_EOL;
    return $menu;
  }
  else {
    $wpdb->last_query . '<br>';
    $wpdb->last_error . '<br>';
  }
}

remove_shortcode('sliders');
add_shortcode( 'sliders', 'antioch_shortcode_slider' );

function antioch_shortcode_slider ($atts, $content = null, $tag ){   
  
    $return_value = "";

    shortcode_atts( array('category' => '', 
                        ), $atts, $tag );

    $select = array('post_type' => 'slider', 'orderby' => 'menu_order', 'order' => 'ASC', 'post_status'=>'publish');

    if ($atts['category']!="") {
         $select['category_name'] = $atts['category'];
    }

    if ( post_type_exists( 'slider' ) ) { 
      
    $return_value .= '<div class="slider-front">' .
  '<div class="slider single-item">' . PHP_EOL;

       $today = new DateTime('now');
       $temp = "";
       $date_start=null; $date_end= null;

       $the_query = new WP_Query($select);
       while ($the_query->have_posts()) { $the_query->the_post(); 

        $start = get_post_meta(get_the_ID(), 'begin_showing_on_date', true );
        $end = get_post_meta(get_the_ID(), 'stop_showing_on_date', true );

        if (trim($start)!="") {
            $date_start = @date_create($start);
            @date_time_set($date_start , 00, 00, 00);
        } 
        if (trim($end)!="") {
            $date_end = @date_create($end);
            @date_time_set($date_end , 23, 59, 59);
        } 

        if (  ( ($date_start==null) || ($date_start <= $today ) )  &&  
              ( ($date_end==null) || ($date_end >= $today ) )
           )
        {
          $return_value .= '<div>' . PHP_EOL . '
                    <div class="row">' . PHP_EOL . '
                        <div class="medium-7 columns">' . PHP_EOL . '
                            <img src="'.get_field('slider_image', get_the_ID()).'" alt="'.get_the_title().'" >' . PHP_EOL . '
                        </div>' . PHP_EOL . '
                        <div class="medium-5 columns">' . PHP_EOL . '
                            <h2>'. get_the_title().'</h2>' . PHP_EOL . '
                            <p>'. do_shortcode(get_the_content()).'</p>' . PHP_EOL . '  
                            <a href="'. get_field('slider_hyperlink', get_the_ID()).'" class="button">' . get_field('slider_link_text', get_the_ID()). '</a>' . PHP_EOL . '
                        </div>' . PHP_EOL . '
                    </div>' . PHP_EOL . '
                </div>' . PHP_EOL;
              
          }
          $date_start = null; $date_end = null; $date1 = null; $date2= null;
      }   
      $return_value .= '</div>' . PHP_EOL . '
        </div>';

      wp_reset_postdata(); 
        
    }// end of if post type exists
    return $return_value ;

}

remove_shortcode( 'features', 'shortcode_features' );

function antioch_features($atts, $content = null, $tag ){   
     
     $return_value = "";
     
     shortcode_atts( array('category' => '',
                         ), $atts, $tag );
          
     $select = array('post_type' => 'feature', 'orderby' => 'menu_order', 'order' => 'ASC', 'post_status'=>'publish');
     
     
     if (isset($atts['category']) && ($atts['category']!="")  ){
          $select['category_name'] = $atts['category'];
     }
          
     if ( post_type_exists( 'feature' ) ) { 
     
       $return_value .= '<section class="welcome">' . PHP_EOL . '
                           <div class="row">' . PHP_EOL;                         

       $the_query = new WP_Query($select); 
       
       
       while ($the_query->have_posts()) { 
         
        $the_query->the_post();
        
        $video_class = "";
        $video_link = trim(get_field('feature_youtube', get_the_ID()));
        if($video_link === '')
          $video_link = get_field('hyperlink', get_the_ID());
        else 
          $video_class = " fancybox-youtube";
        
        $return_value .= '<div class="medium-4 columns">' . PHP_EOL .
                    '<a class="welcome-link' . $video_class . '" href="' . $video_link . '">' . PHP_EOL .
                    '<img src="' . get_field('feature_slider_image', get_the_ID()) . '" alt="' . get_the_title() .'" />' . PHP_EOL .
                    '   <span>' . get_field('feature_slider_image_text', get_the_ID()) . '</span>' . PHP_EOL .
                    '</a>' . PHP_EOL .
                    '<h2 class="welcome-title">' . get_field('hyperlinktext', get_the_ID()) . '</h2>' . PHP_EOL .
                '</div>';
                
               
        
                
       }
       
       $return_value .= '</div>' . PHP_EOL . '
               </section>' . PHP_EOL;
   
     }// end of if post type exists
     
     wp_reset_postdata(); 
     
     return $return_value ;
 }

add_shortcode( 'features', 'antioch_features' );
 
  remove_shortcode( 'bloglist', 'shortcode_bloglist' );
  
  function antioch_bloglist($atts, $content = null, $tag ){   
    $return_value = "";

    shortcode_atts( array('category' => '', 'maxposts' => '', 'showcategorydescription' => ''
                         ), $atts, $tag );              
    $category_name =""; 
    $catobj=null;
    $showdetails = true;
    
    if (isset($atts['showcategorydescription']) && ($atts['showcategorydescription']=="no")  ){
        $showdetails = false;
    }

    if (isset($atts['category']) && ($atts['category']!="")  ){

         $category_name = $atts['category'];
         $catobj = get_category_by_slug($category_name); 

    }

    if (isset($atts['maxposts']) && ($atts['maxposts']!="")  ){
        $maxposts = $atts['maxposts'];
    }  else {
        $maxposts = 3;
    }
    
    $catquery = null;
   
    if ($category_name!="" && $catobj!=null) {
         $catquery = new WP_Query("cat=".$catobj->term_id."&posts_per_page=".$maxposts."&orderby=date&order=desc");  
    } else {
         $catquery = new WP_Query("posts_per_page=".$maxposts."&orderby=date&order=desc");    
    }
    
    $return_value .= '<h2> '. $catobj->name .'</h2>' . PHP_EOL
            . '<ul class="bloglist">' . PHP_EOL;
    
    while($catquery->have_posts()) : 

      $catquery->the_post();
    
      $image_url = $image;
      $ImageID = get_post_thumbnail_id($post->ID);
      if($ImageID) 
         // get the image url
         $image_url = wp_get_attachment_url($ImageID);
 

    $return_value .= '<div class="front-post-box clearfix">' . PHP_EOL . 
'                        <div class="front-post-img">' . PHP_EOL . 
'                            <img src="' . $image_url . '" alt="">' . PHP_EOL . 
'                        </div>' . PHP_EOL . 
'                        <div class="front-post-text">' . PHP_EOL . 
'                            <h2><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h2>' . PHP_EOL . 
'                            <p>' . the_excerpt_max_charlength(70) . '</p>' . PHP_EOL .
'                        </div>' . PHP_EOL . 
'                        <a class="read-more" href="' . get_the_permalink() . '">Read More</a>' . PHP_EOL . 
'                    </div>' . PHP_EOL;
    
    endwhile; 
     
    $return_value .= '  </ul>' . PHP_EOL;
     
   wp_reset_postdata(); 
   return $return_value ;
  
  }
   
 add_shortcode( 'bloglist', 'antioch_bloglist' );
 
 function the_excerpt_max_charlength($charlength) {
    $excerpt = get_the_excerpt();
    $charlength++;
    $output = '';

    if ( mb_strlen( $excerpt ) > $charlength ) {
      $subex = mb_substr( $excerpt, 0, $charlength - 5 );
      $exwords = explode( ' ', $subex );
      $excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
      if ( $excut < 0 ) {
        $output = mb_substr( $subex, 0, $excut );
      } else {
        $output = $subex;
      }
    $output .= '...';
	} else {
		$output = $excerpt;
	}
  return $output;
}

 function the_content_max_charlength($charlength, $excerpt) {
	//$excerpt = get_the_excerpt();
	$charlength++;
  $output = '';

	if ( mb_strlen( $excerpt ) > $charlength ) {
		$subex = mb_substr( $excerpt, 0, $charlength - 5 );
		$exwords = explode( ' ', $subex );
		$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
		if ( $excut < 0 ) {
			$output = mb_substr( $subex, 0, $excut );
		} else {
			$output = $subex;
		}
		$output .= '...';
	} else {
		$output = $excerpt;
	}
  return $output;
}


 remove_shortcode( 'physical_address_maplink', 'physical_address_maplink' );

 function antioch_physical_address_maplink( $atts, $content = null, $tag) {
  
    $value = stripcslashes(get_option(SHORTCODE_PREFIX.$tag));

    if(isset($atts['format'])) {
      if($atts['format'] == 'raw') {
        return $value;
      }
    }

    $atts = shortcode_atts( array('format' => '',
                          ), $atts, $tag );

    if($atts['format'] == 'raw')
      return $value;

    if((trim($value)!="") && ($atts['format'] != 'raw'))   return "<a href=\"{$value}\" target=\"_blank\">Map...</a>";

    return $value;
        
 }
 
 add_shortcode( 'physical_address_maplink', 'antioch_physical_address_maplink' );

function CBThemeWelcomeCenterAd()
{ 
  ?>
    <a id='WelcomeCenterBox' title='Visit our Welcome Center!' href='<?php echo home_url('/');?>welcome-center/welcome/' class='button' style='color:#FFF'>
        <div class=line1>New Here?</div>
        <div class=line2>Visit the Welcome Center!</div>
    </a>
  <?php 

} 

function slug_excerpt_limit( $id=null, $max=55, $string=null, $post_id ) {
    //if we have an ID use to shorten post excerpt
    if ( !is_null( $id ) )  {
    //get the defined excerpt
        $excerpt = get_post_field( 'post_excerpt', $id );
        //make sure there was an excerpt, if not get the post content.
        if ( strlen( $excerpt ) === 0 ) {
            $excerpt = get_post_field( 'post_content', $id );
        }
    }
    else {
        //if $id was null and we have something for string use that else set $excerpt to '' so we can retrn nothing instead of an error.
        if ( !is_null( $string ) ) {
            $excerpt = $string;
        }
        else {
            $excerpt = '';
        }
    }
    
    $read_more_link = '&nbsp;<a href="' . get_the_permalink($post_id) .'">Read More</a>';
    //shorten without splitting words if $excerpt is shorter than max. Else just return $excerpt
    if ( strlen( $excerpt ) > $max ) {
        $subex = mb_substr( $excerpt, 0, $max );
        $exwords = explode( ' ', $subex );
        $excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
        if ( $excut < 0 ) {
            return mb_substr( $subex, 0, $excut ) . $read_more_link;
        } else {
            return $subex . $read_more_link;
        }
    }
    else {
        return $excerpt;
    }
}

// Add Shortcode
//[link-button text="" link=""]
function link_button( $atts ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'text' => 'Click Here',
			'link' => '',
		), $atts )
	);
  
  return '<h2 style="clear:both"><a title="' . $atts['text'] . '" href="' . $atts['link'] . '" class="button">' . $atts['text'] . '</a></h2>';
}

add_shortcode( 'link-button', 'link_button' );

function churchbuzz_foundation_init()
{
  echo '<script>jQuery(document).foundation();</script>';
}

// add user title field to user profile
add_action( 'wp_footer', 'churchbuzz_foundation_init', 9999 );

add_action( 'show_user_profile', 'my_show_extra_profile_fields' );
add_action( 'edit_user_profile', 'my_show_extra_profile_fields' );

function my_show_extra_profile_fields( $user ) { ?>

	<h3>Extra Profile Information</h3>

	<table class="form-table">

		<tr>
			<th><label for="user_title">Title</label></th>

			<td>
				<input type="text" name="user_title" id="user_title" value="<?php echo esc_attr( get_the_author_meta( 'user_title', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter your title.</span>
			</td>
		</tr>

	</table>
<?php }

add_action( 'personal_options_update', 'my_save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'my_save_extra_profile_fields' );

function my_save_extra_profile_fields( $user_id ) {

	if ( !current_user_can( 'edit_user', $user_id ) )
		return false;

	/* Copy and paste this line for additional fields. Make sure to change 'twitter' to the field ID. */
	update_usermeta( $user_id, 'user_title', $_POST['user_title'] );
}

add_filter( 'getimagesize_mimes_to_exts', 'add_ico_mime', 99999 );
add_filter( 'upload_mimes', 'add_ico_ext', 99999 );

/*Add Ico Mime Type to Allowed Extension*/
function add_ico_mime( $mime ) {
  $mime[ 'image/vnd.microsoft.icon' ] = "ico";
  $mime[ 'image/x-icon' ]             = "ico";
  $mime[ 'image/ico' ]                = "ico";
  return $mime;
}

/*Add Ico File Extension to Allowed Mimes*/
function add_ico_ext( $site_mimes ) {
  if (isset($site_mimes['ico']) === false) $site_mimes['ico'] = 'image/vnd.microsoft.icon';
  return $site_mimes;
}

add_filter( 'wp_mime_type_icon', function( $icon, $mime, $post_id )
{
    if( $src = false || 'image/x-icon' === $mime && $post_id > 0 )
        $src = wp_get_attachment_image_src( $post_id );

    return is_array( $src ) ? array_shift( $src ) : $icon;
}, 10, 3 );

/*
* Creating a function to create our CPT
*/

function custom_post_type() {

// Set UI labels for Custom Post Type
 $labels = array(
  'name'                => _x( 'News', 'Post Type General Name', 'NorthTexasUMC 2016' ),
  'singular_name'       => _x( 'News', 'Post Type Singular Name', 'NorthTexasUMC 2016' ),
  'menu_name'           => __( 'News', 'NorthTexasUMC 2016' ),
  'parent_item_colon'   => __( 'Parent News', 'NorthTexasUMC 2016' ),
  'all_items'           => __( 'All News', 'NorthTexasUMC 2016' ),
  'view_item'           => __( 'View News', 'NorthTexasUMC 2016' ),
  'add_new_item'        => __( 'Add New News', 'NorthTexasUMC 2016' ),
  'add_new'             => __( 'Add News', 'NorthTexasUMC 2016' ),
  'edit_item'           => __( 'Edit News', 'NorthTexasUMC 2016' ),
  'update_item'         => __( 'Update News', 'NorthTexasUMC 2016' ),
  'search_items'        => __( 'Search News', 'NorthTexasUMC 2016' ),
  'not_found'           => __( 'News Not Found', 'NorthTexasUMC 2016' ),
  'not_found_in_trash'  => __( 'News Not found in Trash', 'NorthTexasUMC 2016' ),
  
 );
 
// Set other options for Custom Post Type
 
 $args = array(
  'label'               => __( 'News', 'NorthTexasUMC 2016' ),
  'description'         => __( 'news and reviews', 'NorthTexasUMC 2016' ),
  'labels'              => $labels,
  // Features this CPT supports in Post Editor
  'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
  // You can associate this CPT with a taxonomy or custom taxonomy. 
  'taxonomies'          => array( 'genres' ),
  /* A hierarchical CPT is like Pages and can have
  * Parent and child items. A non-hierarchical CPT
  * is like Posts.
  */ 
  'hierarchical'        => false,
  'public'              => true,
  'show_ui'             => true,
  'show_in_menu'        => true,
  'show_in_nav_menus'   => true,
  'show_in_admin_bar'   => true,
  'menu_position'       => 5,
  'can_export'          => true,
  'has_archive'         => true,
  'exclude_from_search' => false,
  'publicly_queryable'  => true,
  'capability_type'     => 'page',
  'taxonomies' => array('topics', 'category',),
 );
 
 // Registering your Custom Post Type
 register_post_type( 'news', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'custom_post_type', 0 ); 
function ThemeNTC2016_searchform( $form ) {


     $form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >

     <div><label class="screen-reader-text" for="s">' . __('Search for:') . '</label>
            <input type="text" value="' . get_search_query() . '" name="s" id="s" />

     <input type="submit" id="searchsubmit" value="'. esc_attr__('Search') .'" />


     </form>';

  
     return $form;

 }
 add_shortcode('NTC_Theme_search', 'ThemeNTC2016_searchform');
 function front_page_news_sidebar(){ ?>
	 <ul class="ourlist ql-normal">
                    <?php
                    $args1 = array( 'category_name' => 'North Texas Conference UMC', 'category'=>217,'post_type' => 'news','posts_per_page' => 40, 'order'=> 'ASC', 'orderby' => 'id' );
                     $loop1 = new WP_Query( $args1 );
  while ( $loop1->have_posts() ) : $loop1->the_post();?>
                    <li><div style="float: left; padding-top: 5px;"><?php the_post_thumbnail(); ?></div><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a> </li>
                    <?php
                    endwhile; 
                    wp_reset_postdata();
                    ?>         
                </ul>
 <?php }
 add_shortcode('front-sidebar','front_page_news_sidebar'); 