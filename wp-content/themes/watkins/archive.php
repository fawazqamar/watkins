<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Watkins
 */

get_header();
?>

<?php if ( is_archive() ) : // If blog page ?>

    <section class="container">
        <div class="post-container">
            <aside>
                <h2 class="color-black">Our news</h2>
                <nav>
                    <ul class="post-filter">
						<?php

						$category = get_category( get_query_var( 'cat' ) );
						$cat_id   = $category->cat_ID;

						$categories = get_categories();
						foreach ( $categories as $category ) {
							if ( $category->name == 'Uncategorized' ) {
								continue;
							}
							$active_class = '';
							if ( $cat_id == $category->term_id ) {
								$active_class = 'active';
							}
							echo '<li class="' . $active_class . '">';
							echo '<a href="' . get_category_link( $category->term_id ) . '">';
							echo '<img src="' . get_template_directory_uri() . '/assets/images/heart.png" alt="heart-icon" />';
							echo '<span>' . $category->name . '</span>';
							echo '</a>';
							echo '</li>';
						}
						?>

                    </ul>
                </nav>
            </aside>
            <ul class="blogs-container">
				<?php
				if ( have_posts() ) :

					if ( is_home() && ! is_front_page() ) :
						?>
                        <header>
                            <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                        </header>
					<?php
					endif;

					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/*
						 * Include the Post-Type-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'blog' );

					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
            </ul>
        </div>
    </section>


<?php else: ?>

    <main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

            <header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
            </header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

    </main><!-- #main -->
<?php endif; ?>

<?php
get_sidebar();
get_footer();
