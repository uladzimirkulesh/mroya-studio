/*-------------------------------------------------------
Header animations
-------------------------------------------------------*/
export function headerAnimations() {
	const header = document.querySelector( '.header--default' );
	if ( ! header ) return;

	// Let's animate
	gsap.effects.fadeInDown( header, {
		yPercent: -30,
		delay: 0.3,
	} );

	// Change header colors
	const headerHeight = header.offsetHeight / 2;
	const contrastSections = gsap.utils.toArray( '.is-style-section-1' );
	const largeImages = gsap.utils.toArray( '.wp-block-image.alignwide, .wp-block-image.alignfull, .wp-singular .entry-header .wp-block-post-featured-image, .section--cover' );

	// Contrast sections
	contrastSections.forEach( ( section ) => {
		ScrollTrigger.create( {
			trigger: section,
			start: `top top+=${ headerHeight }`,
			end: `bottom top+=${ headerHeight }`,
			toggleClass: {
				targets: header,
				className: 'has-contrast-links',
			},
		} );
	} );

	// Large images
	largeImages.forEach( ( img ) => {
		ScrollTrigger.create( {
			trigger: img,
			start: `top top+=${ headerHeight }`,
			end: `bottom top+=${ headerHeight }`,
			toggleClass: {
				targets: header,
				className: 'has-white-links',
			},
		} );
	} );
}
