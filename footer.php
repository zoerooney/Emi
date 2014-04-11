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
	<div id="copyright">
		&copy; <?php echo date('Y'); echo '&nbsp;'; echo bloginfo( 'name' ); ?><br>
		site by <a href="http://" target="_blank" rel="nofollow">DESIGNER</a> &amp; <a href="http://zoerooney.com" target="_blank" rel="nofollow">Development by Zoe Rooney</a>
	</div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>
</body>
</html>