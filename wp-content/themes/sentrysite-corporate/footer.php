<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SentrySite-Corporate
 */

?>

</div><!-- #content -->

<?php
if ( is_page_template( 'landing-page.php' ) ) {}
else {
?>
<footer id="colophon" class="site-footer">
	<div class="footer-top">
		<?php if ( is_active_sidebar( 'footer-top-right-widget' ) ) { ?>
			<div class="footer-half footer-right-half">
				<?php dynamic_sidebar( 'footer-top-right-widget' ); ?>
			</div>
		<?php } ?>

		<?php if ( is_active_sidebar( 'footer-top-left-widget' ) ) { ?>
			<div class="footer-half footer-left-half">
				<?php dynamic_sidebar( 'footer-top-left-widget' ); ?>
			</div>
		<?php } ?>
	</div>

	<div class="footer-middle">
		<?php if ( is_active_sidebar( 'footer-middle-first-widget' ) ) { ?>
			<div class="footer-quarter footer-middle-first">
				<?php dynamic_sidebar( 'footer-middle-first-widget' ); ?>
			</div>
		<?php } ?>

		<?php if ( is_active_sidebar( 'footer-middle-second-widget' ) ) { ?>
			<div class="footer-quarter footer-middle-second">
				<?php dynamic_sidebar( 'footer-middle-second-widget' ); ?>
			</div>
		<?php } ?>

		<?php if ( is_active_sidebar( 'footer-middle-third-widget' ) ) { ?>
			<div class="footer-quarter footer-middle-third">
				<?php dynamic_sidebar( 'footer-middle-third-widget' ); ?>
			</div>
		<?php } ?>

		<?php if ( is_active_sidebar( 'footer-middle-fourth-widget' ) ) { ?>
			<div class="footer-quarter footer-middle-fourth">
				<?php dynamic_sidebar( 'footer-middle-fourth-widget' ); ?>
			</div>
		<?php } ?>
	</div>

	<div class="footer-bottom">
		<?php if ( is_active_sidebar( 'footer-bottom-right-widget' ) ) { ?>
			<div class="footer-third footer-right-third">
				<?php dynamic_sidebar( 'footer-bottom-right-widget' ); ?>
			</div>
		<?php } ?>

		<?php if ( is_active_sidebar( 'footer-bottom-middle-widget' ) ) { ?>
			<div class="footer-third footer-middle-third">
				<?php dynamic_sidebar( 'footer-bottom-middle-widget' ); ?>
			</div>
		<?php } ?>

		<?php if ( is_active_sidebar( 'footer-bottom-left-widget' ) ) { ?>
			<div class="footer-third footer-left-third">
				<?php dynamic_sidebar( 'footer-bottom-left-widget' ); ?>
			</div>
		<?php } ?>
	</div>

	<?php if ( is_active_sidebar( 'floting-elements-widget' ) ) { ?>
		<div class="floting-elements">
			<?php dynamic_sidebar( 'floting-elements-widget' ); ?>
		</div>
	<?php } ?>

</footer><!-- #colophon -->
<?php } ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
