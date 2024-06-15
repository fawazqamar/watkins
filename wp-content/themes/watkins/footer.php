<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Watkins
 */

$footer_logos        = get_field( 'footer_logos', 'option' );
$footer_blocks       = get_field( 'footer_blocks', 'option' );
$footer_links        = get_field( 'footer_links', 'option' );
$footer_social_links = get_field( 'footer_social_links', 'option' );
?>

<!-- footer Section -->
<footer class="bg-main footer-container">

	<?php if ( $footer_logos ) : ?>
        <section class="footer-logos">
			<?php foreach ( $footer_logos as $footer_logo ) : $image = ( isset( $footer_logo['image'] ) && ! empty( $footer_logo['image'] ) ) ? $footer_logo['image'] : null;
				if ( empty( $image ) ) {
					continue;
				}
				?>
                <img src="<?php echo esc_url( $image['url'] ); ?>"
                     alt="<?php echo esc_attr( $image['alt'] ); ?>"/>
			<?php endforeach; ?>
        </section>
	<?php endif; ?>

    <div class="footer-links">
		<?php if ( $footer_blocks ) : ?>
            <ul class="f-links">
				<?php foreach ( $footer_blocks as $footer_block ) : ?>
                    <li class="link-item">
                        <h3><?php echo $footer_block['location_heading']; ?></h3>
                        <ul>
                            <li><?php echo $footer_block['location_address']; ?></li>
                        </ul>
                        <a href="tel:"><?php echo $footer_block['location_number']; ?> </a>
                        <a href="mail:<?php echo $footer_block['location_email_address']; ?>">
							<?php echo $footer_block['location_email_address']; ?>
                        </a>
                    </li>
				<?php endforeach; ?>
            </ul>
		<?php endif; ?>

        <div class="footer-nav">

			<?php if ( $footer_links ) : ?>
                <ul class="footer-nav-links">
					<?php foreach ( $footer_links as $footer_link ) : $link = ( isset( $footer_link['link'] ) ) ? $footer_link['link'] : null; ?>
                        <li>
                            <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"
                               title="<?php echo $link['title']; ?>"> <?php echo $link['title']; ?> </a>
                        </li>
					<?php endforeach; ?>
                </ul>
			<?php endif; ?>


	        <?php if ( $footer_social_links ) : ?>
                <ul class="social-links">
                    <?php foreach ( $footer_social_links as $footer_social_link ) : $link = ( isset( $footer_social_link['link'] ) ) ? $footer_social_link['link'] : null;  ?>

                    <?php
                    echo '<li>';
                        //  add switch

                    if($link == 'twitter'){
                        $icon = '<a href="#" class="link-twitter"><i class="fa-brands fa-x-twitter"></i></a>';
                    }
                    if($link == 'insta'){
                        $icon = '<a href="#" class="link"><i class="fa-brands fa-instagram"></i></a>';
                    }
                    if($link == 'fb'){
                        $icon = '<a href="#" class="link-facebook"><i class="fa-brands fa-facebook-f"></i></a>';
                    }
                    if($link == 'ws'){
                        $icon = '<a href="#" class="link"><i class="fa-brands fa-whatsapp"></i></a>';
                    }
                    if($link == 'in'){
                        $icon = '<a href="#" class="link"><i class="fa-brands fa-linkedin-in"></i></a>';

                    }
                    if($link == 'tg'){
                        $icon = '<a href="#" class="link-telegram"><i class="fa-brands fa-telegram"></i></a>';
                    }
                    echo $icon;



                        echo '</li>';

                        ?>


                    <?php endforeach; ?>
                </ul>

	        <?php endif; ?>



        </div>
    </div>
</footer>
</div><!-- #page -->

<script
        type="text/javascript"
        src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js"></script>
<?php wp_footer(); ?>

</body>
</html>
