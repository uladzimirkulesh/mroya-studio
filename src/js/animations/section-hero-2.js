/*-------------------------------------------------------
Section "Hero (style 2)"
-------------------------------------------------------*/
export function sectionHero2() {
	const sections = gsap.utils.toArray( '.section--hero-2' );

	sections.forEach( ( section ) => {
		const blockTitle = section.querySelector( '.section__block .wp-block-heading' );
		const blockText = section.querySelector( '.section__block p' );
		const footerElements = section.querySelectorAll( '.section__footer .wp-block-buttons, .section__footer p' );

		// Let's animate
		const tl = gsap.timeline( { delay: 0.3 } );

		blockTitle && tl.set( blockTitle, { autoAlpha: 1 } );
		blockText && tl.set( blockText, { autoAlpha: 1 } );

		// Text animations
		blockTitle && tl.splitTextLinesMask( blockTitle );
		blockText && tl.splitTextLinesMask( blockText, '<0.42' );
		footerElements && tl.fadeInUp( footerElements, { stagger: 0 }, '<0.12' );
	} );
}
