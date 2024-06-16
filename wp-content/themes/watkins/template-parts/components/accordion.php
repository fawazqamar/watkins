<?php
$accordions = get_sub_field( 'accordions' );




if(isset($page_label) && $page_label == 'phc') {
	echo '<div class="phc-collaps">';
}
?>


<div class="accordian-container">
    <div class="accordion">
        <?php if ( $accordions ) : ?>
            <?php foreach ( $accordions as $accordion ) : ?>
                <div class="accordion-item fade-in">
                    <div class="accordion-header">
                        <h3 <?php if(isset($page_label) && $page_label == 'phc') echo 'class="color-white"';?>><?php echo $accordion['heading']; ?></h3>
                        <span class="accordion-toggle">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/Asset 4.png" alt="" />
                        </span>
                    </div>
                    <div class="accordion-content">
                        <div <?php if(isset($page_label) && $page_label == 'phc') echo 'class="color-white"';?>>
                        <p><?php echo $accordion['desc']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>

<?php
if(isset($page_label) && $page_label == 'phc') {
	echo '</div>';
}
?>