<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Company_Profile
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'company-profile' ); ?></a>

	<header id="masthead" class="site-header">
		
		<div class="site-branding">
			<div class="contact-info-phone">
            	<p>Call Us:<br></p>
					<p class="phone-number">(08) 9315 5545</p>
        	</div>
			<div class="contact-info-email">
            	<p>Email Us:<br></p>
					<p class="email">info@noprobs.com.au</p>
        	</div>
			
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<?php
			else :
				?>
				
				<?php
			endif;
			$company_profile_description = get_bloginfo( 'description', 'display' );
			if ( $company_profile_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $company_profile_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>

		</div><!-- .site-branding -->
		
		<div class="horizontal-line-top"></div>
		<nav id="site-navigation" class="main-navigation frame" style=" max-width:100% !important; display:inline;">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'company-profile' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
		<div class="horizontal-line-bot"></div>
	</header><!-- #masthead -->
