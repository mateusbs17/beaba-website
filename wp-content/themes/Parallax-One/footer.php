<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package parallax-one
 */ ?>
<footer itemscope itemtype="http://schema.org/WPFooter" id="footer" role="contentinfo" class = "footer grey-bg">
	<div class="container">
		<div class="footer-widget-wrap">
			<?php
			if ( is_active_sidebar( 'footer-area' ) ) {  ?>
				<div itemscope itemtype="http://schema.org/WPSideBar" role="complementary" id="sidebar-widgets-area-1" class="col-md-3 col-sm-6 col-xs-12 widget-box" aria-label="<?php esc_html_e( 'Widgets Area 1','parallax-one' ); ?>">
					<?php
					dynamic_sidebar( 'footer-area' ); ?>
				</div>
			<?php
			}

			if ( is_active_sidebar( 'footer-area-2' ) ) {  ?>
				<div itemscope itemtype="http://schema.org/WPSideBar" role="complementary" id="sidebar-widgets-area-2" class="col-md-3 col-sm-6 col-xs-12 widget-box" aria-label="<?php esc_html_e( 'Widgets Area 2','parallax-one' ); ?>">
					<?php
					dynamic_sidebar( 'footer-area-2' ); ?>
				</div>
			<?php
			}

			if ( is_active_sidebar( 'footer-area-3' ) ) {  ?>
				<div itemscope itemtype="http://schema.org/WPSideBar" role="complementary" id="sidebar-widgets-area-3" class="col-md-3 col-sm-6 col-xs-12 widget-box" aria-label="<?php esc_html_e( 'Widgets Area 3','parallax-one' ); ?>">
					<?php
					dynamic_sidebar( 'footer-area-3' ); ?>
				</div>
			<?php
			}

			if ( is_active_sidebar( 'footer-area-4' ) ) {  ?>
				<div itemscope itemtype="http://schema.org/WPSideBar" role="complementary" id="sidebar-widgets-area-4" class="col-md-3 col-sm-6 col-xs-12 widget-box" aria-label="<?php esc_html_e( 'Widgets Area 4','parallax-one' ); ?>">
					<?php
					dynamic_sidebar( 'footer-area-4' ); ?>
				</div>
			<?php
			} ?>
		</div><!-- .footer-widget-wrap -->

		<div class="footer-bottom-wrap">
			<div class="col-sm-4 col-xs-12 col-md-4"></div>
			<div class="col-sm-4 col-xs-12 col-md-4">
				<div class="footer-title">Redes Sociais e Contato:</div>
				<div class="row social-icons">
					<a href="https://www.facebook.com/betoeabahq" class="facebook"><i class="fa fa-facebook-square fa-5x"></i></a>
					<a href="https://www.behance.net/beaba" class='behance'><i class="fa fa-behance fa-3x"></i></a>
					<a href="mailto:daniel.beaba95@gmail.com " class='email'><i class="fa fa-envelope-o fa-3x"></i></a>
				</div>
			</div>
			<div class="col-sm-4 col-xs-12 col-md-4">
				<div class="footer-title">Selo Independente:</div>
				<div class="row gas-icon">
					<img src="http://www.danielbatista.com.br/wp-content/uploads/2017/01/site-14.png">
				</div>
			</div>
			
		</div><!-- .footer-bottom-wrap -->

	</div><!-- container -->
</footer>

</div>
</div>

<?php parallax_hook_body_bottom(); ?>
<?php wp_footer(); ?>
</body>
</html>
