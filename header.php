<?php
/**
 *
 * @package saviorhire
 */

?>
<!Doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php $pagename = get_query_var('pagename');
if ( !$pagename && $id > 0 ) {
    $post = $absa_query->get_queried_object();
    $pagename = $post->post_name;
}
?>

<div id="page" class="site <?php echo  $pagename; ?>">

	<header id="masthead" class="site-header">
		<div class="site-branding col-md4">
			<?php
			the_custom_logo();?>
		</div> 

			
		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'saviorhire' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'depth' => 2,
				)
			);
			?>
		</nav>
	</header>
	<main class="site-main">
