<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bryhub-retro
 */
get_header();
?>


    <main id="main" class="site-main home">
        <div class="page-content z-index-1">
			<?php if ( have_posts() ) : ?>
                <header class="page-header">
					<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
					?>
                </header>
                <div class="article-grid">
					<?php
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content', get_post_type() );
					endwhile; ?>
                </div>
				<?php
				the_posts_pagination( array(
					'mid_size' => 2,
                    'prev_text' => _(' ← Newer'),
                    'next_text' => _('Older →')
				) );
			else :
				get_template_part( 'template-parts/content', 'none' );
			endif;
			?>
        </div>

    </main><!-- #main -->


<?php
get_sidebar();
get_footer();
