<?php
/**
 * Template Name: Page Floors
 */

if ( !defined('ABSPATH') ){ //Redirect (for logging) if accessed directly
	header('Location: http://' . $_SERVER['HTTP_HOST'] . substr($_SERVER['PHP_SELF'], 0, strpos($_SERVER['PHP_SELF'], "wp-content/")) . '?ndaat=' . basename($_SERVER['PHP_SELF']));
	http_response_code(403);
	die();
}

do_action('nebula_preheaders');
get_header();
?>


<?php get_template_part('parts/part','pageheader'); ?>


<?php if( have_rows('page-floors') ): ?>
	<?php get_template_part('parts/part','floors'); ?>
<?php endif; ?>


<?php get_footer(); ?>
