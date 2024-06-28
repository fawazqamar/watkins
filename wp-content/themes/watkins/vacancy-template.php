<?php
/**
 * Template Name: Vacancy Template
 */

get_header();
?>
    <section class="container">
        <div class="vacancy-container">
			<?php include get_theme_file_path( 'template-parts/components/v-paragraph.php' ); ?>
        </div>
    </section>


<?php
get_sidebar();
get_footer();
