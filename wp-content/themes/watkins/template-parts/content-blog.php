<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Watkins
 */

?>

<?php if ( is_single()) : ?>

<!--    <div class="post-image">-->
	    <?php watkins_post_thumbnail(); ?>
<!--    </div>-->

    <div class="content">
        <h2 class="color-green">
	        <?php the_title(); ?>
        </h2>
        <div class="matter">
            <?php the_content() ;?>
        </div>
    </div>

<?php else: ?>

    <li id="post-<?php the_ID(); ?>" <?php post_class( 'blog-post' ); ?>>

        <div class="post-image">
			<?php watkins_post_thumbnail(); ?>
        </div>

        <h2 class="color-green post-heading">
            <!--        <a href="--><?php //echo esc_url( get_permalink() ) ;?><!--" title="-->
			<?php //the_title(); ?><!--">-->
			<?php the_title(); ?>
            <!--        </a>-->
        </h2>

        <div class="post-descr">
			<?php the_content(
				sprintf(
					wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Read more<span class="screen-reader-text"> "%s"</span>', 'watkins' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);
			?>
        </div>

    </li><!-- #post-<?php the_ID(); ?> -->

<?php endif; ?>

