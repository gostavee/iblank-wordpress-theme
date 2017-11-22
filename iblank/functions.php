<?php
/**
 * iblank functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage iblank
 * @since 1.0
 * @version 1.0
 */
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function iblank_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentyseventeen
	 * If you're building a theme based on Twenty Seventeen, use a find and replace
	 * to change 'twentyseventeen' to the name of your theme in all the template files.
	 */
	//load_theme_textdomain( 'iblank' );
  // Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
  /*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
  /*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'iblank-featured-image', 1900, 1200, true );

	add_image_size( 'iblank-thumbnail-avatar', 100, 100, true );
  // This theme uses wp_nav_menu() in two locations.
	register_nav_menus(
    array(
      'main'    => __( 'Main Menu', 'iblank' ),
		  'social' => __( 'Social Links Menu', 'iblank' ),
	  )
  );
  // Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );
  // Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'iblank_setup' );
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function iblank_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'iblank' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'twentyseventeen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'iblank_widgets_init' );
/*
* add custom javascript/css
*/
function wpb_adding_scripts() {
	/*** css ***/
	wp_register_style('bootstrap', get_theme_file_uri() . '/css/bootstrap.min.css');
	wp_register_style('swiper', get_theme_file_uri() . '/css/swiper.min.css');
	wp_enqueue_style('bootstrap');
	wp_enqueue_style('swiper');
	/*** javascript ***/
	wp_register_script('jquery', get_theme_file_uri() . '/js/jquery.min.js',array( 'jquery' ) );
	wp_register_script('bootstrap', get_theme_file_uri() . '/js/bootstrap.min.js',array( 'jquery' ),true );
	wp_register_script('swiper', get_theme_file_uri() . '/js/swiper.min.js',array( 'jquery' ) ,true );
	wp_register_script('main', get_theme_file_uri() . '/js/main.js',array( 'jquery' ),true);
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap');
	wp_enqueue_script('swiper');
	wp_enqueue_script('main');
}
add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts');
/**
* add siteorigin custom widgets
*/
function add_my_custom_widgets_collection($folders){
    $folders[] = plugin_dir_path(__FILE__).'widgets/';
    return $folders;
}
add_filter('siteorigin_widgets_widget_folders', 'add_my_custom_widgets_collection');
/*
* Installing required plugins for theme
*/
include_once(plugin_dir_path(__FILE__) .'/plugins/class-tgm-plugin-activation.php');
function my_theme_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	include_once(plugin_dir_path(__FILE__).'/plugins.php');
	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );
