/*-------------------------------------------------------
Error 404 page animations
-------------------------------------------------------*/
export function error404Animations() {
	if ( ! document.body.classList.contains( 'error404' ) ) return;

	const target = document.querySelector( '.error404 main > .wp-block-group' );

	// Let's animate
	target && gsap.effects.fadeInUp( target, {
		delay: 0.3,
	} );
}
