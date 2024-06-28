<?php
/**
 * Template Name: Teams Template
 */

get_header();
?>

<?php
$teams_heading = get_field( 'teams_heading' );
$teams_desc    = get_field( 'teams_desc' );

?>
    <section class="container">
        <div class="team-intro">
            <h2 class="page-heading"><?php echo $teams_heading; ?></h2>
			<?php echo $teams_desc; ?>
        </div>
    </section>

    <section class="container fade-in" style="margin-top: 0; padding-top: 0;">
        <div class="team-container">
            <!-- filters -->
            <ul class="team-filter">

                <li>
                    <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/heart.png" alt="watkins-logo"/>
                    <button class="filter-btn active" data-filter="all">All</button>
                </li>

				<?php

				$terms = get_terms( [
					'taxonomy'   => 'team_categories',
					'hide_empty' => false,
				] );

				foreach ( $terms as $term ) {
					echo '<li>';
					echo '<img src="' . get_bloginfo( 'template_url',
							'display' ) . '/assets/images/heart.png" alt="watkins-logo"/>';
					echo '<button class="filter-btn" data-filter="' . $term->slug . '">' . $term->name . '</button>';
					echo '</li>';
				}

				?>

            </ul>
            <!-- team members -->

            <!-- <div class="team-carousel"> -->
            <div class="team-members-container">
                <div class="team-carousel">
                    <ul class="team-carousel team">

						<?php

						//get posts from custom post type teams
						$args  = array(
							'post_type'      => 'teams',
							'posts_per_page' => - 1,
						);
						$query = new WP_Query( $args );


						if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();

							$team_categories = get_the_terms( get_the_ID(), 'team_categories' );

							?>

                            <li class="member" data-category="<?php echo $team_categories[0]->slug; ?>">
                                <a href="<?php the_permalink() ;?>">
                                    <div class="member-img-container">
                                        <img class="default-img"
                                             src="<?php echo get_the_post_thumbnail_url( get_the_ID() ); ?>"
                                             alt="<?php the_title(); ?>"/>
										<?php $image = get_field( 'hover_image', get_the_ID() ); ?>
										<?php if ( $image && is_array( $image ) ) : ?>
                                            <img class="hover-img" src="<?php echo esc_url( $image['url'] ); ?>"
                                                 alt="<?php echo esc_attr( $image['alt'] ); ?>"/>
										<?php endif; ?>

                                    </div>

                                    <div class="member-details">
                                        <h3 class="member-name"><?php the_title(); ?></h3>
                                        <p class="member-profession"><?php the_field( 'member_role' ); ?></p>
                                        <span class="divider"></span>
                                        <p class="member-designation"><?php the_field( 'member_designation' ); ?></p>
                                    </div>
                                </a>
                            </li>

						<?php endwhile; endif;
						wp_reset_postdata(); ?>

                    </ul>
                </div>
                <div class="btn-wrap mt-2">
                    <button class="prev-btn">
                        <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/Asset 3.png" alt=""/>
                    </button>
                    <button class="next-btn">
                        <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/Asset 3.png" alt=""/>
                    </button>
                </div>
            </div>
        </div>


    </section>

<?php
get_sidebar();
get_footer();
