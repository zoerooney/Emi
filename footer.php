<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package themeHandle
 */
?>

	</div><!-- #main -->

</div><!-- #page -->
<footer id="footer" role="contentinfo" class="row">
	<div id="copyright" class="container">
		&copy; <?php echo date( 'Y' ); echo '&nbsp;'; echo bloginfo( 'name' ); ?><br>
		Site by <a href="designerURI" target="_blank" rel="nofollow">themeDesigner</a> &amp;
		<a href="authorURI" target="_blank" rel="nofollow">themeAuthor</a>
	</div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>
</body>
</html>