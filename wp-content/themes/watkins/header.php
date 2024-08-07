<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Watkins
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- fontawesome cdn -->
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
            integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"/>
    <!-- owl carousel  -->
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


<div id="page" class="site">

	<?php
	$page_background_color           = get_field( 'page_background_color' );
	if($page_background_color){
		$page_background_color = 'style="background-color: ' . $page_background_color . ' !important;"';
	}
	?>
	<?php if ( is_front_page() ) : ?>
        <div class="pltext pl">
            <p class="pltxt1">WELCOME</p>
            <p class="pltxt2">YOUR VETS FOR ADORDED PETS</p>
        </div>
	<?php endif; ?>

    <!-- navigation -->
	<?php if ( is_front_page() ) : ?>
        <nav class="nav-container p-fixed home-nav">
            <div class="logo">
                <div class="logo-inner">
                    <div class="logo-part1">
                        <img
                                src="<?php bloginfo( 'template_url' ); ?>/assets/images/l1-01.svg"
                                alt="Logo Part 1"
                                class="logo-svg1 logo-svg"/>
                    </div>
                    <div class="logo-part2">
                        <img
                                src="<?php bloginfo( 'template_url' ); ?>/assets/images/l2-01a.svg"
                                alt="Logo Part 2a"
                                class="logo-svg2b logo-svg"
                                id="heart"/>
                        <img
                                src="<?php bloginfo( 'template_url' ); ?>/assets/images/l2-01.svg"
                                alt="Logo Part 2"
                                class="logo-svg2a logo-svg"/>
                    </div>
                    <div class="logo-part3">
                        <img
                                src="<?php bloginfo( 'template_url' ); ?>/assets/images/l3-01.svg"
                                alt="Logo Part 3"
                                class="logo-svg3 logo-svg"/>
                    </div>
                </div>
            </div>
            <div class="menu-toggle" id="menu-toggle">
                <div class="bar1"></div>
                <div class="bar2"></div>
            </div>
        </nav>

	<?php elseif(is_page_template('phc-template.php')) : ?>
        <nav class="nav-container p-fixed home-nav" <?php echo $page_background_color ;?>>
            <div class="logo">
                <div class="logo-inner">
                    <div class="logo-part1">
                        <img
                                src="<?php bloginfo( 'template_url' ); ?>/assets/images/l1-01-light.svg"
                                alt="Logo Part 1"
                                class="logo-svg1 logo-svg"/>
                    </div>
                    <div class="logo-part2">
                        <img
                                src="<?php bloginfo( 'template_url' ); ?>/assets/images/l2-01a.svg"
                                alt="Logo Part 2a"
                                class="logo-svg2b logo-svg"
                                id="heart"/>
                        <img
                                src="<?php bloginfo( 'template_url' ); ?>/assets/images/l2-01.svg"
                                alt="Logo Part 2"
                                class="logo-svg2a logo-svg"/>
                    </div>
                    <div class="logo-part3">
                        <img
                                src="<?php bloginfo( 'template_url' ); ?>/assets/images/l3-01-light.svg"
                                alt="Logo Part 3"
                                class="logo-svg3 logo-svg"/>
                    </div>
                </div>
            </div>
            <div class="menu-toggle" id="menu-toggle">
                <div class="bar1"></div>
                <div class="bar2"></div>
            </div>
        </nav>
	<?php else : ?>

        <nav class="nav-container p-fixed home-nav" <?php echo $page_background_color ;?>>
            <div class="logo">
                <div class="logo-inner">
                    <div class="logo-part1">
                        <img
                                src="<?php bloginfo( 'template_url' ); ?>/assets/images/l1-01.svg"
                                alt="Logo Part 1"
                                class="logo-svg1 logo-svg"/>
                    </div>
                    <div class="logo-part2">

                        <img
                                src="<?php bloginfo( 'template_url' ); ?>/assets/images/l2-01.svg"
                                alt="Logo Part 2"
                                class="logo-svg2a logo-svg"/>
                    </div>
                    <div class="logo-part3">
                        <img
                                src="<?php bloginfo( 'template_url' ); ?>/assets/images/l3-01.svg"
                                alt="Logo Part 3"
                                class="logo-svg3 logo-svg"/>
                    </div>
                </div>
            </div>
            <div class="menu-toggle" id="menu-toggle">
                <div class="bar1"></div>
                <div class="bar2"></div>
            </div>
        </nav>
	<?php endif; ?>

    <!-- animated menu  -->
    <div class="menu">

        <div class="menu-layer"></div>
		<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'menu-1',
				'menu_id'         => 'primary-menu',
				'menu_class'      => 'menu-wrapper',
				'container'       => 'ul',
				'container_class' => 'menu-wrapper',
				'container_id'    => 'menu-wrapper',
			)
		);
		?>

    </div>

