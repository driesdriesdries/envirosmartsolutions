<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EnviroSmartSolutions
 */

?>

<?php  get_template_part( 'template-parts/footer' ); ?>

	
</div><!-- #page -->
<script language="JavaScript" type="text/javascript" src="<?php echo get_theme_file_uri('js/modal.js'); ?>"></script>
<script language="JavaScript" type="text/javascript" src="<?php echo get_theme_file_uri('js/navigation.js'); ?>"></script>
<script language="JavaScript" type="text/javascript" src="<?php echo get_theme_file_uri('js/blog-navigation.js'); ?>"></script>
<script language="JavaScript" type="text/javascript" src="<?php echo get_theme_file_uri('js/accordion.js'); ?>"></script>
<script language="JavaScript" type="text/javascript" src="<?php echo get_theme_file_uri('js/table-of-contents.js'); ?>"></script>
<?php wp_footer(); ?>

</body>
</html>
