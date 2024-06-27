<?php
$desc                    = get_sub_field( 'desc' );
$large_heading           = get_sub_field( 'large_heading' );
$links                   = get_sub_field( 'links' );
$links_below_right_block = get_sub_field( 'links_below_right_block' );
$right_desc              = get_sub_field( 'right_desc' );


$container_class = 'hydro-container';
$intro_class = 'hydro-intro';
$desc_class = 'hydro-desc';

if(isset($page_label) && $page_label == 'services') {
    $container_class = 'service-container';
    $intro_class = 'services-intro';
    $desc_class = 'page-desc';
}

?>
<div class="<?php echo $container_class;?>">

    <div class="<?php echo $intro_class;?>">
		<?php if ( $large_heading ) : ?>

			<?php echo $large_heading; ?>

		<?php endif; ?>

        <div class="page-desc">
		    <?php echo $desc; ?>
        </div>
    </div>

    <div class="<?php echo $desc_class;?>">
		<?php if ( $right_desc ) : ?>
			<?php echo $right_desc; ?>
		<?php endif; ?>

		<?php if ( $links_below_right_block ) : ?>
			<?php foreach ( $links_below_right_block as $link ) : $link = ( isset( $link['link'] ) ) ? $link['link'] : null; ?>
				<?php if ( $link ): ?>
                    <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"
                       title="<?php echo $link['title']; ?>" class="appointment-cta">
						<?php echo $link['title']; ?>
                    </a>
				<?php endif; ?>
			<?php endforeach; ?>
		<?php endif; ?>

		<?php if ( $links ) : ?>
            <ul class="home-links">
				<?php foreach ( $links as $link ) : $link = ( isset( $link['link'] ) ) ? $link['link'] : null; ?>
					<?php if ( $link ): ?>
                        <li>
                            <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"
                               title="<?php echo $link['title']; ?>">
								<?php echo $link['title']; ?>
                            </a>
                        </li>
					<?php endif; ?>
				<?php endforeach; ?>
            </ul>
		<?php endif; ?>

    </div>





</div>