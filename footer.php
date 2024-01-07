<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Company_Profile
 */

?>
<div class="footer-line-img"></div>
<footer>
    <div class="footer-content">
        <div class="left-content-foot">
            <!-- Site Logo -->
            <?php
			$custom_logo_id = get_theme_mod('custom_logo');
			$logo_info = wp_get_attachment_image_src($custom_logo_id, 'full');

			if ($logo_info) {
				$logo_url = $logo_info[0];
				$logo_width = $logo_info[1];
				$logo_height = $logo_info[2];
			?>
				<div class="site-logo">
					<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
						<img src="<?php echo esc_url($logo_url); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" width="<?php echo esc_attr($logo_width); ?>" height="<?php echo esc_attr($logo_height); ?>">
					</a>
				</div>
			<?php } ?>

            <!-- Site Description -->
            <p>Got a problem at home or at work, need an emergency plumber in Perth? Give us a call, we'll fix it no probs</p>
			
        </div>
        
     <div class="right-content-foot">
			
		<div class="foot-section-link">
			<div class="foot-a">
				<h2>Services</h2>
				<a href="#">Plumbing</a><br>
				<a href="#">Hot Water</a><br>
				<a href="#">Drainage</a><br>
				<a href="#">Blocked Drains</a><br>
				<a href="#">Gas Plumber</a><br>
				<a href="#">Electrical</a>
			</div>
			
			<div class="foot-b">
				<h2>Contact</h2>
				<a href="#">(08) 9315 5545</a><br>
				<span><a href="#">info@noprobs.com.au</a></span><br>
				<a href="#">3/52 Roberts St, Osburne Park WA 6017</a><br>
				<a href="#">Mon - Fri: 7am - 5pm</a><br>
				<a href="#"></a><br>
				<a href="#">Privacy Policy</a>
			</div>
			</div>
			</div>
        </div>

    
    
    <!-- Horizontal Line -->
	<div class="bot-line"><hr class="footer-line"></div>

    

    <div class="item-bot-left">
		<!-- Copyright Text -->
		<p class="copyright">© <?php echo date('Y'); ?> No Probs Plumbing and Electrical | Plumbing License: PL9107 | Gas License: GF18521 | Electrical License: EC13127</p>
	</div>
		
	<div class="item-bot-right">
		<!-- Back to Top Button -->
		<button class="to-top" onclick="scrollToTop()">
        <img src="http://localhost:8080/wordpress/wp-content/uploads/2024/01/arrow-up.png" alt="buttonpng" border="0" />
      	</button>

	</div>
</footer>



<?php wp_footer(); ?>

<script>
function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}

</script>