<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package engine
 */

get_header(); ?>

<?php do_action( 'engine_single_post_before' ); ?>

<div class="content-area-wrap container team-member">

	<div id="primary" class="content-area  container">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>


        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        	<header class="entry-header">

        		<?php if ( has_post_thumbnail() ) : ?>
        			<div class="entry-banner">
        				<?php the_post_thumbnail(); ?>
        			</div>
        		<?php endif; ?>

        		<div class="entry-header-text">

        			<?php  the_title( '<h5 class="entry-title">', '</h5>' ); ?>

        		</div>

        	</header><!-- .entry-header -->

        	<div class="entry-content">
        		<?php
        			the_content( sprintf(
        				/* translators: %s: Name of current post. */
        				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'engine' ), array( 'span' => array( 'class' => array() ) ) ),
        				the_title( '<span class="screen-reader-text">"', '"</span>', false )
        			) );

        			wp_link_pages( array(
        				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'engine' ),
        				'after'  => '</div>',
        			) );
        		?>
        	</div><!-- .entry-content -->
        </article><!-- #post-## -->


			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php do_action( 'engine_sidebar' ); ?>

</div>

<?php do_action( 'engine_single_post_after' ); ?>

<?php get_footer(); // Get the Footer
