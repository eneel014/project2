<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Amanda_Theme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
		FOOTER <br>
		Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic blanditiis laborum sequi aut nam rem quam iusto, inventore saepe officiis obcaecati in, sed odit, iure aliquam porro vitae. Unde, minus?
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
<script src="//unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<script src="<?=get_template_directory_uri()?>/js/script.js"></script>
</body>
</html>
