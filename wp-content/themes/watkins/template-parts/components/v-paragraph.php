<?php
//$v_left_navigations  = get_field( 'v_text_blocks' );
$v_text_blocks = get_field( 'v_text_blocks' );
//$bullet_list         = get_sub_field( 'bullet_list' );
//$paragraph_list_text = get_sub_field( 'paragraph_list_text' );

//$is_list = false;
//if ( isset( $page_label ) && $page_label == 'text_list' ) {
//	$is_list = true;
//}

//echo '<pre>';print_r( $v_text_blocks ); exit;


?>

<div class="v-heading">
    <h2><?php the_title(); ?></h2>
</div>
<div class="v-aside">
    <ul>
		<?php foreach ( $v_text_blocks as $v_text_block ): ?>
            <li>
                <a href="#<?php echo $v_text_block['v_page_heading']; ?>"
                   title="<?php echo $v_text_block['v_page_heading']; ?>" class="v-link">
					<?php echo $v_text_block['v_page_heading']; ?>
                </a>
            </li>
		<?php endforeach; ?>
    </ul>
</div>
<div class="v-content">
	<?php foreach ( $v_text_blocks as $v_text_block ): ?>
        <div class="v-paragraph" id="<?php echo $v_text_block['v_page_heading']; ?>">

			<?php foreach ( $v_text_block['v_paragrpahs'] as $v_paragraph ):

				$list_type = $v_paragraph['v_group']['v_list_type'];
				$list_type_id = '';
				if ( $list_type == 'default' ) {
					$list_type_id = 'v-list';
				} elseif ( $list_type == 'heart' ) {
					$list_type_id = 'heart';
				}

				?>

                <div class="text-1 v-list-para list-type<?php echo '-' . $list_type_id; ?>">
					<?php echo $v_paragraph['v_group']['text']; ?>
					<?php echo $v_paragraph['v_group']['list']; ?>
                </div>

                <div class="v-benefits"><div class="">&nbsp;</div></div>

			<?php endforeach; ?>


        </div>

	<?php endforeach; ?>

</div>