<?php
/**
 * @package rai19theme
 */
?>
<?php
// home page footer widget

if(!function_exists('dynamic_sidebar')|| !dynamic_sidebar('logo')):

?>

<?php
endif;
//home page top widget end
?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
// home page footer widget

if(!function_exists('dynamic_sidebar')|| !dynamic_sidebar('cube')):

?>

<?php
endif;
//home page top widget end
?>

		
	

		</main><!-- #main -->
	</div><!-- #primary -->



<?php get_sidebar(); ?>

<?php
// home page footer widget

if(!function_exists('dynamic_sidebar')|| !dynamic_sidebar('client')):

?>

<?php
endif;
//home page top widget end
?>
<?php
// home page footer widget

if(!function_exists('dynamic_sidebar')|| !dynamic_sidebar('wideimage')):

?>

<?php
endif;
//home page top widget end
?>
<?php
// home page footer widget

if(!function_exists('dynamic_sidebar')|| !dynamic_sidebar('map')):

?>

<?php
endif;
//home page top widget end
?>
<?php
// home page footer widget

if(!function_exists('dynamic_sidebar')|| !dynamic_sidebar('sitemap')):

?>

<?php
endif;
//home page top widget end
?>

<?php get_footer(); 
?>


<?php
// home page footer widget

//if(!function_exists('dynamic_sidebar')|| !dynamic_sidebar('footer')):

?>

<?php
//endif;
//home page top widget end
?>

	


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php rai19theme_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'rai19theme' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list( __( ', ', 'rai19theme' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'rai19theme' ) );

			if ( ! rai19theme_categorized_blog() ) {
				// This blog only has 1 category so we just need to worry about tags in the meta text
				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was tagged %2$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'rai19theme' );
				} else {
					$meta_text = __( 'Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'rai19theme' );
				}

			} else {
				// But this blog has loads of categories so we should probably display them here
				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'rai19theme' );
				} else {
					$meta_text = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'rai19theme' );
				}

			} // end check for categories on this blog

			printf(
				$meta_text,
				$category_list,
				$tag_list,
				get_permalink()
			);
		?>

		<?php edit_post_link( __( 'Edit', 'rai19theme' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