/************
* theme options
*/
function customize_theme_options($wp_customize) {
  /**************************************************************************/
	/************************* Add custom theme settings ***********************/
	/**************************************************************************/
	$wp_customize->add_section('header_title',array(
		'title' => _('Header Title'),
		'priority' => 20,
	));
  $wp_customize->add_setting('first_title',array(
		'default' => 'text go here',
		'transport' => 'refresh'
	));
  $wp_customize->add_setting('second_title',array(
		'default' => 'text go here',
		'transport' => 'refresh'
	));
  $wp_customize->add_control('first_title_ctrl', array(
		'label' => _('First Title'),
		'section' => 'header_title',
		'settings' => 'first_title',
    'type' => 'text'
	));
  $wp_customize->add_control('second_title_ctrl', array(
		'label' => _('Second Title'),
		'section' => 'header_title',
		'settings' => 'second_title',
    'type' => 'text'
	));
	/**************************************************************************/
	/************************* Custom theme COLOR SECTION **********************************/
	/**************************************************************************/
	$wp_customize->add_section('theme_colors',array(
		'title' => _('Theme Colors'),
		'priority' => 30,
	));
	/***************************/
	/*** SETTINGS ***/
	/***************************/
  /**
  * Primary
  */
	$wp_customize->add_setting('primary_color',array(
		'default' => '#252525',
		'transport' => 'refresh'
	));
  $wp_customize->add_setting('primary_color_hover',array(
		'default' => '#28b1f2',
		'transport' => 'refresh'
	));
	$wp_customize->add_setting('primary_color_bg',array(
		'default' => '#ffffff',
		'transport' => 'refresh'
	));
  $wp_customize->add_setting('primary_color_bg_hover',array(
		'default' => '#ffffff',
		'transport' => 'refresh'
	));
  /**
  * Secondary
  */
	$wp_customize->add_setting('secondary_color',array(
		'default' => '#252525',
		'transport' => 'refresh'
	));
  $wp_customize->add_setting('secondary_color_hover',array(
		'default' => '#252525',
		'transport' => 'refresh'
	));
	$wp_customize->add_setting('secondary_color_bg',array(
		'default' => '#ffffff',
		'transport' => 'refresh'
	));
  $wp_customize->add_setting('secondary_color_bg_hover',array(
		'default' => '#ffffff',
		'transport' => 'refresh'
	));
  /**
  * Footer
  */
  $wp_customize->add_setting('footer_color_bg',array(
		'default' => '#221e20',
		'transport' => 'refresh'
	));
	/***************************/
	/*** CONTROLS ***/
	/***************************/
  /**
  * Primary
  */
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'primary_color_ctrl', array(
		'label' => _('Primary Color'),
		'section' => 'theme_colors',
		'settings' => 'primary_color'
	)));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'primary_color_hover_ctrl', array(
		'label' => _('Primary Color Hover'),
		'section' => 'theme_colors',
		'settings' => 'primary_color_hover'
	)));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'primary_color_bg_ctrl', array(
		'label' => _('Primary Color Background'),
		'section' => 'theme_colors',
		'settings' => 'primary_color_bg'
	)));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'primary_color_bg_hover_ctrl', array(
		'label' => _('Primary Color Background Hover'),
		'section' => 'theme_colors',
		'settings' => 'primary_color_bg_hover'
	)));
  /**
  * Secondary
  */
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'secondary_color_ctrl', array(
		'label' => _('secondary Color'),
		'section' => 'theme_colors',
		'settings' => 'secondary_color'
	)));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'secondary_color_hover_ctrl', array(
		'label' => _('secondary Color Hover'),
		'section' => 'theme_colors',
		'settings' => 'secondary_color_hover'
	)));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'secondary_color_bg_ctrl', array(
		'label' => _('secondary Color Background'),
		'section' => 'theme_colors',
		'settings' => 'secondary_color_bg'
	)));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'secondary_color_bg_hover_ctrl', array(
		'label' => _('secondary Color Background Hover'),
		'section' => 'theme_colors',
		'settings' => 'secondary_color_bg_hover'
	)));
  /**
  * Footer
  */
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'footer_color_bg_ctrl', array(
		'label' => _('Footer Background Color'),
		'section' => 'theme_colors',
		'settings' => 'footer_color_bg'
	)));
}
add_action('customize_register', 'customize_theme_options');
/************
* output theme options CSS
*/
function customize_theme_options_css() {?>
		<style>
			/**
      * Primary
      */
			.primary-color {
        color: <?php echo get_theme_mod('primary_color','#ffffff'); ?> !important;
      }
      .primary-color:hover {
        color: <?php echo get_theme_mod('primary_color_hover','#ffffff'); ?> !important;
      }
			.primary-color-bg {
				background-color:<?php echo get_theme_mod('primary_color_bg','#58c3b9'); ?> !important;
			}
      .primary-color-bg:hover {
				background-color:<?php echo get_theme_mod('primary_color_bg_hover','#58c3b9'); ?> !important;
			}
      /**
      * Secondary
      */
			.secondary-colorn {
				color: <?php echo get_theme_mod('secondary_color','#ffffff'); ?> !important;
			}
      .secondary-color:hover {
				color: <?php echo get_theme_mod('secondary_color_hover','#ffffff'); ?> !important;
			}
			.secondary-color-bg {
				background-color: <?php echo get_theme_mod('secondary_color_bg','orange'); ?> !important;
			}
      .secondary-color-bg:hover {
				background-color: <?php echo get_theme_mod('secondary_color_bg_hover','orange'); ?> !important;
			}
      /**
      * Footer
      */
      footer {
        background-color: <?php echo get_theme_mod('footer_color_bg','#221e20'); ?> !important;
      }
		</style>
<?php }
add_action('wp_head', 'customize_theme_options_css');
/**
* Custom pagination
*/
function custom_pagination($numpages = '', $pagerange = '', $paged='') {
  if (empty($pagerange)) {
    $pagerange = 2;
  }
  /**
   * This first part of our function is a fallback
   * for custom pagination inside a regular loop that
   * uses the global $paged and global $wp_query variables.
   *
   * It's good because we can now override default pagination
   * in our theme, and use this function in default quries
   * and custom queries.
   */
  global $paged;
  if (empty($paged)) {
    $paged = 1;
  }
  if ($numpages == '') {
    global $wp_query;
    $numpages = $wp_query->max_num_pages;
    if(!$numpages) {
        $numpages = 1;
    }
  }
  /**
   * We construct the pagination arguments to enter into our paginate_links
   * function.
   */
  $pagination_args = array(
    'base'            => get_pagenum_link(1) . '%_%',
    'format'          => 'page/%#%',
    'total'           => $numpages,
    'current'         => $paged,
    'show_all'        => False,
    'end_size'        => 1,
    'mid_size'        => $pagerange,
    'prev_next'       => True,
    'prev_text'       => __('&laquo;'),
    'next_text'       => __('&raquo;'),
    'type'            => 'plain',
    'add_args'        => false,
    'add_fragment'    => ''
  );
  $paginate_links = paginate_links($pagination_args);
  if ($paginate_links) {
    echo "<nav class='custom-pagination'>";
      echo $paginate_links;
    echo "</nav>";
  }
}
