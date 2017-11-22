<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage iblank
 * @since 1.0
 * @version 1.0
 */

?>
<?php
  $socials = new WP_Query( array(
    'post_type' => 'social_links',
    'posts_per_page'=>-1));
  $custom_logo_id = get_theme_mod( 'custom_logo' );
  $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
?>
<footer>
  
</footer>
<?php wp_footer(); ?>
</body>
</html>
