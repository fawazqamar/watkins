<?php
$accordions = get_sub_field( 'accordions' );

?>

<div class="accordian-container">
    <div class="accordion">
        <?php if ( $accordions ) : ?>
            <?php foreach ( $accordions as $accordion ) : ?>
                <div class="accordion-item fade-in">
                    <div class="accordion-header">
                        <h3><?php echo $accordion['heading']; ?></h3>
                        <span class="accordion-toggle"
                        ><img src="<?php bloginfo('template_url'); ?>/assets/images/Asset 4.png" alt=""
                            /></span>
                    </div>
                    <div class="accordion-content">
                        <p><?php echo $accordion['desc']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>
