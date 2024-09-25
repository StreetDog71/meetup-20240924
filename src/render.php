<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>
<div <?php echo get_block_wrapper_attributes(); ?>>
	<p>Today is <?php echo date('d-m-Y'); ?></p>
	<p>Your name is <strong><?php echo $attributes['myTextField']; ?>.</strong></p>
	<p>WP Engine rules!!!</p>
</div>
