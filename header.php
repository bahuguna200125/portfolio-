<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class("main-body "); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'portfolio' ); ?></a>

	<header id="masthead" class="site-header">

		<div class="site-branding" style="display: none;" >
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$portfolio_description = get_bloginfo( 'description', 'display' );
			if ( $portfolio_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $portfolio_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
		<nav class="navbar navbar-expand-lg ">
		  <div class="container-fluid">
			<a class="navbar-brand fs-5 fw-bold " href="<?php echo esc_url( home_url( '/' ) );?>">AMIT BAHUGUNA </a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-center" id="navbarNav">
			<?php
$menu_name = 'menu-1';
$menu_locations = get_nav_menu_locations();
$menu_id = $menu_locations[$menu_name] ?? null;
$menu_items = $menu_id ? wp_get_nav_menu_items($menu_id) : [];

if ($menu_items) {
    echo '<ul class="navbar-nav nav-underline">';

    foreach ($menu_items as $item) {
        $active_class = '';

        // Determine if this menu item should be active
        if (
            ($item->url === home_url('/') && is_front_page()) ||
            ($item->url === get_permalink() && is_page()) ||
            ($item->url === get_post_type_archive_link('project') && (is_post_type_archive('project') || is_singular('project'))) ||
            ($item->url === get_permalink(get_option('page_for_posts')) && is_home())
        ) {
            $active_class = 'active';
        }

        echo '<li class="nav-item">';
        echo '<a class="nav-link ' . $active_class . '" href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a>';
        echo '</li>';
    }

    echo '</ul>';
}
			?>
			</div>
		  </div>
		</nav>
	</header><!-- #masthead -->
