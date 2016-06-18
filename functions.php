<?php

//Add scripts and stylesheets
function strapless_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6' );
	wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/blog.css' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.6', true );
}

add_action( 'wp_enqueue_scripts', 'strapless_scripts' );

// Add Google Fonts
function strapless_google_fonts() {
				wp_register_style('Open Sans', 'https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic');
				wp_enqueue_style( 'Open Sans');
				
				wp_register_style('Lato', 'https://fonts.googleapis.com/css?family=Lato:400,700,300');
				wp_enqueue_style( 'Lato');
				
				wp_register_style('Cabin', 'https://fonts.googleapis.com/css?family=Cabin:500');
				wp_enqueue_style('Cabin');
		}

add_action('wp_print_styles', 'strapless_google_fonts');



//theme supports
// WordPress Titles
add_theme_support( 'title-tag' );

// Support Featured Images
add_theme_support( 'post-thumbnails' );



//add global variables:
// Custom settings
function custom_settings_add_menu() {
  add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99);
}
add_action( 'admin_menu', 'custom_settings_add_menu' );

// Create Custom Global Settings page
function custom_settings_page() { ?>
  <div class="wrap">
    <h1>Custom Settings</h1>
    <form method="post" action="options.php">
       <?php
           settings_fields('section');
           do_settings_sections('theme-options');      
           submit_button(); 
       ?>          
    </form>
  </div>
<?php }

//methods for setting globals
// Twitter
function set_twitter() { ?>
  <input type="text" name="twitter" id="twitter" value="<?php echo get_option('twitter'); ?>" />
<?php }

//email
function set_email() { ?>
  <input type="text" name="email" id="email" value="<?php echo get_option('email'); ?>" />
<?php }

//facebook
function set_facebook() { ?>
  <input type="text" name="facebook" id="facebook" value="<?php echo get_option('facebook'); ?>" />
<?php }

//website_2
function set_website_2() { ?>
  <input type="text" name="website_2" id="website_2" value="<?php echo get_option('website_2'); ?>" />
<?php }

function set_patreon() { ?>
  <input type="text" name="patreon" id="patreon" value="<?php echo get_option('patreon'); ?>" />
<?php }

//custom menu page setup
function custom_settings_page_setup() {
  add_settings_section('section', 'All Settings', null, 'theme-options');
  
  add_settings_field('twitter', 'Twitter URL', 'set_twitter', 'theme-options', 'section');
  add_settings_field('email', 'email address', 'set_email', 'theme-options', 'section');
  add_settings_field('facebook', 'Facebook URL', 'set_facebook', 'theme-options', 'section');
  add_settings_field('website_2', 'Additional website URL', 'set_website_2', 'theme-options', 'section');
  add_settings_field('patreon', 'Patreon URL', 'set_patreon', 'theme-options', 'section');

  register_setting('section', 'twitter');
  register_setting('section', 'email');
  register_setting('section', 'facebook');
  register_setting('section', 'website_2');
  register_setting('section', 'patreon');
}
add_action( 'admin_init', 'custom_settings_page_setup' );


// Custom Post Type. Loops in page-custom.php
function create_custom_post() {
	register_post_type('custom-post',
			array(
			'labels' => array(
					'name' => __('Custom Post'),
					'singular_name' => __('Custom Post'),
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array(
					'title', 
					'editor',
					'thumbnail',
				  'custom-fields'
			)
	));
}
add_action('init', 'create_custom_post');


