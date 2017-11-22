<?php
/**
 * The main template file
 *
 * This is the most iblank template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage iblank
 * @since 1.0
 * @version 1.0
 */
get_header(); ?>
<main>

	<?php if ( have_posts() ) : ?>
		<?php while(have_posts()) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
	<?php else : ?>
		<?php echo "<h1>No Content To Display</h1>" ?>
	<?php endif; ?>

</main>
<?php get_footer();
