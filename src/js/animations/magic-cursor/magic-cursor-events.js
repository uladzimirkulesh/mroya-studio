/*-------------------------------------------------------
Magic Cursor Events
-------------------------------------------------------*/
export function bindMagicCursorEvents( cursor ) {

	/*-------------------------------------------------------
	Basic hover (links)
	-------------------------------------------------------*/
	document.querySelectorAll( 'a:not(.comment-reply-link):not(.post-page-numbers)' )
		.forEach( ( el ) => {
			if ( el.closest( '.wp-block-post-featured-image, .wp-block-button:not(.is-style-more-3):not(.is-style-more-4), .wp-block-query-pagination' ) ) return;

			el.addEventListener( 'mouseenter', () => cursor.expand() );
			el.addEventListener( 'mouseleave', () => cursor.reset() );
			el.addEventListener( 'click', () => cursor.pulse() );
		} );

	/*-------------------------------------------------------
	Hide cursor on hover (buttons, inputs, pagination)
	-------------------------------------------------------*/
	document.querySelectorAll( 'button, input, textarea, .wp-block-button:not(.is-style-more-3):not(.is-style-more-4) a, .comment-reply-link, .post-page-numbers, .wp-block-query-pagination a' )
		.forEach( ( el ) => {
			el.addEventListener( 'mouseenter', () => cursor.hide() );
			el.addEventListener( 'mouseleave', () => cursor.reset() );
		} );

	/*-------------------------------------------------------
	Cursor with text on hover (featured images, projects)
	-------------------------------------------------------*/
	document.querySelectorAll( '.wp-block-post-featured-image a' )
		.forEach( ( el ) => {
			el.addEventListener( 'mouseenter', () => {
				cursor.thumbnail();
				cursor.addState( 'blured' );
			} );

			el.addEventListener( 'mouseleave', () => {
				cursor.reset();
				cursor.removeState( 'blured' );
			} );

			el.addEventListener( 'click', () => cursor.pulse( 1, 0.8 ) );
		} );
}
