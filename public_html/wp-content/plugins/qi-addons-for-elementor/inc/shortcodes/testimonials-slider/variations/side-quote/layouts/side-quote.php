<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}
?>
<div <?php qi_addons_for_elementor_framework_class_attribute( $item_classes ); ?>>
	<div class="qodef-e-inner">
		<?php qi_addons_for_elementor_template_part( 'shortcodes/testimonials-slider', 'templates/post-info/quote', '', $params ); ?>
		<div class="qodef-e-content">
			<?php qi_addons_for_elementor_template_part( 'shortcodes/testimonials-slider', 'templates/post-info/text', '', $params ); ?>
			<div class="qodef-e-bottom-info">
				<?php qi_addons_for_elementor_template_part( 'shortcodes/testimonials-slider', 'templates/post-info/image', '', $params ); ?>
				<?php qi_addons_for_elementor_template_part( 'shortcodes/testimonials-slider', 'templates/post-info/author', '', $params ); ?>
			</div>
		</div>
	</div>
</div>
