/*-------------------------------------------------------
Scramble links
-------------------------------------------------------*/
export function scrambleLinks() {
	const links = gsap.utils.toArray( '.wp-block-post-terms a, .wp-block-post-date a, .wp-block-button.is-style-down a, .wp-block-button.is-style-more-3 a, .wp-block-comment-date a, .wp-block-comment-edit-link a' );

	// Let's animate
	const scramble = ( event ) => {
		gsap.effects.scrambleText( event.target );
	}

	for ( const link of links ) {
		link.addEventListener( 'pointerenter', scramble );
	}
}
