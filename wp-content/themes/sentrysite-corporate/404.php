<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package SentrySite-Corporate
 */

get_header();
?>
<style type="text/css">
.page-404{max-width:900px;margin:10vh auto;padding:30px;font-family:heebo;color:#232323;text-align:center;}.page-404 h2{font-size:110px;margin:0;}.page-404 h1{font-size:18px;margin:-10px 0 10px 0;}.page-404 .right-side, .page-404 .left-side{display:inline-block;width:47%;margin:0px 1%;padding:15px;vertical-align:middle;}.page-404 a:hover{transform:scale(1.1);}.page-404 a{display:inline-block;margin:20px 0px;background:#fff;border:solid 1px #ddd;padding:10px 30px;border-radius:50px;color:#232323;transition:all 0.2s ease-in-out;}@media screen and (max-width:767px){.page-404 .right-side, .page-404 .left-side{width:100%;padding:15px 15px 0 15px;}.page-404 h2{font-size:75px;margin:-25px 0 0 0;}.page-404 h1{font-size:15px;margin:-20px 0 10px 0;}.page-404{margin:0vh auto;padding:0px 30px;;}.page-404 a{font-size:15px;margin:40px 0px;}.page-404 img{max-width:215px;}}
</style>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="page-404">
				<div class="right-side">
					<img src="/wp-content/themes/sentrysite-corporate/assets/img/404.jpg" alt="404">
				</div>
				<div class="left-side">
					<h2 class="page-title"><?php esc_html_e( 'Oops!', 'sentrysite-corporate' ); ?></h2>
					<h1 class="page-subtitle"><?php esc_html_e( 'We can&rsquo;t seem to find the page you&rsquo;re looking for.', 'sentrysite-corporate' ); ?></h1>
					<p><?php esc_html_e( 'error code: 404', 'sentrysite-corporate' ); ?></p>
					<a href="<?php echo get_site_url(); ?>"><?php esc_html_e( 'Back to home page', 'sentrysite-corporate' ); ?></a>
				</div>

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
