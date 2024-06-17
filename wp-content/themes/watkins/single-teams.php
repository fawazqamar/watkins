<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Watkins
 */

get_header();

?>


    <section class="container">
        <h3 class="member-profile-name"><?php the_title() ;?></h3>
        <div class="member-profile-details">
            <div class="avatar">
                <img class="default-img"
                     src="<?php echo get_the_post_thumbnail_url( get_the_ID() ); ?>"
                     alt="<?php the_title(); ?>"/>
                <div class="member-info">
                    <h3 class="name"><?php the_title() ;?></h3>
                    <p class="member-designation"><?php the_field( 'member_designation' ); ?></p>
                    <p class="member-profession"><?php the_field( 'member_role' ); ?></p>
                </div>
            </div>
            <div class="description">
                <?php the_content() ;?>
            </div>
        </div>
    </section>

<?php
get_sidebar();
get_footer();
