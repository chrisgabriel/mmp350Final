<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MMP350Final
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">

			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'mmp350final' ), 'mmp350final', 'Christian Gabriel' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

<script type="text/javascript">
    

	
	// $ Works! You can test it with next line if you like
	// console.log($);
	

        jQuery(document).ready(function( $ ) {

            $(".navigation-div").hover(function(){
                $(this).css("background-color", "black")
            });
            
        });
    
</script>


</html>
