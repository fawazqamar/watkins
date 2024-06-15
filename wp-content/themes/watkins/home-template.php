<?php
/**
 * Template Name: Home Template
 */

get_header();
?>

    <!-- main home page markup -->
    <section class="container home-body">
        <div class="home-description-hero">
            <div class="home-description">
                <p>
                    At <span class="color-primary"> Watkins & TaskerVets </span>
                    we know your adored pets mean the world to you. They do to us too.
                    We have friendly, caring vets, dedicated nurses and brilliant
                    support staff, to ensure your pets are in the best possible hands.
                </p>
                <p>
                    Whether routine healthcheck or in a time of need, we'll give your
                    treasured pet the excellent medical, surgical and investigatory
                    healthcare they deserve.
                    <span class="color-primary"> Your vets for adored pets. </span>
                </p>
            </div>
            <ul class="home-links">
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
        </div>
        <!-- owl carousel  -->
        <div class="carousel-container">
            <div class="owl-slider">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/image-1.jpg" alt="" />
                    </div>
                    <div class="item">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/image-2.jpg" alt="" />
                    </div>
                    <div class="item">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/image-3.jpg" alt="" />
                    </div>
                </div>
            </div>
            <div class="btn-wrap">
                <button class="prev-btn">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/Asset 3.png" alt="" />
                </button>
                <button class="next-btn">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/Asset 3.png" alt="" />
                </button>
            </div>
        </div>

        <div class="accordian-container">
            <div class="accordion">
                <div class="accordion-item fade-in">
                    <div class="accordion-header">
                        <h3>Rehabilitation</h3>
                        <span class="accordion-toggle"
                        ><img src="<?php bloginfo('template_url'); ?>/assets/images/Asset 4.png" alt=""
                            /></span>
                    </div>
                    <div class="accordion-content">
                        <p>
                            hydro.vet is our rehabilitation service promoting health and
                            aiding recovery with an individual approach tailored to the
                            needs of your pet.
                        </p>
                        <br />
                        <p>
                            We regularly help arthritic pets feel more comfortable, we can
                            speed up recovery after your pet has had an operation, or can
                            help you with your pet's weight management care plan.
                        </p>
                    </div>
                </div>
                <div class="accordion-item fade-in">
                    <div class="accordion-header">
                        <h3>Hydrotherapy</h3>
                        <span class="accordion-toggle"
                        ><img src="<?php bloginfo('template_url'); ?>/assets/images/Asset 4.png" alt=""
                            /></span>
                    </div>
                    <div class="accordion-content">
                        <p>This is the content for Accordion Item 2.</p>
                    </div>
                </div>
                <div class="accordion-item fade-in">
                    <div class="accordion-header">
                        <h3>Therapeutic laser</h3>
                        <span class="accordion-toggle"
                        ><img src="<?php bloginfo('template_url'); ?>/assets/images/Asset 4.png" alt=""
                            /></span>
                    </div>
                    <div class="accordion-content">
                        <p>This is the content for Accordion Item 2.</p>
                    </div>
                </div>
                <div class="accordion-item fade-in">
                    <div class="accordion-header">
                        <h3>Sports fitness</h3>
                        <span class="accordion-toggle"
                        ><img src="<?php bloginfo('template_url'); ?>/assets/images/Asset 4.png" alt=""
                            /></span>
                    </div>
                    <div class="accordion-content">
                        <p>This is the content for Accordion Item 2.</p>
                    </div>
                </div>
                <div class="accordion-item fade-in">
                    <div class="accordion-header">
                        <h3>Prices</h3>
                        <span class="accordion-toggle"
                        ><img src="<?php bloginfo('template_url'); ?>/assets/images/Asset 4.png" alt=""
                            /></span>
                    </div>
                    <div class="accordion-content">
                        <p>This is the content for Accordion Item 2.</p>
                    </div>
                </div>
                <div class="accordion-item fade-in">
                    <div class="accordion-header">
                        <h3>Meet the team</h3>
                        <span class="accordion-toggle"
                        ><img src="<?php bloginfo('template_url'); ?>/assets/images/Asset 4.png" alt=""
                            /></span>
                    </div>
                    <div class="accordion-content">
                        <p>This is the content for Accordion Item 2.</p>
                    </div>
                </div>
                <div class="accordion-item fade-in">
                    <div class="accordion-header">
                        <h3>Referral information</h3>
                        <span class="accordion-toggle"
                        ><img src="<?php bloginfo('template_url'); ?>/assets/images/Asset 4.png" alt=""
                            /></span>
                    </div>
                    <div class="accordion-content">
                        <p>This is the content for Accordion Item 2.</p>
                    </div>
                </div>
                <div class="accordion-item fade-in">
                    <div class="accordion-header">
                        <h3>Terms and conditions</h3>
                        <span class="accordion-toggle"
                        ><img src="<?php bloginfo('template_url'); ?>/assets/images/Asset 4.png" alt=""
                            /></span>
                    </div>
                    <div class="accordion-content">
                        <p>This is the content for Accordion Item 2.</p>
                    </div>
                </div>

                <!-- Add more accordion items here -->
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
