<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SentrySite-Corporate
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <!-- <style media="screen">
    @font-face{
      font-family: 'Almoni ML v5 AAA';
      font-weight: 100;
      font-style: normal;
      src: url('/wp-content/themes/sentrysite-corporate/assets/fonts/almoni-thin-aaa.woff2') format('woff2'),
        url('/wp-content/themes/sentrysite-corporate/assets/fonts/almoni-thin-aaa.woff') format('woff');
    }
    @font-face{
      font-family: 'Almoni ML v5 AAA';
      font-weight: 200;
      font-style: normal;
      src: url('/wp-content/themes/sentrysite-corporate/assets/fonts/almoni-ultralight-aaa.woff2') format('woff2'),
        url('/wp-content/themes/sentrysite-corporate/assets/fonts/almoni-ultralight-aaa.woff') format('woff');
    }
    @font-face{
      font-family: 'Almoni ML v5 AAA';
      font-weight: 300;
      font-style: normal;
      src: url('/wp-content/themes/sentrysite-corporate/assets/fonts/almoni-light-aaa.woff2') format('woff2'),
        url('/wp-content/themes/sentrysite-corporate/assets/fonts/almoni-light-aaa.woff') format('woff');
    }
    @font-face{
      font-family: 'Almoni ML v5 AAA';
      font-weight: 400;
      font-style: normal;
      src: url('/wp-content/themes/sentrysite-corporate/assets/fonts/almoni-regular-aaa.woff2') format('woff2'),
        url('/wp-content/themes/sentrysite-corporate/assets/fonts/almoni-regular-aaa.woff') format('woff');
    }
    @font-face{
      font-family: 'Almoni ML v5 AAA';
      font-weight: 500;
      font-style: normal;
      src: url('/wp-content/themes/sentrysite-corporate/assets/fonts/almoni-medium-aaa.woff2') format('woff2'),
        url('/wp-content/themes/sentrysite-corporate/assets/fonts/almoni-medium-aaa.woff') format('woff');
    }
    @font-face{
      font-family: 'Almoni ML v5 AAA';
      font-weight: 600;
      font-style: normal;
      src: url('/wp-content/themes/sentrysite-corporate/assets/fonts/almoni-demibold-aaa.woff2') format('woff2'),
        url('/wp-content/themes/sentrysite-corporate/assets/fonts/almoni-demibold-aaa.woff') format('woff');
    }
    @font-face{
      font-family: 'Almoni ML v5 AAA';
      font-weight: 700;
      font-style: normal;
      src: url('/wp-content/themes/sentrysite-corporate/assets/fonts/almoni-bold-aaa.woff2') format('woff2'),
        url('/wp-content/themes/sentrysite-corporate/assets/fonts/almoni-bold-aaa.woff') format('woff');
    }
    @font-face{
      font-family: 'Almoni ML v5 AAA';
      font-weight: 800;
      font-style: normal;
      src: url('/wp-content/themes/sentrysite-corporate/assets/fonts/almoni-ultrabold-aaa.woff2') format('woff2'),
        url('/wp-content/themes/sentrysite-corporate/assets/fonts/almoni-ultrabold-aaa.woff') format('woff');
    }
    @font-face{
      font-family: 'Almoni ML v5 AAA';
      font-weight: 900;
      font-style: normal;
      src: url('/wp-content/themes/sentrysite-corporate/assets/fonts/almoni-black-aaa.woff2') format('woff2'),
        url('/wp-content/themes/sentrysite-corporate/assets/fonts/almoni-black-aaa.woff') format('woff');
    }
  </style> -->
  <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="mobile-web-app-capable" content="yes">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous" /> -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

  <?php
  if ( is_page_template( 'landing-page.php' ) ) {}
  else {
  ?>

	<header id="masthead" class="site-header">
		<div class="header-top-bar">
      <?php if ( is_active_sidebar( 'header-top-right-widget' ) ) { ?>
        <div class="header-third header-top-third header-top-right">
  				<?php dynamic_sidebar( 'header-top-right-widget' ); ?>
  			</div>
      <?php } ?>

      <?php if ( is_active_sidebar( 'header-top-middle-widget' ) ) { ?>
  			<div class="header-third header-top-third header-top-middle">
  				<?php dynamic_sidebar( 'header-top-middle-widget' ); ?>
  			</div>
      <?php } ?>

      <?php if ( is_active_sidebar( 'header-top-left-widget' ) ) { ?>
  			<div class="header-third header-top-third header-top-left">
  				<?php dynamic_sidebar( 'header-top-left-widget' ); ?>
  			</div>
      <?php } ?>
  		</div>


		<div class="header-middle-bar">
      <?php if ( is_active_sidebar( 'header-middle-right-widget' ) ) { ?>
  			<div class="header-third header-middle-third header-middle-right">
  				<?php dynamic_sidebar( 'header-middle-right-widget' ); ?>
  			</div>
      <?php } ?>

      <?php if ( is_active_sidebar( 'header-middle-middle-widget' ) ) { ?>
  			<div class="header-third header-middle-third header-middle-middle">
  				<?php dynamic_sidebar( 'header-middle-middle-widget' ); ?>
  			</div>
      <?php } ?>

      <?php if ( is_active_sidebar( 'header-middle-left-widget' ) ) { ?>
  			<div class="header-third header-middle-third header-middle-left">
  				<?php dynamic_sidebar( 'header-middle-left-widget' ); ?>
  			</div>
      <?php } ?>
		</div>

    <?php if ( is_active_sidebar( 'header-bottom-widget' ) ) { ?>
  		<div class="header-bottom-bar">
  			<?php dynamic_sidebar( 'header-bottom-widget' ); ?>
  		</div>
    <?php } ?>

    <?php if ( is_active_sidebar( 'header-mobile-widget' ) ) { ?>
      <div class="header-mobile">
        <?php dynamic_sidebar( 'header-mobile-widget' ); ?>
      </div>
    <?php } ?>

		<div class="mobile-menu">
      <?php if ( is_active_sidebar( 'mobile-menu-top-widget' ) ) { ?>
  			<div class="mobile-third mobile-menu-third mobile-menu-top">
  				<?php dynamic_sidebar( 'mobile-menu-top-widget' ); ?>
  			</div>
      <?php } ?>

      <?php if ( is_active_sidebar( 'mobile-menu-middle-widget' ) ) { ?>
  			<div class="mobile-third mobile-menu-third mobile-menu-middle">
  				<?php dynamic_sidebar( 'mobile-menu-middle-widget' ); ?>
  			</div>
      <?php } ?>

      <?php if ( is_active_sidebar( 'mobile-menu-bottom-widget' ) ) { ?>
  			<div class="mobile-third mobile-menu-third mobile-menu-bottom">
  				<?php dynamic_sidebar( 'mobile-menu-bottom-widget' ); ?>
  			</div>
      <?php } ?>
		</div>

	</header><!-- #masthead -->

  <?php } ?>

<div id="content" class="site-content">
