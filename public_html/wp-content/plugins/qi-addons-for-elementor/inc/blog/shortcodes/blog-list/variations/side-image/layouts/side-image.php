<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}
?>
<article <?php post_class( $item_classes ); ?>>
	<div class="qodef-e-inner">
		<?php
		if ( 'no' !== $show_media ) {
			// Include post media.
			qi_addons_for_elementor_template_part( 'blog', 'templates/parts/post-info/media', '', $params );
		}
		?>
		<div class="qodef-e-content">
			<?php if ( 'no' !== $show_date || 'no' !== $show_category || 'no' !== $show_author ) { ?>
				<div class="qodef-e-info qodef-info--top">
					<?php

					if ( 'no' !== $show_date ) {
						// Include post date info.
						qi_addons_for_elementor_template_part( 'blog', 'templates/parts/post-info/date', '', $params );
					}
					if ( 'no' !== $show_category ) {
						// Include post category info.
						qi_addons_for_elementor_template_part( 'blog', 'templates/parts/post-info/category', '', $params );
					}

					if ( 'no' !== $show_author ) {
						// Include post author info.
						qi_addons_for_elementor_template_part( 'blog', 'templates/parts/post-info/author', '', $params );
					}
					?>
				</div>
			<?php } ?>
			<div class="qodef-e-text">
				<?php
				// Include post title.
				qi_addons_for_elementor_template_part( 'blog', 'templates/parts/post-info/title', '', $params );

				// Needed extra checking because it shouldn't be visible on default (backwards compatibility.
				if ( 'yes' === $show_excerpt ) {
					// Include post excerpt.
					qi_addons_for_elementor_template_part( 'blog', 'templates/parts/post-info/excerpt', '', $params );
				}

				// Hook to include additional content after blog list content.
				do_action( 'qi_addons_for_elementor_action_after_blog_list_article_content', $params );

				// Hook to include additional content after blog single content.
				do_action( 'qi_addons_for_elementor_action_after_blog_single_content', $params );
				?>
			</div>
			<?php if ( 'no' !== $show_button ) { ?>
				<div class="qodef-e-info qodef-info--bottom">
					<?php
					// Include post read more.
					qi_addons_for_elementor_template_part( 'blog', 'templates/parts/post-info/read-more', '', $params );
					?>
				</div>
			<?php } ?>
		</div>
	</div>
</article>
