wp.domReady( () => {
	// Unregister default quote styles
	wp.blocks.unregisterBlockStyle( 'core/quote', 'default' );
	wp.blocks.unregisterBlockStyle( 'core/quote', 'plain' );

	// Unregister styles for group and columns (section-2)
	wp.blocks.unregisterBlockStyle( 'core/group', 'section-2' );
	wp.blocks.unregisterBlockStyle( 'core/columns', 'section-2' );
	wp.blocks.unregisterBlockStyle( 'core/column', 'section-2' );

	// Unregister styles for group and columns (section-3)
	wp.blocks.unregisterBlockStyle( 'core/group', 'section-3' );
	wp.blocks.unregisterBlockStyle( 'core/columns', 'section-3' );
	wp.blocks.unregisterBlockStyle( 'core/column', 'section-3' );
} );
