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
		<div class="site-info max-wrap">
			<div class="left-section reveal-left-footer">
			<?php if(is_active_sidebar('footer-left-section')):?>
				<?php dynamic_sidebar( 'footer-left-section' );?>
			<?php endif; ?>
			</div>
			<div class="right-section reveal-right-footer">
			<?php if(is_active_sidebar('footer-right-section')):?>
				<?php dynamic_sidebar( 'footer-right-section' );?>
			<?php endif; ?>
			</div>
			
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
