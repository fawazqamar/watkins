<?php
/**
 * Template Name: Home Template
 */

get_header();
$home_links_footers = null;
?>
    <section class="container home-body">
		<?php if ( have_rows( 'pages_block_components' ) ) :
			while ( have_rows( 'pages_block_components' ) ) : the_row();

				if ( get_row_layout() == 'blocks_2col' ) {
					$home_links_footers                   = get_sub_field( 'links' );
					include get_theme_file_path( 'template-parts/components/text-2col.php' );
				}
				if ( get_row_layout() == 'blocks_2col_links' ) {
					$page_label = 'hydrovet';
					$footer_links                   = get_sub_field( 'links' );
					include get_theme_file_path( 'template-parts/components/block-2col-links.php' );
				}
				if ( get_row_layout() == 'block_full_width_text' ) {
					include get_theme_file_path( 'template-parts/components/full-width-text.php' );
				}
				if ( get_row_layout() == 'carousel_block' ) {
					include get_theme_file_path( 'template-parts/components/carousel.php' );
				}

				if ( get_row_layout() == 'accordion_block' ) {
					include get_theme_file_path( 'template-parts/components/accordion.php' );
				}

			endwhile;
		endif; ?>

        <!-- home links in mobile screen -->
	    <?php if ( $home_links_footers ) : ?>
            <ul class="home-links-mobile fade-in">

			    <?php foreach ( $home_links_footers as $link ) : $link = ( isset( $link['link'] ) ) ? $link['link'] : null; ?>
				    <?php if ( $link ): ?>
                        <li>
                            <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"
                               title="<?php echo $link['title']; ?>">
							    <?php echo $link['title']; ?>
                            </a>
                        </li>
				    <?php endif; ?>

			    <?php endforeach; ?>

            </ul>
	    <?php endif; ?>

    </section>

<?php
get_sidebar();
get_footer();
