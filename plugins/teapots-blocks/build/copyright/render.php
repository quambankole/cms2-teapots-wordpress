<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

$copyright_content = isset($attributes['copyrightContent']) ? $attributes['copyrightContent'] : "Copyright";

?>
<p <?php echo get_block_wrapper_attributes(); ?>>
    <?php echo esc_html( $copyright_content ) . " " . current_time( 'Y' ); ?>
</p>