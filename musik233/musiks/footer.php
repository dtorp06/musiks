<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package musik
 */

?>
				<?php do_action( 'musik_after_content' ); ?>
				</section>
			</section>
	  	</section>
    </section>
</section>
<?php get_template_part( 'template-parts/playlist' ); ?>
<?php wp_footer(); ?>
<?php do_action( 'musik_after_layout' ); ?>
</body>
</html>
