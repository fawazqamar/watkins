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
                    <img src="../assets/images/heart.png" alt="watkins-logo"/>
                    <button
                            class="filter-btn active"
                            data-filter="all">
                        All
                    </button>
                </li>
                <li>
                    <img src="../assets/images/heart.png" alt="watkins-logo"/>
                    <button
                            class="filter-btn">
                        Vet team
                    </button>
                </li>
                <li>
                    <img src="../assets/images/heart.png" alt="watkins-logo"/>
                    <button
                            class="filter-btn">
                        Nursing team
                    </button>
                </li>
                <li>
                    <img src="../assets/images/heart.png" alt="watkins-logo"/>
                    <button
                            class="filter-btn">
                        Admin team
                    </button>
                </li>
                <li><span class="divider"></span></li>
                <li>
                    <img src="../assets/images/heart.png" alt="watkins-logo"/>
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
                                    src="../assets/images/placeholder.png"
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
                            <img src="../assets/images/placeholder.png" alt=""/>

                            <div class="member-details">
                                <h3 class="member-name">Test User</h3>
                                <p class="member-profession">software developer</p>
                                <span class="divider"></span>
                                <p class="member-designation">Owner</p>
                            </div>
                        </a>
                        <a class="member" data-category="vet" href="../pages/member.html">
                            <img src="../assets/images/placeholder.png" alt=""/>

                            <div class="member-details">
                                <h3 class="member-name">Test User</h3>
                                <p class="member-profession">software developer</p>
                                <span class="divider"></span>
                                <p class="member-designation">Owner</p>
                            </div>
                        </a>
                        <li class="member" data-category="vet">
                            <img src="../assets/images/placeholder.png" alt=""/>

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
                        <img src="../assets/images/Asset 3.png" alt=""/>
                    </button>
                    <button class="next-btn">
                        <img src="../assets/images/Asset 3.png" alt=""/>
                    </button>
                </div>
            </div>
        </div>


        <!-- home links in mobile screen -->
        <ul class="home-links-mobile fade-in">
            <li>
                <a href="/home.html"> About </a>
            </li>
            <li>
                <a href="../pages/book_appointment.html"> Book an appointment </a>
            </li>
            <li>
                <a href="/home.html"> Opening times </a>
            </li>
            <li>
                <a href="../pages/hydro_vet.html"> Hydro.vet </a>
            </li>
            <li>
                <a href="/home.html"> Pet Health Club </a>
            </li>
            <li>
                <a href="/home.html"> More about us </a>
            </li>
        </ul>

    </section>

<?php
get_sidebar();
get_footer();
