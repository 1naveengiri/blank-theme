<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package blanktheme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'blank-theme', 'blank-theme' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'blank-theme', 'blank-theme' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php echo blank_theme_copyright_text(); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
