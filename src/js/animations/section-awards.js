/*-------------------------------------------------------
Section "Awards"
-------------------------------------------------------*/
export function sectionAwards() {
	const sections = gsap.utils.toArray( '.section--awards' );

	sections.forEach( ( section ) => {
		const sectionTitle = section.querySelector( '.section__header .wp-block-heading' );
		const awardsBlock = section.querySelector( '.block--awards' );
		const awards = awardsBlock?.children;
		const sectionText = section.querySelector( '.section__footer .section__text' );

		// Let's animate
		const tl = gsap.timeline( {
			scrollTrigger: {
				trigger: sectionTitle,
				start: ScrollTrigger.defaults().start,
				toggleActions: 'play none none none',
				once: true,
			}
		} );

		// Title animations
		sectionTitle && tl.fadeInUp( sectionTitle );

		// Skills block animations
		awards?.length && tl.fadeInUp( awards, '<0.12' );

		// Text animations
		sectionText && tl.fadeInUp( sectionText, '>-0.58' );
	} );
}
