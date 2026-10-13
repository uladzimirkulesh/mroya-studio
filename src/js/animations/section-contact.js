/*-------------------------------------------------------
Section "Contact"
-------------------------------------------------------*/
export function sectionContact() {
	const sections = gsap.utils.toArray( '.section--contact' );

	sections.forEach( ( section ) => {
		const textPrimary = section.querySelector( '.text--primary' );
		const textSecondary = section.querySelector( '.text--secondary' );
		const button = section.querySelector( '.wp-block-buttons' );

		// Let's animate
		const tl = gsap.timeline( {
			scrollTrigger: {
				trigger: textPrimary,
				start: ScrollTrigger.defaults().start,
				toggleActions: 'play none none none',
				once: true,
			}
		} );

		textPrimary && tl.set( textPrimary, { autoAlpha: 1 } );
		textSecondary && tl.set( textSecondary, { autoAlpha: 1 } );

		// Text animations
		textPrimary && tl.splitTextLinesMask( textPrimary );
		textSecondary && tl.splitTextLinesMask( textSecondary, '<0.42' );
		button && tl.fadeInUp( button, '<0.12' );
	} );
}
