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

	<?php
	$teams_heading = get_field( 'teams_heading' );
	$teams_desc    = get_field( 'teams_desc' );

	?>

    <section class="container">
        <div class="team-intro">
            <h2 class="page-heading"><?php echo $teams_heading ;?></h2>
            <?php echo $teams_desc ;?>
        </div>
    </section>

    <section class="container fade-in" style="margin-top: 0; padding-top: 0;">
        <div class="team-container">
            <!-- filters -->
            <ul class="team-filter">
                <li>
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/heart.png" alt="watkins-logo"/>
                    <button
                            class="filter-btn active"
                            data-filter="all">
                        All
                    </button>
                </li>
                <li>
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/heart.png" alt="watkins-logo"/>
                    <button
                            class="filter-btn">
                        Vet team
                    </button>
                </li>
                <li>
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/heart.png" alt="watkins-logo"/>
                    <button
                            class="filter-btn">
                        Nursing team
                    </button>
                </li>
                <li>
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/heart.png" alt="watkins-logo"/>
                    <button
                            class="filter-btn">
                        Admin team
                    </button>
                </li>
                <li><span class="divider"></span></li>
                <li>
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/heart.png" alt="watkins-logo"/>
                    <button
                            class="filter-btn">
                        Vacancies
                    </button>
                </li>
            </ul>
            <!-- team members -->
            <!-- <div class="team-carousel"> -->
            <div class="team-members-container">
                <div class="team-carousel">
                    <ul class="team-carousel team">
                        <a class="member" data-category="vet" href="../pages/member.html">
                            <img
                                    src="<?php bloginfo('template_url'); ?>/assets/images/placeholder.png"
                                    alt=""
                                    class="member-image"/>
                            <div class="member-details">
                                <h3 class="member-name">Test User</h3>
                                <p class="member-profession">software developer</p>
                                <span class="divider"></span>
                                <p class="member-designation">Owner</p>
                            </div>
                        </a>
                        <a class="member" data-category="vet" href="../pages/member.html">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/placeholder.png" alt=""/>

                            <div class="member-details">
                                <h3 class="member-name">Test User</h3>
                                <p class="member-profession">software developer</p>
                                <span class="divider"></span>
                                <p class="member-designation">Owner</p>
                            </div>
                        </a>
                        <a class="member" data-category="vet" href="../pages/member.html">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/placeholder.png" alt=""/>

                            <div class="member-details">
                                <h3 class="member-name">Test User</h3>
                                <p class="member-profession">software developer</p>
                                <span class="divider"></span>
                                <p class="member-designation">Owner</p>
                            </div>
                        </a>
                        <li class="member" data-category="vet">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/placeholder.png" alt=""/>

                            <div class="member-details">
                                <h3 class="member-name">Test User</h3>
                                <p class="member-profession">software developer</p>
                                <span class="divider"></span>
                                <p class="member-designation">Owner</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="btn-wrap mt-2">
                    <button class="prev-btn">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/Asset 3.png" alt=""/>
                    </button>
                    <button class="next-btn">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/Asset 3.png" alt=""/>
                    </button>
                </div>
            </div>
        </div>
    </section>


<?php else: ?>

<?php endif; ?>

<?php
get_sidebar();
get_footer();
