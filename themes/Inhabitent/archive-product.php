<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>

<?php
//$terms = get_terms( array(
 //   'taxonomy' => 'product-type',
  //  'hide_empty' => false,
//) );
?>
<?php
   $args = array( 'post_type' => 'product-type' );
   $product_terms = get_terms( $args ); // returns an array of posts
?>
<div class='product-type-shop-stuff'>
	<?php foreach ( $product_terms as $term ):; ?>
		<a class='shop-stuff-links'><?php echo $term->name ?></a>
	<?php endforeach; wp_reset_postdata(); ?>
</div>


			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>