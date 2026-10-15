/*-------------------------------------------------------
Footer animations
-------------------------------------------------------*/
export function footerAnimations() {
	const footer = document.querySelector( '.footer--default' );

	// Let's animate
	footer && gsap.effects.fadeInUp( footer, {
		yPercent: 30,
		delay: 0.3,
	} );
}
