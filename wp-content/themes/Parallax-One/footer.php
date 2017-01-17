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
			<div class="col-sm-5 col-xs-12 col-md-5"></div>
			<div class="col-sm-4 col-xs-12 col-md-4">
				Redes Sociais
			</div>
			<div class="col-sm-3 col-xs-12 col-md-3">
				Selo Independente
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
