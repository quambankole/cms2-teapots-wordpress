<?php

function themeslug_block_editor_assets() {
	wp_enqueue_script(
		'cms2-teapots-block-editor',
		get_theme_file_uri( 'assets/js/block-editor.js' ),
		array( 
			'wp-blocks', 
			'wp-dom-ready', 
			'wp-edit-post' 
		)
	);
}
add_action( 'enqueue_block_editor_assets', 'cms2_teapots_enqueue_block_editor_assets' );