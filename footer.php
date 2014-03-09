<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Emi_Starter_Theme
 */
?>

	</div><!-- #main -->

</div><!-- #page -->
<footer id="colophon" role="contentinfo">
		<div id="site-generator">
			&copy; <?php echo date('Y'); echo '&nbsp;'; echo bloginfo( 'name' ); ?><br>
			Site by <a href="http://" target="_blank">DESIGNER</a> &amp; <a href="http://zoerooney.com" target="_blank">Development by Zoe Rooney</a>
		</div>
</footer><!-- #colophon -->
<?php wp_footer(); ?>

</body>
</html>