<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package olly-robinson-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta
		charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-olly-robinson.ico" />
	<link rel="stylesheet"
		href="<?php bloginfo('stylesheet_directory') ?>/public/build/main.css">

	<?php wp_head(); ?>
</head>

<body id="body" class="antialiased" <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'olly-robinson-theme'); ?></a>

		<header class="w-full z-40 fixed top-0 left-0 right-0 py-3 | js-header">
			<div class="container">
				<div class="row flex-start">
					<!-- logo -->
					<div class="col w-3/12 sm:w-6/12 xl:w-5/12 xl:ml-1/12">
						<h1 class="olly-header">
							<a href="#">
								<span class="hidden sm:inline-block">
									Olly Robinson
								</span>
								<span class="inline-block sm:hidden">
									OR
								</span>
							</a>
						</h1>
					</div>

					<?php wp_nav_menu(array(
            'theme_location' => 'main',
            'container' => 'nav',
            'container_class' => 'col w-9/12 sm:w-6/12 xl:w-3/12 xl:mr-1/12 ml-auto',
            'menu_class' => 'flex h-full items-center justify-end'
        )); ?>

					<!-- nav -->
					<!-- <nav class="col w-9/12 sm:w-6/12 xl:w-3/12 xl:mr-1/12 ml-auto">
            <ul class="flex h-full items-center justify-end">
              <li class="paragraph nav-link">
                <a href="#">Email</a>
              </li>
              <li class="paragraph nav-link">
                <a href="#">CV</a>
              </li>
              <li class="paragraph nav-link">
                <a href="#">This Repo</a>
              </li>
              <li class="paragraph nav-link">
                <a href="#">GitHub</a>
              </li>
            </ul>
          </nav> -->
				</div>
			</div>
		</header>

		<div id="content" class="site-content">
