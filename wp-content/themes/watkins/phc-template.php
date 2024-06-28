<?php
/**
 * Template Name: PHC Template
 */

get_header();
$page_background_color = get_field( 'page_background_color' );
if ( $page_background_color ) {
	$page_background_color = 'style="background-color: ' . $page_background_color . ' !important;"';
}

?>
    <section class="container bg-main mt-0 pt-5" <?php echo $page_background_color; ?> >
		<?php if ( have_rows( 'pages_block_components' ) ) :
			while ( have_rows( 'pages_block_components' ) ) : the_row();

                $page_label = 'phc';

				if ( get_row_layout() == 'blocks_2col' ) {
					include get_theme_file_path( 'template-parts/components/text-2col-phc.php' );
				}
				if ( get_row_layout() == 'carousel_block' ) {
					include get_theme_file_path( 'template-parts/components/carousel.php' );
				}

				if ( get_row_layout() == 'accordion_block' ) {
					include get_theme_file_path( 'template-parts/components/accordion.php' );
				}

			endwhile;
		endif; ?>

    </section>


<?php
get_sidebar();
get_footer();
