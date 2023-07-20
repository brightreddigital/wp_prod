<?php
/**
 * @package brightred
 */

// include '/inc/functions/shortcodes.php';

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php if( get_field('typekit', 'option') ): ?>
		<link rel="stylesheet" href="https://use.typekit.net/<?php the_field('typekit', 'option'); ?>.css">
		<script type="text/javascript">console.log('typekit')</script>
	<?php endif; ?>

	<?php if( get_field('google_font', 'option') ): ?>
		<?php the_field('google_font', 'option'); ?>
	<?php endif; 

	/* WP Headers */
	wp_head(); 

	?>

</head>



<body <?php body_class(); ?>>
	
<?php wp_body_open(); ?>

<div id="page" class="site">

	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'brightred' ); ?></a>


