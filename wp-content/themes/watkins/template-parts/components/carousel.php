<?php
$carousel_items = get_sub_field( 'carousel_item' );
$links          = get_sub_field( 'links' );
?>

<?php if ( $carousel_items ) : ?>
    <div class="carousel-container">
        <div class="owl-slider">

            <div class="owl-carousel owl-theme">
				<?php

				foreach ( $carousel_items as $carousel_item ) : $image = ( isset( $carousel_item['carousel_image'] ) && ! empty( $carousel_item['carousel_image'] ) ) ? $carousel_item['carousel_image'] : null;

					?>
					<?php
					if ( ! empty( $image ) ): ?>
                        <div class="item">
                            <img src="<?php echo esc_url( $image['url'] ); ?>"
                                 alt="<?php echo esc_attr( $image['alt'] ); ?>"/>

                        </div>
					<?php endif; ?>
				<?php endforeach; ?>

            </div>

        </div>
        <div class="btn-wrap">
            <button class="prev-btn">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/Asset 3.png" alt=""/>
            </button>
            <button class="next-btn">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/Asset 3.png" alt=""/>
            </button>
        </div>
    </div>
<?php endif; ?>