<?php
/**
 * Template Name: Hydrovet Template
 */

get_header();
$footer_links = null;
?>
    <section class="container">
		<?php if ( have_rows( 'pages_block_components' ) ) :
			while ( have_rows( 'pages_block_components' ) ) : the_row();

				if ( get_row_layout() == 'blocks_2col' ) {
                    $page_label = 'hydrovet';
					$footer_links                   = get_sub_field( 'links' );
					include get_theme_file_path( 'template-parts/components/text-2col-hydro.php' );
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
	    <?php if ( $footer_links ) : ?>
            <ul class="home-links-mobile fade-in">
			    <?php foreach ( $footer_links as $link ) : $link = ( isset( $link['link'] ) ) ? $link['link'] : null; ?>
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
